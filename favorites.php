<?php
//lidhja me databaz
class databaseFavourites{
    private $server = 'localhost';
    private $username = 'root';
    private $password;
    private $database = 'flashdelivery';
    private $conn;

    public function __construct(){
        try{
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        }catch(Exception $e){
            echo 'Connection Failed' .$e->getMessage();
        }       
    }

//insertimi i favorite food
public function insert(){
    if(isset($_POST['submit'])){

        $drinkForm = $_POST['drinkForm'];
        $foodForm = $_POST['foodForm']; 
        
       

        $query = "INSERT INTO favoriteFood(drinkForm, foodForm) VALUES ('$drinkForm', '$foodForm')";
        if ($sql = $this->conn->query($query)) {

            echo "<script>alert('Your favorite food and drink has been stored');</script>";
            echo "<script>window.location.href = 'Marketplace.php';</script>";
        }

    else{
        echo "<script>alert('Your favorite food and drink has not registered');</script>";
        echo "<script>window.location.href = 'Marketplace.php';</script>";
         }
    }
  }


  


 public function fetch(){
    $data = null;
    $query = "SELECT * FROM favoriteFood";
    if ($sql = $this->conn->query($query)) {
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
    }
    return $data;
}



public function delete($id){

    $query = "DELETE FROM favoriteFood where id = '$id'";
    if ($sql = $this->conn->query($query)) {
        return true;
    }else{
        return false;
    }
}

public function edit($id){

    $data = null;

    $query = "SELECT * FROM favoriteFood WHERE id = '$id'";
    if ($sql = $this->conn->query($query)) {
        while($row = $sql->fetch_assoc()){
            $data = $row;
        }
    }
    return $data;
}

public function update($data){
    
    $query = "UPDATE favoriteFood SET drinkForm='$data[drinkForm]',  foodForm='$data[foodForm]' WHERE id='$data[id] '";

    if ($sql = $this->conn->query($query)) {
        return true;
    }else{
        return false;
    }
}
}
?>