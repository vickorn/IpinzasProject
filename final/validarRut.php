 <?php
function valida_rut($rut)
	{
	if(strlen($rut) > 10)
	{
		return false;
	}
	
	if(strstr($rut, '-') == false)
	{
		return false;
	}
	
	$array_rut_sin_guion = explode('-',$rut); // separamos el la cadena del digito verificador.
	$rut_sin_guion = $array_rut_sin_guion[0]; // la primera cadena
	$digito_verificador = $array_rut_sin_guion[1];// el digito despues del guion.
	if($digito_verificador == ""){
		return false;
	}
	
	if(is_numeric($rut_sin_guion)== false)
	{
		return false;
	}
		if ($digito_verificador != 'k' and $digito_verificador != 'K')
	{
	    if(is_numeric($digito_verificador)== false) 
	      {
	      	return false;
	      }
	}
	$cantidad = strlen($rut_sin_guion); //8 o 7 elementos
	for ( $i = 0; $i < $cantidad; $i++)//pasamos el rut sin guion a un vector
	    {
	    	$rut_array[$i] = $rut_sin_guion{$i};
	    }  
	
	
	$i = ($cantidad-1);
	$x=$i;
	for ($ib = 0; $ib < $cantidad; $ib++)// ingresamos los elementos del ventor rut_array en otro vector pero al reves.
	    {
	    $rut_reverse[$ib]= $rut_array[$i];
	    
	     $rut_reverse[$ib];
	    $i=$i-1;
	    }
	    
	$i=2;
	$ib=0;
	$acum=0; 
	   do
	    {
	    if( $i > 7 )
	      {
	      $i=2;
	      }
	      $acum = $acum + ($rut_reverse[$ib]*$i);
	     $i++;
	     $ib++;
	   }while ( $ib <= $x);
	
	$resto = $acum%11;
	$resultado = 11-$resto;
	if ($resultado == 11) { $resultado=0; }
	if ($resultado == 10) { $resultado='k'; }
	if ($digito_verificador == 'k' or $digito_verificador =='K') { $digito_verificador='k';}
	
	if ($resultado == $digito_verificador)
	    {
	    	return false;
	    }
	    else
	    {
	    	return false;
	    }
}
?> 