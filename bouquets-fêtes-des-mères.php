<?php
$pageTitle = "Bouquets de fête des mères";
include 'include/header.inc.php';
?>

<?php
// Lire le fichier JSON
$jsonData = file_get_contents('data.json');
// Décoder le JSON
$data = json_decode($jsonData, true);

// Vérifier si la catégorie existe
if (isset($data['Bouquets fêtes des mères'])) {
    echo "<div id='categories-container'>";
    foreach ($data['Bouquets fêtes des mères'] as $bouquet) {
        echo "<div class='product-card'>";
        echo "<img class='product-image' src='" . htmlspecialchars($bouquet['image_link']) . "' alt='Image'>";
        echo "<div class='product-info'>";
        echo "<h2 class='product-name'>" . htmlspecialchars($bouquet['name']) . "</h2>";
        echo "<p class='product-description'>" . htmlspecialchars($bouquet['description']) . "</p>";
        echo "<p class='product-price'>Prix Moyen: " . htmlspecialchars($bouquet['prices']['moyen']) . "€ - Prix Grand: " . htmlspecialchars($bouquet['prices']['grand']) . "€</p>";
        echo "<div class='product-action'>";
        echo "<input type='number' value='1' min='1' class='quantity-input'>";
        echo "<button class='add-to-cart'>Ajouter au panier</button>";
        echo "</div>"; // Fermeture de product-action
        echo "</div>"; // Fermeture de product-info
        echo "</div>"; // Fermeture de product-card
    }
    echo "</div>"; // Fermeture de categories-container
    }

?>
