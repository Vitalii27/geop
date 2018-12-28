<section class="section price" id="prices" style="background-image: url(<?php the_field('price-bg') ?>)">
    <div class="container-second">
        <?php if (get_field('price-title')): ?>
            <h2 class="title"><?php the_field('price-title') ?></h2>
        <?php endif; ?>
        <div class="border border--black"></div>
        <?php if (get_field('price-subtitle')): ?>
            <h3 class="subtitle"><?php the_field('price-subtitle') ?></h3>
        <?php endif; ?>
        <?php if (have_rows('price-list')): ?>
            <ul class="price_list">
                <?php while (have_rows('price-list')): the_row(); ?>
                    <li class="price_item">
                        <?php if (get_sub_field('price-icon')): ?>
                            <div class="price_img">
                                <img src="<?php the_sub_field('price-icon') ?>" alt="icon">
                            </div>
                            <?php the_sub_field('price-text') ?>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <?php if (get_field('price-link-btn')): ?>
            <div class="btn-wrap"><a target="_blank" class="button" href="<?php the_field('price-link-btn') ?>">Карта наших объектов</a>
            </div>
        <?php endif; ?>
    </div>
</section>