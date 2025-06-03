<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss Project</title>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <?php
    include("client/commonFiles.php")
    ?>
</head>

<body class="bg-gray-200">
    <?php
        include('./client/header.php');

        if(isset($_GET['signup'])){
  include('./client/signup.php');
        } else if(isset($_GET['login'])){
            include('./client/login.php');
        }
        else if(isset($_GET['askQuestion'])){
            include('./client/askQuestion.php');
            
        } else if(isset($_GET['q-id'])) {
            $qId = $_GET['q-id'];
            include('./client/questionDetails.php');
        } else if (isset($_GET['c-id'])){
            $cId = $_GET['c-id'];
                include ('./client/questions.php');
        } else if (isset($_GET['myQuestion'])) {
            include('./client/myQuestions.php');
        } else if (isset($_GET['latest'])) {
            include('./client/questions.php');
        } else if (isset($_GET['search'])) {
            $search = $_GET['search'];
            include('./client/questions.php');
        }
        else{
            include ('./client/questions.php');
        }
      
        ?>
</body>

</html>