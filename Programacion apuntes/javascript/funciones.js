//funcion de suma

function mifuncion (a,b){
    console.log("suma:  "+(a+b))
}

function suma (n1,n2){
 let res_suma=n1+n2
 return res_suma
}

console.log(suma(2,4))

//funcion tipo expresion anonima
let x=function(a1,b1){
    return a1+b1
};
let res_expresion=x(1,2)
console.log(res_expresion)

//funcion tipo expresion no anonima
const factorial=function fac(n){
    return n <2?1:n*fac(n-1)
}
console.log(factorial(3))

//funciones flecha =>
const sumarFuncionFlecha=(num1,num2) =>num1+num2
res_sumaflecha=sumarFuncionFlecha(3,6)
console.log(res_sumaflecha)