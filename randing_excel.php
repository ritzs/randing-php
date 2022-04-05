<?php
include_once('./randing_sql.php');

$day = date("Ymd_H_i_s",time());

header( "Content-type: application/vnd.ms-excel" );
header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = 전보단_신청_리스트_".$day.".xls" );
header( "Content-Description: PHP4 Generated Data" );

$sql = "select * from request_randing";
$result = mysqli_query($conn, $sql);

// 테이블 상단 만들기
$EXCEL_STR = "
<table border='1'>
<tr>
	<th>번호</th>
	<th>이름</th>
	<th>구분</th>
	<th>연락처</th>
	<th>나이</th>
	<th>지역</th>
	<th>등록일</th>
</tr>";
 
for ($i=0; $row=mysqli_fetch_array($result); $i++) {
	switch ($row['rr_info_sort']) {
		case 'A' : $rr_info_sort = "보장분석"; break;
		case 'B' : $rr_info_sort = "리모델링"; break;
		case 'C' : $rr_info_sort = "신규가입"; break;
		default : $rr_info_sort = ""; break;
	}
	
   $EXCEL_STR .= "
   <tr>
       <td>".($i+1)."</td>
       <td>".$row['rr_info_name']."</td>
       <td>".$rr_info_sort."</td>
       <td>".$row['rr_info_phone']."</td>
       <td>".$row['rr_info_age']."</td>
       <td>".$row['rr_info_area']."</td>
       <td>".$row['rr_date']."</td>
   </tr>
   ";
}
 
$EXCEL_STR .= "</table>";
 
echo "<meta content=\"application/vnd.ms-excel; charset=UTF-8\" name=\"Content-type\"> ";
echo $EXCEL_STR;
?>