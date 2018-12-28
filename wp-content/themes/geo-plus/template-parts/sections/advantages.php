<section class="section advantages">
    <div class="container-second">
        <?php if (get_field('advantages-title')): ?>
            <h2 class="title"><?php the_field('advantages-title') ?></h2>
        <?php endif; ?>
        <div class="border border--black"></div>
        <?php if (get_field('advantages-subtitle')): ?>
            <h3 class="subtitle"><?php the_field('advantages-subtitle') ?></h3>
        <?php endif; ?>
        <?php if (have_rows('advantages-list')): ?>
            <ul class="advantages_list">
                <?php while (have_rows('advantages-list')): the_row(); ?>
                    <li class="price_item">
                        <?php if (get_sub_field('advantages-icon')): ?>
                            <div class="price_img">
                                <img src="<?php the_sub_field('advantages-icon') ?>" alt="icon">
                            </div>
                            <div class="advantages_name"><?php the_sub_field('advantages-list-title') ?></div>
                            <?php the_sub_field('advantages-list-desc') ?>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>