<?php
/*
Plugin Name: Bon System
Description: Плагин для начисления бонов и управления школьниками
Version: 1.0
Author: Алексей
*/

defined('ABSPATH') or die('No script kiddies please!');

// пункт меню в админке
add_action('admin_menu', 'bon_system_menu');

function bon_system_menu() {
    add_menu_page(
        'Bon System',           // Заголовок страницы
        'Bon System',           // Название меню
        'manage_options',       // Права доступа (администратор)
        'bon-system',           // Слаг страницы
        'bon_system_admin_page' // Функция отображения
    );
}

// Содержимое страницы
function bon_system_admin_page() {
    echo '<div class="wrap">';
    echo '<h1>Добро пожаловать в Bon System!</h1>';
    echo '<p>Здесь будет панель администратора.</p>';
    echo '</div>';
}