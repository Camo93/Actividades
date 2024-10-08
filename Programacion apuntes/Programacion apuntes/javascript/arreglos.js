//arreglo n.1 
let autos=new Array("bmw","mercedez","volvo")
const coches=["bmw","mercedez","volvo"]
coches[1]
for(let contador=0;contador<coches.length;contador++){
   console.log(contador+": "+coches[contador])
   }

//arreglo n.2 para añadir elemento al arreglo con push
coches[1]="camaro"
coches.push("renault") //añade elemento al arreglo a la parte final
coches[coches.length]="sandero"
coches.pop() 
console.log(coches.pop())
Array.isArray(coches)
coches instanceof Array //instancia un elemento del array
console.log(coches instanceof Array)
console.log(coches)

