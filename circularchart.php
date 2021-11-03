 
<?php
 
 $dataPoints =  [
  ["label"=>"Oxygen", "symbol" => "O","y"=>40],
  ["label"=>"Silicon", "symbol" => "Si","y"=>50],
  ["label"=>"Aluminium", "symbol" => "Al","y"=>25],
];
  
 ?>
 
 <script>
 window.onload = function() {
  
 var chart = new CanvasJS.Chart("chartContainer1", {
   theme: "light2",
   animationEnabled: true,
   title: {
     text: "Student placed in different Branch's"
   },
   data: [{
     type: "doughnut",
     indexLabel: "{label} - {y}",
    // yValueFormatString: "#,##0.0\"%\"",
    yValueFormatString: "#,##0\"\"",
     showInLegend: true,
     legendText: "{label} : {y}",
     dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
   }]
 });
 chart.render();
  
 }
 </script>
  
 
 <div id="chartContainer1" style="height: 370px; width: 50%;margin-top:20px;"></div>
 
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 
  
