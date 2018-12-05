
const countdown = document.querySelector(".countdown");
const venta = document.querySelector(".venta");

// Set launch date
const launchDate = new Date("Dec 6, 2018 00:00:00").getTime();

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

  if(!(hours<0 && minutes <0 && seconds<0)){
    clearInterval(intvl)
    countdown.innerHTML = `¡Nos vamos de viaje!`;
    //venta.innerHTML=`<a href='https://verse.events/QYT3ojb6wuets'>Enlace a Verse</a>`;
    venta.innerHTML=`ESN UCM`;
    window.location.replace("./portugal/");
  }
}, 1000);
