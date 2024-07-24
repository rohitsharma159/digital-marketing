
class AnimatedNumber {
  constructor(element, targetNumber, duration) {
    this.element = element;
    this.targetNumber = targetNumber;
    this.duration = duration;
    this.startNumber = 0;
    this.increment = targetNumber / (duration / 16); // Update every 16ms (60fps)
    this.currentNumber = 0;
    this.animationFinished = false;
  }

  updateNumber() {
    this.currentNumber += this.increment;
    if (this.currentNumber >= this.targetNumber) {
      this.currentNumber = this.targetNumber;
      this.animationFinished = true;
    }
    this.element.textContent = this.formatNumber(Math.round(this.currentNumber));

    if (!this.animationFinished) {
      requestAnimationFrame(this.updateNumber.bind(this));
    }
  }

  formatNumber(number) {
    // Add a plus sign at the end of the number
    return number.toLocaleString() + '+';
  }

  startAnimation() {
    this.animationFinished = false;
    this.updateNumber();
  }
}

function animateNumbersOnScroll() {
  const numberContainers = document.querySelectorAll(".number-container");
  const options = {
    threshold: 0.5, // Trigger when 50% of the element is visible
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const targetNumber = parseInt(entry.target.dataset.target, 10);
        const duration = 2000; // Animation duration in milliseconds
        const animatedNumber = new AnimatedNumber(entry.target, targetNumber, duration);
        animatedNumber.startAnimation();
        observer.unobserve(entry.target); // Stop observing once animation starts
      }
    });
  }, options);

  numberContainers.forEach((container) => {
    observer.observe(container);
  });
}
animateNumbersOnScroll();



const slider = document.querySelector(".slides-container");
const prevButton = document.querySelector(".prev-btn");
const nextButton = document.querySelector(".next-btn");
const slideWidth = document.querySelector(".slide").clientWidth;

let currentPosition = 0;

// Function to move the slider to the given position
function moveToPosition(position) {
  slider.style.transform = `translateX(${position}px)`;
}

// Function to handle the previous button click
function prevSlide() {
  currentPosition += slideWidth;
  if (currentPosition >= 0) {
    currentPosition = -(slideWidth * (slider.childElementCount - 1));
  }
  moveToPosition(currentPosition);
}

// Function to handle the next button click
function nextSlide() {
  currentPosition -= slideWidth;
  if (currentPosition <= -(slideWidth * (slider.childElementCount - 1))) {
    currentPosition = 0;
  }
  moveToPosition(currentPosition);
}

// Event listeners for the navigation buttons
prevButton.addEventListener("click", prevSlide);
nextButton.addEventListener("click", nextSlide);

/*------------------for logo slider-------------------- */
$(document).ready(function() {
  $(".owl-carousel").owlCarousel({
    items:6, // Number of items to show at a time
    loop: true, // Infinite loop
    margin:0, // Space between items
    nav: true, // Show navigation buttons
    autoplay: true, // Auto-play the carousel
    autoplayTimeout: 3000, // Auto-play interval in milliseconds
    responsive: {
      0: {
        items: 2 // Number of items to show on different screen sizes
      },
      600: {
        items: 2
      },
      1000: {
        items: 5
      }
    }
  });
});