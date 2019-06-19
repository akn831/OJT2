<!-- header -->
<?php get_header(); ?>

<main>
     <!-- 左上ロゴ -->
     <div class="rogo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/folder/logo.png" alt="">
    </div>

    <!-- トップ画像 -->
    <div class="top">
        
        <?php if(wp_is_mobile()){
            // SP用
            echo do_shortcode('[metaslider id="53"]'); 
        }else {
            // PC用
            echo do_shortcode('[metaslider id="38"]');
        } ?>
        
    </div>

    <div class="rightrogo">
        <img class="rightrogo-pc" src="<?php echo get_template_directory_uri(); ?>/assets/folder/visual_text_pc.png" alt="">
        <img class="rightrogo-sp" src="<?php echo get_template_directory_uri(); ?>/assets/folder/visual_text_sp.png" alt="">
    </div>

    <div>
        <p>進化し続ける「街」<br>アメリカンビレッジマガジン</p>
    </div>
        
<!-- latest -->
    <div>
        <h1>Latest Articles</h1>
        <?php if(have_posts()): ?>

        <ul class="post">
            <?php while(have_posts()): the_post(); ?>
                <li>
                <?php if(has_post_thumbnail()): ?>
                    <img class="image" src="<?php the_post_thumbnail_url(); ?>" alt="">
                <?php else: ?>
                    <img src="http://placehold.jp/300x300.png?text=No Image" alt="">
                <?php endif; ?>
                <span class="date"><?php the_time('Y/m/d'); ?></span>
                <span class="title"><?php the_title(); ?></span>
                <div class="article">
                    <a href="<?php the_permalink(); ?>">READ MORE</a>
                </div>
                </li>
            <?php endwhile; ?>
        </ul>

        <?php endif; ?>
    </div>
</main>


<!-- footer -->
<?php get_footer(); ?>