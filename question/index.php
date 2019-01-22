<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/question.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['question'])){
        // removes backslashes
	$question = stripslashes($_REQUEST['question']);
        //escapes special characters in a string
	$question = mysqli_real_escape_string($con,$question); 
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `questions` (question, trn_date)
VALUES ('$question', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
header("Location: /question/redirect-question.html");
        }
    }else{
?>
<br>
<br>
<form name="registration" action="" method="post">
<input type="text" name="question" placeholder="Please Type your Question" required />
<input type="submit" name="submit" value="Ask Me!" />
</form>
<br>
<br>
</body>
<?php } ?>

</html>