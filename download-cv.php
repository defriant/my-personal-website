<?php

$file_path = 'assets/CV AFIF DEFRIANT.pdf';

header("Pragma:public");
header("Expired:0");
header("Cache-Control:must-revalidate");
header("Content-Control:public");
header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition:attachment; filename=\"".basename($file_path)."\"");
header("Content-Transfer-Encoding:binary");
header("Content-Length:".filesize($file_path));
flush();
readfile($file_path);
exit();

?>