<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$noUjian = rand(10000000000,99999999999);
$classOfExam = $_POST['classOfExam'];
$lectureOfExam = $_POST['lectureOfExam'];
$dateOfExam  = date('l, d F Y', strtotime($_POST['dateOfExam']));

$timeOfExam = $_POST['timeOfExam'];
$areaOfExam = $_POST['areaOfExam'];
$periodOfExam = $_POST['periodOfExam'];

$dayList = array(
		'Sunday' => 'Minggu',
		'Monday' => 'Senin',
		'Tuesday' => 'Selesa',
		'Wednesday' => 'Rabu',
		'Thursday' => 'Kamis',
		'Friday' => "Jum'at",
		'Saturday' => 'Sabtu'
	);

$odd = array(1,3,5,6,7,9);
$even = array(2,4,6,8);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0034)http://my.unpam.ac.id/modul2/index -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="../css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="../css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/form.css">

	<title>myUNPAM - <?php echo $modulOfExam; ?></title>
<style type="text/css">
:root #content > #right > .dose > .dosesingle,
:root #content > #center > .dose > .dosesingle,
:root #header + #content > #left > #rlblock_left
{ display: none !important; }</style></head>

<body>

<!--
<script type="text/javascript">
reformal_wdg_domain    = "myunpam";
reformal_wdg_mode    = 0;
reformal_wdg_title   = "myUNPAM";
reformal_wdg_ltitle  = "Pesan & Saran";
reformal_wdg_lfont   = "";
reformal_wdg_lsize   = "";
reformal_wdg_color   = "#FFA000";
reformal_wdg_bcolor  = "#516683";
reformal_wdg_tcolor  = "#FFFFFF";
reformal_wdg_align   = "left";
reformal_wdg_waction = 0;
reformal_wdg_vcolor  = "#9FCE54";
reformal_wdg_cmline  = "#E0E0E0";
reformal_wdg_glcolor  = "#105895";
reformal_wdg_tbcolor  = "#FFFFFF";
 
reformal_wdg_bimage = "8489db229aa0a66ab6b80ebbe0bb26cd.png";
 
</script>

<script type="text/javascript" language="JavaScript" src="http://idea.informer.com/tab6.js?domain=myunpam"></script><noscript><a href="http://myunpam.idea.informer.com">myUNPAM feedback </a> <a href="http://idea.informer.com"><img src="http://widget.idea.informer.com/tmpl/images/widget_logo.jpg" /></a></noscript>
!-->
<div class="container" id="page">

	
	<div class="container">
	<div id="content">
		<style>
#clear {
	clear:both;
}
#header-text {
	position:relative;float:left;width:120px;
}
#header-text-val {
	position:relative;float:left;width:220px;
}
#header-text-right {
	position:relative;float:left;width:120px;margin-left:200px;
}
</style>
<!--
<div id="logo-print"><img src="http://my.unpam.ac.id/images/unnamed.jpg" width="80" height="80" style="position:relative;float:left;"><div style="position:relative;padding-left:120px;padding-top:0px;"><h3>UNIVERSITAS PAMULANG</h3></div></div>
-->
<input type="button" value="CETAK" onclick="javascript:window.print();" id="btncetak">
<br/>
<br/>
<br/>
<div id="khs_content" style="display:all;">
<div style="text-align:justify;"><img src="http://my.unpam.ac.id/images/unnamed.jpg" style="float:left; margin:0 9px 3px 0;" width="120px" ;="" height="120px"></div>
<center><font size="1px">YAYASAN SASMITA JAYA</font></center>
<font size="3px"><center><b>UNIVERSITAS PAMULANG</b></center></font>
<center><font size="2px">SK MENDIKNAS NOMOR :136/D/O/2001</font></center>
<center><font size="2px">Jl. Surya Kencana No.1 Pamulang Barat Telp 021-7412566 Fax.021-7412566</font></center>
<center>TANGERANG SELATAN - BANTEN</center><br>
<font size="3px"><center>KARTU UJIAN PERIODE 2 GANJIL 2016/2017</center></font>
 <center><font size="5" height="0px" width="50px"><b>NOMOR UJIAN : <?php echo $noUjian; ?></b></font></center>
 <table border="0" cellspacing="0" cellpadding="5">
	<tbody><tr>
		<td style="width:100px;"><font size="3px">NIM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $nim; ?></font></td>
		<td style="width:900px;"><font size="3px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     SEMESTER &nbsp;&nbsp;&nbsp;&nbsp;: 4</font></td>
	</tr>
	<tr>
		<td style="width:900px;"><font size="3px">NAMA &nbsp;: <?php echo $nama; ?></font></td>
		<td style="width:900px;"><font size="3px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    SHIFT/KELAS&nbsp;&nbsp;: REGULER C/<?php echo $classOfExam; ?></font></td>
	</tr> 
		</tbody></table>
	<div style="clear:both;"><table class="rounded" rowspan="6" width="50%" height="220%" style="width:900px;height:350px;align:center;" border="1">
<thead>
<tr>
<th>NO.</th><th style="text-align:center">HARI/TANGGAL</th>
<th style="text-align:center">WAKTU</th>
<th style="text-align:center">RUANG</th>
<th style="text-align:center">KELAS</th>
<th style="text-align:center">NAMA MATA KULIAH</th>
<th style="text-align:center">NO UJIAN</th>
<th style="text-align:center">PERIODE</th>
<th style="text-align:center">PARAF</th>
</tr>
</thead><tbody>
<?php for($table = 0;$table < 2;$table++){
?>
<tr class="<?php if($table == $odd[$table]) { echo 'odd'; } else {echo 'even';} ?>">
<td width="5%" style="text-align:center"><?php echo $table+1; ?></td> 
  <td style="text-align:center	;"><?php echo $dateOfExam; ?></td>
  <td style="text-align:center	;"><?php echo $timeOfExam[$table]; ?></td>
  <td style="text-align:center	;"><?php echo $areaOfExam; ?></td>
  <td style="text-align:center	;"><?php echo $classOfExam; ?></td>
  <td style="text-align:center	;"><?php echo $lectureOfExam[$table]; ?></td>
  <td style="text-align:center	;"><?php echo $noUjian; ?></td>
  <td style="text-align:center	;"><?php echo $periodOfExam; ?></td>
  <td style="text-align:left;"></td>
</tr>
<?php } ?>
</tbody>
</table><div style="height:0px; width:0px;"></div></div> 
<p align="right" font="" face="arial">Pamulang, 17 Januari 2016&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<img src="http://chart.apis.google.com/chart?cht=qr&chs=200x150&chl=UNPAM20132UAS" style="float:left; width=&#39;10%&#39; height=&#39;10%&#39;">
<p align="right" font="" face="arial">Ketua Panitia Ujian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<img src="http://my.unpam.ac.id/images/buchori_ttd.JPG" style="float:right; margin:0 0px 0px 0;">
<br><br><br><br><br>
<p align="right" font="" face="arial">Drs. Buchori Hasmi Nuriman, MM</p>
<center><b><font size="4">PERATURAN DAN TATA TERTIB PESERTA UJIAN (Reguler A &amp; B)</font></b></center>
<table cellpadding="0" cellspacing="0">
<tbody><tr>
	<td><font size="4">1. &nbsp;&nbsp;Peserta Ujian <b>WAJIB</b> membawa Kartu Ujian pada saat ujian berlangsung.</font></td>
</tr>
<tr>
	<td><font size="4">2. &nbsp;&nbsp;Kartu Ujian <b>WAJIB</b> disimpan dengan baik dan ditunjukkan saat pengambilan Kartu Hasil Studi.</font></td>
</tr>
<tr>	
	<td><font size="4">3. &nbsp;&nbsp;Untuk mata kuliah yang jadwalnya bersamaan atau tidak mengikuti ujian utama segera mendaftarkan diri &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;untuk ujian susulan ke Biro Akademik.</font></td>
</tr>
<tr>
	<td><font size="4">4. &nbsp;&nbsp;Peserta ujian harus berpakaian rapi dan sopan serta <b>WAJIB</b> mengenakan <b>JAKET ALMAMATER</b> selama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mengikuti ujian.</font></td>
</tr>
<tr>
	<td><font size="4">5. &nbsp;&nbsp;Peserta ujian sudah berada di ruangan <b>10 (sepuluh) menit</b> sebelum ujian dimulai.</font></td>
</tr>
<tr>
	<td><font size="4">6. &nbsp;&nbsp;Peserta ujian yang terlambat diperkenankan mengikuti ujian setelah mendapat ijin dari panitia ujian, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tanpa perpanjangan waktu dan keterlambatan hadir lebih dari <b>30 (tiga puluh) menit</b>, ikut ujian susulan.</font></td>
</tr>
<tr>
	<td><font size="4">7. &nbsp;&nbsp;Peserta ujian hanya diperkenankan membawa alat-alat yang telah ditentukan oleh panitia ujian</font></td>
</tr>
<tr>
	<td><font size="4">8. &nbsp;&nbsp;Peserta ujian dilarang membantu teman atau mencontoh dari teman atau tindakan-tindakan lainnya yang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mengganggu peserta ujian lainnya.</font></td>
</tr>
<tr>
	<td><font size="4">9. &nbsp;&nbsp;Peserta yang melanggar tata tertib ujian dikenakan <b>sanksi akademik</b></font></td>
</tr>
<tr>
	<td><font size="4">10. Peserta ujian dilarang menggunakan alat komunikasi atau HP.</font></td>
</tr>
</tbody></table>
</div>

<div></div>	</div><!-- content -->
</div>

</div><!-- page -->
</body></html>