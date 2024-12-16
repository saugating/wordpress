window.addEventListener("load", function() {

(function ($, root, undefined) {

    $(function () {

      gsap.registerPlugin(ScrollTrigger);

      const imgscroll = gsap.utils.toArray('.imgscroll1');
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
          y : -40,
          scrollTrigger: {
            trigger: box,
            scrub: 1,
            start: "top 100%",
            end: "bottom",
          }
        })
      });

      const imgscrollc = gsap.utils.toArray('.imgscroll3');
      imgscrollc.forEach(box => {
        gsap.to(box, {
          y : -25,
          scrollTrigger: {
            trigger: box,
            scrub: 3,
            start: "top 100%",
            end: "bottom",
          }
        })
      });


    });

})(jQuery, this);

});
