<?php
require_once "include/header.php";
$con= new mysqli("localhost","pma","bala@2003");
if($con->connect_error){
    die(" erro".$con->connect_error);
}
echo" connection successfully...";
 //$query_st="INSERT INTO mydbms.`register` (`name`, `email`, `pass`) VALUES ('$_post["name1"]','$_post["email1"]','$_POST["pass1"]');";
 //$query_st="INSERT INTO mydbms.`register` (`name`, `email`, `pass`) VALUES ('indhu', 'indhu@gmail.com','123sdfgf');";
 $n=$_POST["name1"];
 $e=$_POST["email1"];
 $p=$_POST["pass1"];
 $query_st = "INSERT INTO mydbms.`register` (`name`, `email`, `pass`) VALUES ('$n', '$e','$p');";
 
 if ($con->query($query_st)){
    echo" insertrd success fully ...";
 }else{
    echo " not inserteed ";
 }


// class connect_db{
//     public function __construct($sever,$user,$pass)
//     {
//         $con=new mysqli($sever,$user,$pass);
//         # code...
//     }
    

//     public function connection()
//     {
//         # establish the connection ditween mysqli using create aobject
        
//         if(($this->con)->connect_error){
//             die(" error : ". $this->con->connect_error);    
//         }
//         echo"<h1>connection successfully.. </h1> <br>";
//     }
//     public function insert($name1,$email1,$pass1)
//     {
//         $query_st="INSERT INTO `register` (`name`, `email`, `pass`) VALUES ('$name1', '$email1', '$pass1');";
        
//         if($con->quer(query_st)){

//             echo " Regester successfully..<br>";

//         }
//         else{
//           echo" not Regester successfully.. ";
//         }
//     }  
//     public function close()
//     {
//         $this->con->close();
//     }  
//     public function FunctionName()
//     {
//         # code...
//         echo " hello iam here ..";
//     }
// }
// $obj=new connect_db("localhost","pma","bala@2003");
// //$obj=new connect_db();
// //$obj->connection();

// $obj->insert($_POST["name1"],$_POST["email1"],$_POST["pass1"]);


echo $_POST["name1"].$_POST["email1"].$_POST["pass1"];
require_once "include/footer.php"
?>