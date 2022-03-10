<!DOCTYPE html>
<html>
    <head>
     <title>My BLog</title>
     <link rel="stylesheet" href="/app.css" />
    </head>
    <body>
       <?php foreach ($posts as $post) {?>
        <article>
            <h1>
                <a href="/posts/<?=$post->linkTo; ?>">
                    <?=$post->title; ?>
                </a>
            </h1>
            <div>
                <?=$post->exceprt   ; ?>
            </div>
       </article>
       <?php }?>
    </body>
</html>