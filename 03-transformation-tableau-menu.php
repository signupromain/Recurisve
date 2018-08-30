<?php
/**
 * création d'un menu à partir d'un tableau
 */

class Menu{
    // Attributs
    private $sortie ="";
    private $startLine = "<ul>";
    private $startRow = "<li>";
    private $endLine = "</ul>";
    private $endRow = "</li>";

    // public constructor
    public function __construct(array $tab)
    {
        return $this->createMenu($tab);
    }

    // private method
    private function createMenu(array $tabs){
        foreach ($tabs as $key => $values){
            echo "$values |";
        }
    }
}

$data = ["un","deux","trois"];

$pourmenu = new Menu($data);

?>
<html>
<head>
    <title>Notre menu</title>
</head>
<body>
    <h1>Menu</h1>
<div id="menu"></div>
<div id="content"></div>
</body>
</html>
