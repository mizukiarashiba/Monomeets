<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Booklist</title>
    </head>
    <body>
        <a href="booklist.php"><h1>Booklist</h1></a>
        <h2>書籍の登録フォーム</h2>
        <form action="booklist.php" method="POST">
            <input type="text" name="book_title" placeholder="書籍タイトルを入力" required>
            <input type="submit" name="submit_add_book" value="登録">
        </form>
        <h2>登録された書籍一覧</h2>
        <ul>
            <li>はじめてのWebアプリケーション</li>
            <li>かんたん！PHPプログラミング</li>
            <li>PHP+MySQLで作るWebアプリケーション</li>
        </ul>
    </body>
</html>