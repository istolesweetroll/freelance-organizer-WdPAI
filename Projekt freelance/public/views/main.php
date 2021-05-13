<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style2.css">
    <title>MAIN PAGE</title>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/sitting on a couch.svg">
        </div>
        <div class="login-container">

            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
                <form action="newentry">
                <button>NEW ENTRY</button>
                </form>
            <form action="newproject">
                <button>NEW PROJECT</button>
            </form>
            <form action="manageprojects">
                <button>MANAGE PROJECTS</button>
            </form>
            <form action="accountsettings">
                <button>ACCOUNT SETTINGS</button>
            </form>
                <button>SEND FEEDBACK</button>
                <button>ABOUT</button>


        </div>
    </div>

</body>