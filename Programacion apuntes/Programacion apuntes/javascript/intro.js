console.log(eval(new String("hola")));
console.log(eval("2+2"));
var nombre = "Camilo"
console.log(nombre)
let apellido;
apellido ="Orjuela";
const apellido2 ="Betancur";
let nombrecompleto ="Teresa...";
let nombreCompleto ="Ernesto...";
console.log(nombrecompleto)
console.log(nombreCompleto)
var bandera = true;
var simbolo = Symbol("Mi símbolo");
var c = undefined;
var persona ={
 name:"Diego",
 lastname :"Martinez",
 favcolor :"Azul"
}
var autos =['bmw', "audi", 'Volvo']
var y=null;
function quien(){
console.log(persona)
}
quien()
class Grupo{
constructor(numero,lider)
{
    this.numero = numero;
this.lider = lider
}
}
let a = 3;
let b = 2;
let z = a + b;
console.log("suma: "+z);
z=a-b;
console.log("resta: "+z)
z=a*b;
console.log("multiplicacion: "+z)
z=a/b;
console.log("division: "+z)
z=a%b;
console.log("módulo: "+z)
z=a**b;
console.log("exponente: "+z)
let uon, dso;
console.log(uon)
//Preincremento, incrementa valor de la variable en una unidad antes
//que se realice una operacion con esa variable
let i=0;
console.log(++i)
//Postincremento, incrementa valor de la variable en una unidad despues
//que se realice una operacion con esa variable
console.log(i++)
console.log(i)

//Predecremento, incrementa valor de la variable en una unidad antes
//que se realice una operacion con esa variable
let p=1;
console.log(--p)
//Postdecremento, incrementa valor de la variable en una unidad despues
//que se realice una operacion con esa variable
console.log(p--)
console.log(p)
let resultado = (1>2) ? "verdadero" : "falso";
console.log(resultado)

let resultado1 = (1<2) ? "verdadero" : "falso";
console.log(resultado1)

let resultado2 = (10%2 ==0) ? "Par" : "Impar";
console.log(resultado2)