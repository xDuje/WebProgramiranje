<?php

$data_rand = "";
$data_rand2 = "";
$data_rand3 = "";
$data_rand4 = "";
$data_rand5 = "";

for($i = 0;$i < 7;$i++){
    $r1 = rand(0,50);
    $r2 = rand(0,50);
    $r3 = rand(0,50);
    $r4 = rand(0,50);
    $r5 = rand(0,50);
    if($i == 6) {
        $data_rand.= $r1;
        $data_rand2.= $r2;
        $data_rand3.= $r3;
        $data_rand4.= $r4;
        $data_rand5.= $r5;
    }
    else {
        $data_rand.=$r1.=',';
        $data_rand2.=$r2.=',';
        $data_rand3.=$r3.=',';
        $data_rand4.=$r4.=',';
        $data_rand5.=$r5.=',';
    }
}

//test 
Print "Test<br>";
var_dump($data_rand);
print "<br>";
var_dump($data_rand2);
print "<br>";
var_dump($data_rand3);
print "<br>";
var_dump($data_rand4);
print "<br>";
var_dump($data_rand5);
print "<br><br>";





?>



<html>
  <head>
    <script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
  </head>
  <body>
    <canvas id="canvas" style="max-width: 600px"></canvas>
    <script>


      var config = {
        type: "line",
        data: {
          labels: ["January", "February", "March", "April", "May", "June"],
          datasets: [
            {
              label: "My First dataset",
              borderColor: "red",
              backgroundColor: "red",
              data: [<?=$data_rand?>],
              fill: false,
            },
            {
              label: "My Second dataset",
              fill: false,
              borderColor: "blue",
              backgroundColor: "blue",
              data: [<?=$data_rand2?>],
            },
            {
              label: "My Third dataset",
              fill: false,
              borderColor: "green",
              backgroundColor: "green",
              data: [<?=$data_rand3?>],
            },
            {
              label: "My Fourth dataset",
              fill: false,
              borderColor: "violet",
              backgroundColor: "violet",
              data: [<?=$data_rand4?>],
            },
            {
              label: "My Fifth dataset",
              fill: false,
              borderColor: "aqua",
              backgroundColor: "aqua",
              data: [<?=$data_rand5?>],
            },
          ],
        },
      };
      window.onload = function () {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myLine = new Chart(ctx, config);
      };
    </script>
  </body>
</html>