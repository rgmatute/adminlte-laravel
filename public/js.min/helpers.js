function confirmacionAlert(mensaje,tipo){
	var a = {
		title: 'Estás seguro?',
		text: "¡No podrás revertir esto!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#1976d2',
		cancelButtonColor: '#ff5252',
		confirmButtonText: 'Si',
		allowOutsideClick: false
	};
	return Swal.fire(a);
}

function toastAlert(tipo,mensaje,position){
	var a = {
		toast: true,
		position: 'bottom-end',
		showConfirmButton: false,
		timer: 3000
	};
	var b = {
		type:'success',
		title:'Correcto!',
		html:'Transacción efectuada con éxito'
	};
	_.each(arguments,function(i,k){
		var obj = window['tipo'](i.type);
		if(!_.isUndefined(obj.title))	b.title		= obj.title;
		if(!_.isUndefined(obj.html))	b.html		= obj.html;
		if(!_.isUndefined(obj.type))		b.type 		= obj.type;
		if(_.isObject(i)){
			if(!_.isUndefined(i.title))		b.title		= i.title;
			if(!_.isUndefined(i.html))		b.html		= i.html;
			if(!_.isUndefined(i.position))	a.position 	= i.position;
			if(!_.isUndefined(i.timer))		a.timer 	= i.timer;
		}else{
			b.html = i;
		}
	});
	const Toast = Swal.mixin(a);
	return Toast.fire(b);
}

function tipo(status){
	var type = {
		'S':{type:'success',title:'Correcto!',html:'Transacción efectuada con éxito'},
		'W':{type:'warning',title:'Advertencia!',html:'No existen datos con el criterio seleccionado'},
		'E':{type:'error',title:'Error!',html:'Hubo un error, intente de nuevo por favor'},
		'I':{type:'info',title:'Información!'},
		'Q':{type:'question',title:'Pregunta!'}
	};
	if(!_.isUndefined(type[status])) return type[status];
	else return {type:'success',title:'Correcto!'};
}


function imageAlert(){
	var a = {
		title: '',
		html: '',
		imageUrl: 'https://unsplash.it/400/200',
		imageWidth: 400,
		imageHeight: 200,
		imageAlt: 'Custom image',
		animation: true,
		allowOutsideClick: false
	};
	_.each(arguments,function(i,k){
		if(_.isObject(i)){
			if(!_.isUndefined(i.title))		a.title		= i.title;
			if(!_.isUndefined(i.html))		a.html		= i.html;
			if(!_.isUndefined(i.imageUrl))	a.imageUrl 	= i.imageUrl;
			if(!_.isUndefined(i.imageWidth))a.imageWidth 	= i.imageWidth;
			if(!_.isUndefined(i.imageHeight))a.imageHeight 	= i.imageHeight;
			if(!_.isUndefined(i.imageAlt))	a.imageAlt 		= i.imageAlt;
			if(!_.isUndefined(i.animation))	a.animation 	= i.animation;
		}
	});
	return Swal.fire(a);
}

function mensajeAlert(){
	var a = {
		type:'success',
		title:'Correcto!',
		html:'Transacción efectuada con éxito',
		allowOutsideClick: false
		//footer: '<a href>Why do I have this issue?</a>'
	};
	_.each(arguments,function(i,k){
		if(_.isObject(i)){
			var obj = window['tipo'](i.type);
			if(!_.isUndefined(obj.title))	a.title		= obj.title;
			if(!_.isUndefined(obj.html))	a.html		= obj.html;
			if(!_.isUndefined(i.title))		a.title		= i.title;
			if(!_.isUndefined(i.html))		a.html		= i.html;
			if(!_.isUndefined(i.type))		a.type 		= obj.type;
		}
	});
	return Swal.fire(a);
}