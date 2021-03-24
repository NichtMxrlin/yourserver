<?php

$name = $_POST['name'];
$ignname = $_POST['ignname'];
$dc = $_POST['dc'];
$older = $_POST['alter'];
$erfahrung = $_POST['erfahrung'];
$über = $_POST['über'];
$bewerben = $_POST['bewerben-als'];
$visitor_email = $_POST['email'];
$stärken = $_POST['stärken'];
$check = $_POST['bestätigen'];



$email_from = 'DeinServer@gmail.com';

$email_subject = "BEWERBUNG von $name";

$email_body = "Name: $name.\n".
                  "Ingame Name: $ignname \n".
                     "Discord + Tagg: $dc \n".
                        "Alter: $older \n".
                           "Bewerben als: $bewerben \n".
                              "Erfahrung im Thema $bewerben: $erfahrung\n".
                                 "Etwas über dich: $über \n".
                                    "Stärken & Schwächen: $stärken \n".
                                       "Die Bewerbungs-Regeln wurden vom Bewerber/in Aufgenommen & Akzeptiert $check";

$to = "DeinServer@gmail.com";

$headers = "Von: $visitor_email \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: languages");
?>
