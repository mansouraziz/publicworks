<?php
// Open file for writing, append mode
$results = fopen("output/results.csv",a);
// write as CSV
fputcsv($results,$_GET);
// redirect to success page
header("Location: success.html");
?>
