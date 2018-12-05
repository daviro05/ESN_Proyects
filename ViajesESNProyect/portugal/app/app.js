
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
             " Situada en la desembocadura del río Tajo, es la capital del país, capital del distrito de Lisboa, "+
             " de la región de Lisboa, del Área Metropolitana de Lisboa, y es también el principal centro de la "+
             " subregión de la Gran Lisboa";
            break;

        case 2:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 2. JERÓNIMOS Y BELÉM\n Declarado Patrimonio de la Humanidad por la UNESCO en 1983, "+
            " el Monasterio de los Jerónimos de Lisboa (Mosteiro dos Jerónimos) constituye unos de los principales "+
            " ejemplos de la arquitectura manuelina en Portugal y un homenaje a la época dorada de los descubrimientos, "+
            " pues Manuel I ordenó su construcción para conmemorar el regreso de la India de Vasco de Gama."+
            " \n El puente 25 de Abril (en portugués, ponte 25 de Abril) es un gran puente colgante de Portugal que atraviesa"+
            " el estuario del río Tajo, en el área metropolitana de Lisboa. Oficialmente diseñado en su día como puente Salazar,"+
            " por haber sido mandado construir por el jefe del Gobierno de Portugal, António de Oliveira Salazar en 1960, "+
            " comenzó a designarse con su actual denominación tras la Revolución del 25 de abril de 1974, que restauró la "+
            " democracia en Portugal. En la actualidad, el puente 25 de Abril es considerado uno de los principales símbolos "+
            " e iconos de la ciudad de Lisboa."
            break;

        case 3:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 3. CASTILLO SAN JORGE\n Con más de ocho siglos de historia, el Castillo de San Jorge (Castelo de São Jorge) "+
            " sobresale en entre las callejuelas desordenadas de la colina más alta de Lisboa. Si lo visitas en verano, "+
            " es probable que encuentres algún músico callejero amenizando la empinada subida hasta la entrada del castillo,"+
            " donde además son frecuentes los festivales de música y teatro en esta época del año."+
            " \n El Castillo de Lisboa pertenece a la época islámica, y tenía como función proteger y albergar"+
            " la guarnición militar. Al contrario de muchos otros castillos de Europa, no sirvió como residencia."+
            " Se conservan 11 torres, foso, patios, garitas y varias construcciones más."+
            " Dicen que esta colina fue fortificada antes de la inminente llegada de los romanos, y reforzada varias veces,"+
            " tanto por los Moros y Visigodos cuando llegó el primer Rey de Portugal: Afonso Henriques, "+
            " glorificado en los predios del Castillo con una estatua en la entrada del mismo. El castillo "+
            " cuenta con poco menos de 6.000 mts2.";
            break;

        case 4:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 4. PORTO\n Oporto es la segunda ciudad más poblada de Portugal, "+
            " después de Lisboa. Tenía 297.559 habitantes en el año 2011. Contornan el núcleo central "+
            " de la ciudad de Oporto, la subregión de Gran Oporto, y de manera más amplia el Área Metropolitana de Oporto,"+
            " que forma su área metropolitana de 2.959.045 habitantes."+
            " \n Oporto es una ciudad histórica y diversa, de la maraña de callejuelas empedradas que "+
            " forman el antiguo distrito de Ribeira, hasta las magníficas plazas de la Avenida dos Aliados."+
            " La región tiene fama por la producción de oporto, que se almacena en enormes bodegas que cubren"+
            " las riberas del poderoso río Duero.";
            break;

        case 5:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 5. FUNDACIÓN SERRALVES\n La fundación posee unos enormes y cuidados jardines de unas "+
            " 18 hectáreas que envuelven el museo. En el folleto que os entregarán a la entrada se plantean diferentes"+
            " itinerarios que podéis seguir para recorrer los jardines sin perder detalle. Uno de los puntos más importantes "+
            " del recorrido es la casa de Serralves."+
            "\n El Museo de Arte Contemporáneo de la Fundación Serralves (Museu Serralves) es el museo más importante "+
            " de Portugal dedicado al arte moderno. Situado en pleno Parque de Serralves, el Museo Serralves combina "+
            " cultura y naturaleza en un mismo espacio, que desde su inauguración a finales de los noventa se ha "+
            " convertido en referente a nivel internacional para el arte contemporáneo.";
            break;
        
        case 6:
        document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 6. VISITA BODEGA\n En nuestra visita a Oporto es obligatorio hacer una visita a las bodegas de vino. "+
            " Curiosamente, casi todas tienen nombres o apellidos ingleses: esto se debe a que fueron estos quienes, "+
            " en el siglo XVII, y a causa de una guerra contra Francia, quedaron sin importaciones de vinos."+
            "\n La bodega Cálem es una de las más conocidas de Oporto. Su ubicación, muy cercana al puente Luis I,"+
            " la convierte en una de las bodegas más visitadas de Vila Nova de Gaia."+
            " En sus orígenes, la marca Cálem centró sus actividades en la exportación de vinos a Brasil. "+
            " Aún en la actualidad su logo representa una carabela, como símbolo del comercio transatlántico."+
            " \n¡Vamos a disfrutar con la cata!";
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


