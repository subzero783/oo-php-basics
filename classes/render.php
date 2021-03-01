<?php 

class Render
{

    public function __toString()
    {
        
        $output =  "\r\n" . "The following methods are available for " . __CLASS__ . " objects: " . "\r\n";
        $output .= implode("\r\n", get_class_methods(__CLASS__));
        return $output;
    }

    public static function listShopping($ingredient_list)
    {
        ksort($ingredient_list);
        return implode("\r\n", array_keys($ingredient_list));
    }

    public static function listRecipes($titles)
    {
        asort($titles);
        return implode("\r\n", $titles);
    }

    public static function listIngredients($ingredients)
    {
        $output = "";
        foreach($ingredients as $ing)
        {
            $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
            $output .= "\r\n";
        }
        return $output;
    }

    public static function displayRecipe($recipe)
    {
        $output = "";
        $output .= $recipe->getTitle() . " by " . $recipe->getSource();
        $output .= "\r\n\r\n";
        $output .= implode(", ", $recipe->getTags());
        $output .= "\r\n\r\n";
        $output .= self::listIngredients($recipe->getIngredients());
        $output .= "\r\n\r\n";
        $output .= implode("\r\n", $recipe->getInstructions());
        $output .= "\r\n\r\n";
        $output .= $recipe->getYield();
        return $output;
    }
}