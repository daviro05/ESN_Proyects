
document.addEventListener("DOMContentLoaded", () => {
    //document.querySelector('#map').addEventListener("click", this.cambiar, false);
}, false);

function verPlan(numero) {

    switch (numero) {
        case 0:
            window.location.reload();
        break;

        case 1:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 1. LISBOA\n Lisboa es la capital​ y mayor ciudad de Portugal."+
             "Situada en la desembocadura del río Tajo, es la capital del país, capital del distrito de Lisboa, "+
             "de la región de Lisboa, del Área Metropolitana de Lisboa, y es también el principal centro de la "+
             "subregión de la Gran Lisboa";
            break;

        case 2:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 2. JERÓNIMOS Y BELÉM\n Declarado Patrimonio de la Humanidad por la UNESCO en 1983, "+
            "el Monasterio de los Jerónimos de Lisboa (Mosteiro dos Jerónimos) constituye unos de los principales "+
            "ejemplos de la arquitectura manuelina en Portugal y un homenaje a la época dorada de los descubrimientos, "+
            "pues Manuel I ordenó su construcción para conmemorar el regreso de la India de Vasco de Gama."
            break;

        case 3:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 3. CASTILLO SAN JORGE\n Con más de ocho siglos de historia, el Castillo de San Jorge (Castelo de São Jorge) "+
            "sobresale en entre las callejuelas desordenadas de la colina más alta de Lisboa. Si lo visitas en verano, "+
            "es probable que encuentres algún músico callejero amenizando la empinada subida hasta la entrada del castillo,"+
            "donde además son frecuentes los festivales de música y teatro en esta época del año.";
            break;

        case 4:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 4. PORTO\n Oporto es la segunda ciudad más poblada de Portugal, "+
            "después de Lisboa. Tenía 297.559 habitantes en el año 2011. Contornan el núcleo central "+
            "de la ciudad de Oporto, la subregión de Gran Oporto, y de manera más amplia el Área Metropolitana de Oporto,"+
            "que forma su área metropolitana de 2.959.045 habitantes.";
            break;

        case 5:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 5. FUNDACIÓN SERRALVES\n La fundación posee unos enormes y cuidados jardines de unas "+
            "18 hectáreas que envuelven el museo. En el folleto que os entregarán a la entrada se plantean diferentes"+
            "itinerarios que podéis seguir para recorrer los jardines sin perder detalle. Uno de los puntos más importantes "+
            "del recorrido es la casa de Serralves.";
            break;
        
        case 6:
        document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 6. VISITA BODEGA\n Nuestra visita a Oporto es obligatorio hacer una visita a las bodegas de vino. "+
            "Curiosamente, casi todas tienen nombres o apellidos ingleses: esto se debe a que fueron estos quienes, "+
            "en el siglo XVII, y a causa de una guerra contra Francia, quedaron sin importaciones de vinos."+
            "¡Vamos a disfrutar con la cata!";
            break;


    }
}

function verMensajes() {

    let codigo = document.querySelector('#codigo_coordi').value;
    codigo = codigo.toLowerCase();

    if( codigo != "ben01ja" && 
        codigo != "dav02id" && 
        codigo != "fer03be" &&
        codigo != "fer04ma" &&
        codigo != "ali05ci" &&
        codigo != "cov06aa" &&
        codigo != "ele07na" &&
        codigo != "enr08iq" &&
        codigo != "ern09es" &&
        codigo != "lau10ra" &&
        codigo != "pal11om" &&
        codigo != "ped12ro" &&
        codigo != "you13na" )
    {
        alert("Error de código")
    }
    else{
        window.location.href = "../paginas/notes.php?ver="+codigo;
    }
}


