<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Change Image's Width</title>
    <style media="screen" type="text/css">
      img{
        display: block;
        width: 900px;
      }
      .div{
        width: 900px;
        height: 300px;
        border: 1px solid lightskyblue;
        position: relative;
        left: 200px;
        text-align: center;
        overflow: hidden;
      }
      input[type="range"]{
        position: relative;
        left: 200px;
      }
    </style>
  </head>
  <body>

    <div class="div">
      <img src="fiat.jpg" alt="image">
    </div>
    <input type="range" name="range" value="slide to change image's width" min="900" max="1500">
    <input type="button" name="button" value="Apply">

    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $('input[type="range"]').on('change', function(e){
          $('img').css("width", $(this).val());
        });
      });
    </script>
  </body>
</html>
