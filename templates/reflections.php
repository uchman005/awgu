
<?php
$sql = "SELECT * FROM `reflections`  \n"
    . "ORDER BY `reflections`.`id` DESC";
    $reflections = mysqli_query($Core->dbCon, $sql);

?>
<section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(<?= $assets ?>/images/A4.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Bishop`s</h6>
                <h1 class="breadcrumbs-custom-title">Reflections</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="./">Home</a></li>
                <li><a href="javascript:void(0)">Reflections</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="section section-lg">
    <div class="container">
        <div class="row row-50 row-xxl-70">
            <?php
            $sql = "SELECT * FROM `reflections` ORDER BY `id` DESC";
            $exec = mysqli_query($Core->dbCon, $sql);
            while ($reflection = mysqli_fetch_object($exec)) : ?>

                <div class="col-md-6 scaleFadeInWrap">
                    <!-- Post Modern-->
                    <div class="wow scaleFadeIn">
                        <article class="post-modern">
                            <a class="post-modern-media" href="./bishop/reflection/<?= $reflection->id ?>">
                                <?php if (isset($reflection->image1) && $reflection->image1 != "") : ?>
                                    <img src="_store/<?= $reflection->image1 ?>" alt="" width="571" height="353">
                                <?php else : ?>
                                    <img src="<?= $assets ?>/images/grid-blog-1-571x353.jpg" alt="" width="571" height="353">
                                <?php endif; ?>

                            </a>
                            <h4 class="post-modern-title"><a class="underlined" href="./bishop/reflection/<?= $reflection->id ?>"><?= $reflection->title ?></a></h4>
                            <ul class="post-modern-meta">
                                <li><?= $Core->GetUserInfo($reflection->user)->name ?></li>
                                <li>
                                    <time datetime="2020"><?= $reflection->created ?></time>
                                </li>
                            </ul>
                            <p class="reflection-body"><?= $reflection->body ?></p>
                            <a href="./bishop/reflection/<?= $reflection->id ?>" class="button">Read More</a>
                        </article>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <script>
            let body = document.querySelectorAll(".reflection-body");
            body.forEach((item) => {
                let text = item.innerText;
                text = text.substring(0, 200);
                item.innerText = text + ".....";
            })
        </script>

    </div>
</section>