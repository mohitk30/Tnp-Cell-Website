<script>

</script>


<?php
 
//  $dataPoints =  [
//   ["label"=>"Oxygen", "symbol" => "O","y"=>40],
//   ["label"=>"Silicon", "symbol" => "Si","y"=>50],
//   ["label"=>"Aluminium", "symbol" => "Al","y"=>25],
// ];
$dataPoints =  [
  ["label"=>"Oxygen","y"=>40] 
];
 
 

$query="select count(*) as scount, sbranch from student join sp_info on spenroll=senrollno where spplaceyear='".$yeardata."' and spplacectc >'0' group by  sbranch;";
$result_setad=mysqli_query($dbs,$query);
//$counttadmn=mysqli_num_rows($result_setad);
 //  $dataPoints=mysqli_fetch_assoc($result_setad);
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
  $result = array();

  while($get = mysqli_fetch_array($result_setad))
  {
      array_push($result,array('label' =>$get['sbranch'], 'value' =>$get['scount']));
  }

   echo json_encode($result);
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
     indexLabel: "{label} - {value}",
    // yValueFormatString: "#,##0.0\"%\"",
    yValueFormatString: "#,##0\"\"",
     showInLegend: true,
     legendText: "{label} : {value}",
     dataPoints:  <?php   echo json_encode($result, JSON_NUMERIC_CHECK); ?>
   }]
 });
 chart.render();
  //console.log(mydata);
 }
 </script>
  
 
 <div id="chartContainer1" style="height: 370px; width: 50%;margin-top:20px;"></div>
 
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 
  
 <?php //  echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>