<!DOCTYPE html>
<html>
<head>
	<title>Kartu Ujian Generator</title>
</head>
<body>
	<form action="output/output.php" method="post">
		<table id="myTable">
			<tr>
				<td>NIM<td>
				<td><input type="number" name="nim"/></td>
			</tr>
			<tr>
				<td>NAMA<td>
				<td><input type="text" name="nama"/></td>
			</tr>
			<tr>
				<td>KELAS<td>
				<td><input type="text" name="classOfExam"/></td>
			</tr>
			<tr>
				<td>PERIODE<td>
				<td><input type="text" name="periodOfExam"/></td>
			</tr>
			<tr>
				<td>MODUL<td>
				<td><input type="text" name="moduleOfExam"/></td>
			</tr>
			<tr>
				<td>TANGGAL UJIAN<td>
				<td><input type="date" name="dateOfExam"/></td>
			</tr>
			<tr>
				<td>RUANG UJIAN<td>
				<td><input type="text" name="areaOfExam"/></td>
			</tr>
			<tr>
				<td>MAPEL 1<td>
				<td><input type="text" name="lectureOfExam[]"/></td>
			</tr>
			<tr>
				<td>MAPEL 2<td>
				<td><input type="text" name="lectureOfExam[]"/></td>
			</tr>
			<tr>
				<td>WAKTU 1<td>
				<td><input type="text" name="timeOfExam[]"/></td>
			</tr>
			<tr>
				<td>WAKTU 2<td>
				<td><input type="text" name="timeOfExam[]"/></td>
			</tr>
			<tr>
				<td><td>
				<td><input type="submit" name="submit" value="submit"/></td>
			</tr>
		</table>
	</form>

<script src="js/jquery.js"></script>
<script>
	
	$(document).ready(function(){
		html = '<tr>'
		+ '<td>'
		for(count=1;count<=sumTable;count++){
			$('#myTable').append("<tr><td>MAPEL "+count+"</td><td><input type='text' name='lectureOfExam[]'/></td><tr><td>WAKTU "+count+"</td><td><input type='text' name='timeOfExam[]'/></td>");
		}
	});

</script>
</body>
</html>