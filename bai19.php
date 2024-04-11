<form action="" method="post">
    <label for="">Email</label> <input type="email" name="email" />
    <label for="">Pssword</label> <input type="password" name="password" />
    <input type="submit" name="submit" value="Send">
</form>
<?php

/*
Write a class called 'Validation' with static methods to validate email addresses, passwords, and other common input fields.
*/
class Validation
{
    public static $email;
    public static $password;

    public function __construct($a = "", $b = "")
    {
        self::$email = $a;
        self::$password = $b;
    }

    public static function validateForm()
    {
        if (self::$email == "" && self::$password == "") {
            echo "Email và mật khẩu bị rỗng";
        } elseif
        (self::$email == "") {
            echo "Email bị rỗng";
        } elseif (self::$password == "") {
            echo "Mật khẩu bị rỗng";
        }
    }
}

if (isset($_POST['submit'])) {
    $mail = $_POST['email'];
    $pass = $_POST['password'];
    $validated = new Validation($mail, $pass);
    $validated::validateForm();
}

//tham khảo

// class Validation {
//     public static function validateEmail($email) {
//         // Check if the email is valid using a regular expression
//         return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
//     }

//     public static function validatePassword($password) {
//         // Here's an example that checks if the password is at least 8 characters long
//         return strlen($password) >= 8;
//     }

//     public static function validateField($field) {
//         // Here's an example that checks if the field is not empty
//         return !empty($field);
//     }
// }

// $email = "admin@example.com";
// $password = "password123";
// $field = "";

// if (Validation::validateEmail($email)) {
//     echo "Email is valid.</br>";
// } else {
//     echo "Email is invalid.</br>";
// }

// if (Validation::validatePassword($password)) {
//     echo "Password is valid.</br>";
// } else {
//     echo "Password is invalid.v";
// }

// if (Validation::validateField($field)) {
//     echo "Field is valid.</br>";
// } else {
//     echo "Field is invalid.</br>";
// }