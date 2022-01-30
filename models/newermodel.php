<?php
class NewerModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data){
        try  {
        $query = $this->db->connect()->prepare(
            "INSERT INTO students (enrollment, name, lastName) VALUES (:enrollment, :name, :lastName)"
        );
        $query->execute(["enrollment"=> $data["enrollment"], "name"=> $data["name"], "lastName"=>$data["lastName"]]);
   return true;
 } catch (PDOException $e){
return false;
    }
    }
}