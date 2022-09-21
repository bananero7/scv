//Declaracion variables
    var ced = document.getElementById('txtCedula');
    var nom = document.getElementById('txtNombre');
    var ape = document.getElementById('txtApellido');
    var dir = document.getElementById('txtDir');
    var tel = document.getElementById('txtTel');
    var cel = document.getElementById('txtCel');
    var corr = document.getElementById('txtCorreo');
    var ciu = document.getElementById('cboCiudad');

function Guardar(){
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
    document.getElementById('frmGuardar').src='guardar_clientes.php?txtCedula='+ced+'&txtNombre='+nom+
		'&txtApellido='+ape+'&txtDir='+dir+'&txtTel='+tel+
		'&txtCel='+cel+'&txtCorreo='+corr+'&cboCiudad='+ciu;
  }

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

  function Recargar(){
    document.location.href='form_clientes.php';
  }

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

// Empleados

//Guardar datos
  
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
  document.getElementById('frmGuardar').src='actualizar_empleados.php?txtCedula='+ced+'&txtNombre='+nom+
  '&txtApellido='+ape+'&txtDir='+dir+'&txtTel='+tel+
  '&txtCel='+cel+'&txtCorreo='+corr+'&cboCiudad='+ciu;

}

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