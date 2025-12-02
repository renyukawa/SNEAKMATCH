<?php
    // 例: 表示したい商品の ID
$product_id = 1; 

    // 例: ユーザーが選択した言語コード
$language_code = 'en'; // 英語 ('en') または 日本語 ('ja')
    // $language_code = 'ja'; 

    // ... データベース接続処理（以前の例を参照） ...

    // SQLクエリ: 結合（JOIN）と絞り込み（WHERE）を行う
$sql = "
    SELECT 
        p.product_id, 
        p.price,
        p.stock_quantity,
        p.image_url,
        pt.translated_name,         -- 翻訳された商品名
        pt.translated_description   -- 翻訳された説明文
    FROM 
        products p
    INNER JOIN 
        product_translations pt 
    ON 
        p.product_id = pt.product_id 
    WHERE 
        p.product_id = ? AND pt.language_code = ?
";

// プリペアドステートメントでクエリを実行
    $stmt = $conn -> prepare($sql);
    $stmt -> bind_param("is", $product_id, $language_code); // i: integer (int), s: string (language_code)
    $stmt -> execute();
    $result = $stmt -> get_result();
    $product = $result -> fetch_assoc();
?>