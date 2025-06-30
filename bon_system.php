<?php
/*
Plugin Name: Bon System
Text Domain: bon-system
Plugin URI: https://github.com/AlekseyIrlik/bon-system
Description: Плагин для начисления бонов и управления школьниками
Version: 0.1
Author: Aleksey Irlik
*/

defined('ABSPATH') or die('No script kiddies please!');

//Хук создания пунктов меню в админке
add_action('admin_menu', 'show_bon_system_menu');


// Инициализация разделов в админке
function show_bon_system_menu()
{
    add_menu_page(
        'Bon System',           // Заголовок страницы
        'Bon System',           // Название меню
        'manage_options',       // Права доступа (администратор)
        'bon-system',           // Слаг страницы
        'bon_system_admin_page', // Функция отображения
        'dashicons-money-alt', // Иконка
        // position of menu: int | null
    );
}

// Содержимое страницы Bon System
function bon_system_admin_page()
{
    echo '<div class="wrap">';
    echo '<h1>Добро пожаловать в Bon System!</h1>';
    echo '<p>Здесь будет панель администратора.</p>';
    echo '</div>';
}