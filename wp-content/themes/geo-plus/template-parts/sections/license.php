<section class="section license" id="license" >
    <div class="container-second">
        <?php if (get_field('license-title')): ?>
            <h2 class="title"><?php the_field('license-title') ?></h2>
        <?php endif; ?>
        <div class="border border--black"></div>
        <?php if (have_rows('license-images')): ?>
            <ul class="license_list js-pop-up-img"">
                <?php while (have_rows('license-images')): the_row(); ?>
                    <?php if (get_sub_field('license-url')): ?>
                        <li class="license_item ">
                            <a href="<?php the_sub_field('license-url') ?>" class="lisense_link" >
                                <img src="<?php the_sub_field('license-url') ?>" alt="img" class="licence_img">
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>