<?php
offonsreg();
 function offonsreg(){
                       require('../connection.php');
                       $dbs=db_connect();
                       
                        $query="SELECT onoff from func_onoff where func_name='studentr'";
                        $result_set=mysqli_query($dbs,$query);
                        $on_off=mysqli_fetch_assoc($result_set);
                        //$countr=mysqli_num_rows($result_set);
                        // echo $on_off['onoff'];
                      if($on_off['onoff']=="on") {
                         $query="UPDATE func_onoff set onoff='off' where func_name='studentr'";
                        $result_set=mysqli_query($dbs,$query);
                       
                    //     //echo $dir['NAME'];
                          
                        }else{
                            $query="UPDATE func_onoff set onoff='on' where func_name='studentr'";
                          $result_set=mysqli_query($dbs,$query);
                         
                }

 }
?>