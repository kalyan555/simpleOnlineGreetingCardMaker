<!DOCTYPE html>
<html lang="en">
<!-- start of the head tag-->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Free online greeting card example by PHP(responsive)">
    <meta name="author" content="M.V.K.KALYAN REDDY">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
   <title>Greeting Cards</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
       
       <!-- User Defined CSS chnage accordingly -->
       <!-- start of the style tag-->
        <style type="text/css">
      html { 
          
          background: url("back.jpg") no-repeat center center fixed; 
          /* replace the image with the image of your wish to change the background wallpaper */
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          }
        
            body {
              
              background: none;
              
            }
            .container {
            
                text-align: center;
                align-content: center;
                color: white;
            
                margin-top: 40px;

        
            }
            
            .infoContainer {
                  padding-top: 10px;
                text-align: center;
                align-content: center;
                color: white;
                margin: auto;
                   width: 95%;
                  max-width: 550px;
                  position: relative;
            }

            .infoContainer  h2 { 
               font-size:250%;
               position: absolute; 
               top: 8%; 
               left: 0; 
               width: 100%; 
            }
            
            .container h1{
                font-size: 50px;
            }
            
            label {
                font-size: 25px;
            }
            
            input {
            
              margin: 10px 0;
             max-width: 400px;
              
          }
            
            .infoContainer img{
                width: 100%;
                height: auto;
            }
    
      </style>
      <!-- end of the style tag-->
    
    </head>
    <!-- end of the head tag-->

  <!-- start of the body tag-->
  <body>

      <!--Main portion where the text enterd will be shown-->
       <div class="infoContainer" > 
          <img src="flag.jpg"> <!--replace with image of ur wish,but make sure the dimensions are 800 x 800 as 
                                   the page is designed for the images of that resultion-->
            
          <h2> <?php
              $result="";
              if (isset($_GET['name'])) {
              $result =$_GET["name"];
              }
              echo $result;
             ?>
          </h2>
        </div>
        <!--End of the Main portion-->

        <!--Start of the form container-->
        <div class="container">

          <!--Form start-->
          <form>
            <fieldset class="form-group">
              <label >Enter Your Name</label>
              <center>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter here.." >
              </center> 
               <button type="submit" class="btn  btn-primary">Submit</button>
            </fieldset>
          </form>
          <!--Form end-->

        </div>
         <!--End of the form container-->
 
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
     <!-- Usage of bootstrap 4 is done in the porgram -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
 
  </body>
  <!--End of the Body-->
</html>
 <!--End of the HTML-->