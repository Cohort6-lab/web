var form_groupi = document.querySelector(".form_groupi");
var form_groupii = document.querySelector(".form_groupii");
var form_groupiii = document.querySelector(".form_groupiii");
var form_groupiv = document.querySelector(".form_groupiv");
var form_groupv = document.querySelector(".form_groupv");
var form_groupvi = document.querySelector(".form_groupvi");
var submit_button = document.querySelector("button");

var form_inputi =   document.querySelector('.form_groupi input');
var form_inputii =  document.querySelector('.form_groupii input');
var form_inputiii = document.querySelector('.form_groupiii input');
var form_inputiv =  document.querySelector('.form_groupiv input');
var form_inputv =   document.querySelector('.form_groupv input');
var form_inputvi =  document.querySelector('.form_groupvi select');

var labeli = document.querySelector('.form_groupi    label');
var labelii = document.querySelector('.form_groupii  label');
var labeliii = document.querySelector('.form_groupiii label');
var labeliv = document.querySelector('.form_groupiv  label');
var labelv = document.querySelector('.form_groupv   label');
var labelvi = document.querySelector('.form_groupvi  label');

    //for i form   
  form_groupi.addEventListener("click", () => {
   if (form_inputi.style.display === 'none') {
    // this SHOWS the form
    form_inputi.style.display = 'inline';
    form_inputi.focus();
    labeli.style.fontSize = "11px";
    labeli.style.color = "#1BD468";
    form_groupi.style.border = "2px solid #1BD468";
    form_groupi.style.padding= "0px";
    form_groupi.style.lineHeight = "0.9";
    } 
 });

     //for ii form  
     form_groupii.addEventListener("click", () => {
   if (form_inputii.style.display === 'none') {
    // this SHOWS the form
    form_inputii.style.display = 'inline';
    form_inputii.focus();
    labelii.style.fontSize = "11px";
    labelii.style.color = "#1BD468";
    form_groupii.style.border = "2px solid #1BD468";
    form_groupii.style.padding= "0px";
    form_groupii.style.lineHeight = "0.9";
    } 
 });
        
     //for iii form 
    form_groupiii.addEventListener("click", () => {
   if (form_inputiii.style.display === 'none') {
    // this SHOWS the form
    form_inputiii.style.display = 'inline';
    form_inputiii.focus();
    labeliii.style.fontSize = "11px";
    labeliii.style.color = "#1BD468";
    form_groupiii.style.border = "2px solid #1BD468";
    form_groupiii.style.padding= "0px";
    form_groupiii.style.lineHeight = "0.9";
    } 
 });
         
     //for iv form 
     form_groupiv.addEventListener("click", () => {
   if (form_inputiv.style.display === 'none') {
    // this SHOWS the form
    form_inputiv.style.display = 'inline';
    form_inputiv.focus();
    labeliv.style.fontSize = "11px";
    labeliv.style.color = "#1BD468";
    form_groupiv.style.padding= "0px";
    form_groupiv.style.lineHeight = "0.9";
    } 
 });
 
     //for v form 
    form_groupv.addEventListener("click", () => {
   if (form_inputv.style.display === 'none') {
    // this SHOWS the form
    form_inputv.style.display = 'inline';
    form_inputv.focus();
    labelv.style.fontSize = "11px";
    labelv.style.color = "#1BD468";
    form_groupv.style.border = "2px solid #1BD468";
    form_groupv.style.padding= "0px";
    form_groupv.style.lineHeight = "0.9";
    } 
 });
 
     //for vi form  
     form_groupvi.addEventListener("click", () => {
   if (form_inputvi.style.display === 'none') {
    // this SHOWS the form
    form_inputvi.style.display = 'block';
    form_inputvi.style.width = '100%'; 
    form_inputvi.focus();
    labelvi.style.fontSize = "11px";
    labelvi.style.color = "#1BD468";
    form_groupvi.style.border = "2px solid #1BD468";
    form_groupvi.style.padding= "0px";
    form_groupvi.style.lineHeight = "1.2";
    } 
 });

$(window).click(() => {
  //Hide the menus if visible
if((form_inputi.value.length || form_inputii.value.length || form_inputiii.value.length || form_inputiv.value.length || form_inputv.value.length) < 1 )
{
    form_groupi.style.border = "1px solid #696b6e";
    form_inputi.style.display = 'none';
    labeli.style.fontSize = "16px";
    labeli.style.color = "#696b6e";
    form_groupi.style.padding= "10px";
    form_groupi.style.lineHeight = "1.6";
    
    form_groupii.style.border = "1px solid #696b6e";
    form_inputii.style.display = 'none';
    labelii.style.fontSize = "16px";
    labelii.style.color = "#696b6e";
    form_groupii.style.padding= "10px";
    form_groupii.style.lineHeight = "1.6";
    
    form_groupiii.style.border = "1px solid #696b6e";
    form_inputiii.style.display = 'none';
    labeliii.style.fontSize = "16px";
    labeliii.style.color = "#696b6e";
    form_groupiii.style.padding= "10px";
    form_groupiii.style.lineHeight = "1.6";
    
    
    form_inputiv.style.display = 'none';
    labeliv.style.fontSize = "16px";
    labeliv.style.color = "#696b6e";
    form_groupiv.style.padding= "10px";
    form_groupiv.style.lineHeight = "1.6";
    
    form_groupv.style.border = "1px solid #696b6e";
    form_inputv.style.display = 'none';
    labelv.style.fontSize = "16px";
    labelv.style.color = "#696b6e";
    form_groupv.style.padding= "10px";
    form_groupv.style.lineHeight = "1.6";
    
    if(form_inputvi.value.length < 1){
    form_groupvi.style.border = "1px solid #696b6e";
    form_inputvi.style.display = 'none';
    labelvi.style.fontSize = "16px";
    labelvi.style.color = "#696b6e";
    form_groupvi.style.padding= "10px";
    form_groupvi.style.lineHeight = "1.6";
    }
     }
    
    });
         
        
        
$(".form_groupi").click(event => {
  event.stopPropagation();
});

$(".form_groupii").click(event => {
  event.stopPropagation();
});

$(".form_groupiii").click(event => {
  event.stopPropagation();
});

$(".form_groupiv").click(event => {
  event.stopPropagation();
});

$(".form_groupv").click(event => {
  event.stopPropagation();
});

$(".form_groupvi").click(event => {
  event.stopPropagation();
});


window.addEventListener("load",() => { 
  var element = document.querySelector("body"); 
   element.classList.add("css_art_II");
 });
 
 

 
// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});


$('#password, #confirm_password').on('keyup', function () {
  if($('#password').val() != $('#confirm_password').val()) {
       form_groupiv.style.border = "1px solid red";
  } else
  form_groupiv.style.border = "1px solid #fff";
});
