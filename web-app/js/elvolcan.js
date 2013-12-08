$(".image img").click(function(){

	var urlImage = this.src;
	var imageNumber = this.id;
	contentImg.attr("src",urlImage);
	contentImg.attr("id",imageNumber);
	
	if(isLastImage(parseInt(imageNumber))){
		
		if(imageNumber <=1){
			leftArrow.attr("src","");
		}else{
			rightArrow.attr("src","");
		}
		
	}else{
		leftArrow.attr("src","/web-app/assets/flecha-izq.png");
		rightArrow.attr("src","/web-app/assets/flecha-der.png");
	}
	
	modal.content(content.html()).width("650px").height("450px");
	modal.show();
	
});

function changeImage(side){
	
	var idNextImage
	var srcNextImage
	
	if(side == "left"){
		idNextImage = parseInt(contentImg.attr("id")) - 1;
		srcNextImage = document.getElementById(idNextImage);
		contentImg.attr("src", srcNextImage.src);
		contentImg.attr("id", idNextImage);
		
		if(isLastImage(idNextImage)){
			leftArrow.attr("src","");
		}else{
			rightArrow.attr("src","/web-app/assets/flecha-der.png");
		}
		
		modal.content(content.html());
		
	}else{
		idNextImage = parseInt(contentImg.attr("id")) + 1;
		srcNextImage = document.getElementById(idNextImage);
		contentImg.attr("src", srcNextImage.src);
		contentImg.attr("id", idNextImage);
		
		if(isLastImage(idNextImage)){
			rightArrow.attr("src","");
		}else{
			leftArrow.attr("src","/web-app/assets/flecha-izq.png");
		}
		modal.content(content.html());
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