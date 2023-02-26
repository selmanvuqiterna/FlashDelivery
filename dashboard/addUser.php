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
        <?php
            include '../Register/registration.php';
            $registrationDb = new registrationDb();
            $enternd = $registrationDb->enternd();

            ?>
       <form action="" method="post">
      <label for="fullname">Fullname</label>
      <input type="text" id="name" name="fullname" required>
      <label for="username">Username</label>
      <input type="text" id="name" name="username" required>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      <label for="phone">Phone</label>
      <input type="number" id="email" name="phone" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <select name="privilege" id="selektimi" required>
                    <option value="user" name="user">user</option>
                    <option value="admin" name ="admin">admin</option>
            </select><br><br>
    

      <button type="submit" name="submit">Add User</button>
    </form>
    
  </div>
</body>
</html>
