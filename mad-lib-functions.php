<?php


//  write a function to fill in a Mad Libs story

function generateStory($singular_noun, $verb, $color, $distance_units)
{
    $story = "
      \nThe ${singular_noun}s are lovely, ${color}, and deep.\nBut I have promises to keep,\nAnd ${distance_units} to go before I ${verb},\nAnd ${distance_units} to go before I ${verb}.\n";
    return $story;
}

echo generateStory("pencil", "jog", "aquamarine", "lightyears");
echo generateStory("door", "poop", "brown", "leagues");
echo generateStory("cat", "jump", "black", "inches");
