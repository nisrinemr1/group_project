console.log("Hello Choose a room");


const wrongRoom = document.querySelector("#wrong-room-1");
const rightRoom = document.querySelector("#rightRoom");
const roomsArray = document.querySelectorAll(".grid-item");
const textEl = document.querySelector('.text-plant');



roomsArray.forEach((room) => {
  room.addEventListener('mouseleave', () => {
    const plantchiImg = document.getElementById('plantchiCommentContainer');
    if(plantchiImg){
      plantchiImg.remove();
    }
    
    const neutralState = document.createElement('div');//div
    neutralState.setAttribute('id', 'plantchiCommentContainer');
    neutralState.setAttribute('class', 'logo-container');

    const anchorComment = document.getElementById("anchorCommentContainer");
    anchorComment.appendChild(neutralState);

    const neutralStateImg = document.createElement('img');//<img>
    neutralStateImg.src = 'public/images/plant-chi/plant-chi_neutral.png';
    neutralStateImg.setAttribute('id', 'plant-chi_neutral');

    

    const neutralStateH1=document.createElement("h1");//<h1>
    neutralStateH1.innerText = "Choose the right room for me."
    neutralStateH1.setAttribute('class', 'text-plant');
    neutralStateH1.setAttribute('id', 'textPlant');
    neutralState.appendChild(neutralStateImg);
    neutralState.appendChild(neutralStateH1);
  

    
  });

});



wrongRoom.addEventListener('mouseenter', () => {

    const plantchiImg = document.getElementById("plantchiCommentContainer");
    //remove elements
    if(plantchiImg){
      plantchiImg.remove();
    }

    const neutralState = document.createElement('div');//div
    neutralState.setAttribute('id', 'plantchiCommentContainer');
    neutralState.setAttribute('class', 'logo-container');

    const plantchiSadReplaceImg = document.createElement('img');
    plantchiSadReplaceImg.src = "public/images/plant-chi/plant-chi_unhappy.png";
    neutralState.appendChild(plantchiSadReplaceImg);

    const plantchiSadReplace = document.createElement('h1');
    plantchiSadReplace.innerText = "Not this one...Or I will Die!";
    neutralState.appendChild(plantchiSadReplace);


    const anchorComment = document.getElementById("anchorCommentContainer");
    anchorComment.appendChild(neutralState);


});



//RightRoom

rightRoom.addEventListener('mouseover', () => {
  const plantchiImg = document.getElementById("plantchiCommentContainer");
    //remove elements
    if(plantchiImg){
      plantchiImg.remove();
    }

    const neutralState = document.createElement('div');//div
    neutralState.setAttribute('id', 'plantchiCommentContainer');
    neutralState.setAttribute('class', 'logo-container');

    const plantchiHappyReplaceImg = document.createElement('img');
    plantchiHappyReplaceImg.src = "public/images/plant-chi/plant-chi_happy.png";
    neutralState.appendChild(plantchiHappyReplaceImg);

    const plantchiHappyReplace = document.createElement('h1');
    plantchiHappyReplace.innerText = "This one looks perfect!";
    neutralState.appendChild(plantchiHappyReplace);


    const anchorComment = document.getElementById("anchorCommentContainer");
    anchorComment.appendChild(neutralState);
  


});  