<?php

/**
 * Created by PhpStorm.
 * User: Seamy
 * Date: 5/17/2016
 * Time: 5:42 PM
 */
include 'celebVariables.php';
include 'celebValidation.php';


$celebVariable = new celebsClass();
$celebValidation = new celebValidation();



//If the requested method is post
if ($celebValidation->validate() == true) :


//Get required user input variables
    $name = (isset($_POST['name']) ? $_POST['name'] : null);
    $country = (isset($_POST['continent']) ? $_POST['continent'] : null);
    $age =  (isset($_POST['age']) ? $_POST['age'] : null);

    //Determine the users celebrity match
    $foundCeleb = $celebVariable->findCeleb($age, $country);
    $celebImage = $foundCeleb[3];
    $celebTagline = $foundCeleb[2];

    ?>
    
    <html>
    <head>
    <link rel="stylesheet" href="celebsCss.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>

    <body id="result-body">

    <div class="col-md-4 col-md-offset-4 content-text">
    <h1>Congrats <?php echo $name?></h1>

    <h2 class="content-text">Your celebrity dinner date is : <?php echo $foundCeleb[1]?></h2>
    <br>
    <img style="max-height: 100%; max-width: 100%" src=<?php echo $celebImage?>>

    <br>
    <h3 class="content-text"><?php echo $celebTagline?></h3>

        <a href="index.html" class="btn btn-info" role="button">Wanna take the test again?</a>
    </div>


    </body>


    </html>




    <?php

else:


    header('location: index.html');


endif ;

?>