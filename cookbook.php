<?php 

include "classes/recipes.php";

$ln = "\r\n";

$recipe1 = new Recipe();
$recipe1->setSource("Grandma Holligan");
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2->setSource("Betty Crocker");
$recipe2->setTitle("my second recipe");

echo $recipe1->getTitle();

foreach($recipe1->getIngredients() as $ing){
    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}

$recipe1->addInstructions("This is my first instruction");
$recipe2->addInstructions("This is my second instruction");

echo $ln . implode($recipe1->getInstructions());
echo $ln . implode($recipe2->getInstructions());

$recipe1->addTags("Breakfast");
$recipe2->addTags("Main Course");

echo $ln . implode(", ", $recipe1->getTags());
echo $ln . implode(", ", $recipe2->getTags());

$recipe1->setYield("6 servings");

echo $ln . $recipe1->getYield();
echo $ln . $recipe1->getSource();