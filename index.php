<?php
  $bg = array(  'envoyez.png' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VTF</title>


<!--CSS bootstrap -->


<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i" rel="stylesheet">

<link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet"/>
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body>
<h1>Saint J&an Porte La Tine</h1>

    <form method="post" action="action.php" enctype="multipart/form-data" name="apply" id="apply">



          <div class="form-group">

        <label for="lastname">Lastname :</label>
        <input type="text" name="lastname" class="form-control" >
        <br/>


        <label for="firstname">Firstname :</label>
        <input type="text" name="firstname" class="form-control">
        <br/>

        <label for="country">Country :</label>
        <input type="text" name="country" class="form-control">


        </br>
        <label for="city">City :</label>
        <input type="text" name="city" class="form-control" >

        </br>
        <label for="company">Company :</label>
        <input type="text" name="company" class="form-control" >

  </br>
        <label for="email">E-mail :</label>
        <input type="text" name="email" class="form-control" aria-describedby="emailHelp">
  </br>
        <label for="ampersand">Name your ampersand :</label>
        <input type="text" name="ampersand" class="form-control">


  <p>2 mo max </br>Only SVG allowed !</p>



        <label for="mon_fichier">Your ampersand :</label>  <br/>
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152" /><br/>
        <input type="file" name="file1" id="file1" />


</br>

       <input type="submit" name="submit" value="Envoyer" />

    </div>
  </form>

    <!-- jQuery, local ou fourni par le cdn jquery -->
    <script src="js/jquery.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->

    <!-- jQuery Ui -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- uplaod -->

    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.js"></script>
    <script src="js/upload.js"></script>

</body>

</html>
