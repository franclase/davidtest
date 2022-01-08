<?php

function cargarControlador($controlador)
{
    $nombreControlador = ucwords($controlador) . "Controller";
    $archivoControlador = 'Controlador/' . ucwords($controlador) . '.php';

    if (! is_file($archivoControlador)) {

        $archivoControlador = 'Controlador/' . CONTROLAR_PRINCIPAL . '.php';
    }

    echo $archivoControlador;
    require_once $archivoControlador;
    $control = new $nombreControlador();
    return $control;
}

function cargarAccion($controlador, $accion, $id = null)
{
    if (isset($accion) && method_exists($controlador, $accion)) {
        if ($id == null) {
            $controlador->$accion();
        } else {
            $controlador->$accion($id);
        }
    } else {
        $controlador->ACCION_PRINCIPAL();
    }
}

?>