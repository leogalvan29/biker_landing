


window.addEventListener('DOMContentLoaded' , function(){

    // const contenedorPagina = document.querySelector('.contenedor-api')
    
    // async function traerCaracteres(){
    //     const response = await fetch('https://jsonplaceholder.typicode.com/users') 
    //     const data = await response.json() 
    //     const resultados = data
    //     console.log(data)
    //     //console.log(caracteres)
    //    await crearHtml(resultados)
    // }
    
    //  traerCaracteres()
    
    // async function crearHtml(resultados){ 
      
    //      console.log(resultados)
    //      const contenedorCaracter = document.createElement('div') 
    //      let contenidoHTML = ''
    //      resultados.forEach(element => {
    //           console.log(element.name)
              
    //          contenidoHTML += `<h3>${element.name}</h3>`
    //          contenidoHTML += `<p>${element.company.name}</p>`
              
              
    //      });
    
    //      contenedorCaracter.innerHTML = contenidoHTML
    //      contenedorPagina.appendChild(contenedorCaracter)
       
    // }
    
    
   const  botonHeader = document.querySelector('.boton-header')
   //obtienes la informacion de los estilos 
     const estiloBotonHeader = window.getComputedStyle(botonHeader) 
     console.log(estiloBotonHeader.fontSize)
      let colorFondo = estiloBotonHeader.backgroundColor; 
      let colorTexto = estiloBotonHeader.color;
      console.log(colorFondo)

      const titulo = document.querySelector('.titulo_1') 
    let palabras = titulo.textContent.split(" ") //separa por espacios en blanco
    let ultimaPalabra = palabras[palabras.length - 1]
    titulo.innerHTML = titulo.innerHTML.replace(new RegExp(ultimaPalabra + "(?![^<]*>|[^<>]*<\/)", 'g'), `<span class="resaltado">${ultimaPalabra}</span>`);
    console.log(ultimaPalabra) 

    const ultimaPalabraResaltada = document.querySelector('.titulo_1 .resaltado');
    ultimaPalabraResaltada.style.color = colorFondo; 


    const tituloTxt = document.querySelector('.txt-1 h3') 
    const palabra3 = tituloTxt.textContent.split(" ")[3]
    const palabra4 = tituloTxt.textContent.split(" ")[4]
    const palabra5 = tituloTxt.textContent.split(" ")[5]
    
    console.log(palabra3)
    //esta expresion regular toma el titulo y le inserta un span ya que de otra forma la posicon es reconocida como un string
    tituloTxt.innerHTML = tituloTxt.innerHTML.replace(new RegExp(palabra3 + "(?![^<]*>|[^<>]*<\/)", 'g'), `<span class="tres">${palabra3}</span>`); 
    tituloTxt.innerHTML = tituloTxt.innerHTML.replace(new RegExp(palabra4 + "(?![^<]*>|[^<>]*<\/)", 'g'), `<span class="cuatro">${palabra4}</span>`); 
    tituloTxt.innerHTML = tituloTxt.innerHTML.replace(new RegExp(palabra5 + "(?![^<]*>|[^<>]*<\/)", 'g'), `<span class="cinco">${palabra5}</span>`); 
    const palabra_3_Resaltada = document.querySelector('.tres')
    const palabra_4_Resaltada = document.querySelector('.cuatro') 
    const palabra_5_Resaltada = document.querySelector('.cinco')

    palabra_3_Resaltada.style.color = colorFondo
    palabra_4_Resaltada.style.color = colorFondo
    palabra_5_Resaltada.style.color = colorFondo 

    const cta_txt = document.querySelector('.cta_txt') 
    const estilosCta = window.getComputedStyle(cta_txt) 
    console.log(estilosCta.width)
    

    const descripcion = document.querySelector('.txt-1 p') 
    const estilosDescripcion = window.getComputedStyle(descripcion) 
    const fuenteDescripcion = estilosDescripcion.fontFamily
    const campoLabel = document.querySelector('.campo label') 
    campoLabel.style.fontFamily = fuenteDescripcion
    console.log(estilosDescripcion.fontFamily) 

    const botonEnviar = document.querySelector('#enviarFormulario') 
    botonEnviar.style.backgroundColor = colorFondo
    botonEnviar.style.color = colorTexto
    
   
    


    
  
  
 

   
    })

 