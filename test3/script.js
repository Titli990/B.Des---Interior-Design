/* Read More Toggle */
function toggleReadMore(btn) {
  const text = btn.previousElementSibling;

  text.classList.toggle("expanded");

  btn.innerText = text.classList.contains("expanded")
    ? "Read Less"
    : "Read More";
}

/* Stats Counter Animation */
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat h2");
  const duration = 2000;

  counters.forEach(counter => {
    const targetText = counter.innerText.trim();
    const isK = targetText.includes("K");
    const target = parseInt(targetText.replace("K", ""));
    const finalValue = isK ? target * 1000 : target;

    let start = 0;
    const increment = finalValue / (duration / 16);

    const updateCounter = () => {
      start += increment;

      if (start < finalValue) {
        counter.innerText = isK
          ? Math.floor(start / 1000) + "K"
          : Math.floor(start);
        requestAnimationFrame(updateCounter);
      } else {
        counter.innerText = isK ? target + "K" : target;
      }
    };

    updateCounter();
  });
});


