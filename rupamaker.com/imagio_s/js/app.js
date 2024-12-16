window.addEventListener("load", function() {
  
(function ($, root, undefined) {

    $(function () {

      gsap.registerPlugin(ScrollTrigger);

      const imgscroll = gsap.utils.toArray('.imgscroll');
      imgscroll.forEach(imgscrollbox => {
        gsap.to(imgscrollbox, {
          y: -50,
          scrollTrigger: {
            trigger: imgscrollbox,
            scrub: 3,
            start: "top 100%",
            end: "bottom",
          }
        })
      });

      const boxess = gsap.utils.toArray('.imgscroll2');
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

      const backtop = gsap.utils.toArray('.backtop');
      backtop.forEach(backtopbox => {
        gsap.to(backtopbox, {
          y : -30,
          scrollTrigger: {
            trigger: backtopbox,
            scrub: 3,
            start: "top 100%",
            end: "bottom",
          }
        })
      });

      const color = gsap.utils.toArray('.marker');
      color.forEach(colorbox => {
        gsap.to(colorbox, {
          background: "#62CEE2",
          scrollTrigger: {
            trigger: colorbox,
            scrub: 1,
            start: "top 75%",
            end: "top 50%",
          }
        })
      });

    });

})(jQuery, this);

});
