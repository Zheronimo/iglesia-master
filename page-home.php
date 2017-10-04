<?php
/*
  * Template name: Home
  * */
get_header(); ?>

<section class="home_slider cf">
    <div class="flexslider homeslider">
        <ul class="slides">
            <?php $slider = ale_sliders_get_slider(ale_get_option('homesliderslug'));  ?>
            <?php if($slider):?>
                <?php foreach ($slider['slides'] as $slide) : ?>
                    <li>
                        <figure>
                            <?php if ($slide['image']) : ?>
                                <img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>" />
                            <?php endif; ?>
                            <?php if($slide['title'] or $slide['description'] or $slide['html']){ ?>
                                <figcaption>
                                    <?php if($slide['title']){ echo '<span class="mainslidertitle">'.$slide['title'].'</span>'; } ?><br />
                                    <?php if($slide['description']){ echo '<span class="mainsliderdesc">'.$slide['description'].'</span>'; } ?><br />
                                    <?php if($slide['url']){ echo '<a href="'.$slide['url'].'" class="sliderlinkmore">'.__('Details ›','aletheme').'</a>'; } ?>
                                </figcaption>
                            <?php } ?>
                        </figure>
                    </li>
                <?php endforeach; ?>
            <?php endif;?>
        </ul>
    </div>
</section>
<section class="our_sermons">
    <div class="wrapper">
        <div class="sermons_top">
            <?php if(ale_get_meta('sermons_title')) { ?>
            <h3 class="sermons_title">
                <?= ale_get_meta('sermons_title'); ?>
            </h3>
            <?php } ?>
            <?php if(ale_get_meta('sermons_text')) { ?>
            <span class="sermons_desc">
                <?= ale_get_meta('sermons_text'); ?>
            </span>
            <?php } ?> 
        </div>
        <div class="sermons_list">
            <div class="sermons_item">
                <div class="item_img">
                    <img src="css/img/sermons/sermons1.jpg" alt="book">
                </div>
                <div class="item_title">
                    <h4>Lorem Ipsum is simply dummy text</h4>
                </div>
                <div class="item_date">
                    <span>
                        25 july 2014
                    </span>
                </div>
            </div>
            <div class="sermons_item">
                <div class="item_img">
                    <img src="css/img/sermons/sermons2.jpg" alt="book">
                </div>
                <div class="item_title">
                    <h4>Lorem Ipsum is simply dummy text</h4>
                </div>
                <div class="item_date">
                    <span>
                        25 july 2014
                    </span>
                </div>
            </div>
            <div class="sermons_item">
                <div class="item_img">
                    <img src="css/img/sermons/sermons3.jpg" alt="book">
                </div>
                <div class="item_title">
                    <h4>Lorem Ipsum is simply dummy text</h4>
                </div>
                <div class="item_date">
                    <span>
                        25 july 2014
                    </span>
                </div>
            </div>
        </div>
        <div class="sermons_content">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
        </div>
    </div>
</section>


<?php get_footer();

