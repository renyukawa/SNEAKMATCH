<?php
// Test language loading

require_once('file/functions.php');

// Test 1: Language loader (from header1.php code)
$__available_langs = ['en','ja','zh'];
$__site_lang = 'en';
if (!empty($_COOKIE['site_lang']) && in_array($_COOKIE['site_lang'], $__available_langs)) {
  $__site_lang = $_COOKIE['site_lang'];
}
define('SITE_LANG', $__site_lang);

// Load language strings
$__lang_strings = [];
$__lang_file = __DIR__ . '/resources/lang/' . $__site_lang . '/shop.php';
echo "Current language: " . $__site_lang . "<br>";
echo "Language file path: " . $__lang_file . "<br>";
echo "File exists: " . (file_exists($__lang_file) ? 'YES' : 'NO') . "<br>";

if (file_exists($__lang_file)) {
  $__lang_strings = include_once($__lang_file);
  echo "Loaded strings count: " . count($__lang_strings) . "<br>";
  echo "Sample translation (cat_shoes): " . (isset($__lang_strings['cat_shoes']) ? $__lang_strings['cat_shoes'] : 'NOT FOUND') . "<br>";
}

// Test 2: Cookie reading
echo "<hr>";
echo "Cookie value (site_lang): " . (isset($_COOKIE['site_lang']) ? $_COOKIE['site_lang'] : 'NOT SET') . "<br>";

// Test 3: t() function
echo "<hr>";
echo "t('cat_shoes'): " . t('cat_shoes', 'cat_shoes') . "<br>";
echo "t('cat_clothing'): " . t('cat_clothing', 'cat_clothing') . "<br>";

// Test 4: Language dropdown HTML
echo "<hr>";
echo "Language dropdown HTML should appear below:<br>";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Language Test</title>
  <link rel="stylesheet" href="css/language-dropdown.css">
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    .test-box { border: 1px solid #ccc; padding: 20px; margin: 10px 0; }
  </style>
</head>
<body>

<div class="test-box">
  <h2>Language Dropdown Test</h2>
  
  <div class="language-dropdown" style="width:200px;">
    <button type="button" class="lang-btn d-flex align-items-center w-100 px-2 py-1">
      <?php $flag = 'en.png'; $alt = '英語'; if (isset($__site_lang) && $__site_lang==='ja') { $flag = 'jp.png'; $alt = '日本語'; } elseif (isset($__site_lang) && $__site_lang==='zh') { $flag = 'cn.png'; $alt = '中文'; } ?>
      <img class="me-2" src="img/flags/<?php echo $flag; ?>" width="20" alt="<?php echo $alt; ?>">
      <span class="lang-label"><?php echo $alt; ?></span>
      <span class="ms-auto lang-arrow">▼</span>
    </button>
    <div class="lang-content">
      <a href="#" data-lang="en"><img class="me-2" src="img/flags/en.png" width="20" alt="英語">英語</a>
      <a href="#" data-lang="ja"><img class="me-2" src="img/flags/jp.png" width="20" alt="日本語">日本語</a>
      <a href="#" data-lang="zh"><img class="me-2" src="img/flags/cn.png" width="20" alt="中文">中文</a>
    </div>
  </div>

  <p style="margin-top: 20px;">
    Click the dropdown above to test language selection. 
    After selecting a language, the page should reload with that language applied.
  </p>
</div>

<script src="js/language-dropdown.js"></script>
</body>
</html>
