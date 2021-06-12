<html>
  <head>
    <title>DevOps Web App</title>
  <?php
    function infun1()
    {
      echo "our test function on button click is working";
    }
    if(array_key_exists('about',$_POST))
    {
      infun1();
    }
  </head>
    <body>
    <input type=button" name="about" id ="about" value="About" />
    <br/>
    </body>
    </html>
  
