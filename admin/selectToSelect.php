<?php
header('Content-Type: text/xml');
echo'<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
echo'<response>';

include('db_con.php');
$Division=$_GET['name'];
$resource=mysql_query("SELECT DISTINCT districtName FROM district_table WHERE  divisionName='$Division'");
if(mysql_num_rows($resource)>0)
{
	
	echo htmlentities("<select>");
	while($result=mysql_fetch_row($resource))
	{
		echo htmlentities("<option class='form-control' value='$result[0]'>$result[0]</option>");
		
	} 	
	echo htmlentities("</select>".'</br>'.'</br>'); 
}else
echo htmlentities("<option class='form-control' value=''><b style='color:red'>No Data</b></option>");

echo '</response>';
?>
