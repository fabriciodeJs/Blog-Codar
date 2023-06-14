<?php
include_once('tamplates/header.php');

if (isset($_GET['id'])) {
  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}
?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime delectus eum nobis beatae sed, alias nam ut quos sapiente, aliquid itaque inventore asperiores, nihil accusantium repudiandae distinctio similique recusandae perspiciatis!
      Delectus, ducimus est veritatis iste illo corrupti dolor recusandae possimus, dignissimos facilis rem quis, atque inventore in dolores perspiciatis molestiae. Harum quis accusamus, recusandae ducimus voluptatem officia itaque corporis dolor.
      Fuga repellendus culpa esse? Nulla totam, dolorum labore pariatur a voluptate qui ipsa iste corporis saepe aperiam nemo, ullam ratione illum illo, quidem magni amet impedit exercitationem ipsum sit! Nisi?
      Illo doloremque ex, natus eius, harum esse commodi corporis fugit nemo consequatur iure ab. Debitis rem mollitia ad fugit laborum doloremque, minus nostrum, perferendis blanditiis vitae culpa sed nulla magnam?
      Tempora praesentium debitis ut iure. Voluptatum laudantium minus rerum animi obcaecati tenetur deleniti voluptates eligendi, ut dolorum sequi repudiandae adipisci molestias soluta corrupti! Tempora non, consequatur ipsum voluptatibus itaque quibusdam!
    </p>
    <p class="post-content">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime delectus eum nobis beatae sed, alias nam ut quos sapiente, aliquid itaque inventore asperiores, nihil accusantium repudiandae distinctio similique recusandae perspiciatis!
      Delectus, ducimus est veritatis iste illo corrupti dolor recusandae possimus, dignissimos facilis rem quis, atque inventore in dolores perspiciatis molestiae. Harum quis accusamus, recusandae ducimus voluptatem officia itaque corporis dolor.
      Fuga repellendus culpa esse? Nulla totam, dolorum labore pariatur a voluptate qui ipsa iste corporis saepe aperiam nemo, ullam ratione illum illo, quidem magni amet impedit exercitationem ipsum sit! Nisi?
      Illo doloremque ex, natus eius, harum esse commodi corporis fugit nemo consequatur iure ab. Debitis rem mollitia ad fugit laborum doloremque, minus nostrum, perferendis blanditiis vitae culpa sed nulla magnam?
      Tempora praesentium debitis ut iure. Voluptatum laudantium minus rerum animi obcaecati tenetur deleniti voluptates eligendi, ut dolorum sequi repudiandae adipisci molestias soluta corrupti! Tempora non, consequatur ipsum voluptatibus itaque quibusdam!
    </p>
  </div>
  <aside id="nav-conteinar">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag) : ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $category) : ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>



<?php
include_once('tamplates/footer.php');
?>