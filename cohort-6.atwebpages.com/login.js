var form_group = document.querySelector(".form-group");
var form_groupII = document.querySelector(".form-groupII");
//var form_group_array1 = document.querySelector(".form_group_array1");
var submit_button = document.querySelector("button");

var form_input = document.querySelector('.form-group input');
var label = document.querySelector('.form-group label');

var form_inputII = document.querySelector('.form-groupII input');
var labelII = document.querySelector('.form-groupII label');
    
    //for first form  
  
  form_group.addEventListener("click", () => {
   if (form_input.style.display === 'none') {
    // this SHOWS the form
    form_input.style.display = 'inline';
    form_input.focus();
    label.style.fontSize = "11px";
    label.style.color = "#1BD468";
    form_group.style.border = "2px solid #1BD468";
    form_group.style.padding= "0px";
    form_group.style.lineHeight = "0.9";
    } 
 });


        //for second form
        
form_groupII.addEventListener("click", () => {
   if (form_inputII.style.display === 'none') {
    // this SHOWS the form
    form_inputII.style.display = 'inline';
    form_inputII.focus();
    labelII.style.fontSize = "11px";
    labelII.style.color = "#1BD468";
    form_groupII.style.border = "2px solid #1BD468";
    form_groupII.style.padding= "0px";
    form_groupII.style.lineHeight = "0.9";
    } 
 });

$(window).click(function() {
  //Hide the menus if visible
  if ( (form_input.value.length || form_inputII.value.length) < 1 )
      { 
   form_group.style.border = "1px solid #696b6e";
    form_input.style.display = 'none';
    label.style.fontSize = "16px";
   label.style.color = "#696b6e";
    form_group.style.padding= "10px";
    form_group.style.lineHeight = "1.6";
    
    form_groupII.style.border = "1px solid #696b6e";
    form_inputII.style.display = 'none';
    labelII.style.fontSize = "16px";
   labelII.style.color = "#696b6e";
    form_groupII.style.padding= "10px";
    form_groupII.style.lineHeight = "1.6";
    }
});


$(".form-group").click(event => {
  event.stopPropagation();
});
$(".form-groupII").click(event => {
  event.stopPropagation();
});





window.addEventListener("load",() => { 
  form_groupII.style.display = 'none';
    submit_button.type= 'button';
var element = document.querySelector("body"); 
   element.classList.add("css_art_II");
// changeBackground('#111fff'); 
 });



function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 

$(document).ready(function(){
     $(submit_button).click(function(){
     
   if (form_input.value.length > 1){
   $(form_group).fadeOut();
   $(form_groupII).fadeIn();
   submit_button.addEventListener("click", () => {
   submit_button.type= 'submit';
}); 
        }
  }); 
    }); 
   
   
   
   
   
   
   //
   
   
   
   
   
   
   //