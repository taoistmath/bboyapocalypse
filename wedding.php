<!DOCTYPE html>
<html lang="en">

<body>

<?php include('includes/header.html'); ?>
<div class="container-fluid wedding" >


<div class="text-center">
    <h1>
        June 17th, 2014
        <br>
        Maui, Hawai'i
    </h1>
</div>
<center>
    <br>
    <iframe width="560" height="315" src="//www.youtube.com/embed/t3n9VRP7byA" frameborder="0" allowfullscreen ></iframe>
    <br>
</center>

<!-- Write php function to generate this: -->
<center>
<div class="row">
    <?php displayImages() ?>
</div> 
</center>   

<?php // include('includes/footer.php'); ?>

</body>
</html>

<?php
function displayImages()
{
    $images = array("016", "027", "030", "035", "037", "092", "096", "117");
    // , "122", "126");, "133", "135", "143", "150", "159", "163", "167", "170", "171", "175", "177", "179", "180", "182", "190", "198", "204", "213", "217", "223", "239", "240", "250", "251", "256", "272");
    foreach ($images as $image) {
        echo '<a href="images/OG_' . $image . '.jpg">
        <img height=150 width=150 src="images/OG_' . $image . '.jpg"></a>';
    }
}
?>