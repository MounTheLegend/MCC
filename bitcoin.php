<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<head>
  <title>Minetopia Bitcoin Chart</title>
  <link rel="icon" type="image/png" href="bitcoin.png">
  
  <style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
    </style>
</head>
<body>

  <a href="bitcoin.php" target="_self">Bitcoin</a>
  <a href="ethereum.php" target="_self">Ethereum</a>
  <a href="maker.php" target="_self">Maker</a>
  <a href="bitcoin-cash.php" target="_self">Bitcoin-cash</a>
  <a href="litecoin.php" target="_self">Litecoin</a>
  <a href="dash.php" target="_self">Dash</a>

<canvas id="myChart" style="width:100%;max-width:1800px"></canvas>

<script>
const xValues = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35];
const yValues = [26133,26138,26093,26076,26039,26023,26041,26018,26041,26033,26007,25968,25979,25893,25922,25944,25839,25847,25730,25712,25656,25671,25695,25661,25641,25643,25576,25652,25616,25662,25733];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 25500, max:26500}}],
    }
  }
});
</script>

</body>
</html>


