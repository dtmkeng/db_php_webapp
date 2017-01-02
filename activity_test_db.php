<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
	<title>HIGH SCHOOL DXD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <style >
  	tr{
    border-bottom: 1px solid #d6d6d6;
		}
  </style>
</head>

<body>
<?php
$conn =mysql_connect("localhost","root","root") or die(mysql_error());
mysql_select_db("student_mysql");
mysql_query("SET NAMES tis620;");
?>
 
<div data-role="page" id="pageAcitivity">

			<!--Panel--> 
		 <div data-role="panel" id="mypanel" data-display="reveal" >
					<ul data-role="listview">
					 <li><a href="#index">หน้าหลัก</a></li>
					 <li><a href="#pageAcitivity">คะเเนนความประพฤติ</a></li>
					 <li><a href="#pageGpa">ผลการเรียน</a></li>
					 <li><a href="#phoneNum">เบอร์โทรติดคุณครู</a></li>
					</ul>
		 </div>

         <div data-role="header">
					 <h3>คะเเนนความประพฤติ</h3>
          <a href="#mypanel" class="ui-bit-left" data-icon="grid">Menu</a>
				 </div>
     	<div data-role="content">
				<div class="ui-field-contain">
					<label for="select-native-fc">ปีการศึกษาที่</label>
					<select class="select-native-fc" id="select-native-fc">
						<option value="one">ปีการศึกษาที่ 1</option>
						<option value="two">ปีการศึกษาที่ 2</option>
					</select>
				</div>
				<table data-role="table" class="ui-responsive" >
							<thead>
							 <tr>
								 <th>ลำดับที่</th>
								 <th>รายการทำผิดระเบียบ</th>
								 <th>คะเเนนที่ถูกหัก</th>
								 <th>คะเเนนรวม</th>
							 </tr>
							</thead>
							<tbody>
							  
                              <?php 
							   
							  $result = mysql_query("SELECT *FROM gpa_table;");
							  
							  while(list($cont,$list,$edit,$total)=mysql_fetch_row($result)){
								 
							 echo"<tr>" ; 
							echo "<td>$cont</b</td> 
								 <td>$list</br></td>
								 <td>$edit</br></td>
								 <td>$total</br></td>
								 ";
								 
							echo "</tr>";
							  }
								 ?>
                                 
							 
							</tbody>
						 </table>
         <div data-role="footer"></div>
	  </div>
</body>
</html>