// user account section 
let account = document.querySelector('.user-account');
let container = document.querySelector('.form-container') ;

document.querySelector('#signin-btn').onclick = () =>{
   account.classList.add('active');
}

document.querySelector('#close-account').onclick = () =>{
   account.classList.remove('active');
}

document.querySelector('#login').onclick = () =>{
    container.classList.add('active');
 }
 
 document.querySelector('#close-container').onclick = () =>{
    container.classList.remove('active');
 }


function change(){
 let account = document.querySelector('.user-account');
 let container = document.querySelector('.form-container') ;
 account.classList.add('active');
 container.classList.remove('active');
}


let a= document.getElementById("green");
let b= document.getElementById("red");
let c= document.getElementById("blue");

var r = document.querySelector(':root');

a.addEventListener('click' ,colorChange);
b.addEventListener('click' ,colorChange2);
c.addEventListener('click' ,colorChange3);
d.addEventListener('click' ,colorChange4);

function colorChange (){
   r.style.setProperty('--main-color', '#8e44ad');
}
function colorChange2 (){
   r.style.setProperty('--main-color', 'orange');
}
function colorChange3 (){
   r.style.setProperty('--main-color', 'green');
}
function colorChange4 (){
   let switcher = document.querySelector('#switcher') ;
   switcher.style.display = "none" ;
}