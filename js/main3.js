//Declaracion variables
var ced = document.getElementById('txtCedula');
var nom = document.getElementById('txtNombre');
var ape = document.getElementById('txtApellido');
var dir = document.getElementById('txtDir');
var tel = document.getElementById('txtTel');
var cel = document.getElementById('txtCel');
var corr = document.getElementById('txtCorreo');
var ciu = document.getElementById('cboCiudad');

var cod = document.getElementById('txtCodigo');
var desc = document.getElementById('txtDescripcion');
var cant = document.getElementById('txtCantidad');
var stoc= document.getElementById('txtStock');
var varu = document.getElementById('txtValorUnitario');
var img = document.getElementById('txtImg');
  
//var obs = document.getElementById('cboCiudad');





// Limpiar datos pantalla 
function Limpiar(){
  ced  = document.getElementById('txtCedula').value="";
  nom  = document.getElementById('txtNombre').value="";
  ape  = document.getElementById('txtApellido').value="";
  dir  = document.getElementById('txtDir').value="";
  tel  = document.getElementById('txtTel').value="";
  cel  = document.getElementById('txtCel').value="";
  corr = document.getElementById('txtCorreo').value="";
  ciu  = document.getElementById('cboCiudad').value="";

}


//    Datos Clientes    //

//Guardar Clientes

function Guardar(){
  ced  = document.getElementById('txtCedula').value;
  nom  = document.getElementById('txtNombre').value;
  ape  = document.getElementById('txtApellido').value;
  dir  = document.getElementById('txtDir').value;
  tel  = document.getElementById('txtTel').value;
  cel  = document.getElementById('txtCel').value;
  corr = document.getElementById('txtCorreo').value;
  ciu  = document.getElementById('cboCiudad').value;
  
  //*envio de datos a guardar
  document.getElementById('frmGuardar').src='guardar_clientes.php?txtCedula='+ced+'&txtNombre='+nom+
  '&txtApellido='+ape+'&txtDir='+dir+'&txtTel='+tel+
  '&txtCel='+cel+'&txtCorreo='+corr+'&cboCiudad='+ciu;
  //verificar campos vacios
  if (ced=='') {
    alert('El campo de la cedula esta incompleto...');
    document.getElementById('txtCedula').focus();
    return false;
  }

}

// Actualizar Clientes

function Actualizar(){
  ced  = document.getElementById('txtCedula').value;
  nom  = document.getElementById('txtNombre').value;
  ape  = document.getElementById('txtApellido').value;
  dir  = document.getElementById('txtDir').value;
  tel  = document.getElementById('txtTel').value;
  cel  = document.getElementById('txtCel').value;
  corr = document.getElementById('txtCorreo').value;
  ciu  = document.getElementById('cboCiudad').value;
  
  //verificar campos vacios
  if (ced==''){
    alert('El campo de la cedula esta incompleto...');
    document.getElementById('txtCedula').focus();
    return false;
  } 

  //envio de datos a actualizar
  document.getElementById('frmGuardar').src='actualizar_clientes.php?txtCedula='+ced+'&txtNombre='+nom+
  '&txtApellido='+ape+'&txtDir='+dir+'&txtTel='+tel+
  '&txtCel='+cel+'&txtCorreo='+corr+'&cboCiudad='+ciu;

}

// Validar Clientes
function Validar(){
  ced = document.getElementById('txtCedula').value;

  //verificar campos vacios
  if (ced==''){
    alert('El campo de la cedula esta incompleto...');
    document.getElementById('txtCedula').focus();
    return false;
    }

  //envio de datos a guardar
  document.getElementById('frmGuardar').src='validar_clientes.php?txtCedula='+ced;
}


//    Fin Clientes    //

//Guardar datos Empleados
  
function GuardarEmpleados(){
  ced  = document.getElementById('txtCedula').value;
  nom  = document.getElementById('txtNombre').value;
  ape  = document.getElementById('txtApellido').value;
  dir  = document.getElementById('txtDir').value;
  tel  = document.getElementById('txtTel').value;
  cel  = document.getElementById('txtCel').value;
  corr = document.getElementById('txtCorreo').value;
  ciu  = document.getElementById('cboCiudad').value;

  //verificar campos vacios
  if (ced=='') {
    alert('El campo de la cedula esta incompleto...');
    document.getElementById('txtCedula').focus();
    return false;
  }

  //*envio de datos a guardar
  document.getElementById('frmGuardar').src='guardar_empleados.php?txtCedula='+ced+'&txtNombre='+nom+
  '&txtApellido='+ape+'&txtDir='+dir+'&txtTel='+tel+
  '&txtCel='+cel+'&txtCorreo='+corr+'&cboCiudad='+ciu;
}

// Actualizar datos Empleados

function ActualizarEmpleados(){
  ced  = document.getElementById('txtCedula').value;
  nom  = document.getElementById('txtNombre').value;
  ape  = document.getElementById('txtApellido').value;
  dir  = document.getElementById('txtDir').value;
  tel  = document.getElementById('txtTel').value;
  cel  = document.getElementById('txtCel').value;
  corr = document.getElementById('txtCorreo').value;
  ciu  = document.getElementById('cboCiudad').value;
  
  //verificar campos vacios
  if (ced==''){
    alert('El campo de la cedula esta incompleto...');
    document.getElementById('txtCedula').focus();
    return false;
  } 

  //envio de datos a actualizar
  document.ready.getElementById('frmGuardar').src='actualizar_empleados.php?txtCedula='+ced+'&txtNombre='+nom+
  '&txtApellido='+ape+'&txtDir='+dir+'&txtTel='+tel+
  '&txtCel='+cel+'&txtCorreo='+corr+'&cboCiudad='+ciu;

}

//Validar datos Empleados

function ValidarEmpleados(){
  ced = document.getElementById('txtCedula').value;

  //verificar campos vacios
  if (ced==''){
    alert('El campo de la cedula esta incompleto...');
    document.getElementById('txtCedula').focus();
    return false;
    }

  //envio de datos a guardar
  document.getElementById('frmGuardar').src='validar_empleados.php?txtCedula='+ced;
}

//    Fin Empleados   //


//    Inicio Productos    //

function CambiarProducto(){ //Funcion para asignar imagenes a lod productos
  img = document.getElementById('cboImagenes').value;
  
  document.getElementById('txtImg').src='../images/' + img;
  
}

function GuardarProducto(){
  cod = document.getElementById('txtCodigo').value;
  desc = document.getElementById('txtDescripcion').value;
  cant = document.getElementById('txtCantidad').value;
  stoc = document.getElementById('txtStock').value;
  varu = document.getElementById('txtValorUnitario').value;
  img = document.getElementById('cboImagenes').value;
  
  //Envio de datos al archivo guardar
  //alert('Envio de datos');
  document.getElementById('frmGuardar').src=
  'guardar_producto.php?txtCodigo='+cod+'&txtDescripcion='+desc+
  '&txtCantidad='+cant+'&txtStock='+stoc+'&txtValorUnitario='+varu+'&cboImagenes='+img;

  //Validar que los campos no estén vacios
  if (cod==''){
    alert('Campos codigo Vacio... Verifique');
    document.getElementById('txtCodigo').focus();
    return false;
  }		

}

function ActualizarProducto(){
  cod = document.getElementById('txtCodigo').value;
  desc = document.getElementById('txtDescripcion').value;
  cant = document.getElementById('txtCantidad').value;
  stoc = document.getElementById('txtStock').value;
  varu = document.getElementById('txtValorUnitario').value;
  img = document.getElementById('cboImagenes').value;
  

  //Envio de datos al archivo guardar
  
  //alert('Envio de datos');
  document.getElementById('frmGuardar').src=
  'actualizar_producto.php?txtCodigo='+cod+'&txtDescripcion='+desc+
  '&txtCantidad='+cant+'&txtStock='+stoc+'&txtValorUnitario='+varu+'&cboImagenes='+img;

  //Validar que los campos no estén vacios
  if (cod==''){
    alert('Campos codigo Vacio... Verifique');
    document.getElementById('txtCodigo').focus();
    return false;
  }		
  

}
  
function ValidarProducto(){

  ced = document.getElementById('txtCodigo').value;
  
  //Validar que los campos no estén vacios
  if (cod==''){
    alert('Campos codigo Vacio... Verifique');
    document.getElementById('txtCodigo').focus();
    return false;
  }
      
  //Envio de datos al archivo guardar
  //alert('Envio de datos');
  document.getElementById('frmGuardar').src=
  'validar_producto.php?txtCodigo='+ced;	
}	

function Recargar(){

  document.location.href='frm_clientes.php'	
}

function Salir(){

  document.location.href='../menu.php'	
}
