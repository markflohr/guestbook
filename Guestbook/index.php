<?php 
    include("inc/insert.php");
?>
<!DOCTYPE html>
<head>
	<title>Guestbook</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name="Keywords" content="ROC Ter Aa, ICT, web, HTML, CSS, Guestbook"/>
	<meta name="Description" content="Guestbook">
	<meta name="Author" content="Mark Flohr"/>
	<meta name="Copyright" content="2018, Mark Flohr"/>
</head>
<body>
	<header>Guestbook</header>
<div id="form">
	<form method="post" onsubmit=" return checkforblank()">
        <input type="hidden" name="submitted" value="true" />
        <fieldset id="field">
            <legend>New Message</legend>
		    	<label>*First Name:</label>
		    	<input type="text" name="firstName" placeholder="enter your first name">
		    	<label>Insertion:</label>
                <input type="text" name="insertion" placeholder="enter your insertion">
                <label>*Last Name:</label>
		    	<input type="text" name="lastName" placeholder="enter your last name">
                <label>*E-mail address:</label>
                <input tabindex="" ype="text" name="email" placeholder="enter your E-mail address">
		    	<label>*website address:</label>
		    	<input type="text" name="website" placeholder="enter a website address">
                <label>*Message title:</label>
                <input type="text" name="title" placeholder="enter a title">
		    	<label>*Message:</label>
		    	<textarea name="message" class="messsage" placeholder="enter your message here"></textarea>
            <label>*These fields must be filled</label>
        </fieldset>
        <div id="buttons">
			<input type="submit" name="mySubmit" value="Send message">
			<input type="reset" name="reset" value="Reset">
		</div>
		<div class="clearfix"></div>
    </form>
</div>
	<?php
        $sqlSelect = "SELECT firstName, insertion, lastName, email, messageTitle, message, websiteAddress FROM guestbook";
        if(!$result = $dbcon->query($sqlSelect))
        {
			die('There was an error running the query [' . $dbcon->error . ']');
		} 
    ?>
    <div class="clearfix"></div>
    <div class="error">
    <?php 
        echo $newcomment;
        echo "<br />"; 
        foreach($errormessages as $error)
        {
            echo $error;
            echo "<br />";
        }
    ?>
</div>
    <div class="table">
   	<table>
   	<thead>
    	<tr>
            <th>Firstname</th>
            <th>Insertion</th>
            <th>Lastname</th>
            <th>E-mail</th>
            <th>Title</th>
            <th>Message</th>
            <th>Website</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($row = $result->fetch_assoc())
        {
	?>
            <tr>
                <td><?php echo $row['firstName']; ?></td>
                <td><?php echo $row['insertion']; ?></td>
                <td><?php echo $row['lastName']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['messageTitle']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td><?php echo $row['websiteAddress']; ?></td>
            </tr>
    <?php
        }
    ?>
    </tbody>
	</table>
	</div>
<footer>created by Mark Flohr</footer>
</body>
</html>