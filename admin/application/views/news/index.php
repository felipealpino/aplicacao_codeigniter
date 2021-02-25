<h2> <?php echo $title ?> </h2>


<?php foreach($news as $news_item) : ?>
    <h3> <?php echo $news_item['title'] ?> </h3>  <!-- Onde 'title' é uma coluna do banco de dados -->
    <a href=" <?php echo site_url('news/'.$news_item['uri']); ?> "> Ver noticia </a>
<?php endforeach; ?>