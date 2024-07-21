<?php

// Registra el componente
ossn_register_callback('ossn', 'init', 'imagezoom_init');

function imagezoom_init() {
    ossn_extend_view('css/ossn.default', 'imagezoom/css');
    ossn_extend_view('js/ossn.site', 'imagezoom/js');
}
