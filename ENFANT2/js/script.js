document.documentElement.classList.add('js');
window.addEventListener('load', () => {
  document.documentElement.classList.add('is-loaded');
});

//________________ création de span sur les titres de section uniquement
const sectionTitles = document.querySelectorAll('.section-title');
sectionTitles.forEach((titleEl) => {
  if (titleEl.firstElementChild && titleEl.firstElementChild.tagName === 'SPAN') return;
  const spanElement = document.createElement('span');
  spanElement.textContent = titleEl.textContent;
  titleEl.textContent = '';
  titleEl.appendChild(spanElement);
});

//________________ déclenchement des titres au scroll (uniforme)
const titleObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-inview');
      } else {
        entry.target.classList.remove('is-inview');
      }
    });
  },
  { threshold: 0.55 }
);

sectionTitles.forEach((title) => titleObserver.observe(title));

// Fade-in des sections : demandé "au chargement" (géré en CSS via `html.is-loaded`)

// ___________________accélération FLOWERS
document.addEventListener('DOMContentLoaded', () =>{
    const maxDuration = 60;
    const minDuration = 18;

    //accélération au scroll de l'élément  du document ayant la setProperty définie
    window.addEventListener("scroll", () => {
        document.documentElement.style.setProperty('--rotateTime', `${minDuration}s` )
    })
    //remise à vitesse courante
    window.addEventListener("scrollend", () => {
        document.documentElement.style.setProperty('--rotateTime', `${maxDuration}s` )
    })
})

// (le reste du script continue)
