<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    $messageSent = false;

    function cleanString($string) {
        $string = strip_tags($string);
        $string = mb_convert_encoding($string, 'UTF-8', 'UTF-8');
        $string = htmlentities($string, ENT_QUOTES, 'UTF-8');
        $string = str_replace("\n", "", $string);

        return $string;
    }

    if (isset($_POST['contact'])) {
        $name = $company = $email = $phone = null;

        if (isset($_POST['name']))
            $name = cleanString($_POST['name']);
        if (isset($_POST['company']))
            $company = cleanString($_POST['company']);
        if (isset($_POST['email']))
            $email = cleanString($_POST['email']);
        if (isset($_POST['phone']))
            $phone = cleanString($_POST['phone']);

        if ($email && $name && $phone && $company) {
            
            $mail = new PHPMailer;
            $mail->SMTPDebug = 0;                               
            $mail->isSMTP();

            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
             )
            );

            $message = '<html><body>';
            $message .= '<table rules="all" style="border: #d64a00 1px solid" cellpadding="10">';
            $message .= '<thead><strong>NOSPOS demo enquiry</strong></thead>';
            $message .= "<tr><td><strong>Name</strong> </td><td>" . $name . "</td></tr>";
            $message .= "<tr><td><strong>Company</strong> </td><td>" . $company . "</td></tr>";
            $message .= "<tr><td><strong>Email</strong> </td><td>" . $email . "</td></tr>";
            $message .= "<tr><td><strong>Phone</strong> </td><td>" . $phone . "</td></tr>";
            $message .= "<tr><td><strong>Requested</strong> </td><td>" . date("d/m/Y H:i:s") . "</td></tr>";
            $message .= "</table>";
            $message .= "</body></html>";
            
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;                          
            $mail->Username = "noscosys@gmail.com";                 
            $mail->Password = "cjdann42";                           
            $mail->SMTPSecure = "tls";                           
            $mail->Port = 587;                                   
            $mail->From = "noscosys@gmail.com";
            $mail->FromName = "Nosco";
            $mail->addAddress("admin@nosco-systems.com", "Nosco");
            $mail->isHTML(true);
            $mail->Subject = "NOSPOS demo enquiry";
            $mail->Body = $message;
            $mail->AltBody = $name . ", " . $company . ", " . $email . ", " . $phone . ", " . date("d/m/Y H:i:s");

            if(!$mail->send()) 
            {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } 
            else 
            {
                $messageSent = true;
            }
        }
    }
?>