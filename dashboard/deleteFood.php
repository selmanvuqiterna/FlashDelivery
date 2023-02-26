<?php 
    include '../favorites.php';
    $databaseFavorites = new databaseFavourites();
    $id = $_REQUEST['id'];
    $delete = $databaseFavorites->delete($id);
 
    if ($delete) {
        echo "<script>alert('The food has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'foodD.php';</script>";
    }
 ?>