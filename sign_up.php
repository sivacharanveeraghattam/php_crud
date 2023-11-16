<?php class Url
{
    public function base_url()
    {
        return 'http://localhost/php_crud/style.css';
    }
    public function ShowBaseUrl()
    {
        echo $this->base_url();
    }
}
$someInstance = new Url();
?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>PHP CRUD</title>

    <link rel="stylesheet" href="<?= $someInstance->ShowBaseUrl(); ?>">

</head>

<?php require_once('db.php'); ?>

<body> <!-- partial:index.partial.html -->

    <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>

        <div class="signin">

            <div class="content">

                <h2>Sign Up</h2>

                <div class="form">
                    <div class="inputBox">
                        <input type="text" name="username" id="username" required> <i>Username</i>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" required> <i>Email</i>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="password" id="password" required> <i>Password</i>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="cpassword" id="cpassword" required> <i>Confirm Password</i>
                    </div>

                    <div class="links">
                        <a href="#">SignIn</a>
                    </div>

                    <div class="inputBox">

                        <input type="submit" value="Sign Up">

                    </div>

                </div>

            </div>

        </div>

    </section> <!-- partial -->

    <?php
        $submit = '';
        $submit = isset($_POST['submit']);
        if ($submit != '') {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $sha1_password = sha1($password);
            if ($password === $cpassword) {
                $sql = "INSERT INTO sign_up (username,email,pasword)
                VALUE (".$username.", ".$email.", ".$sha1_password.") ";
            }
        }
    ?>

</body>

</html>