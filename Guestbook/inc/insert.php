<?php
$newcomment = "";
$errormessages = array();
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $guestbook = "mark_flohr_guestbook";

        $dbcon = mysqli_connect($servername, $username, $password, $guestbook);

    if (isset($_POST['submitted'])) {
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $message = $_POST['message'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $title = $_POST['title'];
        $insertion = $_POST['insertion'];

        if ($firstname == "") 
        {
            $errormessages[] = "please enter your first name";
        }
        if ($lastname == "") 
        {
            $errormessages[] = "please enter your last name";
        }
        if ($message == "") 
        {
            $errormessages[] = "please enter your message";
        }
        if ($email == "") 
        {
            $errormessages[] = "please enter your E-mail adress";
        }
        if ($website == "") 
        {
            $errormessages[] = "please enter a website";
        }
        if ($title == "") 
        {
            $errormessages[] = "please enter a title";
        }
        if (count($errormessages) == 0) 
        {
            $sqlinsert = "INSERT INTO guestbook(firstName,insertion,lastName,messageTitle,message,email,websiteAddress) VALUES ('$firstname','$insertion','$lastname','$title','$message','$email','$website')";
            
            if ($dbcon->query($sqlinsert) === TRUE) 
            {
                $newcomment = "your message has been saved";
            }
            else
            {
                $newcomment = "there was an error";
            }

        }
    }
?>