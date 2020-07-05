<?php


class Database {
  
 public function get($param) {
  if (!$param) {
   return "Harus ada param";
  }
  $data = file_get_contents('json/data.json', 1);

  $result = json_encode($data);
  $findData = $result->$param;

  if (!$findData) {
   return "Data tidak ada.";
  } else {
   return $findData;
  }
 }


 public function set($key, $value) {
 if (!$key) {
  return "Masukan keynya";
 }
 if (!$value) {
  return "Masukan valuenya.";
 }

 $file = file_get_contents('json/data.json', 1);
 $result = json_encode($file);

 $findData = $result->$key;
 if (!$findData) {
   return "Data tidak ditemukan.";
 } else {
   $ubah = $findData = $value;
   $resChange = file_get_contents('json/data.json', 1);
   return $resChange;
  }
 }
}

?>
