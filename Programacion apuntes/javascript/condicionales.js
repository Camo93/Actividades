//par o impar
let a=3;
if (a%2 == 0)
{
console.log("el numero "+a+" es par")
}
else
{
    console.log("el numero "+a+" es impar")
}

//Triangulo
let lado=3;
let lado2=3;
let lado3=3;
if ((lado == lado2 || lado2 == lado3 || lado == lado3) && (lado != lado2 || lado2 != lado3 || lado != lado3 ))
{
    console.log("Triangulo isoceles")
}
if (lado != lado2 && lado2 != lado3 && lado !=lado3)
{
    console.log("Triangulo escaleno")
}
if (lado == lado2 && lado2 == lado3 && lado == lado3)
    {
        console.log("Triangulo equilatero")
    }

//numero primo
let num=11;
let num2;
if (num/num== 1 && num/1==num && num%num2 != 0)
{
    console.log("Numero es primo")
}
if (num/num== 1 && num/1==num && num%num2 == 0)
{
    console.log("Numero es natural")
}