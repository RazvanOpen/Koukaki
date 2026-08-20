//________________ parallax title logo 
const bannerLogo = document.querySelector('.banner img');

window.addEventListener('scroll', function() {

   //window.scrollY : distance défilée verticalement.
   //renvoie le plus petit nombre des 2  *** 200px =  tiers H banner
  const parallaxValue = Math.min(window.scrollY * 0.25,200);
    bannerLogo.style.transform = 'translateY(' +parallaxValue+'px)';
});

//_____________________parallax Nuages et lieu
window.addEventListener('scroll', function () {

    const bigCloud = document.querySelector('.bigCloud');
    const littleCloud = document.querySelector('.littleCloud');
    const placeSection = document.querySelector('#place');

    //distance entre haut de l'élément et haut de  page.
    const sectionOffsetTop = placeSection.offsetTop;
    //position actuelle defilement - Nav récent || nav ancien
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;

    if (scrollPosition >= sectionOffsetTop) {
        // le diviseur ajuste la vitesse : inversément proportionnel
        // -> rendu plus évident (amplitude max inchangée à 300px)
        const parallaxValue = (scrollPosition - sectionOffsetTop) / 3
        //renvoie le plus petit nombre des 2  *** 300px limite énoncé
        const translationX = Math.min(parallaxValue, 300);

        bigCloud.style.transform = 'translateX(' + (-translationX) + 'px) translateY(' +(parallaxValue/6) +'px) '; 
        littleCloud.style.transform =  'translateX(' + (-translationX) + 'px)'; 
    } 
});
