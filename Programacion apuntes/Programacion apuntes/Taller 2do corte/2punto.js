//JSON
let bicicleta={
    tipo_bicicleta:"montaña",
    marco:"aluminio",
    grupo:"shimano",
    rin:"29",
    frenos:"hidraulicos" 
}

//descripcion tipo flecha
const tarjeta_propiedad=(tipo_bicicleta,marco,grupo,rin,frenos)=>tipo_bicicleta+marco+grupo+rin+frenos
resumen=tarjeta_propiedad("ruta ","acero ","optimus ","27.5 ","zapatas ")
console.log(resumen)