<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
$zipFile = dirname(__FILE__)."/new_download.zip";
$zipArchive = new ZipArchive;

if (!$zipArchive->open($zipFile, ZIPARCHIVE::OVERWRITE))
    die("Failed to create archive\n");

$zipArchive->addGlob(dirname(__FILE__)."/*");
if (!$zipArchive->status == ZIPARCHIVE::ER_OK)
    echo "Failed to write local files to zip\n";

$zipArchive->close();
?>