const nombre = document.getElementById("nombre")
const apellido = document.getElementById("apellido")
const correo = document.getElementById("correo")
const cantidad = document.getElementById("cantidad")
const categoria = document.getElementById("categoria")
const total = document.getElementById("total")

function borrar(){
    total.innerHTML = "Total a Pagar: $"
}

function validar(nombre,apellido,correo,cantidad){
    var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var esValido= expReg.test(correo)
    if(nombre=='' || nombre.length <3){
        alert("Ingrese un nombre valido")
    }else if(apellido=='' || apellido.length <3){
        alert("Ingrese un apellido valido")
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
    let total = 0
    switch(parseInt(categoria.value)){
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
    validar(nombre.value, apellido.value, correo.value, parseInt(cantidad.value))
}