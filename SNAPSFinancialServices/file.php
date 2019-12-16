<?php
header("Content-disposition: attachment; filename=file.pdf");
header("Content-type: application/pdf");
readfile("file.pdf");
?>