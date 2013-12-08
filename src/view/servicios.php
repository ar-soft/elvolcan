<script src="/web-app/js/jquery-2.0.3.min.js"></script>
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<script src="/web-app/js/elvolcan.js"></script>
<div class="content-column"></div>
<section class="content-body">
	<div class="bullets first"></div>
	<div class="bullets second"></div>
	<center><img class="light" src="web-app/img/luz.png">

		<div class="image">
		   <div>
			<img id="1" src="/web-app/img/gallery/camas.jpg" style="display:none"/>
		   </div>
		   <div>
			<img id="2" src="/web-app/img/gallery/hotel.jpg" style="display:none"/>
		   </div>
		</div>


		<div class="arrow-left-div">
			<img src="/web-app/assets/flecha-izq.png" onclick="changeImage('left')" class="flecha-izq" style="display:none"/>
		</div>
		<img src="/web-app/img/recuadro.png" id="square">
		<div class="image-square">
			<img src="" id=""/>
		</div>
		<div class="arrow-right-div">
			<img src="/web-app/assets/flecha-der.png" onclick="changeImage('right')" class="flecha-der" style="display:block"/>
		</div>
	</center>
</section>