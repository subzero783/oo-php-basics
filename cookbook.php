<?php 

include "classes/recipes.php";
include "classes/render.php";
include "inc/recipes.php";
include "classes/recipecollection.php";

$ln = "\r\n";

$cookbook = new RecipeCollection("Treehouse Recipes");
$cookbook->addRecipe($lemon_chicken);
var_dump($cookbook);
// echo Render::displayRecipe($belgian_waffles);
