
<?php


include('simple_html_dom.php');
$html = file_get_html("https://www.codechef.com/users/raghavender_19");
echo "<h1> CodeChef Details </h1> ";
echo "UserName : ";
echo $html->find('section .side-nav span',2)->innertext;
echo"<br><br>";

echo "rating is:";

echo $html->find('div.rating-number',0)->innertext;
echo"<br><br>";

echo $html->find('section .content h5',0)->plaintext;
echo"<br><br>";

echo $html->find('section .content h5',1)->plaintext;
echo"<br><br>";

echo "Global Rank is : ";
echo $html->find('div.rating-ranks li strong',0)->innertext;
echo"<br><br>";
echo "Country Rank is : ";
echo $html->find('div.rating-ranks li strong',1)->innertext;
echo"<br><br>";

?>


