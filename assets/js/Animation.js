<script type="text/javasc  function reveal(){
            var reveals = document.querySelectorAll('.reveal');
             for(var i=0; i< reveals.length;i++){
                 var windowheight = window.innerHeight;
                 var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint=150;
                if(revealtop < windowheight - revealpoint)
                {
                     reveals[i].classList.add("active");
                 }                                                                           jscode
               else
                 {
                      reveals[i].classList.remove("active");
                   }
               } 
             }
             </script>ript">
         window.addEventListener('scroll',reveal)
       