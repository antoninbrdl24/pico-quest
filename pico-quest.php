<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Discovering Pico.css</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css" />
    <link rel="stylesheet" href="style.css" />
    <?php include 'data-pico.php'?>
  </head>

  <body>
    <nav>
      <ul>
        <li class="title-li"><strong>Discovering Pico</strong></li>
      </ul>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li>
      <details role="list">
        <summary aria-haspopup="listbox" role="link">Categories</summary>
        <ul role="listbox">
          <li><a>Photos</a></li>
          <li><a>Articles</a></li>
          <li><a>Projetcs</a></li>
        </ul>
      </details>
      </li>
      </ul>
    </nav>
    <div>
      <h1>Journey into Pico.css<h1>
      <a href="#">https://picocss.com</a>
    </div>
    <div class="grid">
    <?php foreach($articles as $title=>$article): ?>
    <article>
      <img  src="<?= $article['image']?>">
      <header><?= $article['title']?></header>
      <?= $article['description'] ?>
      <footer><a href="#">Read more</a></footer>
    </article>
      <?php endforeach ?>
    </div>
    <div class="footer">
    </div>


  </body>
</html>