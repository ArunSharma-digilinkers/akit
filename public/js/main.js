const counters = document.querySelectorAll('.counter');

  const animateCounter = (counter) => {
    const target = +counter.getAttribute('data-target');
    const suffix = counter.getAttribute('data-suffix') || '';
    let count = 0;
    const increment = Math.ceil(target / 100);

    const update = () => {
      count += increment;
      if (count < target) {
        counter.innerText = `${count}${suffix}`;
        requestAnimationFrame(update);
      } else {
        counter.innerText = `${target}${suffix}`;
      }
    };

    update();
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        animateCounter(counter);
        observer.unobserve(counter); // Stop observing after animation
      }
    });
  }, {
    threshold: 0.6 // Trigger when 60% of counter is visible
  });

  counters.forEach(counter => observer.observe(counter));

$('.testimonials').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	autoplay:true,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})


// AOS Init
$(document).ready(function() {
	AOS.init({
		duration: 1000,
	  });
  });