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
      <div class="col-md-8 col-md-offset-2 formcontainer">
        <form class="" action="index.html" method="post">
          <label for="vname">Vorname:
          <input class="textbox" type="text" name="vname" value="
            <?php
             echo htmlspecialchars($_POST["vname0"]);
            ?>
          " required> </label>
          </br>
          <label for="nname">Nachname:
          <input class="textbox" type="text" name="nname" value="" required> </label>
          </br>
          <label for="email">Email-Adresse:
          <input class="textbox" type="text" name="email" value="" required> </label>
          </br>
          <label for="vname">
          <input type="checkbox" name="confirm" value="" required> Ja, ich möchte mit Informationen zu Rentnerpraktika </br> versorgt werden (Bitte ankreuzen)</label>
          </br>
          <input class="submitbutton" type="submit" name="save" value="Speichern">
        </form>
      </div>


    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
