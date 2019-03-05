<?php
    include 'signupprocess.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- My CSS-->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Login</title>
  </head>
  <body>

    <div class="modal-dialog modal-dialog-centered text-center">
        <div class="col-sm-8 modal-container">
            <div class="modal-content">
               
                <div class="col-12 user-img">
                    <img src="image/avatar/noimg.png" id="signuppic" onclick="chooseProPicDivShow()" width="100" height="100">
                </div>
                
                <div class="modal-body">
                    <form action = "signup.php" method="post">
                        <input type="hidden" name="dp" id ="dp" value="noimg"/>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username"  placeholder="Enter username">
                            <p>Username must be between 6 - 12 charecters</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"  placeholder="Enter email">
                            <p>Provide a proper email (EX:username@domain.example)</p>
                            
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <p>Password must be between 6 - 12 charecters</p>
                            <!-- For php generated warning -->
                            <small>
                                <?php
                                    echo $error;
                                ?>
                            </small>
                            
                        </div>
                        <button type="submit" name="signup" class="btn btn-outline-danger">Signup</button>
                        </div class="form-group">
                            <a href="index.php">Already have an account? Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="choose_pic_div" class = "col-sm-12">
        <div class = "row">
            <div class="col-sm-12">
                <h1 class= "text-info">Choose a profile picture...</h1>
            </div>
        </div>
        <hr>
        <div class= "row" id="imgRow">
            <div class= "col-xm-12">
                <img src="../image/avatar/smoke.png" id ="smoke" alt="smoke" class="avatar_choose " onClick = "changeProfilePicture('smoke')">
                <img src="../image/avatar/bandit.png" id ="bandit" alt="bandit" class="avatar_choose" onClick = "changeProfilePicture('bandit')">
                <img src="../image/avatar/blitz.png" id="blitz" alt="blitz" class="avatar_choose" onClick = "changeProfilePicture('blitz')">
                <img src="../image/avatar/castle.png" id="castle" alt="castle" class="avatar_choose" onClick = "changeProfilePicture('castle')">
                <img src="../image/avatar/caviera.png" id="caviera" alt="caviera" class="avatar_choose" onClick = "changeProfilePicture('caviera')">
                <img src="../image/avatar/doc.png" id= "doc" alt="doc" class="avatar_choose" onClick = "changeProfilePicture('doc')">
                <img src="../image/avatar/fuze.png" id="fuze" alt="fuze" class="avatar_choose" onClick = "changeProfilePicture('fuze')">
                <img src="../image/avatar/glaz.png" id="glaz" alt="glaz" class="avatar_choose" onClick = "changeProfilePicture('glaz')">
                <img src="../image/avatar/iq.png" id="iq" alt="iq" class="avatar_choose" onClick = "changeProfilePicture('iq')">
                <img src="../image/avatar/jackle.png" id="jackle" alt="jackle" class="avatar_choose" onClick = "changeProfilePicture('jackle')">
                <img src="../image/avatar/jager.png" id="jager" alt="jager" class="avatar_choose" onClick = "changeProfilePicture('jager')">
                <img src="../image/avatar/montagne.png" id="montagne" alt="montagne" class="avatar_choose" onClick = "changeProfilePicture('montagne')">
                <img src="../image/avatar/mute.png" id="mute" alt="mute" class="avatar_choose" onClick = "changeProfilePicture('mute')">
                <img src="../image/avatar/recrute.png" id="recrute" alt="recrute" class="avatar_choose" onClick = "changeProfilePicture('recrute')">
                <img src="../image/avatar/rook.png" id="rook" alt="rook" class="avatar_choose" onClick = "changeProfilePicture('rook')">
                <img src="../image/avatar/sledge.png" id="sledge" alt="sledge" class="avatar_choose" onClick = "changeProfilePicture('sledge')">
                <img src="../image/avatar/thatchar.png" id="thatchar" alt="thatchar" class="avatar_choose" onClick = "changeProfilePicture('thatchar')">
                <img src="../image/avatar/thermite.png" id="thermite" alt="thermite" class="avatar_choose" onClick = "changeProfilePicture('thermite')">
                <img src="../image/avatar/valkyrie.png" id="valkyrie" alt="valkyrie" class="avatar_choose" onClick = "changeProfilePicture('valkyrie')">
                <img src="../image/avatar/blackbeard.png" id="blackbeard" alt="blackbeard" class="avatar_choose" onClick = "changeProfilePicture('blackbeard')">
                <img src="../image/avatar/kapkan.png" id="kapkan" alt="kapkan" class="avatar_choose" onClick = "changeProfilePicture('kapkan')">
                <img src="../image/avatar/ash.png" id="ash" alt="ash" class="avatar_choose" onClick = "changeProfilePicture('ash')">
                <img src="../image/avatar/alibi.png" id="alibi" alt="alibi" class="avatar_choose" onClick = "changeProfilePicture('alibi')">
                <img src="../image/avatar/buck.png" id="buck" alt="buck" class="avatar_choose" onClick = "changeProfilePicture('buck')">
                <img src="../image/avatar/capitao.png" id="capitao" alt="capitao" class="avatar_choose" onClick = "changeProfilePicture('capitao')">
                <img src="../image/avatar/clash.png" id="clash" alt="clash" class="avatar_choose" onClick = "changeProfilePicture('clash')">
                <img src="../image/avatar/dokkaebi.png" id="dokkaebi" alt="dokkaebi" class="avatar_choose" onClick = "changeProfilePicture('dokkaebi')">
                <img src="../image/avatar/echo.png" id="echo" alt="echo" class="avatar_choose" onClick = "changeProfilePicture('echo')">
                <img src="../image/avatar/ela.png" id="ela" alt="ela" class="avatar_choose" onClick = "changeProfilePicture('ela')">
                <img src="../image/avatar/finka.png" id="finka" alt="finka" class="avatar_choose" onClick = "changeProfilePicture('finka')">
                <img src="../image/avatar/frost.png" id="frost" alt="frost" class="avatar_choose" onClick = "changeProfilePicture('frost')">
                <img src="../image/avatar/kaid.png" id="kaid" alt="kaid" class="avatar_choose" onClick = "changeProfilePicture('kaid')">
                <img src="../image/avatar/lion.png" id="lion" alt="lion" class="avatar_choose" onClick = "changeProfilePicture('lion')">
                <img src="../image/avatar/lision.png" id="lision" alt="lision" class="avatar_choose" onClick = "changeProfilePicture('lision')">
                <img src="../image/avatar/maestro.png" id="maestro" alt="maestro" class="avatar_choose" onClick = "changeProfilePicture('maestro')">
                <img src="../image/avatar/mavrick.png" id="mavrick" alt="mavrick" class="avatar_choose" onClick = "changeProfilePicture('mavrick')">
                <img src="../image/avatar/mira.png" id="mira" alt="mira" class="avatar_choose" onClick = "changeProfilePicture('mira')">
                <img src="../image/avatar/nomad.png" id="nomad" alt="nomad" class="avatar_choose" onClick = "changeProfilePicture('nomad')">
                <img src="../image/avatar/pulse.png" id="pulse" alt="pulse" class="avatar_choose" onClick = "changeProfilePicture('pulse')">
                <img src="../image/avatar/tachanka.png" id="tachanka" alt="tachanka" class="avatar_choose" onClick = "changeProfilePicture('tachanka')">
                <img src="../image/avatar/vigil.png" id="vigil" alt="vigil" class="avatar_choose" onClick = "changeProfilePicture('vigil')">
                <img src="../image/avatar/ying.png" id="ying" alt="ying" class="avatar_choose" onClick = "changeProfilePicture('ying')">
                <img src="../image/avatar/zofia.png" id="zofia" alt="zofia" class="avatar_choose" onClick = "changeProfilePicture('zofia')">
                <img src="../image/avatar/hibana.png" id="hibana" alt="hibana" class="avatar_choose" onClick = "changeProfilePicture('hibana')">
            </div>
        </div>

        <hr>
        <div class="row">    
            <div class="col-sm-3">
                <button onClick="chooseProPicDivHide()" class="btn btn-danger mb-2">Cancle</button>
            </div>
        </div>

        
        
            
    </div>


    <!--My JavaScript-->
    <script type="text/JavaScript" src="js/validation.js"></script>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
