<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="?page=home">Link</a></li>
                <li><a href="?page=home">Link</a></li>
                <li><a href="?page=home">Link</a></li>
                <li><a href="?page=home">Link</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <nav>
            <ul>
                <li><a href="?page=1">Link</a></li>
                <li><a href="?page=2">Link</a></li>
                <li><a href="?page=3">Link</a></li>
                <li><a href="?page=4">Link</a></li>
                <li><a href="?page=5">Link</a></li>
                <li><a href="?page=6">Link</a></li>
                <li><a href="?page=7">Link</a></li>
                <li><a href="?page=8">Link</a></li>
                <li><a href="?page=9">Link</a></li>
                <li><a href="?page=10">Link</a></li>
            </ul>
        </nav>
        <section>
<?php
if (isset($_GET['page'])) {
    $page = 'pages/' . $_GET['page'] . '.php';
    $pages = glob('pages/*.php');
    if (in_array($page, $pages)) {
        include $page;
    } else {
        include 'pages/home.php';
    }
} else {
    include 'pages/home.php';
}
echo "\n";
echo "<p><em>Last updated: 2016-01-01</em></p>\n";
?>
        </section>
    </main>
    <footer>
        <a href="#">Go to top</a>
    </footer>
</body>
</html>