<?php
function kolomBulan($bulan) {
  $awalBulanHariKe = date('w', mktime(0, 0, 0, $bulan, 1, date('y')));
  $jumlahHari = date('t', mktime(0, 0, 0, $bulan, 1, date('y')));
  $isiTgl = [];
  for ($i = 1; $i <= $awalBulanHariKe; $i++) {
    $isiTgl [] = '';
  }
  for ($i = 1; $i <= $jumlahHari; $i++) {
    $isiTgl [] = $i;
  }
  for ($i = 1; $i <= 35 -($jumlahHari + $awalBulanHariKe); $i++) {
    $isiTgl [] = '';
  }
  return $isiTgl;
}

$i = 0;
$namaBulan = ['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember'];
$tgl = date('d');
$bulan = date('m');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- materialize CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="./style.css">
  <title>Kalender | @ahmadinzero</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <?php for ($b = 1; $b <= 12; $b++): ?>
      <div class="col m6">
        <h3><?= $namaBulan[$b - 1]?></h3>
        <table class="z-depth-1">
        <thead>
          <tr>
              <th class="center-align">minggu</th>
              <th class="center-align">senin</th>
              <th class="center-align">selasa</th>
              <th class="center-align">rabu</th>
              <th class="center-align">kamis</th>
              <th class="center-align">jumat</th>
              <th class="center-align">sabtu</th>
          </tr>
        </thead>

        <tbody>
          <?php for ($tr = 1; $tr <= 5; $tr++): ?>
          <tr>
            <?php for ($td = 1; $td <= 7; $td++): ?>
            <td class="center-align"><?= kolomBulan(1)[$i++] ?></td>
            <?php endfor?>
          </tr>
          <?php
          endfor;
          $i = 0;
          ?>
        </tbody>
      </table>
      </div>
      <?php endfor ?>
      
    </div>
  </div>
  
</body>
</html>