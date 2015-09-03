var divname;

//var lng_idmarca = document.getElementById('lng_idmarca');
//var int_recorrido = document.getElementById('int_recorrido');

var http = getXmlHttpObject();

function handleHttpResponse()
{
 /*   
    if (http.readyState == 0)
    {
        results = "Error al Cargar los datos";
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname).innerHTML = results;
    }

    if (http.readyState == 1)
    {
        results = "";
        //results = '<img src="../imagenes/fetching.gif">';
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname).innerHTML = results;
    }
*/
    if (http.readyState == 4)
    {
        results = http.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname).innerHTML = results;

    }
}

function nuevoAjax()
{
    var xmlhttp = false;
    try
    {
        // No IE
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
        try
        {
            // IE 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function getXmlHttpObject()
{
    var xmlhttp;
    /*@cc_on
     @if (@_jscript_version >= 5)
     try
     {
     xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
     }
     catch (e)
     {
     try
     {
     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
     }
     catch (e)
     {
     xmlhttp = false;
     }
     }
     @else
     xmlhttp = false;
     @end @*/

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
    {
        try
        {
            xmlhttp = new XMLHttpRequest();
        }
        catch (e)
        {
            xmlhttp = false;
        }
    }
    return xmlhttp;
}

function dependienteModelosBuscador(valor){

	document.getElementById('modelo').selectedIndex = "0";
	
	if (valor != ""){

	    divname = "dependienteModelosBuscador";
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'ModelosBuscador/'+ valor, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);
	}else{
		
		document.getElementById('modelo').selectedIndex = "0";
	}
}

function dependienteMarcasBuscador(valor){

	document.getElementById('marca').selectedIndex = "0";
	document.getElementById('modelo').selectedIndex = "0";
	
	if (valor != ""){
	
        divname = "dependienteMarcasBuscador";
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'MarcasBuscador/'+valor, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);	    
	}else{
		
		document.getElementById('marca').selectedIndex = "0";
		document.getElementById('modelo').selectedIndex = "0";
	}
}

function dependienteModelos(valor){

	document.getElementById('lng_idmodelo').selectedIndex = "0";
	
	if (valor != ""){

	    divname = "dependienteModelos";
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'Modelos/'+ valor, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);
	}else{
		
		document.getElementById('lng_idmodelo').selectedIndex = "0";
	}
}

function dependienteMarcas(valor){

	
	document.getElementById('lng_idmarca').selectedIndex = "0";
	document.getElementById('lng_idmodelo').selectedIndex = "0";
	
	if (valor != ""){
	
        divname = "dependienteMarcas";
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'Marcas/'+valor, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);

        setTimeout('dependienteCilindrada('+valor+')',500);
	}else{
		
		document.getElementById('lng_idmarca').selectedIndex = "0";
		document.getElementById('lng_idmodelo').selectedIndex = "0";
	}
}

function dependienteCilindrada(valor){

    //alert(valor);
    divname = "dependienteCilindrada";
    //http.open("GET", 'paginas' + url, true);
    http.open("GET", 'Cilindrada/'+ valor, true);
    http.onreadystatechange = handleHttpResponse;
    http.send(null);

}
/************************************************************************************************************/
function buscarCiudadPorPais(lng_idpais){
	
	//alert(lng_idpais);
	document.getElementById('lng_idciudad').value = "";
    document.getElementById('buscador').value = "";
   	
    divname = "dependiente2";
    
    if (lng_idpais != ""){
		document.getElementById(divname).style.display = 'none';
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'Pais/'+lng_idpais, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);
    }else{
    	document.getElementById(divname).style.display = 'none';
    }
}

function verCiudades(){
	
	var lng_idpais = document.getElementById('lng_idpais').value;
	buscarCiudadPorPais(lng_idpais);
	divname = "dependiente2";
	
	if(lng_idpais != ""){
		document.getElementById(divname).style.display = 'inline';
	}else{
		document.getElementById(divname).style.display = 'none';
	}
}

function buscarCiudadPorLetra(letra){

    var lng_idpais = document.getElementById('lng_idpais').value;
    var buscador = document.getElementById('buscador').value;
       
    divname = "dependiente2";
    
    if ((lng_idpais != "") && (buscador != "")){
    	document.getElementById(divname).style.display = 'inline';
        //http.open("GET", 'paginas' + url, true);
        http.open("GET", 'Ciudades/'+ letra + '/Pais/'+lng_idpais, true);
        http.onreadystatechange = handleHttpResponse;
        http.send(null);
        
    }else{
    	document.getElementById(divname).style.display = 'none';
    }
}

function seleccion(id,ciudad){
    
	divname = "dependiente2";
	document.getElementById(divname).style.display = 'none';
	
	document.getElementById('lng_idciudad').value = id;
    document.getElementById('buscador').value = ciudad;
}

/********************************************	BUSCADOR**********************************************************************************/

function buscarCiudadPorPais_Buscador(lng_idpais){
	
	document.getElementById('ciudad').value = "";
    document.getElementById('buscador2').value = "";
   	
    divname = "divBuscador";
    
    if (lng_idpais != ""){
		document.getElementById(divname).style.display = 'none';
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'BuscadorPais/'+lng_idpais, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);
    }else{
    	document.getElementById(divname).style.display = 'none';
    }
}

function verCiudades_Buscador(){
	
	var lng_idpais = document.getElementById('pais').value;
	buscarCiudadPorPais_Buscador(lng_idpais);
	divname = "divBuscador";
	
	if(lng_idpais != ""){
		document.getElementById(divname).style.display = 'inline';
	}else{
		document.getElementById(divname).style.display = 'none';
	}
}

function buscarCiudadPorLetra_Buscador(letra){

    var lng_idpais = document.getElementById('pais').value;
    var buscador = document.getElementById('buscador2').value;
       
    divname = "divBuscador";
    
    if ((lng_idpais != "") && (buscador != "")){
    	document.getElementById(divname).style.display = 'inline';
        //http.open("GET", 'paginas' + url, true);
        http.open("GET", 'BuscadorCiudades/'+letra+'/Pais/'+lng_idpais, true);
        http.onreadystatechange = handleHttpResponse;
        http.send(null);
        
    }else{
    	document.getElementById(divname).style.display = 'none';
    }
  
}

function seleccion_Buscador(id,ciudad){
    
	divname = "divBuscador";
	document.getElementById(divname).style.display = 'none';
	
	document.getElementById('ciudad').value = id;
    document.getElementById('buscador2').value = ciudad;
}

/************************************************************************************************************/

function paginar(valor){

	document.getElementById('pag').value = valor;
    divname = "results-holder";
   
    paginas = Number(document.getElementById('paginas').value);

    for (x = 1; x <= paginas; x++){
        var ele = document.getElementById("numeroPag"+x)
        ele.setAttribute('class', '');     
    }
    
    var ele = document.getElementById("numeroPag"+valor)
    ele.setAttribute('class', 'active');
   
    //http.open("GET", 'paginas' + url, true);
    http.open("GET", 'Pagina/'+ valor, true);
    http.onreadystatechange = handleHttpResponse;
    http.send(null);

}

function siguiente(){
	
	valor = Number(document.getElementById('pag').value) + 1;
	paginas = Number(document.getElementById('paginas').value);
	
	if(valor <= paginas ){
		document.getElementById('pag').value = valor;
		paginar(valor);
	}
}

function anterior(){
	
	valor = Number(document.getElementById('pag').value) - 1;

	if(valor > 0){
		document.getElementById('pag').value = valor;
		paginar(valor);
	}
}

function oir2(){
	document.getElementById('blb_img').addEventListener('change', blb_imgUser, false);
}

function blb_imgUser(evt) {

    var files = evt.target.files; // FileList object
    //Obtenemos la imagen del campo "file". 
    for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imágenes.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        reader.onload = (function (theFile) {
            return function (e) {
                // Creamos la imagen.
                //document.getElementById("papa").innerHTML = ['Nombre: ', escape(theFile.name), ' || Tamanio: ', escape(theFile.size), ' bytes || type: ', escape(theFile.type), '<br /><img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                
                document.getElementById("imgUser").innerHTML = ['<img class="img-responsive img-rounded" style="width:250px" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }

    return true;
}

function validarRadio(nombre){

    var ele = document.getElementById(nombre+"_validar")
    ele.setAttribute('class', 'fa fa-check');
    ele.setAttribute('style', 'color: green');
}

function soloEnVenezuela(nombre){

	var t = document.getElementById(nombre);
	var selectedText = t.options[t.selectedIndex].text;
			
	if(selectedText == "Venezuela"){
		
		document.getElementById('str_moneda').selectedIndex = 0;
		document.getElementById('monedas_validar').style.display = "inline";
		
	}else{

		document.getElementById('str_moneda').selectedIndex = 0;
		document.getElementById('monedas_validar').style.display = "none";
		
	}
}

//Esta funcion la llamo desde:
//cabeza.blade.php (evento "onload") y desde el select de lng_idtipo_vehiculo (evento "onchange")
function formularioDinamico(){
 
    var t = document.getElementById("lng_idtipo_vehiculo");
    var selectedText = t.options[t.selectedIndex].text;
    
    if (selectedText == "Ambulancias")
    {
        document.getElementById('ambulancias').style.display = "inline";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";

    }else if (selectedText == "Autobuses"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "inline";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";

    }else if (selectedText == "Camiones"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        //*************Comparten el campo int_carga******************
        document.getElementById('camiones').style.display = "inline";        
        document.getElementById('gruas').style.display = "inline";
        //***********************************************************
        document.getElementById('kartings').style.display = "none";

    } else if (selectedText == "Carros y Camionetas"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";

    }else if (selectedText == "Gruas"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "inline";
        document.getElementById('kartings').style.display = "none";
        
    }else if (selectedText == "Carros de Golf"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        //*************Comparten el campo int_carga******************
        document.getElementById('gruas').style.display = "inline";
        //***********************************************************
        document.getElementById('kartings').style.display = "none";        

    }else if (selectedText == "Kartings"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "inline";
    
    }else{

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";
    }   

    ImagenesGaleria();
}

function confirmar() {
    
    if (confirm("¿Completó satisfactoriamente los datos solicitados?") == true) {

       document.getElementById("formularioVehiculo").submit();
        
    }
}

function isValidUrl(url){

    var regex=/^(ht|f)tps?:\/\/\w+([\.\-\w]+)?\.([a-z]{2,4}|travel)(:\d{2,5})?(\/.*)?$/i
    return regex.test(url);
}

function validarUrl(valor)  {
    if(!isValidUrl(valor) )
    {
        alert("La dirección URL es incorrecta");
        document.getElementById('str_video').focus();
        document.getElementById('str_video').value = "";
        return (false);
    }
}

/****Imagenes****/
function botonCropVisible(valor){
	
	id = "btnCrop-" + valor;	
	var boton =  document.getElementById(id);
    boton.style.display="inline"; 	
    boton.style.position="relative";
    
    for (x = 0; x <6;x++){
    	
    	if (x != valor){
    		
    		botonCropHidden(x)
    	}
    }
}

function botonCropHidden(valor){
	id = "btnCrop-" + valor;	
	var boton =  document.getElementById(id);
    boton.style.display="none"; 	
    boton.style.position="absolute";
}

function popupVisible(){
	document.getElementById('popup').style.visibility="visible"; 
}

function popupHidden(){
	document.getElementById('popup').style.visibility="visible"; 
	var status = document.getElementById('popup').style.visibility="hidden";  
    botonCropHidden('0');botonCropHidden('1');botonCropHidden('2');
    botonCropHidden('3');botonCropHidden('4');botonCropHidden('5'); 
}

// Popup Visible  + Boton Visible
/*
document.querySelector('.cropped-0').addEventListener("click", function() {	popupVisible(); botonCropVisible('0'); })
document.querySelector('.cropped-1').addEventListener("click", function() {	popupVisible(); botonCropVisible('1'); })
document.querySelector('.cropped-2').addEventListener("click", function() {	popupVisible(); botonCropVisible('2'); })
document.querySelector('.cropped-3').addEventListener("click", function() {	popupVisible(); botonCropVisible('3'); })
document.querySelector('.cropped-4').addEventListener("click", function() {	popupVisible(); botonCropVisible('4'); })
document.querySelector('.cropped-5').addEventListener("click", function() {	popupVisible(); botonCropVisible('5'); })
// Popup Hidden  + Boton Hidden
document.querySelector('.close').addEventListener("click", function() { popupHidden();})
*/
/////////////////////////////////////////////////////////////////////////////// 
     
    function ImagenesGaleria() {
        var options =
        {
            imageBox: '.imageBox',
            thumbBox: '.thumbBox',
            spinner: '.spinner',
            imgSrc: 'avatar1.png'
        }
        var cropper = new cropbox(options);
        
        function croppedImage(valor){	
			var clase = ".cropped-" + valor;		
			var img = cropper.getDataURL();
			var tagImage = '<img class="img-responsive" src="'+img+'">';
			var nameInputHidden = 'blb_img' + valor;
			var inputHiddenImage = '<input type="hidden" name="'+ nameInputHidden +'" value="'+img+'">';
	    	document.querySelector(clase).innerHTML = tagImage+inputHiddenImage;
	    	popupHidden(); 
		}

        document.querySelector('#file').addEventListener('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = new cropbox(options);
            }
            reader.readAsDataURL(this.files[0]);
            this.files = [];
        })        
        document.querySelector('#btnCrop-0').addEventListener('click', function(){ croppedImage('0');document.getElementById('file').value = "" })
        document.querySelector('#btnCrop-1').addEventListener('click', function(){ croppedImage('1');document.getElementById('file').value = "" })
        document.querySelector('#btnCrop-2').addEventListener('click', function(){ croppedImage('2');document.getElementById('file').value = "" })
        document.querySelector('#btnCrop-3').addEventListener('click', function(){ croppedImage('3'); })
        document.querySelector('#btnCrop-4').addEventListener('click', function(){ croppedImage('4'); })
        document.querySelector('#btnCrop-5').addEventListener('click', function(){ croppedImage('5'); })

        // Maximizar
        document.querySelector('#btnZoomIn').addEventListener('click', function(){
            cropper.zoomIn();
        })
        // Minimizar
        document.querySelector('#btnZoomOut').addEventListener('click', function(){
            cropper.zoomOut();
        })
    };

/******************************************************************************************************/

function buscador(){

    var valor = "Buscando....";
    alert(valor)
}