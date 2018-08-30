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
        $this->createMenu($tab);
        return $this->sortie;
    }

    // private method
    private function createMenu(array $tabs){
        $this->sortie .= $this->startLine;
        foreach ($tabs as $key => $values){
            // if the value is a array
            if(is_array($values)){

            }else{
                $this->sortie .= $this->startRow.$values.$this->endRow;
            }
        }
        $this->sortie .= $this->endLine;
    }
    // public getter
    public function getSortie(){
        return $this->sortie;
    }
}

$data = ["un","deux","trois"];

$pourmenu = new Menu($data);
$menu = $pourmenu->getSortie();

?>
<html>
<head>
    <title>Notre menu</title>
</head>
<body>
    <h1>Menu</h1>
<div id="menu"><?=$menu?></div>
<div id="content"></div>
</body>
</html>
