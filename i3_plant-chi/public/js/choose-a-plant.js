console.log("Hello Choose a plant");

const chooseYourPlant = document.querySelector('.choose-your-plant');
const firstPlant = document.querySelector('#first-plant');

firstPlant.addEventListener('click',function(e){
    chooseYourPlant.hidden = true;
    //like this the block ".choose-your-plant" will be hidden!
});

