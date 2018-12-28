<?php $header = get_option('header'); ?>
<div class="popup" role="dialog">

    <div class="pop-up_content callback" id="pop-up-question">

        <div class="title">Задать вопрос</div>
        <div class="border border--black"></div>
        <div class="pop-up_subtitle">Оставьте свой номер телефона и мы перезвоним Вам в ближайшее время

        </div>
        <?php echo do_shortcode(get_field('question-short')); ?>
    </div>
    <div class="pop-up_content callback" id="pop-up-callback">

        <div class="title">Заявка</div>
        <div class="border border--black"></div>
        <div class="pop-up_subtitle">Оставьте свой номер телефона и мы перезвоним Вам в ближайшее время

        </div>
        <?php echo do_shortcode($header['header_form']); ?>
    </div>


</div>
<!-- pop-up