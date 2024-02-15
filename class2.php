<!DOCTYPE html>
<html>
<body>

<?php
class Mobile{
    public $brand;
    public $color;
    public $price;

}

$mobile1 = new Mobile();
$mobile1->brand = "Xiaomi";
$mobile1->color = "Black";
$mobile1->price = "18,500";
?>

echo "I have a phone which brand is ". $mobile1->brand. "<br>";
echo "It's color is ". $mobile1->color. "<br>";
echo "It's price is ". $mobile1->price;

</body>
</html>