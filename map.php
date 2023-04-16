<?php
require('header.php');
?>

<div id="body">
<!--navbar-->
    <div class="navBarWrapper">
        <div class="top bar">
          <ul class="left">
            <!--profile-->
            <li class="profile-content">
                    <div class="user-profile">
                        <button type="button" id="btnprofile" data-toggle="collapse" data-target="#tab-profilo" aria-expanded="false" aria-controls="tab-profilo"></button>
                          <div class="collapse" id="tab-profilo">
                            <ul>
                                <li>Guybrush Threepwood</li>
                                <li style="font-size: 12px; color:gray;">grog@monkey-island.com</li>
                                <li>Punteggio:<span id="points" style="font-weight: bold;">0</span></li>
                            </ul>
                            <button type="button" class="btn btn-default" id="reset-counter">RESET PUNTEGGIO</button>
                            <button type="button" class="btn btn-default" id="close-div" data-dismiss="collapse">Chiudi</button>
                        </div>
                    </div>
                </nav>
            </li>
          </ul>
          <!--title map-->
          <ul class="right">
            <li class="title">
                <h2>Guida all'applicazione del Regolamento europeo in materia di protezione dei dati personali</h2>
            </li>
          </ul>
        </div>
    </div>
    
    <div style="background-color: #000;height: 800px;width: fit-content;">
        <div id="container">
            <!--livello 1-->
            <button type="button" class="livello-1" data-toggle="modal" data-target="#myModal"></button>            
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header"><h3>LIVELLO 1: What is GDPR ?</h3></div>
                        <div class="modal-body">
                            <div id="message-response" class="alert alert-success" role="alert" style="display:none;"></div>
                            <div class="content-video">
                                <video id="player"></video>
                            </div>
                            <div>
                                <ul class="nav nav-pills nav-justified">
                                    <li id="OPWZEo1cKyA" role="presentation" class="active" list="1" val="50" title="Basic Definitions of GDPR"><a href="#">Video LEZIONE #1</a></li>
                                    <li id="u2lsSaDrjfA" role="presentation" class="disabled" list="2" val="50" title="What is GDPR?"><a href="#">Video LEZIONE #2</a></li>
                                    <li id="UHeQABHx7d4" role="presentation" class="disabled" list="3" val="50" title="GDPR Part 3: Six Principles of GDPR"><a href="#">Video LEZIONE #3</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--livello 2-->
        </div>
    </div>

    <script src="https://rawgithub.com/debiki/utterscroll/master/debiki-utterscroll.js"></script>
    <div style="width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index: -999"></div>
    <script src="https://www.youtube.com/player_api"></script>
    <script>
        var counter = 0;
        // create youtube player
        var player;
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('player', {
              height: '370',
              width: '640',
              videoId: 'OPWZEo1cKyA',
              events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
              }
            });
        }
    
        // autoplay video
        function onPlayerReady(event) {
            //event.target.playVideo();
        }
    
        // when video ends
        function onPlayerStateChange(event) {
            if(event.data === 0) {
                $('#message-response').css("display","block").append("<p>Complimenti! Hai completato il video. Vai al prossimo contenuto.</p>")
                $('ul.nav-pills li.active').next().removeClass("disabled").addClass("active");
                $(".active").on("click", function() {
                    player.loadVideoById(this.id);
                    $('#message-response').empty().css("display","none");
                });
                //counter user points
                counter += +50;                
                if (counter >= 150) {   
                    counter = 150;
                    $('button.livello-1').addClass('livello-1-done');
                }
                $('#points').html(counter);
            }
        }

    </script>
</div>