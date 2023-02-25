<?php

class registrationDb
{
    public $server = 'localhost';
    public $username = 'root';
    public $password;
    public $database = 'flashdelivery';
    public $conn;


    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $e) {
            echo 'Not connected' . $e->getMessage();
        }
    }


    public function checkEmail()
    {
        try {
            $email = $_POST['email'];
            $email = mysqli_real_escape_string($this->conn, $email);
            $sql = "SELECT COUNT(*) AS count FROM users WHERE email='$email'";
            $result = mysqli_query($this->conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                return $row["count"] > 0;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }



    public function enter()
    {
        if (isset($_POST['submit'])) {

            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
        $phone = $_POST['phone'];
            $password = $_POST['password'];

            if ($this->checkEmail()) {
                echo "<script>alert('This email exists!')</script>";
                echo "<script>window.location.href = 'Register.php';</script>";
                return;
            } else {
                $query = "INSERT INTO users(fullname, username, email, phone, password, privilege) VALUES ('$fullname', '$username','$email','$phone', '$password', 'user')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('You are now registered.');</script>";
                    echo "<script>window.location.href = '../Login/Login.php';</script>";
                } else {
                    echo "<script>alert('This user exists!');</script>";
                    echo "<script>window.location.href = 'home.php';</script>";
                }
            }
        }
    }


    public function enternd()
    {
        if (isset($_POST['submit'])) {

            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $privilege = $_POST['privilege'];

            if ($this->checkEmail()) {
                echo "<script>alert('The email you entered is registered!')</script>";
                echo "<script>window.location.href = 'userAdd.php';</script>";
                return;
            } else {
                 $query = "INSERT INTO users(fullname, username, email, phone, password, privilege) VALUES ('$fullname', '$username','$email','$phone', '$password','$privilege')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('You are now registered!');</script>";
                    echo "<script>window.location.href = 'userDashboard.php';</script>";
                } else {
                    echo "<script>alert('This user exists!');</script>";
                    echo "<script>window.location.href = 'userDashboard.php';</script>";
                }
            }
        }
    }


    public function fetch()
    {
        $data = null;
        $query = "SELECT * FROM users";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }


    public function reCheck()
    {

        if (isset($_POST['submit'])) {


            $email = $_POST['email'];
            $password = $_POST['password'];
            $privilege = $_POST['privilege'];

            $select = "SELECT * FROM users WHERE email = '$email' && password = '$password' ";

            $result = mysqli_query($this->conn, $select);

            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_array($result);

                if ($row['privilege'] == 'admin') {

                    echo "<script>alert('Login successful!');</script>";
                    echo "<script>window.location.href = 'dashboard.php';</script>";
                } elseif ($row['privilege'] == 'user') {

                    echo "<script>alert('Login successful!');</script>";
                    echo "<script>window.location.href = 'home.php';</script>";

                }

            } else {
                echo "<script>alert('Wrong email or password');</script>";
                echo "<script>window.location.href = 'Login.php';</script>";
            }

        }
        ;
    }


    public function deletion($id)
    {

        $query = "DELETE FROM users where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function edition($id)
    {

        $data = null;

        $query = "SELECT * FROM users WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function updation($data)
    {

        $query = "UPDATE users SET fullname='$data[fullname]', username='$data[username]', email='$data[email]', phone='$data[phone]', password='$data[password]', privilege='$data[privilege]' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}

?>





