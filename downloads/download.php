<?php

$cgpacomp= $_GET['cgp'];
$compname= $_GET['cname'];
function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}


/*******EDIT LINES 3-8*******/
$DB_Server = "localhost"; //MySQL Server    
$DB_Username = "tnpuser"; //MySQL Username     
$DB_Password = "password";  //MySQL Password     
$DB_DBName = "TNPSCHEMA";         //MySQL Database Name  
$DB_TBLName = "student"; //MySQL Table Name   
$filename = $compname."_Drive_eligible_Student_Data";         //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/    
//create MySQL connection   
$sql = "Select sfname as FirstName,slname as LastName,senrollno as Enroll_No,semail as Email,sccgpa as CGPA,scyear as YearOfStudy,srslink as Resume_Link from ".$DB_TBLName." join reg_student on rsenroll=senrollno where sccgpa >='".$cgpacomp."';";
$Connect = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName) or die("Couldn't connect to MySQL:<br>" );
//select database   
// $Db = mysqli_select_db($Connect,$DB_DBName) or die("Couldn't select database:<br>" );   
//execute query 
$result = mysqli_query($Connect,$sql) or die("Couldn't execute query:<br>".mysqli_error($Connect) );    
$file_ending = "xls";
//header info for browser
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields
for ($i = 0; $i < mysqli_num_fields($result); $i++) {
echo mysqli_field_name($result,$i) . "\t";
}
print("\n");    
//end of printing column names  
//start while loop to get data
    while($row = mysqli_fetch_row($result))
    {
        $schema_insert = "";
        for($j=0; $j<mysqli_num_fields($result);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$sep;
            elseif ($row[$j] != "")
                $schema_insert .= "$row[$j]".$sep;
            else
                $schema_insert .= "".$sep;
        }
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }   
?>