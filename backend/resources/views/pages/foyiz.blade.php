<!DOCTYPE html>
<html>

<head>
    <title>Foizni hisoblash sahifasi</title>
    <meta charset="UTF-8">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        input[type="number"] {
            width: 280px;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }
    </style>

</head>

<body>
    <div style="display: block">
        <input type="number" id="son1" placeholder="Son 1">
        <input type="number" id="son2" placeholder="Son 2">
        <button onclick="hisoblash()">Hisoblash</button>
        <p id="natija"></p>

        <script>
            function hisoblash() {
                let son1 = document.getElementById("son1").value;
                let son2 = document.getElementById("son2").value;
                let foiz = (son1 / son2) * 100;
                let natija = Math.round(foiz);
                let qolgan = 100 - natija;
                document.getElementById("natija").innerHTML = natija + "% qolgan qismi " + qolgan + "% ni tashkil qiladi.";
                // document.getElementById("natija").innerHTML = natija.toString().padStart(2, '0') + "%";
            }
        </script>

    </div>
    {{-- <br>
    <div>
        <input type="number" id="son3" placeholder="Sonni kiriting">
        <button onclick="hisoblash2()">Hisoblash</button>
        <p id="natija2"></p>

        <script>
            function hisoblash2() {
                let x = 360;
                let son = document.getElementById("son3").value;
                let foiz = (son / x) * 100;
                let gradus = son * (100 / foiz);
                document.getElementById("natija2").innerHTML = son + " son3 " + foiz.toFixed(2) + "% ni tashkil etadi va " +
                    gradus.toFixed(2) + " gradusga teng.";
            }
        </script>
    </div> --}}
    <br>
    <div>
        <input type="number" id="foiz" placeholder="Foyizni kiriting">
        <button onclick="gradusniTop()">Gradusni</button>
        <p id="natija3"></p>

        <script>
            function gradusniTop() {
                let foiz = document.getElementById("foiz").value;
                let gradus = (foiz / 100) * 360;
                let natija = Math.round(gradus);

                if(natija >= 360){
                    let ulushi = natija - 360;
                    document.getElementById("natija3").innerHTML = "Natija: <b style='color:red'>" + natija.toString() +"°</b> Gradus bo'lib <b style='color:blue'>" + ulushi + "°</b> Gradus ulush bo'ladi";
                }else{
                    let ulushi = 360 - natija;
                    document.getElementById("natija3").innerHTML = "Natija: <b style='color:red'>" + natija.toString() +"°</b> Gradus bo'lib <b style='color:blue'>" + ulushi + "°</b> Gradus ulush bo'ladi";
                }

                
            }
        </script>
    </div>


</body>

</html>
