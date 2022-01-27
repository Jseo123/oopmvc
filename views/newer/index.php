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
<h1 class="center">New session</h1>
<form action="<?php echo constant("URL"); ?>newer/addStudent" method="POST">
    <p>
        <label for="enrollment">Enrollment</label><br>
        <input type="text" name="enrollment" id="">
    </p>
    <p>
        <label for="name">Name</label><br>
        <input type="text" name="name" id="">
    </p>
    <p>
        <label for="lastName">Last Name</label><br>
        <input type="text " name="lastName" id="">
    </p>

    <p><input type="submit" value="Add new student"></p>
</form>
</div>

<?php require "views/footer.php";
?>
</body>
</html>