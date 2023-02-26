<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>
  <nav class="navbar">
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
  </nav>
  <div class="container">
    <h1>Users</h1>
    <?php
              include '../Register/registration.php';
              $registrationDb = new registrationDb();
              $id = $_REQUEST['id'];
              $row = $registrationDb->edition($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['fullname']) &&  isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password']) && isset($_POST['privilege'])) {
                     
                    $data['id'] = $id;
                    $data['fullname'] = $_POST['fullname'];
                    $data['username'] = $_POST['username'];
                    $data['email'] = $_POST['email'];
                    $data['phone'] = $_POST['phone'];
                    $data['password'] = $_POST['password'];
                    $data['privilege'] = $_POST['privilege'];
 
                    $updation = $registrationDb->updation($data);
 
                    if($updation){
                      echo "<script>alert('User has been updated!');</script>";
                      echo "<script>window.location.href = 'userD.php';</script>";
                    }else{
                      echo "<script>alert('Update FAILED try again!');</script>";
                      echo "<script>window.location.href = 'userD.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('Is empty!');</script>";
                    header("Location: editUser.php'?id=$id");
                  }
                }
          ?>
       <form action="" method="post">
      <label for="fullname">fullname</label>
      <input type="text" id="name" value="<?php echo $row['fullname']; ?>" name="fullname" required>
      <label for="username">Username</label>
      <input type="text" id="name" value="<?php echo $row['username']; ?>" name="username" required>
      <label for="email">Email</label>
      <input type="email" id="email" value="<?php echo $row['email']; ?>" name="email" required>
      <label for="phone">Phone</label>
      <input type="number" id="email" value="<?php echo $row['phone']; ?>" name="phone" required>
      <label for="password">Password</label>
      <input type="password" id="password" value="<?php echo $row['password']; ?>" name="password" required>
      <select name="privilege" id="selektimi" value="<?php echo $row['privilege']; ?>" required>
                    <option value="user" name="user">user</option>
                    <option value="admin" name ="admin">admin</option>
            </select><br><br>
    

      <button type="submit" name="update">Edit User</button>
    </form>
    
  </div>
</body>
</html>
