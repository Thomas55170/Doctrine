<div id="liste_tickets">
    <h2>Tous les tickets en cours</h2>
<?php
foreach ($the_bugs as $bug) {
    if ($bug->getEngineer() != null){
        $engineer = $bug->getEngineer()->getName();
    }else{
        $engineer = "non affecté";
    }
    echo "<ul>";
    echo "<li><img src='./images/en_cours.png' width='30px' height='30px'/></li>";
    echo "<li>".$bug->getCreated()->format('d.m.Y')."</li>";
    echo "<li> affecté à : ".$engineer."</li>";
    echo "<li> Produit(s) : ";
    foreach ($bug->getProducts() as $product) {
        echo "- ".$product->getName()." ";
    }
    echo "</li>";
    echo "<li>".$bug->getDescription()."</li>";
    echo "</ul>";
}
?>
</div>