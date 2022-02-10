<div><a href="?section=logout" class="pushed-right">Log out</a></div>
<main class="spot-choice-c">
  <!-- COLUMN 1 = plant-chi img + text -->
  <div id="plantchi-img-neutral" class="plantchi-speaks-flex-c">
    <img class="img-plantchi-spot" src="public/images/plant-chi/plant-chi_neutral.png" alt="Plant-chi gives instructions">
    <p class="plantchi-text">Choose the right spot for me &#60;3 </p>
  </div>
  <div id="plantchi-img-unhappy" class="plantchi-speaks-flex-c hidden">
    <img class="img-plantchi-spot" src="public/images/plant-chi/plant-chi_unhappy.png" alt="Plant-chi is unhappy">
    <p class="plantchi-text">Ooooh no, light ! </p>
  </div>
  <div id="plantchi-img-happy" class="plantchi-speaks-flex-c hidden">
    <img class="img-plantchi-spot" src="public/images/plant-chi/plant-chi_happy.png" alt="Plant-chi is happy">
    <p class="plantchi-text">I love it here ! &#60;3 </p>
  </div>
  <!-- COLUMN 2 = room img -->
  <section class="body">
    <div class="card">
      <img class="card-image" src="public/images/rooms/bright_no_direct_sun.png" alt="">
      <a href="?section=success-spot" class="spot" id="good-spot" >&nbsp;</a>
      <a href="?section=fail-page" class="spot" id="wrong-spot-1">&nbsp;</a>
      <a href="?section=fail-page" class="spot" id="wrong-spot-2">&nbsp;</a>
    </div>
  </section>

</main>
<script src="public/js/choose-a-spot.js"></script>