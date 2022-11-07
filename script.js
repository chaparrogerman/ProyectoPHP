function borrar(){
    document.getElementById("total").innerHTML = "Total a Pagar: $"
}

function validar(nombre,apellido,correo,cantidad){
    var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var esValido= expReg.test(correo)
    if(nombre==''){
        alert("Ingrese un nombre")
    }else if(apellido==''){
        alert("Ingrese un apellido")
    }else if(esValido==false){
        alert("El correo ingresado no es valido")
    }else if(!Number.isInteger(cantidad) || cantidad==0){
        alert("Ingrese la cantidad de entradas a comprar")
        document.getElementById("cantidad").value = ""
    }else{
        precio(cantidad)
    }
}

function precio(cantidad){
    let categoria = parseInt(document.getElementById("categoria").value)
    let total = 0
    switch(categoria){
        case 1:
            total = cantidad * (200 - 200 * 0.8)
            document.getElementById("total").innerHTML = "Total a Pagar: $"+total
            break
        case 2:
            total = cantidad * (200 - 200 * 0.5)
            document.getElementById("total").innerHTML = "Total a Pagar: $"+total
            break
        case 3:
            total = cantidad * (200 - 200 * 0.15)
            document.getElementById("total").innerHTML = "Total a Pagar: $"+total
            break
     }
}

function totalPagar(){
    let nombre = document.getElementById("nombre").value
    let apellido = document.getElementById("apellido").value
    let correo = document.getElementById("correo").value
    let cantidad = parseInt(document.getElementById("cantidad").value)
    validar(nombre, apellido, correo, cantidad)
}
