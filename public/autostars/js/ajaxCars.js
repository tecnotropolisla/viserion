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

function dependienteModelos(valor){

	if (valor != ""){
		/*
	    var ele = document.getElementById("lng_idmodelo_validar")
	    ele.setAttribute('class', 'fa fa-asterisk');
	    ele.setAttribute('style', 'color: red');
		*/
	    divname = "dependienteModelos";
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'Modelos/'+ valor, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);
	}
}

function dependienteMarcas(valor){

	if (valor != ""){
		/*
	    var ele = document.getElementById("lng_idmodelo_validar")
	    ele.setAttribute('class', 'fa fa-asterisk');
	    ele.setAttribute('style', 'color: red');
		*/
	
	    divname = "dependienteMarcas";
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'Marcas/'+ valor, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);
	}

}

function buscarCiudadPorPais(lng_idpais){
	
	//alert(lng_idpais);
	document.getElementById('lng_idciudad').value = "";
    document.getElementById('buscador').value = "";
    
    /*
	var ele = document.getElementById("lng_idciudad_validar")
    ele.setAttribute('class', 'fa fa-asterisk');
    ele.setAttribute('style', 'color: red');
    */
	
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

    /*
    var ele = document.getElementById("lng_idciudad_validar")
    ele.setAttribute('class', 'fa fa-asterisk');
    ele.setAttribute('style', 'color: red');	
	*/

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
    
    var ele = document.getElementById("lng_idciudad_validar")
    ele.setAttribute('class', 'fa fa-check');
    ele.setAttribute('style', 'color: green');	 
   
}

function paginar(valor){

	document.getElementById('pag').value = valor;
    divname = "results-holder";
   
    paginas = Number(document.getElementById('paginas').value);

    for ($x = 1; $x <= paginas; $x++){
        var ele = document.getElementById("numeroPag"+$x)
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

function oir(){

    document.getElementById('blb_img0').addEventListener('change', blb_img0, false);
    document.getElementById('blb_img1').addEventListener('change', blb_img1, false);
    document.getElementById('blb_img2').addEventListener('change', blb_img2, false);
    document.getElementById('blb_img3').addEventListener('change', blb_img3, false);
    document.getElementById('blb_img4').addEventListener('change', blb_img4, false);
    document.getElementById('blb_img5').addEventListener('change', blb_img5, false);
    
}

function blb_img0(evt) {

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
                
                document.getElementById("img0").innerHTML = ['<img class="img-responsive img-rounded" style="width:250px" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}

function blb_img1(evt) {

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
                
                document.getElementById("img1").innerHTML = ['<img class="img-responsive img-rounded" style="width:250px" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}

function blb_img2(evt) {

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
                
                document.getElementById("img2").innerHTML = ['<img class="img-responsive img-rounded" style="width:250px" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}

function blb_img3(evt) {

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
                
                document.getElementById("img3").innerHTML = ['<img class="img-responsive img-rounded" style="width:250px" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}

function blb_img4(evt) {

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
                
                document.getElementById("img4").innerHTML = ['<img class="img-responsive img-rounded" style="width:250px" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}

function blb_img5(evt) {

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
                
                document.getElementById("img5").innerHTML = ['<img class="img-responsive img-rounded" style="width:250px" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
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

function validar(valor, nombre){

    //alert(valor + "-" + nombre);
/*
    campo = document.getElementById(nombre);

    if(campo.value == "" || campo.value == "0") 
    {

        var ele = document.getElementById(nombre+"_validar")
        ele.setAttribute('class', 'fa fa-asterisk');
        ele.setAttribute('style', 'color: red');

    }else{

        var ele = document.getElementById(nombre+"_validar")
        ele.setAttribute('class', 'fa fa-check');
        ele.setAttribute('style', 'color: green');

    }

    */
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

function imagenppal(valor,nombre){

    //alert(valor +"--"+ nombre);

    for (var i = 0; i < 6; i++){

         document.getElementById("principal"+i).value = "0";
     }

    var campo = document.getElementById(nombre);
    campo.value = valor;

}

function camposPublicar(){
	
	formularioDinamico();

}

function formularioDinamico(){
 
    var t = document.getElementById("lng_idtipo_vehiculo");
    var selectedText = t.options[t.selectedIndex].text;
     
    document.getElementById('lng_idmarca').selectedIndex = 0
    document.getElementById('lng_idmodelo').selectedIndex = 0
    
    if (selectedText == "Ambulancias")
    {
        document.getElementById('ambulancias').style.display = "inline";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('carrosCamionetas').style.display = "none";
        document.getElementById('carrosGolf').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";

    }else if (selectedText == "Autobuses"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "inline";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('carrosCamionetas').style.display = "none";
        document.getElementById('carrosGolf').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";

    }else if (selectedText == "Camiones"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "inline";
        document.getElementById('carrosCamionetas').style.display = "none";
        document.getElementById('carrosGolf').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";

    } else if (selectedText == "Carros y Camionetas"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('carrosCamionetas').style.display = "inline";
        document.getElementById('carrosGolf').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";

    }else if (selectedText == "Carros de Golf"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('carrosCamionetas').style.display = "none";
        document.getElementById('carrosGolf').style.display = "inline";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";

    }else if (selectedText == "Gruas"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('carrosCamionetas').style.display = "none";
        document.getElementById('carrosGolf').style.display = "none";
        document.getElementById('gruas').style.display = "inline";
        document.getElementById('kartings').style.display = "none";

    }else if (selectedText == "Kartings"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('carrosCamionetas').style.display = "none";
        document.getElementById('carrosGolf').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "inline";
    
    }else{

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('carrosCamionetas').style.display = "none";
        document.getElementById('carrosGolf').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";
    }   

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
