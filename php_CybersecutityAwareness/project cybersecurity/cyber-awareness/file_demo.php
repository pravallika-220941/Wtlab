<?php
// $file = fopen("logs/security_log.txt", "r");
// $content = fread($file, filesize("logs/security_log.txt"));
// echo $content;

// $file = fopen("logs/security_log.txt", "a");
// fwrite($file, "\nNew login from unknown IP");
// fclose($file);

// echo file_get_contents("logs/security_log.txt");

// file_put_contents("logs/security_log.txt", "\nsystem is ready to hack!Be careful..", FILE_APPEND);

// $lines = file("logs/security_log.txt");
// print_r($lines);

// if (file_exists("logs/security_log.txt")) {
//     echo "File exists";
// }

// echo filesize("logs/security_log.txt") . " bytes";

// echo filetype("logs/security_log.txt");

// echo date("Y-m-d H:i:s", fileatime("logs/security_log.txt"));

// echo date("Y-m-d H:i:s", filemtime("logs/security_log.txt"));

// echo date("Y-m-d H:i:s", filectime("logs/security_log.txt"));

// echo substr(sprintf('%o', fileperms("logs/security_log.txt")), -4);

// echo fileowner("logs/security_log.txt");

// echo filegroup("logs/security_log.txt");

// echo fileinode("logs/security_log.txt");

// copy("logs/security_log.txt", "logs/backup_log.txt");

// rename("logs/backup_log.txt", "logs/security_backup.txt");

// unlink("logs/security_backup.txt");


// mkdir("reports");

// rmdir("reports");

// if (is_file("logs/security_log.txt")) {
//     echo "It is a file";
// }

// if (is_dir("logs")) {
//     echo "It is a directory";
// }

// $files = scandir("logs");
// print_r($files);

// $dir = opendir("logs");

// while ($file = readdir($dir)) {
//     echo $file . "<br>";
// }

// closedir($dir);

// echo getcwd();

// chdir("logs");
// echo getcwd();


// $file = fopen("logs/security_log.txt", "a");
//mode task -3

$file = fopen("logs/security_log.txt", "r");
$content = fread($file, filesize("logs/security_log.txt"));
echo $content;
fclose($file);

// $file = fopen("reports/summary.txt", "w");
// fwrite($file, "Cybersecurity report generated");
// fclose($file);

$file = fopen("logs/security_log.txt", "a");
fwrite($file, "\nNew login detected");
fclose($file);

// $file = fopen("cyber-awareness/alerts/alert1.txt", "x");
// fwrite($file, "Critical vulnerability found");
// fclose($file);


$file = fopen("logs/security_log.txt", "r+");
fwrite($file, "LOG START\n");
rewind($file);
echo fread($file, filesize("logs/security_log.txt"));
fclose($file);

$file = fopen("reports/temp.txt", "w+");
fwrite($file, "Fresh report created");
rewind($file);
echo fread($file, filesize("reports/temp.txt"));
fclose($file);

?>