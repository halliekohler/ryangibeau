$(function(){
    $("#firstsong").click(function(){
            var audio = $('audio')[0];
            if (audio.paused){
                audio.play();
                console.log("testing on");
            } else {
                audio.pause();
                console.log("testing off")
            }
    });

    $("#secondsong").click(function(){
            var audio = $('audio')[1];
            if (audio.paused){
                audio.play();
            } else {
                audio.pause();
            }
    });

    $("#thirdsong").click(function(){
            var audio = $('audio')[2];
            if (audio.paused){
                audio.play();
            } else {
                audio.pause();
            }
        });
});
