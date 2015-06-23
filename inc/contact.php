<!-- Contact form PHP script -->

<?php
    $name = $_POST['cd-name'];
    $email = $_POST['cd-email'];
    $message = $_POST['cd-textarea'];
    $company = $_POST['cd-company'];
    $price = $_POST['cd-price'];
    $project = $_POST['cd-project'];

    $to = "martin.guillaume19@gmail.com"; // Replace xxxx@xxxx.com with your email address (mandatory!) 
    $subject = "Commande :". $company; // Choose a custom subject (not mandatory)

    $body = $name . " (" . $email . "):\n\n" . $message ." \n \n Compagnie :  " . $company ." \n Budget : ". $price ."\n \n Project : ". $project ;

    $from = "wwww.over.pe.hu"; // Replace "Beetle Template" with your site name (not mandatory)   
    $headers = "From:" . $from . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();    





    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($name != '' && $email != '' && $message != '') {
                
            if (mail ($to, $subject, $body, $headers)) { 
                echo '<p style="color:#66A325;">Thanks! Your message has been sent.</p>';
            } else { 
                echo '<p style="color:#F84B3C;">Something went wrong, go back and try again!</p>'; 
            } 

        } else {
            echo '<p style="color:#F84B3C;">You need to fill in all required fields!</p>';
        }
    } else {
        echo '<p style="color:#F84B3C;">Invalid Email, please provide an correct email.</p>';
    }  

    // Use the script below if you want to use HTML emails instead

    /*

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'xxxx@xxxx.com'; // Replace xxxx@xxxx.com with your email address (mandatory!) 
    $subject = 'Hello'; // Choose a custom subject (not mandatory)

    $body = '<html><body>';
    $body .= '<em style="color: #999;">You have received a message from <strong>' . $name . '</strong> (' . $email . '):</em>';
    $body .= '<p>' . $message . '</p>';
    $body .= '</body></html>';

    $from = "From: Beetle Template"; // Replace "Beetle Template" with your site name (not mandatory)   
    $headers = "From:" . $from . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();    
                
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($name != '' && $email != '' && $message != '') {
                
            if (mail ($to, $subject, $body, $headers)) { 
                echo '<p style="color:#66A325;">Thanks! Your message has been sent.</p>';
            } else { 
                echo '<p style="color:#F84B3C;">Something went wrong, go back and try again!</p>'; 
            } 

        } else {
            echo '<p style="color:#F84B3C;">You need to fill in all required fields!</p>';
        }
    } else {
        echo '<p style="color:#F84B3C;">Invalid Email, please provide an correct email.</p>';
    }   

    */  

?>