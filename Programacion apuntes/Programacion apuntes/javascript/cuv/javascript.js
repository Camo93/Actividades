function submbitform(){
    var form=document.getElementById('cvForm')
    var formData= new formData(form)

    var name=formData.get('name')
    var name=formData.get('email')
    var name=formData.get('gender')
    var name=formData.get('agree')
    
    var reader=new FileReader()
    reader.readAsDataURL(formData.get('foto'))

    reader.onload=function(event){
        var photoData=event.target.result
        var tableContent=
        <table border="1">
            <tr><th>nombre</th><td>${name}</td></tr>
            <tr><th>email</th><td>${email}</td></tr>
            <tr><th>genero</th><td>${gender}</td></tr>
            <tr><th>Fotos</th><td><img src="$photoData" alt="foto" width="100"></td></tr>
            <tr><th>Acepto terminos</th><td>${agree ? 'si' : 'no'}</td></tr>
        </table>
        
        alert("formulario enviado con exito")
        var newwindow=window.open()
        newwindow.document.write(tableContent)
}
}