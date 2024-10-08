//clase persona ejemplo constructor usando get, set y this
class Persona{
    constructor(nombre,apellido){
        this._nombre=nombre
        this._apellido=apellido
    }
    get nombre(){
        return this._nombre
    }
    get apellido(){
        return this._apellido
    }
    set nombre(nombre){
        this._nombre=nombre
    }
    set apellido(apellido){
        this._apellido=apellido
    }
}

let persona1=new Persona("Camilo "+"Betancur ")
console.log(persona1)
let persona2=new Persona("Laura"+"Vargar")
console.log(persona2)

console.log(persona1.nombre)
persona1.nombre="Juan Orjuela" //actualizar nombre usando set
console.log(persona1.nombre)

//usando static
class Persona3{
    static contadorPersonas=0
    static get max_obj(){
        return 5
    }

static saludar(){
    console.log("Saludos desde el metodo estaico")
}

static saludar2(Persona3){
    console.log(persona3.nombre)
  }
}
//creacion de objetos
let persona3=new Persona3()
console.log(persona3.saludar())
