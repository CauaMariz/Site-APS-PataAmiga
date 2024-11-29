let imgs = ['img/BannerCatalogoAcessorios.jpg', 'img/BannerCatalogoRacoes.jpg', 'img/BannerMenu.png', 'img/BannerHome.jpg'];
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