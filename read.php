<?php


include("./connect_db.php");

$sql = "SELECT * FROM `users`";

$result = mysqli_query($conn, $sql);

$records = "";
while ($record = mysqli_fetch_assoc($result)) {
  $records .= "<tr>
              <th scope='row'>" . $record["id"] . "</th>
              <td> " . $record["firstname"] . "</td>
              <td>" . $record["infix"] . "</td>
              <td>" . $record["lastname"] . "</td>
              <td><a href='./update.php?id=" . $record["id"] ."'>
              <img src='./img/icons/b_edit.png' alt='pencil'>
              </a></td>
              <td><a href='./delete.php?id=" . $record["id"] ."'>
              <img src='./img/icons/b_drop.png' alt='cross'>
              </a></td>
              </tr>";

}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
 <h1 class="text-center">Mijn database gegevens</h1>
 <div class="row">
   <div class="col-12"></div>
   <a href="./index.php" type="button" class="btn btn-success" btn-lg- btn-block>Nieuw record</a>
 </div>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">voornaam</th>
      <th scope="col">tussenvoegsel</th>
      <th scope="col">achternaam</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
 
        <?php
        echo $records;
        ?>
   
  </tbody>
  
</table> </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <a href="./index.php">Home</a>
    
  </body>
</html>