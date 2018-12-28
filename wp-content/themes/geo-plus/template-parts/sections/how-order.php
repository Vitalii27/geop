<section class="section how-order" style="background-image: url(<?php the_field('how-order_bg') ?>)">
    <div class="container-fluid">
        <?php if (get_field('how-order_title')): ?>
        <h2 class="title"><?php the_field('how-order_title') ?></h2>
        <?php endif; ?>
        <div class="border border--black"></div>
        <?php if (have_rows('how-order_list')): ?>
        <ul class="how-order_list">
            <?php while (have_rows('how-order_list')): the_row(); ?>
            <li class="how-order_item">
                <img src="<?php the_sub_field('how-order_img') ?>" alt="img" class="how-order_img">
                <div class="how-order_text">
                    <div class="how-order_name"><?php the_sub_field('how-order_name') ?></div>
                  <?php the_sub_field('how-order_desc') ?>
                </div>

            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </div>
</section>