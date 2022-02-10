<div class="choose-your-plant">
<div><a href="?section=logout" class="pushed-right">Log out</a></div>
    <h1 class="title-choose-plant"> Choose your plant &#10084; </h1>
    <div class="container-choose-plant"> 

        <div id="first-plant" class="box-choose-plant">
            <p class="box-title"> Tutorial: Aloe Vera</p>
            <img class="img-choose-plant" src="public/images/plant-chi/plant-chi_neutral.png" alt="Aloe Vera">
        </div>
        <div class="box-choose-plant">
            <p class="box-title"> lvl 1 - locked</p>
            <img class="img-choose-plant" src="public/images/cactus_locked.png" alt="Aloe Vera">
        </div>
        <div class="box-choose-plant-no-img">
            <p class="box-title"> lvl 2 - locked</p>
            <p class="p-dots">...</p> 
        </div>
        <div class="box-choose-plant-no-img">
            <p class="box-title"> lvl 3 - locked</p>
            <p class="p-dots">...</p>
        </div> 
    </div>
</div>

<div class="plant-choosen">
    <div class="plant-chi-speaks">
        <a href="?section=choose-a-room">
            <img class="img-plant-chi-presentation" src="public/images/plant-chi/plant-chi_neutral.png" alt="Plant-chi talk">
        </a>
        <a class="plant-chi-presentation" href="?section=choose-a-room">
            <p>Hello <?= $_SESSION["username"] ?> , I’m Aloe Vera :D<br><br>I'm so happy to have a new friend!<br>Let me tell you what I need to stay alive :)</p>
        </a>
    </div>
</div>

    
 <!-- +message when the user choosed the plant! --> 

 <script src="public/js/choose-a-plant.js"></script>