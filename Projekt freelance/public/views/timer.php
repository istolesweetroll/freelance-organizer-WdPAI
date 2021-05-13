<!doctype html>
<title>Countdown</title>
<link rel="stylesheet" type="text/css" href="public/css/style2.css">
<style>

    html, body {
        height: 100%;
        background-image: url('../img/BananaLeaf_Preview_01_fx.png');
        margin: 0;
        padding: 0;
    }
    body {
        background: transparent linear-gradient(180deg, #A2B198 0%, #A2B198 100%) 0% 0% no-repeat padding-box;
        background-image: url('public/img/come-back-later.svg');
        color: #fff;
        font: 18px Cousine, Menlo, Monaco, monospace;
    }
    #timer {
        position: fixed;
        top: 0; right: 0; bottom: 0; left: 0;
        text-align: center;
        line-height: 90vh;
        font-size: 240px;
    }
    #control {
        position: fixed;
        top: 30px; left: 30px;
        opacity: 1;
        transition: 0.1s opacity;
    }

    button {
        background: transparent linear-gradient(180deg,#829b71 0%, #829b71 100%) 0% 0% no-repeat padding-box;

        border-radius: 19px;
       border: none;
        color: white;
        line-height: 2.5em;
    }
    #back {
    display: block;
    width: 3%;
    position: absolute;
}
#back:hover {
 border: none;

 background: orange;
 box-shadow: 0px 0px 1px #777;
}
</style>

<body>

<div id="timer" onclick="toggleControls()"></div>

<div id="control">

    <button onclick="setTimer()">Set timer</button>
    <button onclick="resetTimer()">Reset</button>
    
<form action ="main">
    <button onclick="toggleControls()">Save entry</button>
</form>
</div>
<script>

    var endTime = (+localStorage.endTime || 0)
    function setTimer() {
        var duration = +prompt('How long to set the timer (minutes)', '15')
        endTime = localStorage.endTime = duration * 60e3 + Date.now()
        update()
    }
    function resetTimer() {
        endTime = 0
    }
    function toggleControls() {
        document.body.classList.toggle('controls-hidden')
    }

    function update() {
        var timeLeft = endTime - Date.now()
        var totalTime = endTime - timeLeft;
        if (timeLeft < 0) {
            setText('--:--')
        } else {
            var minutes = Math.floor(timeLeft / 60e3)
            var seconds = Math.floor(timeLeft / 1e3) % 60

            setText(`${minutes}:${seconds.toString(10).padStart(2, '0')}`)

        }

    }

    function setText(text) {
        document.getElementById('timer').textContent = text
    }

    setInterval(update, 200)

</script>
<form action ="main">
<button id="back" >↺</button>
</form>
</body>