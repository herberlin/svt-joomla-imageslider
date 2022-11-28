<div id="slideshow-mod" class="container">
		<div id="overlay" class="row-fluid"></div>
		<div id="slsh" class="row-fluid">
		<div id="ais_62_wrapper" class="ari-image-slider-wrapper ari-image-slider-loading ari-is-theme-default">
	        <div id="ais_62" class="ari-image-slider nivoSlider">
					<img src="/templates/a4joomla-lakeside3r-free/images/sampledata/header_01.png" class="imageslider-item" width="950" height="260">
					<img src="/templates/a4joomla-lakeside3r-free/images/sampledata/header_02.png" class="imageslider-item" width="950" height="260" style="display:none">
					<img src="/templates/a4joomla-lakeside3r-free/images/sampledata/header_03.png" class="imageslider-item" width="950" height="260" style="display:none">
				
	        </div>
	    </div>  
    </div>
</div>

<?php 
/** 
<style>
#slideshow-mod {
  padding: 0 0px;
  position: relative;
  background: #fff;
}
#slideshow-mod div.moduletable {
  text-align: justify;
  margin-bottom: 0px;
}
#slideshow-mod div.moduletable h3 {
  font-family: Arial, Helvetica, sans-serif;
  text-align: left;
  font-size: 18px;
  text-transform: none;
  font-weight: normal;
  letter-spacing: 0px;
  line-height: 1.2;
  margin: 0 0 10px 0;
  padding: 0;
}
#slsh {
  border-bottom: 0px dotted #99a;
}

#overlay {
    height: 100%;
    width: 100%;
    background-image: url('/templates/a4joomla-lakeside3r-free/images/header_overlay.png');
	background-size:auto 100%;
	background-position:0 0;
	background-repeat: no-repeat;
    margin: 0;
    padding: 0 ;
    z-index: 100;
    position: absolute;
}
</style>
*/
?>
<script>
        console.debug("svtslider");
        const images=[];
        document.querySelectorAll("#slideshow-mod .ari-image-slider img.imageslider-item").forEach(e => images.push(e));
        let counter=0;
        const size = images.length; 
        window.setInterval( () => {
            images[counter%size].style="display:none;";
            images[(counter+1)%size].style="display:block";
            counter++;
        }, 4000);
</script>