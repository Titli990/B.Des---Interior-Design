<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>ABC</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="style.css"/>

  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
/>


</head>
<body>

<!-- Navigation -->
<header class="main-header">
  <div class="header-inner">

    <div class="logo">
      <a href="/">
        <img src="images/logo1.png" alt="ABC School of Design and Architecture">
      </a>
    </div>

    <!-- Hamburger -->
    <button class="menu-toggle" aria-label="Toggle Menu">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- Navigation -->
    <nav class="nav">
      <a href="#">About Us</a>
      <a href="#">Admissions</a>
      <a href="#">Faculty</a>
      <a href="#">Alumni</a>
      <a href="#">Contact Us</a>
    </nav>

  </div>
</header>
<!-- put this JUST before </body> -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".menu-toggle");
  const nav = document.querySelector(".nav");

  if (!toggle || !nav) return;

  toggle.addEventListener("click", () => {
    toggle.classList.toggle("active");
    nav.classList.toggle("open");
  });

  /* Close on link click */
  nav.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      toggle.classList.remove("active");
      nav.classList.remove("open");
    });
  });
});
</script>


