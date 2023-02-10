const getIpBtn = document.querySelector('.get-ip-btn')

getIpBtn.addEventListener('click', () => {
   navigator.clipboard.writeText('play.smc.mc')
   getIpBtn.innerText = 'IP: Скопирован';
   setTimeout(() => {
      getIpBtn.innerText = 'IP: play.smc.mc';
   }, 800);
})

