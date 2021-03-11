<?php

/*
Plugin Name:  Prueba Hola Mundo
Version: 1.0
Description: Convierte el shortcode [holamundo] en <h1>Hola Mundo</h1>
Author: Rodolfo Alvarez
Author URI: https://www.linkedin.com/in/alvarezrodolfo/
License: GPLv2 or later
*/
?>

<?php
// funcion que muestra las opciones del plugin
function helloworld_options() {
    // comprobar si la peticion procede del form
    if (isset($_POST['msg_display'])) {
        update_option('helloworld_msg', $_POST['msg_display']);
    } else update_option('helloworld_msg', '<h1>¡Hola Mundo!</h1>');
 
    echo "<div class='wrap'>";
    echo "<h2>Hola Mundo - Plugin options</h2>";
    echo "<form method='post' action=''>";
    echo "Display: " . get_option('helloworld_msg') . "<br />";
    echo "New Custom Display: <input type='text' name='msg_display' /><br />";
    echo "<input type='submit' name='update' value='Update' />";
    echo "</form>";
    echo "</div>";
}
?>

<?php
// funcion que activa el menu
function hello_world_admin_menu() {
    add_menu_page(
        'Hola Mundo',// page title
        'Hola Mundo',// menu title
        'manage_options',// capability
        'basename(__FILE__)',// menu slug
        'helloworld_options' // callback function
    );
}
add_action('admin_menu', 'hello_world_admin_menu');
?>

<?php
// función del shortcode
function helloworld_shortcode($atts) {

    return get_option('helloworld_msg');
}
add_shortcode('holamundo', 'helloworld_shortcode');
?>