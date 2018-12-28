<?php

/**
 * WordPress theme settings API class
 *
 */
if (!class_exists('Geo_Settings_API')):
    class Geo_Settings_API
    {

        private $settings_api;

        function __construct()
        {
            $this->settings_api = new WeDevs_Settings_API;

            add_action('admin_init', array($this, 'admin_init'));
            add_action('admin_menu', array($this, 'admin_menu'));
        }

        function admin_init()
        {

            //set the settings
            $this->settings_api->set_sections($this->get_settings_sections());
            $this->settings_api->set_fields($this->get_settings_fields());

            //initialize settings
            $this->settings_api->admin_init();
        }

        function admin_menu()
        {
            add_options_page('Theme Settings', 'Theme Settings', 'delete_posts', 'settings_api_test', array(
                $this,
                'theme_setting_page'
            ));
        }

        function get_settings_sections()
        {
            $sections = array(
                array(
                    'id' => 'header',
                    'title' => __('Header Settings', 'geo')
                ),
                array(
                    'id' => 'footer',
                    'title' => __('Footer Settings', 'geo')
                )


            );

            return $sections;
        }

        /**
         * Returns all the settings fields
         *
         * @return array settings fields
         */
        function get_settings_fields()
        {
            $settings_fields = array(



//  array(
//                        'name' => 'action-po',
//                        'label' => __('Дата проведения ПО', 'geo'),
//                        'type' => 'text',
//
//                    ), array(
//                        'name' => 'action-section-month',
//                        'label' => __('Месяц', 'geo'),
//                        'type' => 'text',
//
//                    ),array(
//                        'name' => 'action-old-price',
//                        'label' => __('Старая цена', 'geo'),
//                        'type' => 'text',
//
//                    ),array(
//                        'name' => 'action-new-price',
//                        'label' => __('Новая цена', 'geo'),
//                        'type' => 'text',
//
//                    ),
//                    array(
//                        'name' => 'action-form',
//                        'label' => __('Шорткод формы', 'geo'),
//                        'type' => 'text',
//
//                    ),
//                    array(
//                        'name' => 'action-year',
//                        'label' => __('Год', 'geo'),
//                        'type' => 'text',
//
//                    ), array(
//                        'name' => 'action-month',
//                        'label' => __('Месяц', 'geo'),
//                        'type' => 'text',
//
//                    ), array(
//                        'name' => 'action-day',
//                        'label' => __('День', 'geo'),
//                        'type' => 'text',
//
//                    ), array(
//                        'name' => 'action-hour',
//                        'label' => __('Час', 'geo'),
//                        'type' => 'text',
//
//                    ), array(
//                        'name' => 'action-minute',
//                        'label' => __('Минута', 'geo'),
//                        'type' => 'text',
//
//                    ), array(
//                        'name' => 'action-second',
//                        'label' => __('Секунда', 'geo'),
//                        'type' => 'text',

                'footer' => array(
                    array(
                        'name' => 'footer-left',
                        'label' => __('Текст слева', 'geo'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer-tel',
                        'label' => __('Телефон', 'geo'),
                        'type' => 'text',
                        'default' => '',
                    ),  array(
                        'name' => 'footer-address',
                        'label' => __('Адрес', 'geo'),
                        'type' => 'text',
                        'default' => '',
                    ),  array(
                        'name' => 'footer-email',
                        'label' => __('Email', 'geo'),
                        'type' => 'text',
                        'default' => '',
                    ),

                ),
                'header' => array(
                    array(
                        'name' => 'header-logo',
                        'label' => __('Логотип', 'geo'),
                        'type' => 'file',
                        'default' => '',
                    ),
                    array(
                        'name' => 'header_top-text',
                        'label' => __('Телефон текст', 'geo'),
                        'type' => 'text',
                        'default' => 'Тел.: 981-72-01',
                    ), array(
                        'name' => 'header_nav-text',
                        'label' => __('Текст над меню', 'geo'),
                        'type' => 'text',

                    ),array(
                        'name' => 'header_form',
                        'label' => __('Шорткод формы', 'geo'),
                        'type' => 'text',

                    )
                )
            );

            return $settings_fields;
        }


        function theme_setting_page()
        {
            echo '<div class="wrap">';

            $this->settings_api->show_navigation();
            $this->settings_api->show_forms();

            echo '</div>';
        }

        /**
         * Get all the pages
         *
         * @return array page names with key value pairs
         */
        function get_pages()
        {
            $pages = get_pages();
            $pages_options = array();
            if ($pages) {
                foreach ($pages as $page) {
                    $pages_options[$page->ID] = $page->post_title;
                }
            }

            return $pages_options;
        }

    }

    new Geo_Settings_API();

endif;