<script src="/web-app/js/elvolcan.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<div class="content-column"></div>
<section class="content-body">
	<div class="bullets first"></div>
	<div class="bullets second"></div>
	<center><img class="light" src="web-app/img/luz.png"></center>

	<div class="image">
	   <div>
		<img id="1" src="/web-app/img/gallery/foto.jpg" style="display:none"/>
	   </div>
	   <div>
		<img id="2" src="/web-app/img/gallery/foto1.jpg" style="display:none"/>
	   </div>
	   <div> 
		<img id="3" src="/web-app/img/gallery/foto2.jpg" style="display:none"/>
	   </div>
	   <div>
		<img id="4" src="/web-app/img/gallery/foto3.jpg" style="display:none"/>
	   </div>
	   <div>
		<img id="5" src="/web-app/img/gallery/foto4.jpg" style="display:none"/>
	   </div>
	   <div>
		<img id="6" src="/web-app/img/gallery/foto5.jpg" style="display:none"/>
	   </div>
	</div>


	<div class="arrow-left-div">
		<img src="" onclick="changeImage('left')" class="flecha-izq"/>
	</div>
	<div class="image-modal">
		<img src="" id=""/>
	</div>
	<div class="arrow-right-div">
		<img src="/web-app/assets/flecha-der.png" onclick="changeImage('right')" class="flecha-der"/>
	</div>
</section>