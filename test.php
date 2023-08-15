<?php
// if (isset($_POST["register-btn"])) {
//     $firstname = $_POST["firstname"] ;
//     $middlename = $_POST["middlename"] ;
//     $lastname = $_POST["lastname"] ;
//     $familyname = $_POST["familyname"] ;
//     $password = $_POST["password"] ;
//     $email = $_POST["email"] ;
//     $phonenumber = $_POST["phonenumber"] ;
//     $dateofbirth = $_POST["dateofbirth"] ;
//     $datecreated =date('Y-m-d');
//     $datelast = date('Y-m-d');

// $query = "INSERT INTO register (firstname ,middlename ,lastname ,familyname, password ,email ,phonenumber,dateofbirth ,datecreated ,datelast ) VALUES (:firstname , :middlename , :lastname , :familyname, :password ,:email , :phonenumber, :dateofbirth ,:datecreated ,:datelast )" ;
// $query_run = $conn->prepare($query) ;
// $data = [
//     ':firstname' => $firstname ,
//     ':middlename' => $middlename ,
//     ':lastname' => $lastname ,
//     ':familyname' => $familyname ,
//     ':password' => $password ,
//     ':email' => $email ,
//     ':phonenumber' => $phonenumber ,
//     ':dateofbirth' => $dateofbirth ,
//     ':datecreated' => $datecreated ,
//     ':datelast' => $datelast ,
// ] ;
// $query_execute = $query_run->execute($data);
// if($query_execute){
// $_SESSION['message'] ="Inserted Successfully";
// header("location: index.php") ;
// exit(0) ;
// }
// else{
//     $_SESSION['message'] ="Not Inserted";
//     header("location: index.php") ;
//     exit(0) ;
// } }
?>











<?php


    //Event Listener for form submission
    // document.getElementById("registrationForm").addEventListener("submit",function(e){
    //     e.preventDefault();
        
    //         var firstname = document.getElementById("firstname").value;
    //         var middlename = document.getElementById("middlename").value;
    //         var familyname = document.getElementById("familyname").value;
    //         var password = document.getElementById("password").value;
    //         var email = document.getElementById("email").value;
    //         var phonenumber = document.getElementById("phonenumber").value;
    //         var dateofbirth = document.getElementById("dateofbirth").value;
            // var datecreated = document.getElementById("datecreated").value;
            // var datelast = document.getElementById("datelast").value;
        
    //     fetch("create.php",{
    //         method: "POST",
    //         headers:{
    //             "Content-Type":"Application/json",
    //         },
    //         body:JSON.stringify({firstname:firstname,middlename:middlename,familyname:familyname,password:password,email:email,phonenumber:phonenumber,dateofbirth:dateofbirth,datecreated:datecreated,datelast:datelast}),
    //     })
    //     .then(response=>response.json())
    //     .then(data=>{
    //         alert(data.message);
    //         document.getElementById("firstname").value="";
    //         document.getElementById("middlename").value="";
    //         document.getElementById("familyname").value="";
    //         document.getElementById("password").value="";
    //         document.getElementById("email").value="";
    //         document.getElementById("phonenumber").value="";
    //         document.getElementById("dateofbirth").value="";
    //         // document.getElementById("datecreated").value="";
    //         // document.getElementById("datelast").value="";
        
    //     })
    //     .catch(error=>{
    //         console.error("Error:",error);
    //     })
    //     })
    //     fetchUsers();
    //   }
    // });
    
?>    
// require("dbcon.php");

// if($_SERVER["REQUEST_METHOD"]=="POST"){
// $data=json_decode(file_get_contents("php://input"),true);

// $firstname=$data['firstname'];
// $middlename=$data['middlename'];
// $familyname=$data['familyname'];
// $password=$data['password'];
// $email=$data['email'];
// $phonenumber=$data['phonenumber'];
// $dateofbirth=$data['dateofbirth'];
// $datecreated=date('Y-m-d');
// $datelast=date('Y-m-d');

// $sql = "INSERT INTO register (firstname ,middlename ,lastname ,familyname, password ,email ,phonenumber,dateofbirth ,datecreated ,datelast ) VALUES ('$firstname' , '$middlename' , '$lastname' , '$familyname' , '$password' ,'$email' , '$phonenumber', '$dateofbirth' ,'$datecreated' ,'$datelast ')" ;
// $response= array();
// if($conn->query($sql) === True){
//     $response['message']="Data stored successfully";
// }else{
//     $response['message']="Error: ".$sql."<br>.$conn->error";

// }
// echo json_encode($response);
// }
// $conn->close();
require("dbcon.php");
header("Content-Type: application/json");


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $data=json_decode(file_get_contents("php://input"),true);
    $firstName=$data['firstName'];
    $middleName=$data['middleName'];
    $lastName=$data['lastName'];
    $familyName=$data['familyName'];
    $email=$data['email'];
    $mobile=$data['mobile'];
    $password=$data['password'];
    // $bdate=$data['bdate'];
    // $createDate=$data['createDate'];
    // print_r($data);

    $sql="INSERT INTO `users`(`firstName`, `middleName`, `lastName`, `familyName`, `email`, `mobile`, `password` , `superUserFlag`) 
    VALUES ('$firstName','$middleName','$lastName','$familyName','$email','$mobile','$password',0)";

    $response=array();
    if($conn->query($sql)===true){
        $response['message']="Data stored successfully";
    }else{
        $response['message']="Error: ".$sql."->error;
    }
    echo json_encode($response);
}
$conn->close();
?>




// require "dbcon.php";

// $response = array();

// $email = $_REQUEST['email'];
// $password = $_REQUEST['password'];

// if (isset($email) && isset($password)) {
//     try {
//         $sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";
//         $q = $conn->query($sql);
//         $q->setFetchMode(PDO::FETCH_ASSOC);
//         $result = array();
//         while ($row = $q->fetch()) {
//             $result[] = array(
//                 'firstname' => $row['firstname'],
//                 'middlename' => $row['middlename'],
//                 'lastname' => $row['lastname'],
//                 'familyname' => $row['familyname'],
//                 'email' => $row['email'],
//                 'phonenumber' => $row['phonenumber'],
//                 'password' => $row['password'],
                // 'password' => $row['password'],
//                 // 'password' => $row['password'],
//             );
//         }

//         $response['data'] = $result;
//     } catch (PDOException $e) {
//         $response['error'] = "Could not connect to the database: " . $e->getMessage();
//     }
// } else {
//     $response['error'] = "Invalid input";
// }

// header('Content-Type: application/json');
// echo json_encode($response);
