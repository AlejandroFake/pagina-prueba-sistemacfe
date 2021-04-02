$(document).ready(function(){ //cuando el html fue cargado iniciar
    //cuando el html fue cargado iniciar

    //añado la posibilidad de editar al presionar sobre edit
    $('.modal').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        jQuery.facebox({ div: '#'+params.id });//muestro el modal con los parametros segun la fila
    })

    $('.modalEn').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        jQuery.facebox({ div: '#E'+params.id });//muestro el modal con los parametros segun la fila
    })

})