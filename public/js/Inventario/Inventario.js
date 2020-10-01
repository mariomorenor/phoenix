function mostrar_submenu(elemento) {
    if (!elemento.hasClass('listado')) {
        $('#sidebar-container ul').removeClass('listado');
        elemento.addClass('listado');
    } else {
        $('#sidebar-container ul').removeClass('listado');
    }
}

function menu_activo(elemento) {
   rotar_flechita(elemento.children().children());
    if (!elemento.hasClass('menu_activo')) {
        $('.menu_activo').removeClass('menu_activo');
        elemento.addClass('menu_activo');
    }else{
        $('.menu_activo').removeClass('menu_activo');
    }
}

function rotar_flechita(elemento) {
    if (!elemento.hasClass('rotate')) {
        $('.rotate').removeClass('rotate');
        elemento.addClass('rotate');
    }else{
        $('.rotate').removeClass('rotate');
    }
}

function submenu_activo(elemento){
    if (!elemento.hasClass('link_activo')) {
        $('.link_activo').removeClass('link_activo');
        elemento.addClass('link_activo');
    }
}