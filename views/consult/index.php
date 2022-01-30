<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Main</title>
  <meta name="description" content="A simple HTML5 Template for new projects.">
  <meta name="author" content="SitePoint">
</head>
<body>
<?php require "views/header.php";
?>

<div id="main">
<h1 class="center">Consultation zone</h1>
<table width=" 100%">
  <thead>
<tr>
  <th>Enrollment</th>
  <th>Name</th>
  <th>Last name</th>
</tr>
  </thead>
  <tbody>
  <?Php 
   include_once "models/student.php";
  foreach($this->students as $row){
  $student = new Student();
  $student = $row;
  ?>
    <tr>
      <td><?=$student->enrollment?></td>
      <td><?=$student->name?></td>
      <td><?=$student->lastName?></td>
      <td><a href="">Update</a></td>
      <td><a href="">Delete</a></td>
    </tr>
<?php } ?>
  </tbody>
</table>
</div>

<?php require "views/footer.php";
?>
</body>
</html>