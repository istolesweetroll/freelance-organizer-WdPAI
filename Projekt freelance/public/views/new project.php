<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style2.css">
    <title>NEW PROJECT</title>
</head>

<body>
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
<form action ="main">
<button id="back" >↺</button>
</form>
    <div class="container">
        <div class="logo">
            <img src="public/img/artist.svg">
        </div>
        <div class="new-project-container">
            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <form class="new project" action="addnewproject" method="POST">
                <input name="projecttitle" type="text" placeholder="name your project">
                <input name="projectdescription" type="text" placeholder="provide short description of your project">
                <input name="clientname" type="text" placeholder="enter your client's name">
                <input name="clientemail" type="email" placeholder="enter your client's email">
                <label for="projectdeadline"></label>Choose your project deadline<br/></label>
                <input name = "projectdeadline" type="datetime-local" id="meeting-time"
                       value="2021-06-12T19:30"
                       min="2020-06-07T00:00" max="2023-06-14T00:00">
                <button>SUBMIT</button>
                
            </form>
        </div>
    </div>
</body>