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
    <h1>Favorite Foods</h1>
    

    
    <table>
      <thead>
        <tr>
           <th>ID</th>
          <th>Foods</th>
          <th>Drinks</th>
          
        </tr>
      </thead>
      <tbody>
      <?php
 
        include '../favorites.php';
        $databaseFavourites = new databaseFavourites();
        $rows = $databaseFavourites->fetch();
        
        if(!empty($rows)){
        foreach($rows as $row){ 
       ?>
        <tr>
                
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['drinkForm']; ?></td>
                <td><?php echo $row['foodForm']; ?></td>
                
                <td>
                  <a href="deleteFood.php?id=<?php echo $row['id']; ?>" class="btn btn1">Delete</a>
                  <a href="editFood.php?id=<?php echo $row['id']; ?>" class="btn btn2">Edit</a>
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
