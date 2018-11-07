<?php
$note1=(rand(0,20));
$note2=(rand(0,20));
$note3=(rand(0,20));
$moyenne=(($note1 + $note2 + $note3) /3);
if ($moyenne<10) echo "refusé";
else if ($moyenne>=14) echo " admis avec mention bien ";
else if ($moyenne>=12) echo "admis avec mention assez bien" ;
else echo "admis avec mention passable";
echo "<br>".$moyenne;
?>