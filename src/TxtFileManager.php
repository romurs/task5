<?php

namespace Roma\Task5;

use Roma\Task5\FileManager;

class TxtFileManeger implements FileManager
{
  public function readFile($filename): void
  {
    $fd = fopen($filename, "r");
    while(!feof($fd))
    {
      $str = htmlentities(fgets($fd));
      echo $str;
    }
    fclose($fd);
  }
  public function  writeFile($filename, $data): void
  {
    $fd = fopen($filename, "w");
    fwrite($fd, $data);
    fclose($fd);
  }
}