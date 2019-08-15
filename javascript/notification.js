var notiBox =document.getElementById("notiJumbo");
var cartButtons = document.getElementsByClassName('cartButton');
for(var i=0; i<cartButtons.length; i++){
    cartButtons[i].addEventListener("click", function(){
    	notiBox.style.opacity = '1';
		setTimeout(function()
		{
			notiBox.style.opacity = '0';
		},1500);
		
		


    });
}
