<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style2.css">
    <title>COMPLETE PROJECT</title>
</head>
<style type="text/css">
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
<form action ="main">
<button id="back" >↺</button>
</form>
    <div class="container">
        <div class="logo">
            <img src="public/img/planting a tree.svg">
        </div>
        <div class="login-container">
            <form class="login">
                <div id="demoFont"></div>
                <div class="select">
    <select>
        <option>Which project do you want to mark as complete?</option>
        <option>Cat portrait for Lindsay Elise</option>
        <option>Tree in watercolor for Gary Green</option>

        
    </select>
    <div class="select_arrow">
    </div>
    <div class="control-group">


    </div>
    <label class="control control-checkbox">
        <input type="checkbox" />Email the client to inform of project completion

        <div class="control_indicator"></div>
    </label>
                <button>COMPLETE PROJECT</button>

            </form>
        </div>
    </div>
</body>