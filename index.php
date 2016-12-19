<!DOCTYPE html>
<html>
<head>
	<title>Kartu Ujian Generator</title>
</head>
<body>
	<form action="output/output.php" method="get">
		<table>
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
				<td><input type="text" name="lecturerOfExam[]"/></td>
			</tr>
			<tr>
				<td>MAPEL 2<td>
				<td><input type="text" name="lecturerOfExam[]"/></td>
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
</body>
</html>