<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Favicon and Title -->

                <?php
          include_once("inc/title.php");
?>
        <?php
          include_once("inc/favicon.php");
?>
<meta name="description" content="PhosphorJS">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/question/css/question.css" />
        <link href='https://fonts.googleapis.com/css?family=Lato:400italic,300,300italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Nunito:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <?php
require('db-question.php');
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
<?php
          include_once("inc/header.php");
?>
        <div class="main-container">
            <div class="main wrapper clearfix">
                <article>
                    <h2 style="color:#027c04;">Welcome</h2>
                    <p>Hello, I am Nate and Welcome to my Github Site. Here you will find information on my code, my latest projects, and information on how to keep up with what I am doing. This site is only for my Github Projects. For more about me go to my Official Site: <a href="https://nateduhamell.com" target="_blank" alt="https://nateduhamell.com" style="color:#027c04;">https://nateduhamell.com</a></p>
<br>
                    <h2 style="color:#027c04;">Ask a Question</h2>
                    <form name="registration" action="" method="post">
<input type="text" name="question" placeholder="Please Type your Question" required />
<input type="submit" name="submit" value="Ask Me!" />
</form>
<br>
                    <h2 style="color:#027c04;">News and Updates</h2>
<p>1/17/19 - The site is up and Going</p>
<br>
                    <h2 style="color:#027c04;">Answered Questions</h2>
                    <h3>There are Currently no Answered Questions. Have one? Ask it!</h3>
<br>
                    <h2 style="color:#027c04;">Get in Touch</h2>
                    <p>Have a more in depth question, comment on the site, or any sort of issues? Contact me!</p>
Via Email: <a href="mailto:admin@nateduhamell.com" target="_blank" alt="admin@nateduhamell.com" style="color:#027c04;">admin@nateduhamell.com</a>
<br>
<br>
                </article>
<br>
<br>
                <aside>
                    <div><img src="/img/github.png" style="width:200px;" alt="Github Logo"></img></div>
                    <h2 style="color:#027c04;">Github Page</h2>
                    <p>This is the official <br>
                    github page for Nate Duhamell,<br>
                    find information on my<br>
                    software and code here. <br></p>
                </aside>


            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
<?php
          include_once("inc/footer.php");
?>            </footer>
        </div>
        <script src="js/main.js"></script>
        <?php } ?>

    </body>
</html>
