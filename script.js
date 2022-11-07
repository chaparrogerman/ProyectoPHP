const nombre = document.getElementById("nombre")
const apellido = document.getElementById("apellido")
const correo = document.getElementById("correo")
const cantidad = document.getElementById("cantidad")
const categoria = document.getElementById("categoria")
const total = document.getElementById("total")

function borrar(){
    total.innerHTML = "Total a Pagar: $"
}

function validar(nombre,apellido,correo,cant){
    var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var esValido= expReg.test(correo)
    if(nombre.length <2){
        alert("Ingrese un nombre valido")
        return false
    }else if(apellido.length <2){
        alert("Ingrese un apellido valido")
        return false
    }else if(esValido==false){
        alert("El correo ingresado no es valido")
        return false
    }else if(!Number.isInteger(cant) || cant==0){
        alert("Ingrese la cantidad de entradas a comprar")
        cantidad.value = ""
        return false
    }else{
        return true
    }
}

function totalPagar(){
    let precio = 0
    var esValido = validar(nombre.value, apellido.value, correo.value, parseInt(cantidad.value))

    if(esValido == true){
        switch(parseInt(categoria.value)){
             case 1:
                precio = cantidad.value * (200 - 200 * 0.8)
                total.innerHTML = "Total a Pagar: $"+precio
                break
            case 2:
                precio = cantidad.value* (200 - 200 * 0.5)
                total.innerHTML = "Total a Pagar: $"+precio
                break
            case 3:
                precio = cantidad.value * (200 - 200 * 0.15)
                total.innerHTML = "Total a Pagar: $"+precio
                break
        }
    }
}