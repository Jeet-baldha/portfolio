<!DOCTYPE html>

<html>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>

$(document).ready(function(){

  $("button").click(function(){

    $.get("demo.php", function(data, status){

      $('#changehere').html(data);

      alert(status);

    });

  });

});

</script>

</head>

<body>

<p id="changehere">This line is going to be change. . </p>

<button>Send an HTTP GET request to PHP page</button>


</body>

</html>