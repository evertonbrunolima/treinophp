<?php 
    if (isset($_GET['i1'])) {
        $t1 = $_GET["i1"]; 
        $t2 = $_GET["i2"]; 
        $resposta = $t1."    ".$t2; 
        print $resposta; 
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        div{
            background-color: rgb(146, 92, 92);
            width: 100px;
            font-size: 10px;
            height: 100px;
            color: white;
        }
    </style>
</head>
<body>
    <input type="text" id="i1">
    <input type="text" id="i2">
    <button onclick="processa()">clique</button>
    <!-- <input type="submit" onclick="processa()"> -->
    <br>
    <br>
    <div id="resposta"></div>
    <script>
        function processa() {
        var i1 = document.getElementById("i1").value
    var i2 = document.getElementById("i2").value
    const xhttp = new XMLHttpRequest(); 
    xhttp.onload = function(){
        document.getElementById("resposta").innerHTML = this.responseText
    }
    xhttp.open("GET", "processa.php?i1="+i1+"&i2="+i2); 
    xhttp.send()
        }
    </script>
</body>
</html>
