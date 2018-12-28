<section class="section services" id="cad">
    <div class="container-second">
        <?php if (get_field('services-title')): ?>
            <h2 class="title"><?php the_field('services-title') ?></h2>
        <?php endif; ?>
        <div class="border border--black"></div>
        <?php if (get_field('services-subtitle')): ?>
            <h4 class="subtitle"><?php the_field('services-subtitle') ?></h4>
        <?php endif; ?>
        <?php if (have_rows('services_list')): $count = 0; ?>
            <ul class="services_list">
                <?php while (have_rows('services_list')): the_row(); ?>
                    <li class="services_item">
                        <?php if (get_sub_field('services_img')): ?>
                            <div class="services_wrap">
                                <a class="js-pop-up" href="#popup<?php echo $count; ?>"> <img
                                            src="<?php the_sub_field('services_img') ?>" alt="img" class="services_img"></a>
                            </div>
                        <?php endif; ?>
                        <div class="border border--black"></div>
                        <?php if (get_sub_field('services_name')): ?>
                            <div class="services_item-name"><?php the_sub_field('services_name') ?></div>
                        <?php endif; ?>
                        <?php if (get_sub_field('services_name')): ?>
                            <div class="services_popup-block popup">
                                <div class="pop-up_content services_popup-content"
                                     id="popup<?php echo $count; ?>">
                                    <h2 class="title"> <?php the_sub_field('services_name'); ?></h2>
                                    <?php the_sub_field('popup-text1'); ?>
                                    <div class="service-pop-up_wrapper">
                                        <?php echo do_shortcode(get_sub_field('popup-shortcode')); ?>
                                      <div class="service-pop-up_desc">
                                          <p>
                                              ООО "Гео Полюс"<br>

                                              Адрес: г. Санкт-Петербург, ул. Школьная, д. 15<br>

                                              Email: geopolus@list.ru<br>

                                              Тел.: 981-72-01
                                          </p>
                                      </div>

                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </li>
                    <?php $count++ ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>