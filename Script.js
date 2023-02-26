searchForm = document.querySelector('.search-form');

document.querySelector('#search-button').onclick = () =>{
    searchForm.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-button').onclick = () =>{
    loginForm.classList.toggle('active');
}

document.querySelector('#close-login-button').onclick = () =>{
    loginForm.classList.remove('active');
}

 



window.onscroll = () =>{

    searchForm.classList.remove('active');

    if(window.scrollY > 80){
        document.querySelector('.header .header-2').classList.add('active');
    }else{
        document.querySelector('.header .header-2').classList.remove('active');
    }

} 


window.onload = () =>{

    if(window.scrollY > 80){
        document.querySelector('.header .header-2').classList.add('active');
    }else{
        document.querySelector('.header .header-2').classList.remove('active');
    }

    fadeOut();

} 
function loader(){
  document.querySelector('.loader-container').classList.add('active');
}

function fadeOut(){
  setTimeout(loader, 2200);
}


var swiper = new Swiper(".products-slider", {
    loop:true,
    centeredSlides: true, 
    autoplay: {
        delay: 9500, 
        disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        
      },
      768: {
        slidesPerView: 2,
       
      },
      1024: {
        slidesPerView: 3,
        
      },
    },
  });

  var swiper = new Swiper(".featured-slider", {
    spaceBetween: 10,
    loop:true,
    centeredSlides: true, 
    autoplay: {
        delay: 9500, 
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        
      },
      450: {
        slidesPerView: 2,
        
      },
      768: {
        slidesPerView: 3,
       
      },
      1024: {
        slidesPerView: 4,
        
      },
    },
  });

  var swiper = new Swiper(".arrivals-slider", {
    spaceBetween: 10,
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
  
  var swiper = new Swiper(".reviews-slider", {
    spaceBetween: 10,
    grabCursor:true,
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
  
  var swiper = new Swiper(".blogs-slider", {
    spaceBetween: 10,
    grabCursor:true,
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

 function validoLogIn(){
  var email=document.getElementById("email").value;
  var regex=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/

  if(email.trim()==""){
    alert("Ploteso fushen e emailit: ");
  }
  else if((regex.test(email))){
    alert("Emaili pranohet! ");
  }
  else {
    alert("Emaili nuk pranohet");
  }

  var passwordi=document.getElementById("password").value;
  var regex=/^[a-zA-Z0-9!@#$%^&*]{6,16}$/

  if(passwordi.trim()==""){
    alert("Ploteso fushen e passwordit: ");
  }
  else if((regex.test(passwordi))){
    alert("Passwordi pranohet! ");
  }
  else {
    alert("Passwordi nuk pranohet");
  }
 }

 function validate(){
  var emri=document.getElementById("emri").value;
  var regex=/^[a-zA-Z]{3,}$/

  if(emri.trim()==""){
      alert("Shkruaj emrin: ");
  }
  else if((regex.test(emri))){
      alert("Emri pranohet");
  }
  else{
      alert("Emri nuk pranohet");
  }

  var mbiemri=document.getElementById("mbiemri").value;
  var regex=/^[a-zA-Z]{3,}$/

  if(mbiemri.trim()==""){
      alert("Shkruaj mbiemrin: ");
  }
  else if((regex.test(mbiemri))){
      alert("Mbiemri pranohet");
  }
  else{
      alert("Mbiemri nuk pranohet");
  }

  var emaili=document.getElementById("email").value;
  var regex=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/

  if(emaili.trim()==""){
      alert("Shkruaj nje email: ");
  }
  else if((regex.test(emaili))){
      alert("Sumbitted succesfully");
  }
  else{
      alert("Wrong email");
  }

  var numri=document.getElementById("nrtel").value;
  var regex=/^0+4+[3-5 | 8-9]+[0-9]{6}$/

  if(numri.trim()==""){
      alert("Shkruaj numrin e telefonit");
  }
  else if((regex.test(numri))){
      alert("Numri pranohet");
  }
  else{
      alert("Numri gabim");
  }

  var passwordi=document.getElementById("password").value;
  var regex=/^[a-zA-Z0-9!@#$%^&*]{6,16}$/

  if(passwordi.trim()==""){
      alert("Shkruaj passwordin");
  }
  else if((regex.test(passwordi))){
      alert("Password i sakte");
  }
  else{
      alert("Passwordi gabim");
  }

  var passwordi=document.getElementById("password1").value;
  var regex=/^[a-zA-Z0-9!@#$%^&*]{6,16}$/

  if(passwordi.trim()==""){
      alert("Shkruaj passwordin");
  }
  else if((regex.test(passwordi))){
      alert("Password i sakte");
  }
  else{
      alert("Passwordi gabim");
  }



}


function valido(){

  var emri=document.getElementById("emri").value;
  var regex=/^[a-zA-Z]{3,}$/

  if(emri.trim()==""){
      alert("Shkruaj emrin: ");
  }
  else if((regex.test(emri))){
      alert("Emri pranohet");
  }
  else{
      alert("Emri nuk pranohet");
  }



  var emaili=document.getElementById("email").value;
  var regex=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/

  if(emaili.trim()==""){
      alert("Shkruaj nje email: ");
  }
  else if((regex.test(emaili))){
      alert("U pranua me sukses");
  }
  else{
      alert("Email nuk pranohet");
  }

  var numri=document.getElementById("nrtel").value;
  var regex=/^0+4+[3-5 | 8-9]+[0-9]{6}$/

  if(numri.trim()==""){
      alert("Shkruaj numrin e telefonit");
  }
  else if((regex.test(numri))){
      alert("Numri pranohet");
  }
  else{
      alert("Numri gabim");
  }
  
  var tekst=document.getElementById("text").value;
  var regex=/^[a-zA-Z0-9]{3,}$/

  if(tekst.trim()==""){
      alert("Shkruaj subjektin: ");
  }
  else if((regex.test(tekst))){
      alert("Subjekti pranohet");
  }
  else{
      alert("Subjekti nuk pranohet");
  }


  var area=document.getElementById("area").value;
  var regex=/^[a-zA-Z]{3,}$/

  if(area.trim()==""){
      alert("Shkruaj mesazhi: ");
  }
  else if((regex.test(mbiemri))){
      alert("Mesazhi pranohet");
  }
  else{
      alert("Mesazhi nuk pranohet");
  }

 


}
