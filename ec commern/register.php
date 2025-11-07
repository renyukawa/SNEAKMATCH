<?php 

include 'components/connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=($password);

     $stmt = $conn->prepare("SELECT * FROM customers WHERE email = ?");
$stmt->execute([$email]);

// Now check the count
if($stmt->rowCount() > 0){ 
    echo "Email Address Already Exists !";
} else {
        // Old (Incorrect): (firstname,lastname,email,pass...
// New (Corrected): (first_name,last_name,email,passworf...)

$insertQuery = "INSERT INTO customers (first_name,last_name,email,password,phone_number,registration_date) VALUES ('$firstName', '$lastName', '$email', '$password', '$phone_number', NOW())";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=($password) ;
   
 $stmt = $conn->prepare("SELECT * FROM customers WHERE email = ? AND password = ?");

// Line 40
// Execute the statement with the variables
$stmt->execute([$email, $password]);

// Line 41 - Use rowCount() to check for a match
if($stmt->rowCount() > 0){
    // Line 42
    session_start();
    // Line 43 - Use the correct PDO fetch method
    $row = $stmt->fetch(PDO::FETCH_ASSOC); 
    // Line 44
    $_SESSION['email'] = $row['email'];
    // Line 45
    header("Location: shop-grid-ft.html");
    // Line 46
    exit();
}
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>