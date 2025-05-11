・cssが読み込まれない

x
<link rel="stylesheet" href="style.css">

o get_template_directory_uri() の呼び出しが必要
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">

参考
https://qiita.com/9ever/items/2493afd47b73a5ba1827#cssjs%E7%94%BB%E5%83%8F%E3%81%AE%E5%8F%82%E7%85%A7%E5%85%88%E3%82%92%E4%BF%AE%E6%AD%A3%E3%81%99%E3%82%8B

やりたいこと
・レスポンシブ