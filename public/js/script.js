
const fiterItem = document.querySelector('.image-links');
let fileteImages = document.querySelectorAll('.recent-img');

window.addEventListener('load', ()=>{
  fiterItem && fiterItem.addEventListener('click',(selectedItem)=>{
    if(selectedItem.target.classList.contains('gallery-link')){
      document.querySelector('.link-active').classList.remove('link-active');
      selectedItem.target.classList.add('link-active');
      let filterName = selectedItem.target.getAttribute('data-name');
      fileteImages.forEach((image)=>{
          image.style.display='none'
        let filterImages = image.getAttribute('data-name');

        setTimeout(()=>{
          if((filterImages == filterName) || filterName == 'all'){
          
            image.style.display='block'
          
          }
        },0)
        
      })
    }
  })
})





document.addEventListener("DOMContentLoaded", function() {
    const categorySelect = document.getElementById('categorySelect');
    const otherInputDiv = document.getElementById('otherInputDiv');

    categorySelect && categorySelect.addEventListener('change', function() {
        if (this.value === 'other') {
            otherInputDiv.classList.remove('hidden');
        } else {
            otherInputDiv.classList.add('hidden');
        }
    });
});

const scrollers = document.querySelectorAll(".scroller");


if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
  addAnimation();
}

function addAnimation() {
  scrollers.forEach((scroller) => {
    scroller.setAttribute("data-animated", true);

    
    const scrollerInner = scroller.querySelector(".scroller__inner");
    const scrollerContent = Array.from(scrollerInner.children);

    
    scrollerContent.forEach((item) => {
      const duplicatedItem = item.cloneNode(true);
      duplicatedItem.setAttribute("aria-hidden", true);
      scrollerInner.appendChild(duplicatedItem);
    });
  });
}

const menuIcon = document.querySelector('.menu-icon');
const navbar = document.querySelector('.navbar');

menuIcon.addEventListener('click', () => {
    menuIcon.classList.toggle('active');
    navbar.classList.toggle('active');
});




document.addEventListener("DOMContentLoaded", function() {
  let lastScrollTop = 0;
  const navbar = document.querySelector(".navbar-wrapper");

  window.addEventListener("scroll", function() {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop > lastScrollTop) {
          
          navbar.style.top = "-70px"; // Adjust based on your navbar height
      } else {
         
          navbar.style.top = "0";
      }
      lastScrollTop = scrollTop;
  });
});