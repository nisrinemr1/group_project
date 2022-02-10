const wrongSpots = document.querySelectorAll("#wrong-spot-1, #wrong-spot-2");
const goodSpot = document.querySelector("#good-spot");
const spots = document.querySelectorAll(".spot");
const imgTextNeutral = document.querySelector('#plantchi-img-neutral');
const imgTextUnhappy = document.querySelector('#plantchi-img-unhappy');
const imgTextHappy = document.querySelector('#plantchi-img-happy');

// For each spot in "spots" array ...
spots.forEach((spot) => {
  // ... add an event listener
  spot.addEventListener('mouseleave', () => {
    imgTextNeutral.classList.remove('hidden');
    imgTextHappy.classList.add('hidden');
    imgTextUnhappy.classList.add('hidden');
  });
});

wrongSpots.forEach((wrongSpot) => {
  wrongSpot.addEventListener('mouseover', () => {
    imgTextUnhappy.classList.remove('hidden');
    imgTextNeutral.classList.add('hidden');
    imgTextHappy.classList.add('hidden');
  });
});

goodSpot.addEventListener('mouseover', () => {
  imgTextHappy.classList.remove('hidden');
  imgTextUnhappy.classList.add('hidden');
  imgTextNeutral.classList.add('hidden');
});

