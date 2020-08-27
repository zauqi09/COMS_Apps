<?php
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  return 'Tanggal ' . $pecahkan[2] . ' Bulan ' . $bulan[ (int)$pecahkan[1] ] . ' Tahun ' . $pecahkan[0];
}
include '../lib/db/dbconfig.php';
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT*FROM update_boq WHERE id='$id'";
$r = $conn->query($sql);
if ($r->num_rows != 0) {
  if ($r = $conn->query($sql)) {
    $update_boq=$r->fetch_assoc();
    extract($update_boq);
?>
<html>
<head>
<title>BERITA ACARA UPDATE BUDGET PID PROACTIVE</title>
<script type="text/javascript">
  window.print()
</script>
<style type="text/css">

<!--
body { font-family: Arial; font-size: 20.5px }
.pos { position: absolute; z-index: 0; left: 0px; top: 0px }
-->
</style>
</head>
<body>
<nobr><nowrap>
<div class="pos" id="_0:0" style="top:0">
<img name="_1100:850" src="page_001.jpg" height="1100" width="850" border="0" usemap="#Map"></div>
<div class="pos" id="_184:102" style="top:102;left:184">
<span id="_18.8" style="font-weight:bold; font-family:Times New Roman; font-size:18.8px; color:#000000">
BERITA ACARA UPDATE BUDGET PID PROACTIVE</span>
</div>
<div class="pos" id="_125:146" style="top:146;left:125">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
Pada Hari ini <span style="font-weight:bold"> <?php echo tgl_indo(date('Y-m-d'));?></span> saya yang bertanda tangan dibawah ini :</span>
</div>
<div class="pos" id="_150:206" style="top:185;left:150">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
Nama </span>
</div>
<div class="pos" id="_249:206" style="top:185;left:249">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
: <?php echo $setuju?></span>
</div>
<div class="pos" id="_150:226" style="top:205;left:150">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
Jabatan </span>
</div>
<div class="pos" id="_249:226" style="top:205;left:249">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
: <?php echo $jabatan2?></span>
</div>
<div class="pos" id="_125:266" style="top:245;left:125">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
Menyetujui perihal permohonan update budget untuk :</span>
</div>
<div class="pos" id="_150:306" style="top:285;left:150">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
PID</span>
</div>
<div class="pos" id="_249:306" style="top:285;left:249">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
 </span>
</div>
<div class="pos" id="_350:306" style="top:285;left:350">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
: <?php echo $pid?></span>
</div>
<div class="pos" id="_150:326" style="top:305;left:150">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
Pekerjaan </span>
</div>
<div class="pos" id="_350:326" style="top:305;left:350">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
: <?php echo $pekerjaan?></span>
</div>
<div class="pos" id="_150:346" style="top:325;left:150">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
Nilai awal PID</span>
</div>
<div class="pos" id="_350:346" style="top:325;left:350">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
: Rp <?php echo $nilaiawal?></span>
</div>
<div class="pos" id="_150:366" style="top:345;left:150">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
Nilai tambahan Budget</span>
</div>
<div class="pos" id="_350:366" style="top:345;left:350">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
: Rp <?php echo $nilaitambah?></span>
</div>
<div class="pos" id="_150:386" style="top:365;left:150">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
Nilai total Akhir Budget </span>
</div>
<div class="pos" id="_350:386" style="top:365;left:350">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
: Rp <?php echo $nilaitotal?></span>
</div>
<div class="pos" id="_150:407" style="top:385;left:150">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
Alasan penambahan budget </span>
</div>
<div class="pos" id="_350:407" style="top:385;left:350">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
: <?php echo $alasan?></span>
</div>
<div class="pos" id="_150:427" style="top:405;left:150">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
*BOQ Terlampir</span>
</div>
<div class="pos" id="_125:467" style="top:445;left:125">
<span id="_14.8" style=" font-family:Times New Roman; font-size:14.8px; color:#000000">
Demikian Berita Acara ini dibuat untuk dipergunakan sebagaimana mestinya.</span>
</div>
<div class="pos" id="_201:577" style="top:557;left:201">
<span id="_14.8" style="font-weight:bold; font-family:Times New Roman; font-size:14.8px; color:#000000">
Yang Mengajukan</span>
</div>
<div class="pos" id="_504:577" style="top:557;left:504">
<span id="_14.8" style="font-weight:bold; font-family:Times New Roman; font-size:14.8px; color:#000000">
Mengetahui / Menyetujui</span>
</div>
<div class="pos" id="_504:577" style="top:627;left:484">
<span id="_14.8" style="font-weight:bold; font-family:Times New Roman; font-size:14.8px; color:#FF0000">
<?php echo $print2?></span>
</div>
<div class="pos" id="_0:0" style="top:557;left:514">
<img name="_60:60" src="approved.png" height="150" width="150" border="0" usemap="#Map"></div>

<div class="pos" id="_191:678" style="top:678;left:191">
<span id="_14.8" style="font-weight:bold; font-family:Times New Roman; font-size:14.8px; color:#000000">
<?php echo $pengaju?></span>
</div>

<div class="pos" id="_504:577" style="top:627;left:180">
<span id="_14.8" style="font-weight:bold; font-family:Times New Roman; font-size:14.8px; color:#FF0000">
Submission (<?php echo $dt?>)</span>
</div>

<div class="pos" id="_516:678" style="top:678;left:516">
<span id="_14.8" style="font-weight:bold; font-family:Times New Roman; font-size:14.8px; color:#000000">
<?php echo $setuju?></span>
</div>
<div class="pos" id="_226:698" style="top:698;left:226">
<span id="_14.8" style="font-weight:bold; font-family:Times New Roman; font-size:14.8px; color:#000000">
<?php echo $jabatan1?></span>
</div>
<div class="pos" id="_550:698" style="top:698;left:550">
<span id="_14.8" style="font-weight:bold; font-family:Times New Roman; font-size:14.8px; color:#000000">
<?php echo $jabatan2?></span>
</div>
</nowrap></nobr>
</body>
</html>
<?php
  }
}
?>
