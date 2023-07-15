<div id="slideshow-mod" >
		<div id="overlay" class="row-fluid"></div>
		<div id="slsh" class="row-fluid">
		<div id="ais_62_wrapper" class="ari-image-slider-wrapper ari-image-slider-loading ari-is-theme-default">
	        <div id="ais_62" class="ari-image-slider nivoSlider">
					<img src="/templates/a4joomla-lakeside3r-free/images/sampledata/header_01.png" class="imageslider-item" >
					<img src="/templates/a4joomla-lakeside3r-free/images/sampledata/header_02.png" class="imageslider-item" >
					<img src="/templates/a4joomla-lakeside3r-free/images/sampledata/header_03.png" class="imageslider-item">
	        </div>
	    </div>  
    </div>
</div>


<style>
#slideshow-mod {
    padding: 0 0;
    position: relative;
    max-width: 1350px;
    background: #3c3e73;
    margin: auto;
}
#slideshow-mod .imageslider-item {
    width: 100%;
    display: none;
}

#slsh {
  border-bottom: 0 dotted #99a;
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

<script>
        console.debug("svtslider");
        const images=[];
        document.querySelectorAll("#slideshow-mod .ari-image-slider img.imageslider-item").forEach(e => images.push(e));
        let counter=0;
        const size = images.length;
        images[0].style="display:block";
        window.setInterval( () => {
            images[counter%size].style="display:none;";
            images[(counter+1)%size].style="display:block";
            counter++;
        }, 4000);
</script>