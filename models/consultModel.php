<?php
include_once "models/student.php";
class ConsultModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];

        try {
            $query = $this->db->connect()->query("SELECT*FROM students");
            while ($row = $query->fetch()) {
                $item = new Student();
                $item->enrollment = $row["enrollment"];
                $item->name = $row["name"];
                $item->lastName = $row["lastName"];

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function getById($id){
        $item = new Student();
        $query = $this->db->connect()->prepare("SELECT*FROM students WHERE enrollment=:enrollment");
        try {
           $query->execute(["enrollment" =>$id]);
           while ($row = $query->fetch()){
            $item->enrollment = $row["enrollment"];
            $item->name = $row["name"];
            $item->lastName = $row["lastName"];
        }

        return $item;
        } catch (PDOException $e){
return null;
        }
    }
}
