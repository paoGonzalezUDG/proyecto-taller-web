/**
 * [NumCheck description]
 *
 * @param {[type]} e     [description]
 * @param {[type]} field [description]
 */

function NumCheck(e, field) {
	key = e.keyCode ? e.keyCode : e.which
	if (key == 8) return true
	if (key > 47 && key < 58) {
		if (field.value == "") return true
			existePto = (/[.]/).test(field.value);
		if (existePto == false){
			regexp = /.[0-9]{14}$/;
		}else{
				regexp = /.[0-9]{2}$/;
			}
		return !(regexp.test(field.value))
	}
	if (key == 46) {
		if (field.value == "") return false
			regexp = /^[0-9]+$/;
			return regexp.test(field.value)
	}
	return false
}

window.onload = function(){

	/**
	 * Solo texto y espacios
	 * @param  {RegExp} event) {             var regex [description]
	 * @return {[type]}        [description]
	 */

	$(".letras").bind('keypress', function(event) {
	  var regex = new RegExp("^[a-zA-Z ]+$");
	  var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	  if (!regex.test(key)) {
	    event.preventDefault();
	    return false;
	  }
	});

	/**
	 * Solo números
	 * @param  {RegExp} event) {             var regex [description]
	 * @return {[type]}        [description]
	 */

	$(".numeros-sin-punto").bind('keypress', function(event) {
	  var regex = new RegExp("^[0-9]+$");
	  var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	  if (!regex.test(key)) {
	    event.preventDefault();
	    return false;
	  }
	});

	/**
	 * [Generar contraseña random description]
	 *
	 * @param  {[type]} id [description]
	 * @return {[type]}    [description]
	 */

	function randString(id){
	    var dataSet = $(id).attr('data-character-set').split(',');
	    var possible = '';

	    if($.inArray('a-z', dataSet) >= 0){
	        possible += 'abcdefghijklmnopqrstuvwxyz';
	    }
	    if($.inArray('A-Z', dataSet) >= 0){
	        possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    }
	    if($.inArray('0-9', dataSet) >= 0){
	        possible += '0123456789';
	    }
	    if($.inArray('#', dataSet) >= 0){
	        possible += '![]{}()%&*$#^<>~@|';
	    }
	    var text = '';
	    for(var i=0; i < $(id).attr('data-size'); i++) {
	        text += possible.charAt(Math.floor(Math.random() * possible.length));
	    }
	    return text;
	}

	// Create a new password
	$(document).on('click', '.getNewPass',function () {
	    var field = $(this).closest('div').find('input[rel="gp"]');
	   	field.val(randString(field));
	});

	// Auto Select Pass On Focus
	$(document).on('click', 'input[rel="gp"]',function () {
	  $(this).select();
	});

	//Mostrar/Ocultar contraseña
	if($("div").hasClass("js-show")){
		$('.js-show').each(function() {
	    var $pass 	= $(this).find('.js-pass');
	    var $input 	= $(this).find('.js-check');

	    $input.click(function() {
	      if($pass.attr('type').toLowerCase() === 'password' ) {
	        $pass.attr('type','text');
	      }else{
	        			$pass.attr('type','password');
	      		 }
	    });
	  });
	}

	//Función para validar un RFC
	function rfcValido(rfc) {
	    var re = /^([ A-ZÑ&]?[A-ZÑ&]{3}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/,
	        validado = rfc.match(re);

	    if (!validado)  //Coincide con el formato general?
	        return false;

	    //Separar el dígito verificador del resto del RFC
	    var digitoVerificador = validado.pop(),
	        rfcSinDigito = validado.slice(1).join('')

	    //Obtener el digito esperado
	    var diccionario  = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
	        lngSuma      = 0.0,
	        digitoEsperado;

	    if (rfcSinDigito.length == 11) rfc = " " + rfc; //Ajustar a 12
	    for(var i=0; i<13; i++)
	        lngSuma = lngSuma + diccionario.indexOf(rfcSinDigito.charAt(i)) * (13 - i);
	    digitoEsperado = 11 - lngSuma % 11;
	    if (digitoEsperado == 11) digitoEsperado = 0;
	    if (digitoEsperado == 10) digitoEsperado = "A";

	    //El dígito verificador coincide con el esperado?
	    return digitoVerificador == digitoEsperado;
	}

	//Handler para el evento cuando cambia el input
	//Lleva la RFC a mayúsculas para validarlo
	function validarInputRFC(input) {
	    var rfc             = input.value.toUpperCase(),
	        inputRFC        = $(".rfc-sat"),
	        resultadoRFC    = document.getElementById("resultadoRFC"),
	        valido          = "Incorrecto";
	        input.value     = rfc;

	    resultadoRFC.classList.remove("d-none");
	    if (rfcValido(rfc)) { // ⬅️ Acá se comprueba
	        valido          = "Válido";
	        inputRFC.removeClass("error").addClass("valid");
	        resultadoRFC.classList.remove("error");
	        resultadoRFC.classList.add("text-success");
	    } else {
	        inputRFC.removeClass("valid").addClass("error");
	        resultadoRFC.classList.remove("text-success");
	        resultadoRFC.classList.add("error");
	    }

	    if(input.value.length == 0){
	        resultadoRFC.classList.remove("error");
	        resultadoRFC.classList.remove("text-success");
	    }

	    resultadoRFC.innerText = valido;
	}
}