<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: /account");
    exit;
}

$user = 'user';
$password = 'password';
$db = 'php';
$host = 'localhost';
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $password);
} catch (PDOException $e) {
    echo "Db problem";
}

$username_regex = "/[a-zA-Z0-9]{8,}$/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["register"])) {


                if (!preg_match($username_regex, $_POST["username"])) {
            $username_err = "Please enter a username.";
        } else {

            $sql = "SELECT id FROM users WHERE username = :username";

            if ($stmt = $pdo->prepare($sql)) {

                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

                // Set parameters
                $param_username = trim($_POST["username"]);

                if ($stmt->execute()) {
                    if ($stmt->rowCount() == 1) {
                        $username_err = "This username is already taken.";
                    } else {
                        $username = trim($_POST["username"]);
                    }
                } else {
                    echo "CHECKING USERNAME EXISTS QUERY FAILED";
                }


                unset($stmt);
            }
        }


        if (empty(trim($_POST["password"]))) {
            $password_err = "Please enter a password.";
        } elseif (strlen(trim($_POST["password"])) < 6) {
            $password_err = "Password must have atleast 6 characters.";
        } else {
            $password = trim($_POST["password"]);
        }


        if (empty(trim($_POST["confirm_password"]))) {
            $confirm_password_err = "Please confirm password.";
        } else {
            $confirm_password = trim($_POST["confirm_password"]);
            if (empty($password_err) && ($password != $confirm_password)) {
                $confirm_password_err = "Password did not match.";
            }
        }


        if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {


            $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";

            if ($stmt = $pdo->prepare($sql)) {

                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
                $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);


                $param_username = $username;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash


                if ($stmt->execute()) {

                    header("location: login.php");
                } else {
                    echo "preparing pdo for creating user failed";
                }


                unset($stmt);
            }
        }
    } else {

        if (empty(trim($_POST["username"]))) {
            $username_err = "username is empty.";
        } else {
            $username = trim($_POST["username"]);
        }


        if (empty(trim($_POST["password"]))) {
            $password_err = "password is empty.";
        } else {
            $password = trim($_POST["password"]);
        }


        if (empty($username_err) && empty($password_err)) {

            $sql = "SELECT id, username, password FROM users WHERE username = :username";

            if ($stmt = $pdo->prepare($sql)) {

                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

                $param_username = trim($_POST["username"]);

                if ($stmt->execute()) {

                    if ($stmt->rowCount() == 1) {
                        if ($row = $stmt->fetch()) {
                            $id = $row["id"];
                            $username = $row["username"];
                            $hashed_password = $row["password"];
                            if (password_verify($password, $hashed_password)) {

                                session_start();


                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;


                                header("location: /account");
                            } else {

                                $login_err = "Invalid username or password.";
                            }
                        }
                    } else {

                        $login_err = "Invalid username or password.";
                    }
                } else {
                    echo "creating user failed";
                }


                unset($stmt);
            }
        }
    }


    unset($pdo);
}
echo "$_POST";