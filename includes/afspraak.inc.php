<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$message_sent = false;

if (isset($_POST['submit']) && $_POST['submit'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $tel = $_POST['tel'];
        $mailFrom = $_POST['email'];
        $date = $_POST['date'];
        $hour = $_POST['hour'];
        // radio buttons 
        $behandeling = $_POST['behandeling'];
        $message = $_POST['message'];
        $mailTo = "sandy.ielegems@gmail.com";
        $body = "";

        $txt .= "U hebt een e-mail ontvangen van " . $firstname . " " . $lastname . " telnr " . $tel . " met emailadres " . $mailFrom . ".\n\n" . $message . "wenst een afspraak op " . $date . " om " . $hour . ".\n\n" . "voor " . $behandeling;

        mail($mailTo, $txt);
        header("Location: index.php#afspraak?mailsend");

        $message_sent = true;
        print("<script>window.alert('Uw afspraak is aangevraagd. Kijk uw mailbox na.');</script>");
    } else {
        $invalid_class_name = "form-invalid";
    }
}


?>
<!-- 
<?php
if ($message_sent);
echo "Uw afspraak is aangevraagd"
?> -->


<!-- 
<?php
if ($message_sent);
print("<script>window.alert('Uw afspraak is aangevraagd. Kijk uw mailbox na.');</script>");
?> -->


<!-- 
<?php
// PHP program to pop an alert 
// message box on the screen 

// Function defnition 
if ($message_sent);

function function_alert($message)
{
    // Display the alert box  
    echo "<script>alert('$message');</script>";
}

// Function call 
function_alert("Uw afspraak is aangevraagd");
?> -->