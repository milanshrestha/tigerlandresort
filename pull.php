<?php
header("Cache-Control: no-cache, max-age=0");
echo "<pre>";
system("git pull origin master");
echo "\n";
echo "---========---\n";
echo "\n";
echo "Last Commit\n";
echo shell_exec("git log |head -5");
echo "</pre>";
?>
