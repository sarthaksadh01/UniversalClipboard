<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universal Clipboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  </head>
  <body>

    <?php

    $data = get_data();
    if($data == "no_get"){

      echo'
          <div class="container">

            <div class="bg-white jumbotron jumbotron-fluid">

                <h1  class="text-success text-center display-4">Universal Clipboard</h1>
                


            </div>
            </div>';


    }

    else if($data == "empty")
    {
      $url = $_GET['url'];

        echo'
            <div class="container">

              <div class="bg-white jumbotron jumbotron-fluid">

                  <h1  class="text-success text-center display-4">Universal Clipboard</h1>


              </div>
              <form>

                  <div class="form-group">

                  <textarea placeholder="Type Here.." class="form-control" id="data" rows="12"></textarea>

                  </div>

                  <div class="form-group">

                  <input type = "hidden" id = "url" value = '.$url.'>
                  </div>

              </form>

              <div class="text-center">
                <button class="btn btn-primary">Copy Url</button>
                <p id ="save" style = "display:none;">Saved...</p>
              </div>

            </div>';



    }

    else{

      echo'
          <div class="container">

            <div class="bg-white jumbotron jumbotron-fluid">

                <h1  class="text-success text-center display-4">Universal Clipboard</h1>


            </div>
            <form>

                <div class="form-group">

                <textarea placeholder="Type Here.." class="form-control" id="data" rows="12">'.$data.'</textarea>

                </div>

            </form>



          </div>';


    }


     ?>


  <script src ="index.js" type="text/javascript"></script>

  </body>
</html>
