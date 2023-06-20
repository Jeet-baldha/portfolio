<!DOCTYPE html>

<html>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>

$(document).ready(function(){

  $("button").click(function(){

    $("#div1").load("test.txt");

  });

});

</script>

</head>

<body>


<div id="div1"><h2>Let try jQuery to use AJAX and try to Change This Text</h2></div>


<button>Get Some Content</button>


</body>

</html>