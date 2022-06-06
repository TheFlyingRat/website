/*! home.js 1.4.87  | MIT */

window.onscroll = () => 

{
  let elem = document.getElementById("scrollTooltip");
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    elem.className = "noselect disappear";
    elem.innerText = "Good job :)";
  } else {
    
    if (document.body.scrollTop < 50 || document.documentElement.scrollTop < 50) {
      elem.className = "noselect reveal";
      elem.innerText = "⬇ Scroll Down ⬇";
    }
  }
}

// gsap


gsap.registerPlugin(ScrollTrigger);



// Make panels lock into place after entering viewport
gsap.utils.toArray(".panel").forEach((panel, i) => {
  ScrollTrigger.create({
    trigger: panel,
    start: "top top", 
    pin: true, 
    pinSpacing: false 
  });
});



// Things inside the panel to reveal in
gsap.utils.toArray(".revealUp").forEach((elem, i) => {
  ScrollTrigger.create({
    trigger: elem,
    markers: true,
    start: "top 90%",
    end: "bottom 30%",


    onEnter: function () {
      gsap.fromTo(
        elem,
        { y: 70, autoAlpha: 0 },
        {
          duration: 1.25,
          y: 0,
          autoAlpha: 1,
          ease: "back",
          overwrite: "auto"
        }
      );
    },
    onLeave: function () {
      gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
    },
    onEnterBack: function () {
      gsap.fromTo(
        elem,
        { y: -70, autoAlpha: 0 },
        {
          duration: 1.25,
          y: 0,
          autoAlpha: 1,
          ease: "back",
          overwrite: "auto"
        }
      );
    },
    onLeaveBack: function () {
      gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
    }
  });
});