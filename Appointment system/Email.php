<?php
include_once("Connections/connection.php");
$con = connection();

$id = $_GET['ID'];

$sql = "SELECT * FROM stakeholders WHERE id = '$id'";
$client = $con->query($sql) or die ($con->error);
$row = $client->fetch_assoc();
$msg = "";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['submit'])){
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $category = $_POST['category'];
    $address = $_POST['address'];
    $contact = $_POST['contact_No'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $office = $_POST['office'];
    $POA = $_POST['purpose_of_appoint'];
    $status = $_POST['status'];
    $VOQR = date('F d, Y', strtotime($_POST['validity_of_QR']));
  

    $sql = "UPDATE stakeholders SET  first_name = '$fname', last_name = '$lname', category = '$category', address =
    '$address',contact_No = '$contact',email = '$email', date = '$date',time = '$time',office = '$office',
    purpose_of_appoint = '$POA', status  = '$status' , validity_of_QR  = '$VOQR' WHERE id = '$id'";
    $con->query($sql) or die ($con->error);

    $orgDate =  $row['date'];
    $newDate = new DateTime($orgDate);
      $newDate->format('F d, Y');
  
 
    $mail = new PHPMailer(true);

try {
    //Server settings
   //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'bluemoon28.nc@gmail.com';                     //SMTP username
    $mail->Password   = 'bluemoon92899.';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients

    $mail->setFrom($_POST['email'] ,'University of Rizal System Morong', $_POST['office']);
    $mail->addAddress($_POST['email']);
    // $mail->addReplyTo('bluemoon28.nc@gmail.com');

    //Attachments
    // $mail->addAttachment(path: 'IMG QR code/Clemente_QR_code.jpeg', name: 'QR CODE');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    if (isset($_FILES)){
        $file = "IMG QR code/"  . basename($_FILES['attachment']['name']);
        move_uploaded_file($_FILES["attachment"]["tmp_name"],$file);
        $mail->addAttachment($file) ;
    }else{
            $file = "";
            // "<script type='text/javascript'>alert('Message has been sent! No file chosen')
     
            // </script>"; 
        }
        date_default_timezone_set('Asia/Manila'); 
        $curdate = date('F j, Y'); 
       
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = ('Appointment in '.$office.'');
    $mail->Body    = '<div style="font-size:15px; padding: 0 50px; text-align: justify; ">

        <div>'.$curdate.' </div> 
        <div>Greetings! '.$fname.' '.$lname.' </div> 

        <p>We\'re  from the University of Rizal System Morong, We\'d like to inform you that your 
            appointment with the '.$office.' office/building on '. $newDate->format('M d Y').' '.$time.' is '.$status.'. Below we provided the QR code containing
            the details of your appointment. The QR code and a Valid ID will be needed to enter the
            University. Thank you!</p> 

            <div>Best regards,</div> 
            <div>URSM</div> 

        <div style="color: black;" >
        <h2>Appointment Details</h2>
        
            <div><b>Appointment:<b> '.$status.'</div>               
            <div><b>Name:</b> '.$fname.' '.$lname.'</div>   
            <div><b>Category:</b> '.$category.'</div>
            <div><b>Address:</b> '.$address.'</div>
            <div><b>Contact:</b> '.$contact.'</div>
            <div><b>Email:</b> '.$email.'</div>
            <div><b>Date:</b> '.$newDate->format('M d Y').'</div>
            <div><b>Time:</b> '.$time.'</div>
            <div><b>Office:</b> '.$office.'</div>
            <div><b>Purpose of Appointment:</b> '.$POA.'</div>
            <div><b>Your QR Code will be Valid Until:<b> '.$VOQR.'</div>
            <div><b>Remember to bring your QR code and ID on the day of your arrival at the University<b></p>
        </div>
    </div>';

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script type='text/javascript'>alert('Message has been sent!')
     window.location.href = 'Details.php?ID=$id';
     </script>"; 
    } catch (Exception $e) {

    $msg =  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    }

 
}