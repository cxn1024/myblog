<div class="span3 blog-sidebar">
                                
    <h2>热门标签</h2>
    <?php $color = ['red', 'green', 'blue', 'yellow', 'purple']; ?>
    <ul class="tags-list unstyled inline blog-tags">
        <?php foreach($tags as $key => $value): ?>
        <li><a href="/site/index.html?tags=<?php echo $value['name']; ?>" class="label btn <?php echo $color[mt_rand(0, 4)]; ?>"><?php echo $value['name']; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <div class="space20"></div>

    <h2>热门文章</h2>

    <div class="top-news">
        <?php foreach($hot as $key => $value): ?>
        <a href="/site/view.html?id=<?php echo $value['id']; ?>" class="btn <?php echo isset($color[$key]) ? $color[$key] : $color[mt_rand(0, 4)]; ?>">

        <span><?php echo $value['title']; ?></span>

        <em>日期 :  <?php echo date("Y-m-d", $value['create_time']); ?></em>

        <em>

        <i class="icon-tags"></i>

        <?php echo $value['tags']; ?>

        </em>

        </a>
        <?php endforeach; ?>
    </div>

    <div class="space20"></div>

</div>