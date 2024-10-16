<?php

class Config{

    private $HOSTNAME = "localhost";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $DBNAME = "exam";
    public $con;

    function initConnection(){
        $this->con = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DBNAME);

        if(!$this->con){
            die("Connection failed: " . mysqli_error());
        }
    }

    function addparking($name,$location,$total_space){
        $this->initConnection();
        $query = "INSERT INTO parking(name,location,total_space) VALUES('$name','$location',$total_space);";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function fetchallparking(){
        $this->initConnection();
        $query = "SELECT * FROM parking";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function fetchsingleparking($id){
        $this->initConnection();
        $query = "SELECT * FROM parking WHERE id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function updateparking($id,$name,$location,$total_space){
        $this->initConnection();
        $query = "UPDATE parking SET name='$name', location='$location', total_space='$total_space' WHERE id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function deleteparking($id){
        $this->initConnection();
        $query = "DELETE FROM parking WHERE id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }




    function addparkingspace($size,$price){
        $this->initConnection();
        $query = "INSERT INTO parkingspace (size,price) VALUES('$size',$price);";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function fetchallparkingspace(){
        $this->initConnection();
        $query = "SELECT * FROM parkingspace";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function fetchsingleparkingspace($id){
        $this->initConnection();
        $query = "SELECT * FROM parkingspace WHERE space_id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function updateparkingspace($id,$size,$price){
        $this->initConnection();
        $query = "UPDATE parkingspace SET size='$size', price=$price WHERE space_id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function deleteparkingspace($id){
        $this->initConnection();
        $query = "DELETE FROM parkingspace WHERE space_id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }



    function adduser($name,$email){
        $this->initConnection();
        $query = "INSERT INTO users (name,email) VALUES('$name','$email');";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function fetchalluser(){
        $this->initConnection();
        $query = "SELECT * FROM users";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function fetchsingleuser($id){
        $this->initConnection();
        $query = "SELECT * FROM users WHERE user_id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }
    function updateuser($id,$name,$email){
        $this->initConnection();
        $query = "UPDATE users SET name='$name', email='$email' WHERE user_id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function deleteuser($id){
        $this->initConnection();
        $query = "DELETE FROM users WHERE user_id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }





    function addvehicle($type){
        $this->initConnection();
        $query = "INSERT INTO vehicle (type) VALUES('$type');";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function fetchallvehicle(){
        $this->initConnection();
        $query = "SELECT * FROM vehicle";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function fetchsinglevehicle($id){
        $this->initConnection();
        $query = "SELECT * FROM vehicle WHERE vehicle_id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }
    function updatevehicle($id,$type){
        $this->initConnection();
        $query = "UPDATE vehicle SET type='$type' WHERE vehicle_id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }

    function deletevehicle($id){
        $this->initConnection();
        $query = "DELETE FROM vehicle WHERE vehicle_id=$id;";
        $res = mysqli_query($this->con,$query);
        return $res;
    }










}



?>