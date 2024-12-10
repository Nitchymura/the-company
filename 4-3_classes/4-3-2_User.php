<?php

include_once "4-3-1_Database.php";

class User extends Database{
    //logic: CRUD, computation, etc.

    public function store($request){  //request = $_POST
        $firstname = $request['first_name'];
        $lastname = $request['last_name'];
        $user = $request['username'];
        $password = password_hash($request['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(first_name, last_name, username, `password`) VALUES 
            ('$firstname','$lastname', '$user', '$password')";

        if($this->conn->query($sql)){
            header("location: ../4-4_views/4-4-5_index.php"); //goes to views/index.php
            exit;

        } else {
            die ("Unable to save user: ".$this->conn->error);
        }
    }

    public function login($request){
        $username = $request['username'];
        $password = $request['password'];


        $sql = "SELECT * FROM users WHERE username = '$username'";

        //get the user from the table
        $result = $this->conn->query($sql);
        //check if there is a user found
        if($result->num_rows ==1){
            //check if password is correct
            $user = $result->fetch_assoc(); //get the row from result

            if(password_verify($password, $user['password'])){
                //create a session and session variables
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['first_name']. ' '.$user['last_name'];

                //go to dashboard.php
                header("location: ../4-4_views/4-4-6_dashboard.php");
                exit;
            } else{
                die("Password is incorrect.");
            }

        } else{
            die("User not found.");
        }
    }

    //returns results of database, containing list of all users
    public function getAllUsers(){
        $sql = "SELECT * FROM users";

        if($result = $this->conn->query($sql))
            return $result;
        else
            die("Error retirieving users: ".$this->conn->error);
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();

        //go to login
        header("location:  ../4-4_views/4-4-5_index.php");
        exit;
    }

    //returns 1 row of data from users table, based on ID
    public function findUser($id){
        $sql = "SELECT * FROM users WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc(); //return the 1st row of data
        } else{
            die("Error retrieving user: ".$this->conn->error);
        }
    }

    //
    public function updateUser($request, $id){
        $lastname = $request['last_name'];
        $firstname = $request['first_name'];
        $username = $request['username'];

        $sql = "UPDATE users SET last_name = '$lastname', first_name = '$firstname', username = '$username' WHERE id = $id";

        if($this->conn->query($sql)){
            //go to dashboard
            header("location: ../4-4_views/4-4-6_dashboard.php");
            exit;
        } else {
            die("Error updating user: ".$this->conn->error);
        }
    }

    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id = $id";

        if($this->conn->query($sql)){
            //go to dashboard
            header("location: ../4-4_views/4-4-6_dashboard.php");
            exit;
        } else {
            die("Error deleting user: ".$this->conn->error);
        }
    }

    public function updatePhoto($files){
        session_start();
        $id = $_SESSION['id'];
        $filename = $files['image']['name'];
        $tmp_name = $files['image']['tmp_name'];

        $sql = "UPDATE users SET photo = '$filename' WHERE id = $id";

        if($this->conn->query($sql)){
            //move file to images folder
            $destination = "../4-2_assets/images/$filename";

            if(move_uploaded_file($tmp_name, $destination)){
                //go back to profile
                header("location:  ../4-4_views/4-4-8_profile.php");
                exit;
            }else{
                die("Error moving file");
            }
        }else{
            die("Error updating users: ".$this->conn->error);
        }
    }
}


?>