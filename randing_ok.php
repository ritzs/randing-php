<?php
	include_once('./randing_sql.php');

	$rr_asking = $_POST['ch_01'] . '|' . $_POST['ch_02'] . '|' . $_POST['ch_03'] . '|' . $_POST['ch_04'] . '|' . $_POST['ch_05'] . '|' . $_POST['ch_06'] . '|' . $_POST['ch_07'];
	$info_sort = $_POST['info_sort'];
	$info_name = $_POST['info_name'];
	$info_phone = $_POST['info_phone'];
	$info_age = $_POST['info_age'];
	$info_area = $_POST['info_area'];


	$sql = " insert into request_randing set
		rr_asking = '{$rr_asking}', 
		rr_info_sort = '{$info_sort}',
		rr_info_name = '{$info_name}',
		rr_info_phone = '{$info_phone}',
		rr_info_age = '{$info_age}',
		rr_info_area = '{$info_area}'";

	$alert_message = "등록완료!";

	$result = mysqli_query($conn, $sql);
	var_dump($result->num_rows);

?>

<script type='text/javascript'>
	alert('등록완료!');
	location.href='./randing.php';
</script>