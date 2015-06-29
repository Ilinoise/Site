function book()
{
	document.getElementById("book").style.visibility='visible';
	document.getElementById("music").style.visibility='hidden';
	document.getElementById("movie").style.visibility='hidden';
	
}
function music()
{
	document.getElementById("book").style.visibility='hidden';
	document.getElementById("music").style.visibility='visible';
	document.getElementById("movie").style.visibility='hidden';
	
}
function movie()
{
	document.getElementById("book").style.visibility='hidden';
	document.getElementById("music").style.visibility='hidden';
	document.getElementById("movie").style.visibility='visible';
	
}
function nobook()
{
	x=news.width;
	y=news.height;
	if(x>"200" && y>"140")
	document.getElementById("book").style.visibility="hidden";
}
function nomusic()
{
	document.getElementById("music").style.visibility="hidden";
}
function nomovie()
{
	document.getElementById("movie").style.visibility="hidden";
}