<header>
    <div class="logo">Blog app</div>
</header>
<a class="logo" href="/">Blog app</a>
<ul class="header-menu">
    <li class="<?= $_SERVER["REQUEST_URI"] === "/add-article.php" ? "active" : "" ?>">
        <a href="/add-article.php">Ecrire un article</a>
    </li>
</ul>