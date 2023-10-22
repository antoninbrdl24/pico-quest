<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Discovering Pico.css</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css"> 
    <link rel="stylesheet" href="style.css" />
    <?php include 'data-pico.php'?>
  </head>

  <body>
  <nav>
      <ul>
        <li ><a><strong>Discovering Pico</strong</a></li>
      </ul>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        
          <details role="list">
            <summary aria-haspopup="listbox" role="button" >Categories</summary>
            <ul role="listbox">
              <li><a>Photos</a></li>
              <li><a>Articles</a></li>
              <li><a>Projetcs</a></li>
            </ul>
          </details>
      </ul>
  </nav>
    <main class="container-fluid">
   
    <div>
      <h2>Journey into Pico.css<h2>
      <h3><a href="#">https://picocss.com</a></h3>
    </div>
    <section class="grid">
    <?php foreach($articles as $title=>$article): ?>
    <article>
      <header><img src="<?= $article['image']?>"></header>
      <h4><?= $article['title']?></h4>
      <p><?= $description=$article['description'];?></p>

      <footer>Read more</footer>
    </article>
      <?php endforeach ?>
    </section>
  

    </main>
    <div class="footer">
      
      <h4>The CSS Frameworks are very useful</h4>
      <p>Learning them comes with practice</p>
      <footer>&copy; Wilders | images @picsum</footer>
  </div>
  </body>
</html>