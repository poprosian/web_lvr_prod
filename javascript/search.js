var searchIcon=document.getElementById("searchIcon");
var searchBox=document.getElementById("searchBox");
var searchCancel=document.getElementById("searchCancel");

searchIcon.addEventListener("click", function(){
	searchBox.style.display = 'inline';
	searchIcon.style.display = 'none';
	searchCancel.style.display= 'inline';
	setTimeout(function()
	{
		searchBox.style.opacity = '1';
	},1);
	
});

searchCancel.addEventListener("click", function(){
	searchBox.style.opacity = '0';
	searchIcon.style.display = 'inline';
	searchCancel.style.display = 'none';
	searchBox.style.display = 'none';
	
	
	
})

