{include file="header.tpl"}

<div class="container" id="articlesContainer">
    <div class="post">
        <article>
            <h2 class="title"><?php echo $post['title']?></h2>
            <p class="date"><?php echo $post['date']?></p>
            <div class="thumb">
                <img src="<?php echo path;?>images/<?php echo $post['thumb']?>">
            </div>
            <p><?php echo nl2br($post['content']);?></p>
        </article>
    </div>
</div>

{include file="footer.tpl"}