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
    // pub

    // public constructor
    public function __construct(array $tab)
    {
        $this->createMenu($tab);
    }

    // private method
    private function createMenu(array $tabs){
        $this->setSortie($this->startLine);
        foreach ($tabs as $key => $values){
            // if the value is a array
            if(is_array($values)){

            }else{
                $this->setSortie($this->startRow.$values.$this->endRow);
            }
        }
        $this->setSortie($this->endLine);
    }

    // public getter
    public function getSortie(){
        return $this->sortie;
    }

    // public setter
    public function setSortie(string $str){
        // concatenation of sortie
        $this->sortie .= $str;
    }

}

$data = [
    "un",
    "deux",
    [
        "trois",
    ],
    "quatre",
];

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
