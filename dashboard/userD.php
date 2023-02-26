<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="userD.css">
</head>
<body>
  <nav class="navbar">
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
  </nav>
  <div class="container">
    <h1>Users</h1>
    
     <a href="addUser.php">  <button type="submit" name="submit" id="userAdd">Add User</button><br> <br> </a> 
    
    <table>
      <thead>
        <tr>
           <th>ID</th>
          <th>Fullname</th>
          <th>Username</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Password</th>
          <th>Privilege</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
 
        include '../Register/registration.php';
        $registrationDb = new registrationDb();
        $rows = $registrationDb->fetch();
        
        if(!empty($rows)){
        foreach($rows as $row){ 
       ?>
        <tr>
                
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['privilege']; ?></td>
                <td>
                  <a href="deleteUser.php?id=<?php echo $row['id']; ?>" class="btn btn1">Delete</a>
                  <a href="editUser.php?id=<?php echo $row['id']; ?>" class="btn btn2">Edit</a>
                </td>
              </tr>
              <?php
                }
                
              }
              
              else{
                echo "There is no data!";
              }
            ?>
      </tbody>
    </table>
  </div>
</body>
</html>
