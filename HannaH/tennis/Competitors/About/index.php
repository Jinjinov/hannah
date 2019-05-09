<?php

$document_root = filter_input( INPUT_SERVER, 'DOCUMENT_ROOT' );

if($document_root == "C:/xampp/htdocs")
{
    $document_path = "/NetBeans/HannaH";
}
else
{
    $document_path = "/new";
}

include_once( $document_root . $document_path . "/language.php" );

$titles = array(
    "sl" => "Tekmovalci",
    "en" => "Competitors"
);

$title = $titles[$lang];

include_once( $document_root . $document_path . "/menu/head.php" );

include_once( $document_root . $document_path . "/tennis/head.".$lang.".php" );

include_once( $document_root . $document_path . "/tennis/menu.".$lang.".php" );

include_once( "body.".$lang.".php" );

include_once( $document_root . $document_path . "/menu/foot.php" );

?>