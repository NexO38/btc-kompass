
//BILDER ERST LADEN; WENN SIE IN DEN VIEWPORT EINTRETEN
//<img data-src="bild.jpg" alt="Bild" loading="lazy">

document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll("img[data-src]");

  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.getAttribute("data-src");
        observer.unobserve(img);
      }
    });
  }, options);

  images.forEach(image => {
    observer.observe(image);
  });
});
