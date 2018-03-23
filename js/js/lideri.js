function Lider(n, p ,i = '') {
    this.nume = n;
    this.pozitie = p;
    this.imgSrc = i;
  }

function getLideri() {
  var prezbiter = "Prezbiter";
  var diacon = "Diacon";
  return [
    new Lider("Cristian Vasile Roske", "Pastor onorific"),
    new Lider("Emil Meștereagă", "Pastor senior"),
    new Lider("Ciprian Terinte", "Pastor asistent"),
    new Lider("Adrian Jurj", "Pastor asistent"),
    new Lider("Dragoș Ștefănică", prezbiter),
    new Lider("Daniel Epure", prezbiter),
    new Lider("Titi Piftor", prezbiter),
    new Lider("Nicolae Văduva", prezbiter),
    new Lider("Cristian Dragomir", diacon),
    new Lider("Dumitru Piscuc", diacon),
    new Lider("Alin Pănican", diacon),
    new Lider("Marian Mănescu", diacon)
  ];
}

function adaugaLideri() {
  var ultimaPositie = null;
  var liderSection = document.getElementById('conducerePlaceHolder');
  var lideri = getLideri();
  for(var i = 0; i < lideri.length; ++i) {
    var l = lideri[i];
    if (l instanceof Lider) {
      liderSection.innerHTML += '<a href="#" class="tilter tilter--1">\
          <figure class="tilter__figure">\
            <img class="tilter__image" src="' + l.imgSrc + '" alt="' + l.nume + '" />\
            <div class="tilter__deco tilter__deco--shine"><div></div></div>\
            <figcaption class="tilter__caption">\
              <h3 class="tilter__title">' + l.nume + '</h3>\
              <p class="tilter__description">' + l.pozitie + '</p>\
            </figcaption>\
            <svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">\
              <path d="M20.5,20.5h260v375h-260V20.5z" />\
            </svg>\
          </figure>\
        </a>';
    } else throw "Bad type";
  }
};

adaugaLideri();
