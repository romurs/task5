<?php

namespace Roma\Task5;

interface FileManager
{
  public function readFile(string $filename): void;
  public function  writeFile(string $filename, string | object | array $data): void;
}
