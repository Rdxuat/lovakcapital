<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.waypoints.min.js"></script> 
<script src="js/jquery.counterup.js"></script> 
<script src="js/custom.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/script.js"></script>
<script>
  jQuery(document).ready(function( $ ) {
   $('.counter').counterUp({
     delay: 10,
     time: 500,
   });
 });
</script>

<script>
  new WOW().init();
</script>


<script>

  $(document).ready(function () {
 
  $('.backTop').bind('click', function(e) {
  e.preventDefault();
  $('body,html').animate({scrollTop:0},800);  
  });
});
 
</script>
