
var elements = document.querySelectorAll('input');

for (i=0; i<elements.length; i++) {
 (function(element) {
   var id = element.getAttribute('id');
   element.value = sessionStorage.getItem(id); 
   console.log(element.value);
   element.oninput = function() {
     sessionStorage.setItem(id, element.value);
     checkValidity();
   };
 })(elements[i]);
}


document.getElementById("button1").onclick = function(e){
  for (i=0; i<elements.length; i++) {
 (function(element) {
   var id = element.getAttribute('id');
  
   sessionStorage.clear(id, element.value);
   
   
 })(elements[i]);
}
}