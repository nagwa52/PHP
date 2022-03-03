<?php
class counter{
    public static function getCounter() {
       $counter =file_get_contents("file.txt");
      return intval($counter);
    }
 public static function addVisit(){
      $counter = self::getCounter(); 
    $fileHandle =fopen("file.txt",'w+');
    fwrite ($fileHandle,$counter +1);
    fclose($fileHandle);
    
    
}
}