<section class="section hero js-hero-slide">
    <?php if (have_rows('hero-slide')): $counterSecond = 0; ?>
        <?php while (have_rows('hero-slide')): the_row(); ?>
            <div class="hero_bg" style="background-image: url(<?php the_sub_field('hero_bg') ?>)">
                <div class="container-fluid">
                    <div class="hero_container">
                        <?php if (get_sub_field('hero-title')): ?>
                            <h1 class="hero_title">
                                <?php the_sub_field('hero-title') ?>
                            </h1>
                        <?php endif; ?>
                        <div class="border"></div>
                        <?php if (get_sub_field('hero-desc')): ?>
                            <div class="hero_content">
                                <p> <?php the_sub_field('hero-desc') ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('hero-sales')): ?>
                            <span class="hero_sale"><?php the_sub_field('hero-sales') ?></span>
                        <?php endif; ?>
                        <?php if (have_rows('hero-list')): ?>
                            <div class="hero_list-wrap">
                                <ul class="hero_list">
                                    <?php while (have_rows('hero-list')): the_row(); ?>
                                        <?php if (get_sub_field('hero-item')): ?>
                                            <li class="hero_item">  <?php the_sub_field('hero-item'); ?></li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('btn-text-hero')): ?>
                        <div class="hero_btn">
                            <a href="#pop-up-order<?php echo $counterSecond; ?>" class="js-pop-up button hero_btn-popup"><i
                                        class="fa fa-hand-pointer-o" aria-hidden="true"></i><span><?php the_sub_field('btn-text-hero'); ?></span></a>
                        </div>
                        <?php endif; ?>
                        <div class="popup" role="dialog">
                            <div class="pop-up_content callback" id="pop-up-order<?php echo $counterSecond; ?>">

                                <div class="title">Оформление заказа</div>
                                <div class="border border--black"></div>
                                <div class="pop-up_subtitle">Оставьте свой номер телефона и мы перезвоним Вам в
                                    ближайшее время

                                </div>

                                <?php echo do_shortcode(get_sub_field('hero-shortcod')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $counterSecond++ ?>
        <?php endwhile; ?>
    <?php endif; ?>
</section>