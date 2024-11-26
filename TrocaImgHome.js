let imgs = ['img/BannerCatalogoAcessorios.png', 'img/BannerCatalogoRacoes.png', 'img/BannerMenu.png', 'img/BannerHome.png'];
let Banner = document.querySelector('#imgHome');
let index = 0;

function TrocarImg() {
  Banner.src = imgs[index];
  index++;

  if (index === imgs.length) {
    index = 0;
  }
}
setInterval(TrocarImg, 3500)