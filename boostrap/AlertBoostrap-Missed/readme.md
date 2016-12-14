# Alert Boostrap Dissmised
<img src="alertboostrap1.png" alt="HTML5 Icon" >
<img src="alertboostrap2.png" alt="HTML5 Icon" >

##Descripción
Esta alerta se hace con CSS en conjunto con Javascript y las funcionalidades que trae Boostrap por defecto.

##Boostrap
	
	<div class="alert alert-success" id="myAlert" style="display:none;">
		<strong>¡Agregadó!</strong> Se agregó correctamente =)
	</div>
	
Notar que 'display:none' la oculta hasta que la función de Javascript es ejecutada.

##CSS
	<style>
	  .alert {
	    position:fixed; 
	    top: 0px; 
	    left: 0px; 
	    width: 100%;
	    z-index:9999; 
	    border-radius:0px
	}
	</style>

Ponemos `z-index` para que este sobre todos los elementos, `top: 0px` para que esté arriba de la ventana, `width: 100%` para que ocupe todo el ancho de la ventana y por último ponemos `position:fixed` para cuando se haga SCROLL siga sobre todos los elementos en la misma posición y no suba o baje, manteniendo su lugar.


