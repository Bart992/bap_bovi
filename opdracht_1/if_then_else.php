<div class="input">
    <h1>Bap Switch</h1>
<form method="post">
    <h2>Cola, Beer or Water</h2>
    <input type="text" name="beverage"><br>
    <input type="submit" name="submit" value="Go!">
    <link rel="stylesheet" href="style.css">

</form>


<?php


$beverage = $_POST['beverage'];

switch ($beverage) {

    case 'cola':
        echo '<h3>Drink is cola</h3>';
        echo '<img src="http://www.heuvelrugbroodjes.nl/wp-content/uploads/2016/06/Heuvelrugbroodjes-Cola.jpg" style="width:300px" />';
        break;

    case 'beer':
        echo '<h3>Drink not allowed!</h3>';
        echo '<img src="https://hfkverhuur.nl/wp-content/uploads/2016/08/HFK_HertogJan2-600x600.jpg" style="width:300px" />';
        break;

    case 'water':
        echo '<h3>Drink is water</h3>';
        echo '<img src="http://www.mcdonalds.nl/sites/default/files/produits/spa-33cl-477x355px_0.png" style="width:300px" />';
        break;

    default:
        echo '<h3>I don\'t know what drink that is</h3>';
        break;
}

?>
</div>
