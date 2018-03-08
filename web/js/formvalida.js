function ValidaFormObSPEd()
{ 
	 
	 if(formIngObjEd.dimension.value=="Seleccione"){
		 alert('Debes seleccionar el campo dimension');
		 
	 }else if(formIngObjEd.objetivo.value==""){
		 alert('Debes ingresar el campo objetivo');
	 }
	 
	 else if(formIngObjEd.metrica.value==""){
		 alert('Debes ingresar el campo metrica');
		 
	 }else if(formIngObjEd.mes.value==""){
		 alert('Debes seleccionar el campo mes');
		 
	 }else if(formIngObjEd.ano.value==""){
		 alert('Debes seleccionar el campo ano');
		 
	 }
	 
	 
	 else{
		 
		 document.formIngObjEd.submit();
	 }
	 
	 
	 
	 
	 
} 



function ValidaFormObSP()
{ 
	 
	 if(formIngObj.dimension.value=="Seleccione"){
		 alert('Debes seleccionar el campo dimension');
		 
	 }else if(formIngObj.objetivo.value==""){
		 alert('Debes ingresar el campo objetivo');
	 }
	 
	 else if(formIngObj.metrica.value==""){
		 alert('Debes ingresar el campo metrica');
		 
	 }else if(formIngObj.mes.value==""){
		 alert('Debes seleccionar el campo mes');
		 
	 }else if(formIngObj.ano.value==""){
		 alert('Debes seleccionar el campo ano');
		 
	 }
	 
	 
	 else{
		 
		 document.formIngObj.submit();
	 }
	 
	 
	 
	 
	 
} 



function ValidaFormOb()
{ 
	 
	 if(formIngObj.ponderacion.value==""){
		 alert('Debes seleccionar el campo ponderacion');
		 
	 }else if(formIngObj.dimension.value=="Seleccione"){
		 alert('Debes seleccionar el campo dimension');
		 
	 }else if(formIngObj.objetivo.value==""){
		 alert('Debes ingresar el campo objetivo');
	 }
	 
	 else if(formIngObj.metrica.value==""){
		 alert('Debes ingresar el campo metrica');
		 
	 }else if(formIngObj.mes.value==""){
		 alert('Debes seleccionar el campo mes');
		 
	 }else if(formIngObj.ano.value==""){
		 alert('Debes seleccionar el campo ano');
		 
	 }
	 
	 
	 else{
		 
		 document.formIngObj.submit();
	 }
	 
	 
	 
	 
	 
} 
