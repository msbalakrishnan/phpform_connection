<?php
require_once "include/header.php";

// class connect_db{
//     public function __construct($sever,$user,$pass)
//     {
//         $con=new mysqli($sever,$user,$pass);
//         # code...
//     }
    

//     public function connection()
//     {
//         # establish the connection ditween mysqli using create aobject
        
//         if($this->con->connect_error){
//             die(" error : ". $this->con->connect_error);    
//         }
//         echo"<h1>connection successfully.. </h1> <br>";
//     }
//     public function insert($name1,$email1,$pass1)
//     {
//         query_str="INSERT INTO `register` (`name`, `email`, `pass`) VALUES ('$name1', '$email1', '$pass1');";
//         if($this->con->quer(query_str)):{

//             echo " Regester successfully..<br>";

//         }else{
//             echo" not Regester successfully.. ";
//         }
//     }  
//     public function close()
//     {
//         $this->con->close();
//     }  
// }
// obj=new connect_db("localhost","pma","bala@2003");
// obj.insert($_POST["name"],$_POST["email"},$_POST["pass"]);

echo $_POST["name1"].$_POST["email1"].$_POST["pass1"];

require_once "include/footer.php"
?>
