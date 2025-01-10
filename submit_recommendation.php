<?php
// ファイルに投稿内容を保存
$file = 'recommendations.txt';

// POSTデータを取得
$name = $_POST['name'] ?? '匿名';
$station = $_POST['station'] ?? '';
$comment = $_POST['comment'] ?? '';

// データが入力されている場合のみ保存
if (!empty($station) && !empty($comment)) {
    $data = "【名前】$name\n【おすすめ駅】$station\n【コメント】$comment\n\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
}

// 投稿完了後にリダイレクト
header('Location: recommendations.html');
exit;
?>
