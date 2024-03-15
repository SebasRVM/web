// JavaScript Document
//Función que verifica campos del formulario vacíos
function validar(formulario1) {
	if (formulario1.codigo.value.length < 1){
		alert("Ingrese el codigo");
		miformulario.codigo.focus();
		return false;
	}
		if (formulario1.nombre.value.length < 1){
			alert("Ingrese el nombre");
			miformulario.nombre.focus();
			return false;
	}
		if (confirm(Esta seguro de procesar el formulario?')){
		}else{
			alert("Cancelado");
			return (false);
	}
}