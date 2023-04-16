
        $(document).ready(function() {
            debiki.Utterscroll.enable();
        
            $('#reset-counter').click(function() {
                $('#points').html("0");
                counter = 0;
                $('ul.nav-pills>li+li').addClass("disabled").removeClass("active");
            })

            $('#close-div').click(function(){
                $('#btnprofile').addClass('collapsed');
                $('#btnprofile').attr('aria-expanded',false);
                $('#tab-profilo').removeClass('in');
            })

            if(counter == 150){
                $('button.livello-1').addClass('livello-1-done');
            } else {
                
            }

        });
