<?php

namespace Roma\Task5;

use Roma\Task5\FileManager;

class JsonFileManeger implements FileManager
{
  public function readFile($filename): void
  {
    $fd = fopen($filename, "r");
    while(!feof($fd))
    {
      $json = htmlentities(fgets($fd));
      $obj = json_decode($json);
      print_r($obj);
    }
    fclose($fd);
  }
  public function  writeFile($filename, $data): void
  {
    if(gettype($data) != "string"){
      $newData = json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    $fd = fopen($filename, "f");
    fwrite($fd, $newData);  
    fclose($fd);
  }
}