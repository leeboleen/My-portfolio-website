<?php
$errors = ”;

$myemail = ‘barneslee306@gmail.com’; //if(empty($_POST[‘name’]) ||
empty($_POST[’email’]) ||

empty($_POST[‘message’]))

{

    $errors .= “\nError:
        allfieldsarerequired”;

    }

    $name = $_POST[‘name’];

    $email_address = $_POST[’email’];

    $message = $_POST[‘message’];

    if (!preg_match(

    “ / ^[_a - z0 - 9 - ] + (\ . [_a - z0 - 9 - ] +) * @[a - z0 - 9 - ] + (\ . [a - z0 - 9 - ] +) * (\ . [a - z]
    {
        2, 3
    }) $ / i”, $email_address))

    {

        $errors .= “\nError:
            Invalidemailaddress”;

        }

        if (empty($errors))

        {

            $to = $myemail;

            $email_subject = “Contactformsubmission:
                $name”;

                $email_body = “Youhavereceivedanew message . “ .

                ”Herearethedetails:
                    \nName:
                        $name\n“ .

                        “Email:
                            $email_address\nMessage\n $message”;

                            $headers = “From:
                                $myemail\n”;

                                $headers .= “Reply - To:
                                    $email_address”;

                                    mail($to, $email_subject, $email_body, $headers);

                                    //redirect to the ‘thank you’ page
                                    header(‘Location:
                                        contact - form - thank - you . html’);

                                    }

?>
