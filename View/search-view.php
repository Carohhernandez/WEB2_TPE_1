<?php require 'header.php' ?>

<div class="container" id="articlesContainer">

    <?php foreach ($result as $post):?>
        <div class="post">
            <article>
                <h2 class="title"><a href="<?php echo path;?>single.php?id=<?php echo $post['id']?>"><?php echo $post['title']?></a></h2>
                <p class="date"><?php echo $post['date']?></p>
                <div class="thumb">
                    <a href="<?php echo path;?>single.php?id=<?php echo $post['id']?>"><img src="<?php echo path;?>images/<?php echo $post['thumb']?>"></a>
                </div>
                <p class="extract"><?php echo $post['subtitle']?></p>
                <a class="continue" href="<?php echo path;?>single.php?id=<?php echo $post['id']?>">More...</a>
            </article>
        </div>
    <?php endforeach ?>

    <?php require './pagination.php' ?>
</div>

<?php require 'footer.php' ?>