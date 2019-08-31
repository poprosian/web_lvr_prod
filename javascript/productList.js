

$(document).ready(function(){


	$("#searchBtnMain").click(function(){
		if($("#searchBtnNidas").hasClass("searchBtnSelected"))
		{
			$("#searchBtnMain").addClass("searchBtnSelected");
			$("#searchBtnNidas").removeClass("searchBtnSelected");
			$("#sideMenuNidasId").slideUp();
			$("#sideMenuMainId").delay(400).slideDown();
		}
	});

	$("#searchBtnNidas").click(function(){
		if($("#searchBtnMain").hasClass("searchBtnSelected"))
		{
			$("#searchBtnMain").removeClass("searchBtnSelected");
			$("#searchBtnNidas").addClass("searchBtnSelected");
			$("#sideMenuMainId").slideUp();
			$("#sideMenuNidasId").delay(400).slideDown();
		}
	});

	$("#mobileBtnMain").click(function(){
		if($("#mobileBtnNidas").hasClass("searchBtnSelected"))
		{
			$("#mobileBtnNidas").removeClass("searchBtnSelected");
			$("#mobileBtnMain").addClass("searchBtnSelected");
			$("#mobileMenuNidasId").slideUp();
			$("#mobileMenuMainId").delay(400).slideDown();
		}
		else if($("#mobileBtnMain").hasClass("searchBtnSelected"))
		{
			$("#mobileBtnMain").removeClass("searchBtnSelected");
			$("#mobileMenuMainId").slideUp();
		}
		else
		{
			$("#mobileBtnMain").addClass("searchBtnSelected");
			$("#mobileMenuMainId").slideDown();
		}
	});

	$("#mobileBtnNidas").click(function(){
		if($("#mobileBtnMain").hasClass("searchBtnSelected"))
		{
			$("#mobileBtnMain").removeClass("searchBtnSelected");
			$("#mobileBtnNidas").addClass("searchBtnSelected");
			$("#mobileMenuMainId").slideUp();
			$("#mobileMenuNidasId").delay(400).slideDown();
		}
		else if($("#mobileBtnNidas").hasClass("searchBtnSelected"))
		{
			$("#mobileBtnNidas").removeClass("searchBtnSelected");
			$("#mobileMenuNidasId").slideUp();
		}
		else
		{
			$("#mobileBtnNidas").addClass("searchBtnSelected");
			$("#mobileMenuNidasId").slideDown();
		}
	});


	

	

});