<?php
require "../templates/adminnav.php";
require "../backend/dbh.inc.php";
require "../backend/function.inc.php";
$sellerid = $_SESSION["uid"];
?>
  <?php
      $sql="select * from users where auth = 1;";
      $products=getBooks($conn,$sql);

      if($products!==false){
        echo('
        <h3>All  sellers</h3>
        <table id="customers">
        <tr>
          <th>Id</th>
          <th>Username</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Email</th>
          <th>Phone no</th>
          <th>Delete</th>
          <th>Update</th>
        </tr>
        ');
        while($row = mysqli_fetch_assoc($products)){
          echo('
          <tr>
          <td>'.$row['usersId'].'</td>
          <td>'.$row['username'].'</td>
          <td>'.$row['fname'].'</td>
          <td>'.$row['lname'].'</td>
          <td>'.$row['email'].'</td>
          <td>'.$row['phoneno'].'</td>
          <td>Delete</td>
          <td>update</td>
        </tr>
        ');
        }
      }
      else{
          echo('
         <h4>You have no orders :( </h4>
         ');
      }
       ?>
</table>