<?php


require_once("dog.php");

$add = "SELECT * FROM `user_info`";

$result = $connect->query("$add");

if($result) {
     $data = mysqli_fetch_array($result);
}

// echo $data['username']."</br>"."</br>";
// echo $data['password']."</br>"."</br>";
// echo $data['email'];

?>

<hr>
<table border>
     <tr>
          <th>Username</th>
          <th>Password</th>
          <th>Email</th>
     </tr>

     <tr>
          <td><?php echo $data['username'];?></td>
          <td><?php echo $data['password'];?></td>
          <td><?php echo $data['email'];?></td>
     </tr>
</table>



