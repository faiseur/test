window.onload = function(){
   var eye = document.getElementById('eye');
   var Inp = document.getElementById('pwd');

   var onoff = true;
   eye.onclick = function(){
        if (onoff)
            Inp.setAttribute( 'type','text' );
        else
            Inp.setAttribute( 'type','password' );
        onoff =! onoff;
   }
}
