if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['fname'])
        && !empty($_POST['lname'])
        && !empty($_POST['email'])
        && !empty($_Post['subject'])
        && !empty($_POST['message'])
    ){
        $f.name = $_POST["fname"];
        $l.name = $ POST["lname"];
        $email = $_POST["email"];
        $subject = $ POST["subject"];
        $message = $_POST["message"];


        $to = "teodorgolan12@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "First Name: {$fname}\nLast Name: {$lname}\nEmail: {$email}\nSubject: {$subject}\nMessage: {$message}";
        $headers = "From: {$email}";


        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}