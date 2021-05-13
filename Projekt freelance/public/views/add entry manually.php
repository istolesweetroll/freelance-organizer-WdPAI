<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style2.css">
    <title>ADD ENTRY MANUALLY</title><style type="text/css">
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
    <?php
    require_once 'src/repository/ProjectRepository.php';
    if(isset($messages)){
        foreach($messages as $message) {
            echo $message;
        }
    }
    $projectRepository = new ProjectRepository($_COOKIE['username']);
    $wcr= $projectRepository ->getAllUserProjects($_COOKIE['username']);
    ?>
</head>
<body>
<form action ="main">
<button id="back" >↺</button>
</form>
    <div class="container">
        
        <div class="logo">
            <img src="public/img/artist.svg">
        </div>
        <div class="new-project-container">
            <div class="login-container">
                <form class="login">
                    <div id="demoFont"></div>
                    <div class="select">
                            <select name="project">
                                <option value="">Which project did you work on?</option>
                                <?php
                                asort($wcr);
                                reset($wcr);
                                foreach($wcr as $p => $w):
                                    echo '<option value="'.$p.'">'.$w.'</option>'; //close your tags!!
                                endforeach;
                                $currentProject =  $_POST['project'];
                                setcookie('currentProject', $currentProject, time() + (86400/2), "/"); // 86400 = 1 day

                                ?>

                            </select>
        <div class="select_arrow">
        </div>
    
        
            <form class="new project" action="main">
                  </div>
        <div class="new-project-container">
            <label for="meeting-time"></label>When did you work on the project?<br/></div>
            <input type="datetime-local" id="meeting-time"
                   name="meeting-time" value="2021-06-12T19:30"
                   min="2020-06-07T00:00" max="2023-06-14T00:00">
            <label for="meeting-time"></label>How long did you work on the project?<br/></label>
          
            <input type="time" id="appt" name="appt">

               <input name="entry description" type="text" placeholder="provide short description of your entry">


               <button>SUBMIT</button>
            </form>
        </div>
    </div>
</body>