<?php
if ($product) {
?>
    <div class="product-detail">
        <h1><?php echo htmlspecialchars($product['translated_name']); ?></h1>
        <p class="description"><?php echo nl2br(htmlspecialchars($product['translated_description'])); ?></p>
        
        <p class="price">価格: $<?php echo number_format($product['price'], 2); ?></p>
        <p>在庫: <?php echo $product['stock_quantity']; ?>個</p>
        <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['translated_name']); ?>">
    </div>
<?php
} else {
    // 翻訳が見つからなかった場合の処理（例：デフォルト言語を表示する、エラーメッセージを出す）
    echo "商品または翻訳が見つかりませんでした。";
}
// ... 接続を閉じる処理 ...
?>