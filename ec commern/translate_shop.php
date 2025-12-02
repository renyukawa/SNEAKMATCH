<?php
// Translation helper script for shop-grid-ft.php
// This script creates an updated version with t() translation calls

$file_path = 'shop-grid-ft.php';
$content = file_get_contents($file_path);

// Define translation mappings
$translations = [
    // Clothing items
    'Blazers &amp; Suits' => "<?php echo t('clothing_blazers', 'Blazers & Suits'); ?>",
    'Blouses' => "<?php echo t('clothing_blouses', 'Blouses'); ?>",
    'Cardigans &amp; Jumpers' => "<?php echo t('clothing_cardigans', 'Cardigans & Jumpers'); ?>",
    'Dresses' => "<?php echo t('clothing_dresses', 'Dresses'); ?>",
    'Hoodie &amp; Sweatshirts' => "<?php echo t('clothing_hoodies', 'Hoodie & Sweatshirts'); ?>",
    'Jackets &amp; Coats' => "<?php echo t('clothing_jackets', 'Jackets & Coats'); ?>",
    'Jeans' => "<?php echo t('clothing_jeans', 'Jeans'); ?>",
    'Lingerie' => "<?php echo t('clothing_lingerie', 'Lingerie'); ?>",
    'Maternity Wear' => "<?php echo t('clothing_maternity', 'Maternity Wear'); ?>",
    'Nightwear' => "<?php echo t('clothing_nightwear', 'Nightwear'); ?>",
    'Shirts' => "<?php echo t('clothing_shirts', 'Shirts'); ?>",
    'Shorts' => "<?php echo t('clothing_shorts', 'Shorts'); ?>",
    'Socks &amp; Tights' => "<?php echo t('clothing_socks', 'Socks & Tights'); ?>",
    'Sportswear' => "<?php echo t('clothing_sportswear', 'Sportswear'); ?>",
    'Swimwear' => "<?php echo t('clothing_swimwear', 'Swimwear'); ?>",
    'T-shirts &amp; Vests' => "<?php echo t('clothing_tshirts', 'T-shirts & Vests'); ?>",
    'Tops' => "<?php echo t('clothing_tops', 'Tops'); ?>",
    'Trousers' => "<?php echo t('clothing_trousers', 'Trousers'); ?>",
    'Underwear' => "<?php echo t('clothing_underwear', 'Underwear'); ?>",
    
    // Bags
    'Handbags' => "<?php echo t('bags_handbags', 'Handbags'); ?>",
    'Backpacks' => "<?php echo t('bags_backpacks', 'Backpacks'); ?>",
    'Wallets' => "<?php echo t('bags_wallets', 'Wallets'); ?>",
    'Luggage' => "<?php echo t('bags_luggage', 'Luggage'); ?>",
    'Lumbar Packs' => "<?php echo t('bags_lumbar', 'Lumbar Packs'); ?>",
    'Duffle Bags' => "<?php echo t('bags_duffle', 'Duffle Bags'); ?>",
    'Bag / Travel Accessories' => "<?php echo t('bags_travel', 'Bag / Travel Accessories'); ?>",
    'Diaper Bags' => "<?php echo t('bags_diaper', 'Diaper Bags'); ?>",
    'Lunch Bags' => "<?php echo t('bags_lunch', 'Lunch Bags'); ?>",
    'Messenger Bags' => "<?php echo t('bags_messenger', 'Messenger Bags'); ?>",
    'Laptop Bags' => "<?php echo t('bags_laptop', 'Laptop Bags'); ?>",
    'Briefcases' => "<?php echo t('bags_briefcases', 'Briefcases'); ?>",
    'Sport Bags' => "<?php echo t('bags_sport', 'Sport Bags'); ?>",
    
    // Accessories
    'Sunglasses' => "<?php echo t('acc_sunglasses', 'Sunglasses'); ?>",
    'Fashion Sunglasses' => "<?php echo t('acc_fashion_sunglasses', 'Fashion Sunglasses'); ?>",
    'Sport Sunglasses' => "<?php echo t('acc_sport_sunglasses', 'Sport Sunglasses'); ?>",
    'Classic Sunglasses' => "<?php echo t('acc_classic_sunglasses', 'Classic Sunglasses'); ?>",
    
    'Watches' => "<?php echo t('acc_watches', 'Watches'); ?>",
    'Fashion Watches' => "<?php echo t('acc_fashion_watches', 'Fashion Watches'); ?>",
    'Casual Watches' => "<?php echo t('acc_casual_watches', 'Casual Watches'); ?>",
    'Luxury Watches' => "<?php echo t('acc_luxury_watches', 'Luxury Watches'); ?>",
    'Sport Watches' => "<?php echo t('acc_sport_watches', 'Sport Watches'); ?>",
    
    'Accessories' => "<?php echo t('acc_accessories', 'Accessories'); ?>",
    'Belts' => "<?php echo t('acc_belts', 'Belts'); ?>",
    'Hats' => "<?php echo t('acc_hats', 'Hats'); ?>",
    'Jewelry' => "<?php echo t('acc_jewelry', 'Jewelry'); ?>",
    'Cosmetics' => "<?php echo t('acc_cosmetics', 'Cosmetics'); ?>",
    
    // Bags category
    'Bags' => "<?php echo t('cat_bags', 'Bags'); ?>",
    
    // Filter labels
    'Price' => "<?php echo t('filter_price', 'Price'); ?>",
    'Brand' => "<?php echo t('filter_brand', 'Brand'); ?>",
    'Size' => "<?php echo t('filter_size', 'Size'); ?>",
    'Color' => "<?php echo t('filter_color', 'Color'); ?>",
];

// Perform replacements
foreach ($translations as $original => $replacement) {
    // Careful: only replace within specific context to avoid false positives
    // For now just output what would be changed
    if (strpos($content, $original) !== false) {
        echo "Found: $original\n";
    }
}

echo "\nScript complete. Manual replacements needed due to context sensitivity.\n";
?>
