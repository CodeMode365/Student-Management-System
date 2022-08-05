 <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        echo "Login first";
        header("location:../login.php");
    }
    include_once('../reusables/header.php');
    ?>
    <link rel="stylesheet" href="../assets/css/bts.css">
    <link rel="stylesheet" href="../assets/css/nav.css">

 <body class=" bg-dark text-light" id="main-body">

<?php
    require_once('../reusables/navbar.php');
    require_once('../reusables/crudSection.php');
?>




         <script src="../js/search.js"></script>
         <script src="../js/nav.js"></script>
         <script src="../js/bts.js"></script>

 </body>

 </html>