<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="./assets/css/bts.css" />
  <!-- <link rel="stylesheet" href="./assets/css/index.css" /> -->
  <link rel="stylesheet" href="./assets/css/lighting.css" />
</head>

<body class="container bg-dark text-light">
  <header class=" ">
    <h2 class="d-flex mt-5 justify-content-center">About this Site</h2>
    <br />
    <p class="text-justify">
      This is my project on
      <i class="text-info">Student Management System </i> as assigned by our
      DBMS teacher. This is the basic demo version of Student Management
      System which can be applied in practical life with some modification in
      the system as required. For the abstraction of the users the account
      creating and login section is also available that maintains the
      security. The system can be updated further to its advance version for
      extra features.
    </p>

    <p class="text-justify">
      As this is the project of <i class="text-info">DBMS(DataBase Management System)</i> so, none of the libraries for <i class="text-info">backend</i> has been used. Only the front-end libraries are used to make the front-end code writing easier/faster and to focus in backed programming which is also one of the most important objective of this project. <br>
      This is my solo project for which i have taken refrences from the teachers from <i class="text-info">youtube</i> and <i class="text-info">internet</i>.
    </p>
    <h4><u>Strucutre the database</u></h4>
    <p>
      In the database seperate table are created for storing the different information of the user. For example: To store the registration detation seperate table has been created which can be later used to sign in to the website and sepereate studentinfo table has been created where all the information related to the student has been stored.
      <img src="./assets/doc/tables.png" class="container mx-3 my-4" height='200' alt="" />
      <strong><u class="text-success">studentinfo:</u></strong> This table is for storing the students details in the college. HEre we can store information such as students number, address, name, facuty, Guardians name and so on. <br>
      <strong><u class="text-success">users:</u></strong> This table is for storing the users login details. By defualt i have set only one admin user. But this can be modified going to the data base and setting the <i class="text-info">Admin_status</i> from 0 to 1. Only the admin user can perform the full CRUD operation. Other users are not granted this feature.
    </p>
    <h4><u>Internal Feature</u></h4>
    <p>
      <img src="./assets/doc/internal.png" class="container mx-3 my-4" height='600' alt="" />
      <strong>1</strong>:Navigation bar <br>
      <strong>2</strong>: Create New data <br>
      <strong>3</strong>: Search Box <br>
      <strong>4</strong>: View table <br>
      <strong>5</strong>: Update buttons<br>
      <strong>6</strong>: Delete buttons<br>
      <strong>7</strong>: Advance information <br>
      <strong>8</strong>: User status and logout <br>
    </p>
  </header>
  <div class="section1 ms-5">
    <h2>Requirements</h2>
    <ul>
      <li>Xampp installation</li>
      <li>Any updated browser</li>
      <li>Basic knowledge of PHPmyadmin panel</li>
    </ul>

    <h2>Features</h2>
    <ul>
      <li>Login panel</li>
      <li>Account registration</li>
      <li>CRUD operation with database tables</li>
      <li>Abstraction between Admin and Guest account</li>
      <li>Passwords stored in hashed form</li>
      <li>File uploading(For users profile)</li>
    </ul>


    <h2>Libraries Used</h2>
    <ul>
      <li>Box icons</li>
      <li>Fontawsome</li>
      <li>Bootstrap 4.0</li>
      <!-- <li>Google fonts</li> -->
    </ul>

    <h2>Coding languages Used</h2>
    <ul>
      <li><i>Front End</i>
        <ul>
          <li>HTML</li>
          <li>CSS</li>
          <li>JS with AJAX</li>
        </ul>
      </li>
      <li><i>Backend</i>
        <ul>
          <li>MYSQL</li>
          <li>PHP</li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="section3 ">

  </div>


  <div class="next d-flex mb-4 justify-content-around">
    <a href="./login.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Move Ahead
    </a>
  </div>
  <footer class="d-flex justify-content-around text-center pt-2">
    <h6 class="mx-4">@copyright 2022 <br>
      Pabin Bahadur Dhami</h6>
  </footer>
</body>

</html>