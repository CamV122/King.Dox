<?php
function generateLicenseKey() {
    return strtoupper(bin2hex(random_bytes(8)));
}

$licenseKey = generateLicenseKey();
file_put_contents("licenses.txt", $licenseKey . PHP_EOL, FILE_APPEND);
echo $licenseKey;
?>
