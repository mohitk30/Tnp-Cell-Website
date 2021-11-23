<script>

</script>


<?php
 
//  $dataPoints =  [
//   ["label"=>"Oxygen", "symbol" => "O","y"=>40],
//   ["label"=>"Silicon", "symbol" => "Si","y"=>50],
//   ["label"=>"Aluminium", "symbol" => "Al","y"=>25],
// ];
// $dataPoints =  [
//   ["label"=>"Oxygen","y"=>40] 
// ];
 
 

$query="select count(*) as scount, sbranch from student join sp_info on spenroll=senrollno where spplaceyear='".$yeardata."' and spplacectc >'0' group by  sbranch;";
//echo $query;
$result_setad=mysqli_query($dbs,$query);
//$counttadmn=mysqli_num_rows($result_setad);
 // $dataPoints=mysqli_fetch_assoc($result_setad);
//$dataPoints=mysqli_fetch_object($result_setad);
 
//echo json_encode($allarr);
// $dataPoints= json_encode($dataPoints1);
// $plccc= array();
// $branchname= array();
// $branchname=[];
// $plccc=[];
// while($row = mysqli_fetch_assoc($result_setad)){
//   $branchname['label'] = $row['sbranch'];
//   $plccc[] = $row1['scount'];
// }

 

// $jsonArray = array();
// //check if there is any data returned by the SQL Query
// if ($counttadmn > 0) {
//   //Converting the results into an associative array
//   while($row = mysqli_fetch_assoc($result_setad)) {
//     $jsonArrayItem = array();
//     $jsonArrayItem['label'] = $row['sbranch'];
//     $jsonArrayItem['value'] = $row['scount'];
//     //append the above created object into the main array.
//     array_push($jsonArray, $jsonArrayItem);
//   }
// }
// $data = array();

// for ($x = 0; $x < mysqli_num_rows($result_setad); $x++) {
//   $data[$x] = mysqli_fetch_assoc($result_setad);
// };


 
  // echo json_encode($branchname);
  // echo json_encode($plccc);

  // $dat=array_combine($branchname,$plccc);
   // echo json_encode($data);

  //  $dataPoints = array( 
  //    $branchname[],
  //    $plccc[]
   
  //  );
  // echo $dataPoints;
  //header('Content-Type: application/json');
  
  $result = array();

  while($get = mysqli_fetch_array($result_setad))
  {
      array_push($result,array('Branch' =>$get['sbranch'], 'Student_placed' =>$get['scount']));
  }

   // echo json_encode($dataPoints);
  // echo "<br>";
  // print_r($dataPoints);
 ?>
 
 
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
var chart = root.container.children.push(am5percent.PieChart.new(root, {
  radius: am5.percent(90),
  innerRadius: am5.percent(50),
  layout: root.horizontalLayout
}));

// Create series
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
var series = chart.series.push(am5percent.PieSeries.new(root, {
  name: "Series",
  valueField: "Student_placed",
  categoryField: "Branch"
}));

// Set data
// https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
// series.data.setAll([{
//   country: "Lithuania",
//   sales: 501.9
// }, {
//   country: "Czechia",
//   sales: 301.9
// } ]);


series.data.setAll(<?php echo json_encode($result);?>);



// Disabling labels and ticks
series.labels.template.set("visible", false);
series.ticks.template.set("visible", false);

// Adding gradients
series.slices.template.set("strokeOpacity", 0);
series.slices.template.set("fillGradient", am5.RadialGradient.new(root, {
  stops: [{
    brighten: -0.8
  }, {
    brighten: -0.8
  }, {
    brighten: -0.5
  }, {
    brighten: 0
  }, {
    brighten: -0.5
  }]
}));

// Create legend
// https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
var legend = chart.children.push(am5.Legend.new(root, {
  centerY: am5.percent(50),
  y: am5.percent(50),
  marginTop: 15,
  marginBottom: 15,
  layout: root.verticalLayout
}));

legend.data.setAll(series.dataItems);


// Play initial series animation
// https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
series.appear(1000, 100);

}); // end am5.ready()
</script>

<!-- HTML -->


<div style="width:100%;height:400px;text-align:center;margin-top:50px">
		<h2><strong>%Student placed in different Branch's</strong> </h2>
   
    <div id="chartdiv" style="height: 100%; width: 75%;margin-top:20px;" class="mx-auto" ></div>
    </div>      