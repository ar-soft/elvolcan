$(document).ready(function(){

	var contentImg = $(".content-body .image-square img");
	var contentImage = $(".content-body .image-square");
	var leftArrow = $(".content-body .arrow-left-div img");
	var rightArrow = $(".content-body .arrow-right-div img");

	var firstImage = $("#1");
	var urlImage = firstImage.attr("src");
	var imageNumber = firstImage.attr("id");
	contentImg.attr("src",urlImage);
	contentImg.attr("id",imageNumber);
	
	if(isLastImage(parseInt(imageNumber))){
		
		if(imageNumber <=1){
			leftArrow.hide();
			rightArrow.show();
		}else{
			rightArrow.hide();
			leftArrow.show();
		}
		
	}else{
		leftArrow.show();
		rightArrow.show();
	}
	
});

function changeImage(side){
	
	var contentImg = $(".content-body .image-square img");
	var contentImage = $(".content-body .image-square");
	var leftArrow = $(".content-body .arrow-left-div img");
	var rightArrow = $(".content-body .arrow-right-div img");
	var idNextImage
	var srcNextImage
	
	if(side == "left"){
		idNextImage = parseInt(contentImg.attr("id")) - 1;
		srcNextImage = document.getElementById(idNextImage);
		contentImg.attr("src", srcNextImage.src);
		contentImg.attr("id", idNextImage);
		
		if(isLastImage(idNextImage)){
			leftArrow.hide();
			rightArrow.show();
		}
		/*else{
			rightArrow.attr("src","/web-app/assets/flecha-der.png");
		}*/
		
	}else{
		idNextImage = parseInt(contentImg.attr("id")) + 1;
		srcNextImage = document.getElementById(idNextImage);
		contentImg.attr("src", srcNextImage.src);
		contentImg.attr("id", idNextImage);
		
		if(isLastImage(idNextImage)){
			rightArrow.hide();
			leftArrow.show();
		}
		/*else{
			leftArrow.attr("src","/web-app/assets/flecha-izq.png");
		}*/
	}
	
}

function isLastImage(idNextImage){
	
	if(idNextImage <= 1){
		return true;
	}
	if(document.getElementById(idNextImage+1) == "undefined" 
		|| document.getElementById(idNextImage+1) == null){
		return true;
		
	}
}