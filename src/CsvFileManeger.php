<?php

namespace Roma\Task5;

use Roma\Task5\FileManager;

class CsvFileManeger implements FileManager
{
  public function readFile(string $filename): void
  {
    $fd = fopen($filename, "r");
    while (($row = fgetcsv($filename)) !== false) {
      echo  $row[0] . $row[1] . $row[2] . "";
    }
    fclose($fd);
  }
  public function  writeFile(string $filename, string | object | array $data): void
  {
    if (gettype($data) === 'string') {
      $fd = fopen($filename, "w");
      foreach ($data as $value) {
        fputcsv($fd, explode(";", $value), ";");
      }
      fwrite($fd, $data);
      fclose($fd);
    }
  }
}
