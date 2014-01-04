$('#name').required("Completa este dato").and().string("Ingresa solo letras").and().maxLength(100, "Debes ingresar un nombre mas corto");
$('#email').required("Completa este dato").and().email("Debe ser un email válido");
$('#subject').required("Completa este dato").and().string("Ingresa solo letras");
$('#comment').required("Completa este dato").and().maxLength(400, "Debes ingresar un mensaje mas corto");