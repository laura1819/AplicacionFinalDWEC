
  var audio = document.getElementById("audio");
  audio.volume = document.getElementById("volume").value;
 
  document.getElementById("play").onclick = function(){audio.play()}
  document.getElementById("pause").onclick = function(){audio.pause()}
   document.getElementById("stop").onclick = function(){audio.load()}
  document.getElementById("volume").onchange = function(e){audio.volume = e.target.value}
  audio.ontimeupdate = function(){
  document.getElementById("time").max = audio.duration;
  document.getElementById("time").value = audio.currentTime;


  }

 