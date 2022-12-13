/*
++++++++++++++signup start  ++++++++++++++++
function checkUser(user)
{
if (user.value == '')
{
O('info').innerHTML = ''
return
}
params = "user=" + user.value
request = new ajaxRequest()
request.open("POST", "checkuser.php", true)
request.setRequestHeader("Content-type",
"application/x-www-form-urlencoded")
request.setRequestHeader("Content-length", params.length)
request.setRequestHeader("Connection", "close")
request.onreadystatechange = function()
{
if (this.readyState == 4)
if (this.status == 200)
if (this.responseText != null)
O('info').innerHTML = this.responseText
}
request.send(params)
} 
function ajaxRequest()
{try { var request = new XMLHttpRequest() }
catch(e1) {
try { request = new ActiveXObject("Msxml2.XMLHTTP") }
catch(e2) {
try { request = new ActiveXObject("Microsoft.XMLHTTP") }
catch(e3) {
request = false
} } }
return request
}

                ++++++++ signup end +++++++++++++ 



canvas = O('logo')
context  =  canvas.getContext('2d')
context.font  = 'bold italic 97px Georgia'
context.textBaseline  = 'top'
image  = new Image()
image.src =  'robin.gif'

image.onload = function()
{ 
gradient = context.createLinearGradient(0, 0, 0, 89)
gradient.addColorStop(0.00, '#faa')
gradient.addColorStop(0.66, '#f00')
context.fillStyle = gradient
context.fillText( "R bin's Nest", 0, 0)
context.strokeText("R bin's Nest", 0, 0)
context.drawImage(image, 64, 32)
}

function O(obj)
{
if (typeof obj == 'object') return obj
else return document.getElementById(obj)
}

function S(obj)
{
return O(obj).style
}
function C(name)
{
var elements = document.getElementsByTagName('*')
var objects = []
for (var i = 0 ; i < elements.length ; ++i)
if (elements[i].className == name)
objects.push(elements[i])
return objects
}

*/