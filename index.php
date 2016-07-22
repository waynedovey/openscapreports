<?php
$filename = "rhel7.html";
echo "<pre><code>";
echo htmlentities(file_get_contents($filename));
echo "</code></pre>";
?>
