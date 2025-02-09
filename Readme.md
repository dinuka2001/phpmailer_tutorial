# PHPMailer Project

This project uses PHPMailer to send emails from a PHP application.

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/dinuka2001/phpmailer_tutorial.git
    ```
2. Navigate to the project directory:
    ```bash
    cd phpmailer_tutorial
    ```
3. Install dependencies using Composer:
    ```bash
    composer install
    ```

## Usage

1. Configure the `config.php` file with your email server settings.
2. Use the following code to send an email:
    ```php
    require 'vendor/autoload.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@example.com';
    $mail->Password = 'your-email-password';
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('recipient@example.com', 'Recipient');

    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
    ```

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contributing

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/fooBar`).
3. Commit your changes (`git commit -am 'Add some fooBar'`).
4. Push to the branch (`git push origin feature/fooBar`).
5. Create a new Pull Request.

## Acknowledgements

- [PHPMailer](https://github.com/PHPMailer/PHPMailer) - The library used for sending emails.
