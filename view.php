<?php
$jx = json_encode($name);
$jy = json_encode($date_1);
$jz = json_encode($date_2);

?>

<canvas id="myLineChart"></canvas>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

<script>
let x = JSON.parse('<?php echo $jx; ?>');
let y = JSON.parse('<?php echo $jy; ?>');
let z = JSON.parse('<?php echo $jz; ?>');
console.log(x);

//以下，グラフを表示
var ctx = document.getElementById("myLineChart");
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: x,
      datasets: [
        {
          label: 'Yの値',
          data: y,
          borderColor: "rgba(255,0,0,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: 'Zの値',
          data: z,
          borderColor: "rgba(0,0,255,1)",
          backgroundColor: "rgba(0,0,0,0)"
        }
      ],
    },
    options: {
      title: {
        display: true,
        text: '何かのグラフ'
      },
      scales: {
        yAxes: [{
          ticks: {
            suggestedMax: 40,
            suggestedMin: 0,
            stepSize: 10,
            callback: function(value, index, values){
              return  value +  'cm'
            }
          }
        }]
      },
    }
  });

</script>