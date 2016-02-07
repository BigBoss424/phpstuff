<?php 
 //Multiple line commenting 

 /* 
 Title: PHP Printing and Commenting 
 Author: Aaron Jones
 Date: 2/6/2016
  
 */

 //Shell Syntax Commenting
 #Title: PHP Printing and Commenting
 #Author: Aaron Jones

 //Basic print()
 boolean print(argument)

 print("<p> I love the summertime.</p>");

 $season = "summertime";
 print("<p>I love the $session.</p>");
 
 print("<p>I love the summertime.</p>");

 print("<p>I love the ".season."</p>");

 //Using echo()
 $heavyweight = "Lennox Lewis";
 $lightweight = "Floyd Mayweather";
 echo $heavyweight, " and ", $lightweight, " are great fighters.";

 //Using printf()
 printf("$%01.2f", 43.2); //$43.20
 printf("%d bottles of beer on %s", 100, "the wall");
 printf("%15s", "Some text"); //Some text
 
 printf("The %2\$s likes to %1\$s", "bark", "dog");
 printf("The %1\$s says: %2\$s, %2\$s.", "dog", "bark");
 	// The dog says: bark, bar.
 
 //sprintf()
 string sprintf (string format [, mixed arguments])
 
 $cost = sprintf("$%0.2f", 43.2); // $cost  = $43.20
?>
