<?php

class View
{

public $specialPaths = [
  "home" => "accueil",
  "bear" => "bear",
];

//on déclare head et foot en dur, tandis que uri et path sont dynamiques car lié a changer
public $uri;
public $path;
public $head = "./views/layouts/head.html";
public $foot = "./views/layouts/foot.html";

//on instancie la class View pour pour toutes les initialisations dont l'objet a besoin avant d'être utilisé.
public function __construct($uri)
{
//$this fait référence a la classe View dont on définit que son uri est $uri
$this->uri = $uri;
//ensuite on définit le path de la classe View en se servant de $uri(ce que tape l utilisateur) dans l url
$this->path = "./views/layouts" . $uri . ".html";
}
// public function getAllTeddys($shuffle)
//   {
//     $source = "./views/layouts/";
//     $teddyList =array_diff(scandir($source),[
//       ".."
//     ]);
//        if ($shuffle == true) {
//           shuffle($teddyList);
//          }
//   $div = "<div>";
//   foreach ($teddyList as $key => $value) {
//       $div .= "<div>" . file_get_contents($source . $value) . "</div>";
//   }
//   $div .= "</div>";
//   echo $div;
//    }

public function renderView($shuffle)
{
  if(file_exists($this->path)) {
        $content = file_get_contents($this->path);
      }else {
        // code...
      }

  if($this->uri == "/1") {
        $content =  file_get_contents("./views/layouts/" . $this->specialPaths['bear'] . ".html");

}elseif ($this->uri == "/2") {
  $source = "./views/layouts/";
  $teddyList =array_diff(scandir($source),[
    "..",
  ]);
  if ($shuffle == true) {
     shuffle($teddyList);
           }
$div = "<div>";
foreach ($teddyList as $key => $value) {
    $div .= "<div>" . file_get_contents($source . $value) . "</div>";
}
$div .= "</div>";
echo $div;

}
  $data = file_get_contents($this->head);
  echo $data . $content . file_get_contents($this->foot);

}
}




 ?>
