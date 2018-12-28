<section class="section about" id="about">
    <div class="container-second">
        <div class="about-content">
            <?php if (get_field('about-title')): ?>
                <h2 class="title"><?php the_field('about-title') ?></h2>
            <?php endif; ?>
            <div class="border border--black"></div>
            <?php if (get_field('about-desc')): ?>
                <div class="about_desc">
                    <?php the_field('about-desc') ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>