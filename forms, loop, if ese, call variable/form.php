<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
</head>
<body>

    <h2>Fill the form</h2>

<!-- basic form -->
    <form action=web.php method=post>

        <label style="font-size:25px"><b>Please enter your username</b>
        </label><br><input type="text" name="username" required></input><br>

        <label style="font-size:25px"><b>Please enter your password</b>
        </label><br><input type="password" name="password" required></input>

        <!-- Select form -->
        <br><br><label for="Country">Select a Country:</label>
        <select id="country" name="country">
        <option value="UK">UK</option>
        <option value="France">France</option>
        <option value="USA">USA</option>
        <option value="Spain">Spain</option>
        </select>

        <!-- Date form -->
        <br><br><label for="birthday">Enter your Birthday date:</label>
        <input type="date" id="date" name="date" required>

        <!-- Email form -->
        <br><br><label for="email">Enter your email:</label>
        <input type="email" id="email" name="email" optional>

        <!-- Telephone number form -->
        <br><br><label for="tel">Enter your phone number:</label>
        <input type="tel" id="tel" name="tel" optional>

        <!-- big fild for comments -->
        <br><br><label for="comment">Add any additional information:></label>
        <br><textarea id="comment" name="comment" placeholder="Type here "rows="3" cols="15" minlength="10" maxlength="25"></textarea>


        <!-- submit button -->
        <br><br><br><input type="submit" name="submit"></input>
        <!-- circle button -->
        <input type="radio" name = "radio"></input>
        <!-- tick button -->
        <input type="checkbox"name = "checkbox"></input>

<?php
    $attemps = 3;

while ($attemps>0){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    if ($username=="Kat" && $password=="Password"){
        echo "Correct password. \n";
    }
    else{
        echo "Wrong password Try again..";
        $attemps--;
        echo "Attemps left: $attemps";
    }
    if ($attemps==0){
        echo "Your account is locked";
        break;
    }
}
?>
    
    
    
    </form>
</body>
</html>
