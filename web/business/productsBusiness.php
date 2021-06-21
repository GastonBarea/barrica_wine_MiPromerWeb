<?php
include_once(DIR_BASE.'DAO/productosDao.php');
function businessGuardarProductos($datos = array()){
  daoGuardarProductos($datos);
}
function businessObtenerProductos(){
return daoObtenerProductos();
}
function businessObtenerProducto($id){
    return daoObtenerProducto($id);
}
function businessModificarProducto($datos = array(), $id){
  daoModificarProducto($datos, $id);
}
function businessBorrarProducto($id){
daoBorrarProducto($id);
}
?>