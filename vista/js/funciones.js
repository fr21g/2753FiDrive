function checkbox(){
    var archivo=document.getElementById('subir');
    
    for(var i = 1 ; i < archivo.value.length ; i++){
        
        if(archivo.value[i]=="."){
            var x=i+1;
        }
    }
    var string="";
    for(var i = x ; i < archivo.value.length ; i++){
    
         string+=archivo.value[i];
    }
    
    if(string=="jpg"|| string=="png"||string=="jpeg"||string=="gif"||string=="svg"){
        document.getElementById('imagen').checked=true;
    }
    if(string=="zip"||string=="rar"){
        document.getElementById('zip').checked=true;
    }
    if(string=="doc"||string=="docx"||string=="txt"){
        document.getElementById('doc').checked=true;
    }
    if(string=="pdf"){
        document.getElementById('pdf').checked=true;
    }
    if(string=="xls"||string=="xlsx"){
        document.getElementById('xls').checked=true;
    }
}
function form1(){
    var clave=document.getElementById("clave").value;

    if(clave== 0 ){
        var enviar="accion_subirArchivo.php";
    }else{
        var enviar="modificar.php";
    }
    return enviar;
}

function verpass(){
    var pass= document.getElementById("pass").checked;
    if(pass==true){
         document.getElementById("verclave").style.display="inline";
    }else{
        document.getElementById("verclave").style.display="none";
    }
}

function verificarPass(){
var pass=document.getElementById("clave").value;
var seguridad;
var longitud;
if(pass.length>=6){
    longitud=true;;
}

for(var i=0; i<=pass.length; i++){
    if(!Number.isInteger(parseInt(pass[i]))){
        var string=true;
       //alert("es string");
    }
    if(Number.isInteger(parseInt(pass[i]))){
       var number=true;
      //alert("es numerico");
    }
    if(pass[i]=="/" || pass[i]=="$" || pass[i]=="."){
        var caracter=true;

    }
}
if(number && string && longitud){
    //seguridad="contraseña segura";
}if(!string || !number){
    seguridad='contraseña debil';
}if(!longitud){
    seguridad='contraseña debil';
}
if(pass.length>6 && string && number ){
    seguridad='contraseña normal';
}
if(pass.length>6 && string && number &&caracter){
    seguridad='contraseña fuerte';
}


return alert(seguridad);


}

function generarHash(){
    var numero=1234;
    var cantdescargas=document.getElementById("descargas").value;
    var diascompartido=document.getElementById("diascompartido").value;
    
    var hash1;    

    if(diascompartido=="" && cantdescargas==""){
        hash1="#"+9007199254740991;
    }else{
        var hash0=numero+parseInt(cantdescargas)+parseInt(diascompartido);
        hash1="#"+hash0;
       
    }
    var hash=window.location+hash1;
    document.getElementById("link").value=hash;


}

