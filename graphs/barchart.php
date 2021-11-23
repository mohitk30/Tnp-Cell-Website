<?php
//$con  = mysqli_connect("localhost","root","","salesdb");
 //if (!$con) {
  //   # code...
  //  echo "Problem in database connection! Contact administrator!" . mysqli_error();
 //}else{
    //     $sql ="SELECT * FROM tblsales";
     //    $result = mysqli_query($con,$sql);
         $chart_data="";
//          while ($row = mysqli_fetch_array($result)) { 
 
//             $productname[]  = $row['Product']  ;
//             $sales[] = $row['TotalSales'];
//         }
 
 
//  }

 
require_once('connection.php');
$dbs=db_connect();
 
 $query="SELECT branch FROM placement";
  $result_set=mysqli_query($dbs,$query);
 //$subject=mysqli_fetch_array($result_set);
 //$countr=mysqli_num_rows($result_set);
//  $result = mysqli_query($db, $query);

// $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
// echo json_encode($json );

//  while($row = mysqli_fetch_assoc($result_set)){
//     //$branchname[] = $row['branch'];
// }
 //echo json_encode($json);

 $query="select avg(spplacectc) as avgctc from sp_info join student on spenroll=senrollno where spplaceyear='".$yeardata."' and spplacectc >'0'  group by  sbranch ORDER BY sbranch ASC;";
 $result_set=mysqli_query($dbs,$query);
 while($row = mysqli_fetch_assoc($result_set)){
   $avgpack[] = $row['avgctc'];
}
  
 
       $productname=['CSE','ECE','EEE' ]  ;
            // $sales=['12','20','30' ] ;
            
           
 
?>
 
     
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    
     
        <div style="width:75%;height:400px;text-align:center;margin-top:150px" class="mx-auto  " >
		<h2><strong>Average Package in Lakh</strong> </h2>
            
            <canvas  id="chartjs_bar" style="width:75%;"   ></canvas> 
        </div>    
     
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
					 
						 
						 
                    data: {
                        labels:<?php echo json_encode( $productname); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#05445E",
                                "#116530",
                                "#198754" 
                                
                                 
                            ],
                            data:<?php echo json_encode($avgpack); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 48,
                        }
                    },
 
 
                }
                });
    </script>
 