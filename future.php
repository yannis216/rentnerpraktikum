<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rentnerpraktikum</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="rentnerstyle.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <div class="row topspace">
      </div>
      <div class="row">
      <div class="col-md-8 col-md-offset-2 formcontainer">
        <h1>Rentnerpraktikum</h1>
        <form class="" action="contact_saver.php" method="post">
          <div class="col-md-2 col-md-offset-3">
            <label for="vname">Vorname:</label>
            </br></br>
            <label for="email">Email-Adresse:</label>
            </br></br>
            <label for="comment">Sie haben Anmerkungen?</label>
            </br></br>
          </div>
          <div class="col-md-4">
            <input class="textbox" type="text" name="vname" value="<?php
              // echo htmlspecialchars($_POST["vname0"]);
              ?>" required>
            </br></br>
            <input class="textbox" type="email" name="email" value="" required>
            </br></br>
            <textarea class="textbox" name="comment" cols="50" rows="3"></textarea>
            </br></br>
            <input style="width: 20px;" type="checkbox" name="confirm" value="" required>
            <label for="confirm">Ja, ich möchte mit Informationen zu Rentnerpraktika </br> versorgt werden (Bitte ankreuzen)</label>
            </br></br>
            <input class="submitbutton" type="submit" name="save" value="Speichern">
            </br></br>
          </div>
          </br>
        </form>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
