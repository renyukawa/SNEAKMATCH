<?php
// 1. ユーザーが選択した言語を決定（ここでは例として 'en' に固定）
$language_code = 'en'; // ユーザーが 'en' を選択した場合
// $language_code = 'ja'; // ユーザーが 'ja' を選択した場合

$product_id = 101;

// 2. データベース接続情報 (適宜変更してください)
$db_name = 'mysql:host=localhost;dbname=kutu';
$user_name = 'nishida';
$user_password = 'security';

// 3. データベースに接続
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}

// 4. SQLクエリの作成
// INNER JOINを使用して、productsテーブルと
// 適切なlanguage_codeを持つproduct_translationsテーブルを結合します。
$sql = "
    SELECT 
        p.product_id, 
        pt.title,       -- 翻訳テーブルからタイトルを取得
        p.price         -- 基本情報テーブルから価格を取得
    FROM 
        products p
    INNER JOIN 
        product_translations pt 
    ON 
        p.product_id = pt.product_id 
    WHERE 
        p.product_id = ? AND pt.language_code = ?
";

// 5. プリペアドステートメントでクエリを実行（セキュリティのため）
$stmt = $conn -> prepare($sql);
$stm -> bind_param("is", $product_id, $language_code);
$stmt -> execute();
$result = $stmt -> get_result();

// 6. 結果の表示
if ($result -> num_rows > 0) {
    $product = $result -> fetch_assoc();
    
    // 結果: 'en' の場合 -> Title: Premium Coffee Mug, Price: $49.99
    // 結果: 'ja' の場合 -> Title: プレミアム コーヒーマグ, Price: ¥49.99 (価格は単純な表示としています)
    echo "## 🛍️ 商品情報 ({$language_code}) ##\n";
    echo "Title: **" . $product['title'] . "**\n";
    echo "Price: $" . $product['price'] . "\n";
    
} else {
    echo "商品が見つかりませんでした。";
}

$stmt -> close();
$conn -> close();

?>