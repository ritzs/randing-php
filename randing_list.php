
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
	<meta http-equiv="Pragma" content="no-cache">
	<meta HTTP-EQUIV="Expires" CONTENT="-1">
	<meta http-equiv="cache-control" content="no-cache" />
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./css/style.css?210307"><!--공통 CSS-->
		<title>전보단</title>
		<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
	</head>
	<body>
		<?php
			include_once('./randing_sql.php');

			$sql = "select COUNT(*) AS cnt from request_randing";
			$result = mysqli_query($conn, $sql);
			$cnt = mysqli_fetch_row($result);
		?>
		<div class="list_all_area">
			<div class="randing_list_title">
				<a>전보단 신청 리스트</a>
			</div>
			<div class="randing_list_btn">
				<button type="button" onclick="location.href='./randing_excel.php'">엑셀다운로드</button>
			</div>
			<div class="randing_list_view">
				<table class="basic_table">
					<tr>
						<th>번호</th>
						<th>이름</th>
						<th>구분</th>
						<th>연락처</th>
						<th>나이</th>
						<th>지역</th>
						<th>등록일</th>
					</tr>
					<?php
						$sql = "select * from request_randing";
						$result = mysqli_query($conn, $sql);
						
						for ($i=0; $row=mysqli_fetch_array($result); $i++) {
							$rr_asking_txt = "";
							switch ($row['rr_info_sort']) {
								case 'A' : $rr_info_sort = "보장분석"; break;
								case 'B' : $rr_info_sort = "리모델링"; break;
								case 'C' : $rr_info_sort = "신규가입"; break;
								default : $rr_info_sort = ""; break;
							}
							$rr_asking = explode('|', $row['rr_asking']);
							$rr_asking_txt .= "Q1. 당신(가족포함)은 실손 보험이 있습니까?";
							switch ($rr_asking[0]) {
								case 'Y' : $rr_asking_txt .= " [답 : 있다]\n\n"; break;
								case 'N' : $rr_asking_txt .= " [답 : 없다]\n\n"; break;
								default : $rr_asking_txt .= " [답 : 없음]\n\n"; break;
							}

							$rr_asking_txt .= "Q2. 당신의 보험은 치과 진료시 전액 보상 받습니까?";
							switch ($rr_asking[1]) {
								case 'Y' : $rr_asking_txt .= " [답 : 그렇다]\n\n"; break;
								case 'N' : $rr_asking_txt .= " [답 : 아니다]\n\n"; break;
								case 'D' : $rr_asking_txt .= " [답 : 모른다]\n\n"; break;
								default : $rr_asking_txt .= " [답 : 없음]\n\n"; break;
							}

							$rr_asking_txt .= "Q3. 당신의 보험은 한방 병원 통원 시 전액 보상 받습니까?";
							switch ($rr_asking[2]) {
								case 'Y' : $rr_asking_txt .= " [답 : 그렇다]\n\n"; break;
								case 'N' : $rr_asking_txt .= " [답 : 아니다]\n\n"; break;
								case 'D' : $rr_asking_txt .= " [답 : 모른다]\n\n"; break;
								default : $rr_asking_txt .= " [답 : 없음]\n\n"; break;
							}

							$rr_asking_txt .= "Q4. 당신의 보험은 자동차 사고 시 실손 보험에서 중복 보상 받습니까?";
							switch ($rr_asking[3]) {
								case 'Y' : $rr_asking_txt .= " [답 : 그렇다]\n\n"; break;
								case 'N' : $rr_asking_txt .= " [답 : 아니다]\n\n"; break;
								case 'D' : $rr_asking_txt .= " [답 : 모른다]\n\n"; break;
								default : $rr_asking_txt .= " [답 : 없음]\n\n"; break;
							}

							$rr_asking_txt .= "Q5. 보험금 청구해 보신 경험이 있습니까?";
							switch ($rr_asking[4]) {
								case 'Y' : $rr_asking_txt .= " [답 : 그렇다]\n\n"; break;
								case 'N' : $rr_asking_txt .= " [답 : 아니다]\n\n"; break;
								case 'D' : $rr_asking_txt .= " [답 : 모른다]\n\n"; break;
								default : $rr_asking_txt .= " [답 : 없음]\n\n"; break;
							}

							$rr_asking_txt .= "Q6. 건강 검진 중 용종(위/대장)이 발견되어 제거 시 100만원 이상 받습니까?";
							switch ($rr_asking[5]) {
								case 'Y' : $rr_asking_txt .= " [답 : 그렇다]\n\n"; break;
								case 'N' : $rr_asking_txt .= " [답 : 아니다]\n\n"; break;
								case 'D' : $rr_asking_txt .= " [답 : 모른다]\n\n"; break;
								default : $rr_asking_txt .= " [답 : 없음]\n\n"; break;
							}

							$rr_asking_txt .= "Q7. 구체적으로 “왜” 지급 되었고 “얼마가” 지급 되었는지 안내 받으셨나요?";
							switch ($rr_asking[6]) {
								case 'Y' : $rr_asking_txt .= " [답 : 그렇다]\n\n"; break;
								case 'N' : $rr_asking_txt .= " [답 : 아니다]\n\n"; break;
								case 'D' : $rr_asking_txt .= " [답 : 모른다]\n\n"; break;
								default : $rr_asking_txt .= " [답 : 없음]\n\n"; break;
							}
					?>
							<tr>
								<td><?=$cnt[0] - $i?></td>
								<td><a title="<?=$rr_asking_txt?>"><?=$row['rr_info_name']?></a></td>
								<td><?=$rr_info_sort?></td>
								<td><?=$row['rr_info_phone']?></td>
								<td><?=$row['rr_info_age']?></td>
								<td><?=$row['rr_info_area']?></td>
								<td><?=$row['rr_date']?></td>
							</tr>
					<?php
						}
						if ($i == 0){
					?>
							<tr>
								<td colspan="13">자료가 없습니다.</td>
							</tr>
					<?php } ?>
				</table>
			</div>
		</div>

		<script>
		</script>
	</body>
</html>