<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include("../common/db.php");

// SIGNUP
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if ($password !== $confirmPassword) {
        echo "Passwords do not match";
        exit();
    }

    // ✅ Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // ✅ Check if user already exists
    $check = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "User already exists";
    } else {
        // ✅ Use prepared statements to prevent SQL injection
        $user = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $user->bind_param("sss", $username, $email, $hashedPassword);
        $result = $user->execute();


        if ($result) {
            $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $conn->insert_id];
            header("Location: ../");
            exit();
        } else {
            echo "Error while registering user: " . $user->error;
        }
    }

    $check->close();
}


// LOGIN
else if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // ✅ Fetch user by email
    $user = $conn->prepare("SELECT id, username, email, password FROM users WHERE email = ?");
    $user->bind_param("s", $email);
    $user->execute();
    $result = $user->get_result();

    // ✅ Check if user exists
    if ($row = $result->fetch_assoc()) {
        // ✅ Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION["user"] = [
                "user_id" => $row["id"],
                "username" => $row["username"],
                "email" => $row["email"]
            ];
            header("Location: ../");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }
}


// LOGOUT
else if (isset($_GET["logout"])) {
    session_unset();
    session_destroy(); // Optional: fully destroy session
    header("Location: ../");
    exit();
}

// ASK Question
else if (isset($_POST["askQuestion"])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $user_id = $_SESSION['user']['user_id'];

    $question = $conn->prepare("INSERT INTO `questions` (`title`, `description`, `category_id`, `user_id`) VALUES (?, ?, ?, ?)");
    $question->bind_param("ssii", $title, $description, $category_id, $user_id);

    $success = $question->execute();

    if ($success) {
        echo "Question submitted successfully!";
        header("Location: ../");
        exit();
    } else {
        echo "Failed to post question: " . $question->error;
    }
} 
// submit answer
else if (isset($_POST["submitAnswer"])) {


    if ($_SESSION['user']['user_id']) {
        $answer = $_POST['answer'];
        $question_id = $_POST['question_id'];
        $user_id = $_SESSION['user']['user_id'];
        $givenAnswer = $conn->prepare("INSERT INTO `answers` (`answer`, `question_id`, `user_id`) VALUES (?, ?, ?)");
        $givenAnswer->bind_param("sii", $answer, $question_id, $user_id);

        $success = $givenAnswer->execute();

        if ($success) {
            echo "Answer submitted successfully!";
            header("Location: /Discuss/?q-id=$question_id");
            exit();
        } else {
            echo "Failed to post answer: " . $answer->error;
        }
    } else {
        echo "<h4>Login to answer the question.</h4>";
    }


} 
// Delete Question
else if (isset($_POST['deleteQuestion'])) {
    print_r($_POST);

    $question_id = $_POST['deleteQuestion'];

    $questionDelete = $conn->prepare("Delete from questions where id=$question_id");
        if ($questionDelete->execute()) {
        header("Location: /Discuss/?myQuestion=true");
        exit();
    } else {
        echo "Failed to delete question: " . $questionDelete->error;
    }
} 
// Delete Answer
else if (isset($_POST['deleteAnswer'])) {
    print_r($_POST);

    $answer_id = $_POST['deleteAnswer'];

    $answerDelete = $conn->prepare("Delete from answers where id=$answer_id");
        if ($answerDelete->execute()) {
        header("Location: /Discuss/?myQuestion=true");
        exit();
    } else {
        echo "Failed to delete question: " . $answerDelete->error;
    }
}


?>