<h1 class="title_win_page">You did it!</h1>
<div class="win-page">
    <div class="plant-chi-win">
        <a href="?section=choose-a-room">
            <img class="img-plant-chi-win" src="public/images/plant-chi/plant-chi_happy.png" alt="Plant-chi talk">
        </a>
        <a class="plant-chi-congrats" href="?section=choose-a-room">
            <p>Congratulation <?= $_SESSION["username"] ?>, <br> You can now <br> either have<br>a real aloe vera<br>or play again :D</p>
        </a>
    </div>
</div>
<!-- <div id="btn_win">
    <button>PLAY AGAIN</button>
    <button>GET A REAL PLANT</button>
</div> -->
<div class="win-container">
    <div class="btn_win">
        <a class="win_btn_text" href="?section=choose-a-plant">PLAY AGAIN</a>
    </div>
    <div class="btn_win">
        <a class="win_btn_text" href="?section=choose-a-plant">GET A REAL PLANT</a>
    </div>
</div>
