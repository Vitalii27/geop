<section class="section map-section" id="contacts">
    <!--    <div class="map" id="map"></div>-->
    <iframe src="https://yandex.ru/map-widget/v1/-/CBRMUAQmGB" width="100%" height="500" frameborder="1"
            allowfullscreen="true"></iframe>
    <div class="map-section_content">
        <?php if (get_field('contacts-title')): ?>
            <h2 class="title"><?php the_field('contacts-title') ?></h2>
        <?php endif; ?>
        <div class="border border--black"></div>
        <div class="map-section_content-wrap">

            <?php if (get_field('contacts-address')): ?>
                <div class="map-section_address map-section-block">
                    <div class="map-section_title">Адрес:</div>
                    <div class="map-section_link"><?php the_field('contacts-address') ?></div>
                </div>
            <?php endif; ?>
            <?php if (get_field('contacts-tel')): ?>
                <div class="map-section_tel map-section-block">
                    <div class="map-section_title">Телефон:</div>
                    <div class="map-section_link"><?php the_field('contacts-tel') ?></div>
                </div>
            <?php endif; ?>
            <?php if (get_field('contacts-email')): ?>
                <div class="map-section_email map-section-block">
                    <div class="map-section_title">Email:</div>
                    <a href="mailto:<?php the_field('contacts-email') ?>"
                       class="map-section_link"><?php the_field('contacts-email') ?></a>
                </div>
            <?php endif; ?>
            <?php if (get_field('contacts-vk')): ?>
                <div class="map-section_vk map-section-block">
                    <div class="map-section_title">Мы в контакте</div>
                    <a href="<?php the_field('contacts-vk') ?>"
                       class="map-section_link"><?php the_field('contacts-vk') ?></a>
                </div>
            <?php endif; ?>
            <?php if (get_field('contacts-instagram')): ?>
                <div class="map-section_inst map-section-block">
                    <div class="map-section_title">Мы в instagram</div>
                    <a href="<?php the_field('contacts-instagram') ?>"
                       class="map-section_link"><?php the_field('contacts-instagram') ?></a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>