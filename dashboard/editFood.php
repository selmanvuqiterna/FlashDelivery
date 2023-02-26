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
    <h1>Edit foods</h1>
    <?php
              include '../favorites.php';
              $databaseFavorites = new databaseFavourites();
              $id = $_REQUEST['id'];
              $row = $databaseFavorites->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['drinkForm']) &&  isset($_POST['foodForm']) ) {
                     
                    $data['id'] = $id;
                    $data['drinkForm'] = $_POST['drinkForm'];
                    $data['foodForm'] = $_POST['foodForm'];
                    
 
                    $update = $databaseFavorites->update($data);
 
                    if($updation){
                      echo "<script>alert('Food has been updated!');</script>";
                      echo "<script>window.location.href = 'foodD.php';</script>";
                    }else{
                      echo "<script>alert('Update FAILED try again!');</script>";
                      echo "<script>window.location.href = 'foodD.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('Is empty!');</script>";
                    header("Location: editFood.php'?id=$id");
                  }
                }
          ?>
       <form action="" method="post">
      <label for="fullname">Drink</label>
      <input type="text" id="name" value="<?php echo $row['drinkForm']; ?>" name="drinkForm" required>
      <label for="username">Food</label>
      <input type="text" id="name" value="<?php echo $row['foodForm']; ?>" name="foodForm" required>
      <br><br>
    

      <button type="submit" name="update">Edit Food</button>
    </form>
    
  </div>
</body>
</html>
