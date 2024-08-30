//stycky navbar
let nav = document.querySelector("header");
window.addEventListener("scroll",()=>{
    if(document.documentElement.scrollTop > 50){
        nav.classList.add("sticky");
    }
    else{
        nav.classList.remove("sticky");
    }
})

// Continuously scroll the slider
function slideVideos() {
    var sliderWrapper = document.querySelector('.slider-wrapper');
    var firstSlide = sliderWrapper.firstElementChild;
    var slideWidth = firstSlide.clientWidth;
  
    // Slide left by one slide width
    sliderWrapper.style.transition = 'transform 2s ease';
    sliderWrapper.style.transform = 'translateX(-' + slideWidth + 'px)';
  
    // Move the first slide to the end
    setTimeout(function() {
        sliderWrapper.appendChild(firstSlide);
        sliderWrapper.style.transition = 'none'; // Remove transition for instant move
        sliderWrapper.style.transform = 'translateX(0)';
        setTimeout(function() {
            sliderWrapper.style.transition = 'transform 2s ease'; // Add transition back
        }, 0);
    }, 500); // Adjust this value to match transition duration
}
  
// Automatically slide the videos at intervals
setInterval(slideVideos, 5000);