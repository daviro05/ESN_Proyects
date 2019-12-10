
const countdown = document.querySelector(".countdown");
const venta = document.querySelector(".venta");

// Set launch date
const launchDate = new Date("Sept 13, 2019 16:00:00").getTime();

const intvl = setInterval(() => {
  const now = new Date().getTime();

  const daysLeft = launchDate - now;

  const days = Math.floor(daysLeft / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (daysLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((daysLeft % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((daysLeft % (1000 * 60)) / 1000);

  countdown.innerHTML = `
    <div><strong>${days}</strong><span>Dias</span></div>
    <div><strong>${hours}</strong><span>Horas</span></div>
    <div><strong>${minutes}</strong><span>Minutos</span></div>
    <div><strong>${seconds}</strong><span>Segundos</span></div>
  `;

  //Negarlo cuando se quieran hacer pruebas
  if((hours<0 && minutes <0 && seconds<0)){
    clearInterval(intvl)
    //countdown.innerHTML = `¡Tickets a la venta en VERSE!`;
    //venta.innerHTML=`<a href='https://verse.events/kEMeEWgWHuecE'> Enlace a Verse </a><br>`;
    //venta.innerHTML+=`<br>ESN UCM`;
    //window.location.replace("./portugal/");
  }

  venta.innerHTML=`<br><a href='https://verse.events/kEMeEWgWHuecE'> Pagar por Verse </a><br>`;
    venta.innerHTML+=`<br>ESN UCM`;
}, 1000);


