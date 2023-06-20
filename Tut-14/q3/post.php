<!DOCTYPE html>

<html>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>

$(document).ready(function(){

  $("button").click(function(){

    $.post("demopost.php",

    {

      name: "Mr.Sachin Tendulkar",

      city: "Mumbai"

    },

    function(data,status){

      $('#changehere').html(data);

    });

  });

});

</script>

</head>

<body>

  <p id="changehere">This line is going to be change. . </p>

<button>Send an HTTP POST request to PHP page</button>

</body>

</html>