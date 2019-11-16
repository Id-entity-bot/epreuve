var lsit = ["#home","#about","#rules","#sponsor","#contact"];
var i =0;
function abcd1(event){
	event.preventDefault();
	var y = event.deltaY;
	console.log(y);
	if(y>0 )
	{	i++;
		if(i<=4){
			window.location.href = lsit[i];
		}
		else
			i=4;
		
	}
	else
	{
		i--;
		if(i>=0)
			window.location.href = lsit[i];
		else
			i=0;
	}
}
const abcd = document.querySelector("#abcd");
abcd.addEventListener('wheel',abcd1);

if (window.screen.width < 768)
{
	console.log("hello");
	document.querySelector("#abcd").removeEventListener('wheel',abcd1);

}

const right_arrow = document.querySelectorAll(".right-arrow");
const left_arrow = document.querySelectorAll(".left-arrow");

for (var j = 0; j < right_arrow.length; j++) {
    right_arrow[j].addEventListener('click', function() {
        i++;
		if(i<=4){
			window.location.href = lsit[i];
			// console.log(i);
		}
		else
			i=4;
    });
}

for(var j=0;j<left_arrow.length;j++){
	left_arrow[j].addEventListener('click',function(){
		i--;
		if(i>=0){

			window.location.href = lsit[i];
			// console.log(i);
		}
		else
			i=0;
	});
}

var home_link = document.querySelector("#home-link");
var about_link = document.querySelector("#about-link");
var rules_link = document.querySelector("#rules-link");
var sponsor_link = document.querySelector("#Sponsors-link");
var contact_link = document.querySelector("#contact-link");

home_link.addEventListener('click',function(){
	i=0;
	// console.log(i);
});
about_link.addEventListener('click',function(){
	i=1;
	// console.log(i);
});
rules_link.addEventListener('click',function(){
	i=2;
	// console.log(i);
});
sponsor_link.addEventListener('click',function(){
	i=3;
	// console.log(i);
});
contact_link.addEventListener('click',function(){
	i=4;
	// console.log(i);
});

// const nav_link = document.querySelectorAll(".nav-link");

// for(var j =;j<4;j++){
// 	nav_link[j].addEventListener('click',function(){
// 		i=j;
// 	});
// }