//ejemplo herencia listado de empleados, nombre y apellido
class Persona{
    static contadorPersona=0
email=String('valor defaul email')
static get max_obj(){
 return 5    
}
    
    //constructor
    constructor(nombre,apellido){
        this._nombre= nombre
        this._apellido= apellido
        //if y else
        if (Persona.contadorPersona<Persona.max_obj){
            this.id_persona=++Persona.contadorPersona //post incremento
        }
        else{
            console.log("Se ha creado la cantidad maxima de personas")
        }
        //get y set
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

//usando ` (altGr) 
nombre_completo(){
    return `${this.id_persona} ${this.nombre} ${this.apellido}`
}

toString(){
    return this.nombre_completo()
    } 
}

 persona1=new Persona("Camilo", "Betancur")
console.log(persona1.toString())


//herencia 
class Empleado extends Persona{
    constructor(nombre,apellido,cargo){
        super(nombre,apellido)
        this._cargo=cargo
    }
    get cargo(){
        return this._cargo
    }
    set cargo(cargo){
        this._cargo=nombre
    }

    nombre_completo(){
        return `${super.nombre_completo()} ${this._cargo}`
    }         
}

//sobrescritura variable nombre completo
empleado1=new Empleado("Alex", "Torres", "Medico")
empleado2=new Empleado("Andrea", "Terraza", "Ingeniero")
empleado3=new Empleado("Viviana", "Tarantino", "Arquitecto")
empleado4=new Empleado("Ximena", "Vaca", "Diseñador")
empleado5=new Empleado("Xavier", "Cubillos", "Abogado")
console.log(empleado1.nombre_completo())
console.log(empleado2.nombre_completo())
console.log(empleado3.nombre_completo())
console.log(empleado4.nombre_completo())
console.log(empleado5.nombre_completo())  


        

        

