<?php 

include "classes/recipes.php";

$ln = "\r\n";

$recipe1 = new Recipe();
$recipe1->source = "Grandma Holligan";
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
$recipe2->setTitle("my second recipe");

echo $recipe1->getTitle();

// var_dump($recipe1->getIngredients());

foreach($recipe1->getIngredients() as $ing){
    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}