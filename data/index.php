<?php
require_once('./controlers/View.php');
$view= new View($_SERVER['REQUEST_URI']);
$view->renderView(true);
//$view->getAllTeddys(true);



//on créé un CMS (comme wordpress)
//outil qui permet le templating
//outil qui permet de CRUD via un éditeur wysiwig des contenus HTML

//$path = "./views" . $_SERVER['REQUEST_URI'] . ".html";
//$head = file_get_contents("./views/head.html");
//$foot = file_get_contents("./views/foot.html");

//if (file_exists($path)) {
//$content = file_get_contents($path);
//}else {
//  $content = file_get_contents("./views/_error404.html");
//}
//echo $head, $content, $foot;






 ?>
