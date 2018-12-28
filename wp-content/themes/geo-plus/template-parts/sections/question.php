<section class="section question" style="background-image: url(<?php the_field('question-bg') ?>)">
    <div class="container-second">
        <?php if (get_field('question-title')): ?>
            <h2 class="title"><?php the_field('question-title') ?></h2>
        <?php endif; ?>
        <div class="border"></div>
        <?php if (get_field('question-desc')): ?>
            <div class="question_desc">
                <?php the_field('question-desc') ?>
            </div>
        <?php endif; ?>
        <?php if (get_field('question-btn')): ?>
            <div class="btn-wrap">
                <a href="#pop-up-question" class="js-pop-up button"><?php the_field('question-btn') ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>
