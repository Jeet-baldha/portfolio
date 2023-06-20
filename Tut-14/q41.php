<?php
$con=mysqli_connect("localhost","root","","web");
?>

<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">
        </script>
        <script>
            function myfun(datavalue){
                $.ajax({
                    url:'q42.php',
                    type:'POST',
                    data:{datapost:datavalue},
                    success:function(result){
                        $('#dataget').html(result);
                    }
                });
            }
        </script>
    </head>
    <body>
        <center>
            <form>
                Get Data from Database
                <table>
                    <tr>
                        <td>Course:</td>
                        <td>
                            <select onchange="myfun(this.value)">
                            <option>Select Any Option</option>
                            <?php
                            $q="select * from course";
                            $row=mysqli_query($con,$q);
                            while($result=mysqli_fetch_array($row)) {
                            ?>
                            <option value="<?php echo $result['cid']?>">
                            <?php echo $result['name']?></option>
                            <?php } ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Years:</td>
                        <td>
                            <select id="dataget">
                                <option>Select any one</option>
                                
                            </select>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>