
document.addEventListener("DOMContentLoaded", () => {
    document.querySelector('#map').addEventListener("click", this.cambiar, false);
}, false);

function verPlan(numero) {

    switch (numero) {
        case 0:
            window.location.reload();
        break;

        case 1:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 1. VIGO\n La primera parada del Camino de Santiago de ESN UCM es Vigo." +
            " La ciudad más poblada de Galicia está a a orillas del Océano Atlántico. De origen pesquero, tiene un casco antiguo con tradición marinera, que contrasta con las modernas instalaciones de sus puertos deportivos."+ 
            " No puede faltar un paseo por el Casco Vello o por el Parque de Castrelo, o subir al Castro para disfrutar de la puesta de Sol."+
            " ¿Sabías que aquí venía el submarino Nautilus a aprovisionarse de oro? En la ría de Vigo hay docenas de galeones hundidos cargados con el oro de las Américas. Tesoros que aun no han salido a la luz, ¡vayamos a descubrirlos!</textarea>";
            break;

        case 2:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 2. ISLAS CÍES\n Y la segunda parada del Camino de ESN UCM son... ¡las islas Cíes!"+
            " La historia de las Islas Cíes se remonta al Paleolítico y los romanos las rebautizaron como “islas de los dioses”. En 1980 fueron declaradas Parque Natural y en la actualidad están muy protegidas y el acceso es restringido y está limitado a 2.200 personas por día."+
            " Las Islas Cíes se sitúan en la Ría de Vigo. El archipiélago está compuesto por tres islas principales que no llegan a los 3km de largo. En la zona este de las islas podemos encontrar las fantásticas playas de Rodas y Figueiras. ¡Ven a disfrutar de los 4 faros o de la playa de Rodas, considerada la mejor playa del mundo el 2007 por el diario británico The Guardian!"
            break;

        case 3:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 3. CAMINO DE SANTIAGO\n Y la tercera etapa del Camino de ESN UCM, como no podía ser de otra forma es ¡el camino de Santiago!"+
            " Porque sí amigos, vamos a hacer una pequeña etapa de esta peregrinación de origen medieval cuyo propósito es llegar a la tumba atribuida al apóstol Santiago. Es una ruta que siempre ha sido y sigue siendo muy concurrida, pero no solo por peregrinos procedentes de todas pares de España, sino por todas partes del mundo."+
            " El símbolo más importante del camino es una flecha amarilla, la cual indica la dirección del sendero, también una concha de viera con la cruz de Santiago son algunos de los distintivos. ¿Te atreves a seguirlo sin perderte?";
            break;

        case 4:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 4. SANTIAGO\n La cuarta etapa del camino de ESN UCM nos llevará hasta Santiago de Compostela."+
            " No puedes perderte el casco viejo, la rua del franco o, por supuesto, la plaza de abastos. Allí se encuentra el mercado de Abastos de la ciudad, uno de los cinco más importantes de España y segundo monumento más visitado de la ciudad."+
            " Y como no podía ser de otra manera, también destacar la catedral de Santiago. Es un centro de culto católico situada en la Plaza del Obradoiro, el corazón de Santiago."+
            " Además, ¡el fin de semana que vamos son las fiestas de la Ascensión!";
            break;

        case 5:
            document.querySelector('.dinamico').innerHTML = "<textarea class='lectura form-control form-rounded' readonly=readonly>"+
            " 5. OURENSE\n";
            break;


    }
}

