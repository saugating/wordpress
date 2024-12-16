window.addEventListener("load", function() {

(function ($, root, undefined) {

    $(function () {

      gsap.registerPlugin(ScrollTrigger);

      const revealtop = gsap.utils.toArray('.revealtop');
      revealtop.forEach(revealtopbox => {
        gsap.to(revealtopbox, {
          y : -50,
          opacity: 1,
          duration: .5,
          scrollTrigger: {
            trigger: revealtopbox,
            start: "top 100%",
            end: "bottom",
            toggleActions: "play none none reset",
          }
        })
      });

      const boxess = gsap.utils.toArray('.parallax');
      boxess.forEach(box => {
        gsap.to(box, {
          y : -50,
          scrollTrigger: {
            trigger: box,
            scrub: 1,
            start: "top 100%",
            end: "bottom",
          }
        })
      });

    });

})(jQuery, this);

});
