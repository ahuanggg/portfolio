<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <title>New York City</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        // Set trigger and container variables
        var trigger = $('.topnav a'),
            container = $('#content');
        
        // Fire on click
        trigger.on('click', function(){
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data('target');      
          
          // Load target page into container
          container.load(target + '.html');
          
          // Stop normal link behavior
          return false;
        });
      });

      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }

      

    </script>
</head>
  <body>
    
        <div class="topnav" id="myTopnav">
              <a href="#" data-target="home"><img class="logo" title="logo" alt="logo" src='images/logo.png'></a>
              <a id="home" href="#" data-target="home"> Home </a>
              <a id="food" href="#" data-target="food"> Food </a>
              <a id="activities" href="#" data-target="activities"> Activities </a>
              <a id="shopping" href="#" data-target="shopping"> Shopping </a>
              <a id="events" href="#" data-target="events"> Events </a>
              <a id="donot" href="#" data-target="donot"> Not to do </a>
              <a id="form" href="#" data-target="form"> Survey </a>
              <a id="contact" href="#" data-target="contact"> Contact Me </a>
              <a id="resources" data-target="resources" href="#"> Resources </a>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()"> ≡ </a>
        </div>

        <div id="content">
          <?php include('home.html'); ?>
        </div>
            
        




  <footer>
        <p>
          <a href="http://jigsaw.w3.org/css-validator/check/referer">
              <img style="border:0;width:88px;height:31px"
                  src="http://jigsaw.w3.org/css-validator/images/vcss"
                  alt="Valid CSS!" />
          </a>

          <a href="#">
              <img style="border:0;width:88px;height:31px"
                  src="images/html.png"
                  alt="Valid CSS!" />
          </a>
      </p>  

        <?php 
            
            echo "<br>";
            echo "Content last changed: ".date("F d Y H:i:s.", filemtime("index.php"));
        ?>
    </p>
       

  </footer>


  </body>
  </html>

</body>

</html>