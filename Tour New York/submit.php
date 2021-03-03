<?php
    function test_input($data) {
        $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
      return $data;
    }

    $visitor = test_input($_GET["visitor"]);
    $groupNum = test_input($_GET["groupNum"]);
    $vdate = test_input($_GET["vdate"]);
    $place = test_input($_GET["fplace"]);
    $rating = test_input($_GET["rating"]);
    $destination_email = "eddybites@gmail.com";
    $destination_email2 = "RITISTprofessor@gmail.com";
    $email_subject = "(2109) iSchool New York City, New York - Huang Ling";
    $email_body = "Hey $visitor,\nThank you for filling out the survey!\nHere is you response: \n";
    $email_body .= "Your group size was $groupNum\n";
    $email_body .= "The date visited was $vdate\n";
    $email_body .= "Your favorite place is $place\n";
    $email_body .= "The rating you gave is $rating\n We hope to see you soon!";
    mail($destination_email , $email_subject , $email_body);
    // mail($destination_email2 , $email_subject , $email_body);

?> 
<!-- End of PHP -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Thank you for your feedback!</title>

</head>
<body>
<div id="wrapper" style="height: 900px;"> 
    


        <h2 style="padding-left: 25px;"> Thank you for your feedback!</h2>
        <br>
        <figure id="thankyou">
            <img src="images/thankyou.png" alt="Thank you"/>
            <figcaption><h2>Your feeback can only help us to be a better city!</h2></figcaption>
        </figure>
        <br>
        <br>
        <button id="submithome"><a class="link" href="index.php">Click Me To Go Back! </a></button>
        <br>
        <br>
        <br>
        <br>


</div>

</body>
</html>