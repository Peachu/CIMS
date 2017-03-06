<script>
  //Slider
    $(document).ready(function() {
      $("#content-slider").lightSlider({
            loop:true,
            keyPress:false,
            speed:1500,
            item:3,
      });
      $(".team-slider").lightSlider({
            loop:true,
            keyPress:false,
            speed:1500,
            pause:3000,
            item:5,
      });
    });
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  
</script> 

<div class="page-header">
  <h2>Neuigkeiten <small>Sei stets informiert!</small></h2>
</div>

<ul id="content-slider" class="content-slider">
					
  <li>
    <img src="http://vignette2.wikia.nocookie.net/mazey-flyff/images/a/a1/Quest_Item.png/revision/latest?cb=20150528105838" alt="..." class="img-circle">
  </li>
  
  <li>
    <img src="http://vignette2.wikia.nocookie.net/mazey-flyff/images/a/a1/Quest_Item.png/revision/latest?cb=20150528105838" alt="..." class="img-circle">
  </li>
  
  <li>
    <img src="http://vignette2.wikia.nocookie.net/mazey-flyff/images/a/a1/Quest_Item.png/revision/latest?cb=20150528105838" alt="..." class="img-circle">
  </li>
  
</ul>


