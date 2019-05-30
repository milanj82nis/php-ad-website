<?php

$errorMSG = "";

	
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Ime i prezime su obavezni";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email adresa je obaezna ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Predmet je obavezan ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Poruka je obavezna ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "milanj31@gmail.com";
$Subject = "Imate novu email poruku";

// prepare email body text
$Body = "";
$Body .= "Ime i prezime: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email adresa: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Predmet: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Poruka: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "Od:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Uspešno poslata poruka";
}else{
    if($errorMSG == ""){
        echo "Došlo je do greške prilikom slanja poruke  :(";
    } else {
        echo $errorMSG;
    }
}
	
	
	


?>