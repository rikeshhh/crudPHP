<?php
include 'connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary">
            <a class="text-light" href="index.php">Add User</a>
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SI no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>      
      <th scope="col">Operations</th>      
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "Select *from `crud`";
    $result =mysqli_query($con,$sql);
    if ($result) {
        while(  $row = mysqli_fetch_assoc($result)){
        $id =$row['id'];
        $name =$row['name'];
        $email =$row['email'];
        $mobile = $row ['phone'];
        $password =$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
        </td>
      </tr>';
        }
    }
    
    
    
    
    
    
    
    ?>
  
    <!-- <tr>
      <th scope="row">SI</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">Name</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>
</body>
</html>