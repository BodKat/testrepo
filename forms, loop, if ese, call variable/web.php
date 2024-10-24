<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first php code</h1>
</form>

<?php
#call variable from anothr page
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$country = $_REQUEST['country'];
$date = $_REQUEST['date'];
$email = $_REQUEST['email'];
$tel = $_REQUEST['tel'];
$comment = $_REQUEST['comment'];

echo "Hello ";
#call the variable
echo "<br> Your username is:  " .$username;
echo "<br> Your password is:  $password";
echo "<br> Choosen country is:  $country";
echo "<br> Your date of birth is:  $date";
echo "<br> Your email is:  $email";
echo "<br> Your phone number is:  $tel";
echo "<br> Your comment is:  $comment";

#if else statement
#if ($password=="Password"){
    #echo"password is accepted!";
#}
#elseif($username=="Kat"){
    #echo"Username is accepted!";
#}
#else{
    #echo"<br><br>Try Again something is incorrect";

    //refreshes the page automaticaly
    #echo"<meta http-equiv='Refresh' content='3;url=http://localhost/KatWeb/basic%20webpage/form.php'>";

    //ask the user to click and go back
    #echo "<br><a href='http://localhost/KatWeb/basic%20webpage/form.php'> Go back and try again </a>";
#}
 
?>

</body>
</html>