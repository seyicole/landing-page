 let inputElt1 = document.getElementById('email1');
let inputElt = document.getElementById('email');
let btn = document.getElementById('button');
 let btn1 = document.getElementById('button1');

inputElt1.addEventListener("input", function(){
  btn1.disabled = (this.value === '');
})

inputElt.addEventListener("input", function(){
  btn.disabled = (this.value === '');
})

function myFunction() {
  alert("Subscribed succesfully")
}
