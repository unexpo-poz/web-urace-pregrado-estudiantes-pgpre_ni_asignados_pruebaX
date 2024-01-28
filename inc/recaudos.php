<?php
	include_once('inc/config.php');
	global $rangoInsc,$horaInsc, $fechaInsc, $num_ins;
	

	print <<<R001
	<table id="recaudos" align="center" border="0" cellpadding="1" 
		cellspacing="2"	 width="740" 
		style="border-collapse:collapse;border-color:white; border-style:solid; background:white;">
		<tr class="instruc">
			<td>Estimado Bachiller:<br></td>
		</tr>
		<tr>
			<td class="instruc">PARA FORMALIZAR TU INSCRIPCI&Oacute;N debes acudir a la sede de la UNEXPO:&nbsp;<b>Los días 03 y 04 de mayo desde las 8:30am a 2:00pm </b>&nbsp; y traer los siguientes recaudos COMPLETOS:
				<ul style="list-style:circle; background:white;">
					<li> T&iacute;tulo de Bachiller en Ciencias, Industrial o T&eacute;cnico Medio Industrial (original y fondo negro n&iacute;tido).</li>					
					<li>Partida de Nacimiento (original y fotocopia n&iacute;tida).</li>
					<li>Constancia Certificada de Calificaciones de Educaci&oacute;n Media (original y fotocopia n&iacute;tida).</li>
					<li>Original y Fotocopia n&iacute;tida de la C&eacute;dula de Identidad VIGENTE. </li>
					<li>Una (1) fotograf&iacute;a de frente, tama&ntilde;o carnet (NO instant&aacute;neas, sin perforaciones, recientes e iguales).</li>
					<li>Constancia Original de participaci&oacute;n en el proceso de seleccion del C.N.U.</li>
					<li>Una (1) Carpeta marr&oacute;n tama&ntilde;o Oficio nueva y con gancho.</li>
				</ul>
			</td>
		</tr>
	</table>
R001
;
?>