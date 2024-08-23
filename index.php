<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online</title>
    </head>
    <body>
        <style>*{margin:0;padding: 0;}</style>
        <div id="cont1" style="display:flex;flex-direction: row-reverse; background-image: url(bg-gtc.png);height: 100vh;background-repeat: no-repeat;background-size:cover;">
            <section id="rght1" style="height: 100vh;background-color: #fff;border-radius: 25px 0 0 0;width:450px;text-align: center;">
                <div onclick="ldtrd01()" id="trd01" style="margin-top: 40px;display: inline-block;width: 418px;height:517px;background-color:#fff;background-image:url(fm1.svg);background-repeat:no-repeat;background-size: cover;">

                </div>
            </section>
        </div>

        <style>
            @media only screen and (max-width: 500px){
                #rght1{
                    width:100%!important;
                    border-radius:0!important;
                }
                #trd01{
                    zoom:90%!important;
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
                xhttp.open("GET", "trdfm1.html", true);
                xhttp.send();
            }
        </script>
        <img src="fm2.svg" style="display:none;">
    </body>
</html>