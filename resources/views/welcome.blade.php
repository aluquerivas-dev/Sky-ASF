<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8"/>
 <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<style>
    body{
 padding:0;
 margin:0;
 background:linear-gradient(to right, #6E1FDA, #27006A);
}
.main-container{
 width:100%;
 height:500px;
}
.sub-container{
 margin:55px auto;
 height:500px;
 width:820px;
 background-color:#170058;
 border-radius:12px;
 box-shadow: 1px -3px 12px 7px #36007E;
 
}

.logo{
 padding:9px 7px 8px 0px;
 margin:0px 0px 0px 30px;
 width:40px;
 height:40px;
 border-radius:50%;
 background-color:#2ADCFF;
}
.logo-text{
 text-align:center;
 color:#2ADCFF;
 font-family:lato;
}
.logo, .logo-text{
 display:inline;
 
}
.logo-container{
 padding-top:30px;
}
.wel{
 margin-top:85px;
 text-align:center;
 color:#2ADCFF;
 font-family:lato;
 font-weight:900;
 font-weight:bold;
 font-size:50px;
}
@font-face{
 font-family:"lato";
 src:"Lato-Regular.ttf";
}
.ready{
 margin-top:-20px;
 text-align:center;
 color:white;
 font-family:lato;
 font-weight:100;
 font-size:20px;
 font-style:italic;
}
.btn-left{
 padding:13px 20px 13px 20px;
 border-radius:38px;
 border-style:none;
 font-weight:900;
 font-size:15px;
 font-family:lato;
 outline:none;
 background-color:#2ADCFF;
 color:white;
 margin-left:275px;
}
.btn-right{
 margin-left:20px;
 padding:13px 28px 13px 20px;
 border-radius:38px;
 border-style:none;
 font-weight:900;
 font-size:15px;
 font-family:lato;
 outline:none;
 background-color:#2ADCFF;
 color:white;
 
}
.btn-left:hover{
 background-color:white;
 color:#2ADCFF;
 
}
.btn-right:hover{
 background-color:white;
 color:#2ADCFF;
}
.right-sign-in{
 margin:0px 0px 0px 0px;
 width:50%;
 height:100%;
 float:right;
 background-color:white;
 box-shadow: 1px -3px 12px 3px #f1e6ff;
 border-radius:5px;
 position:relative;
 right:-100px;
 
}
.sign-up-heading{
 padding-top:10px;
 text-align:center;
 font-family:lato;
 color:#230162;
}
.left-sign-in{
 margin:0px 0px 0px 0px;
 width:49%;
 height:100%;
 float:left;
 background-color:white;
 box-shadow: 1px -3px 12px 3px #f1e6ff;
 border-radius:5px;
 position:relative;
 left:-100px;
 
}
.sign-in{
 height:100%;
 width:100%;
 
}
.dots{
 margin-top:-30px;
 text-align:center;
 font-size:30px;
 color:#230162;
}
.txt{
 font-family:lato;
 display:flex;
 margin-top:10px;
 padding:15px 130px 15px 20px;
    backgroun:none; 
 background-color:rgba(35, 1, 98, 0.4);
 color:#230162;
 border-style:solid;
 border-radius:30px;
 outline:none;
 border-color:#230162;
}
.txt:hover{
 
 padding:15px 150px 15px 20px;
 transition:10;
 background-color:white;
}
.text:focus{
 padding:15px 150px 15px 20px;
 transition:10;
 background-color:white;
 color:#230162;
}
::placeholder{
 color:#230162;
 font-weight:500;
}
.sign-up-input{
 margin-left:48px;

}
.btn{
 display:flex;
 margin-top:15px;
 margin-left:60px;
 padding:15px 50px 15px 50px;
    backgroun:none; 
 background-color:rgba(35, 1, 98, 0.4);
 color:white;
 border-style:solid;
 border-radius:30px;
 outline:none;
 border-color:#230162;
 text-align:center;
 font-family:lato;
 color:#230162;
 font-size:15px;
 font-weight:900;
}
.btn:hover{
 background-color:white;
}
.log-in{
  height:100%;
 width:100%;
}
.copyright{
 position:absolute;
 top:450px;
 font-family:lato;
 font-weight:100;
 font-size:14px;
 margin-top:10px;
 margin-left:35px;
 color:#230162;
}
.img{
 margin:40px 0px 0px 50px;
}
.cont{
 margin:20px 0px 0px 140px;
}
</style>
 <link rel="stylesheet" href="fontawesome-free-5.11.2-web (1)\fontawesome-free-5.11.2-web\css\all.css" type="text/css"/>
 <title>@yield('title')</title>
</head>
<body>
 <div class="main-container">
  <div class="sub-container">
  <div class="" style="display:flex" id="main">
    <img id="show-code-thumbnail" class="show-code-thumbnail-dark" src="data:image/png;base64,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" width="300">
   <div ><h1 class="wel">Welcome to Sky Simple Framework</h1>
  </div>
  </div>
  <div class="sign-in" style="display:none;" id="secondView">
   <div class="right-sign-in" id='right'>
         <h1 class="sign-up-heading">Sign Up</h1>
      <h1 class="dots">...</h1>
      <div class="sign-up-input">
     <input type="text" placeholder="Enter your name" class="txt"/>
     <input type="email" placeholder="Enter your email" class="txt"/>
     <input type="password" placeholder="Enter your password" class="txt"/>
     <input type="password" placeholder="Re-Enter your password" class="txt"/>
     <input type="button" value="Sign Up" class="btn"/>
     <h3 class="copyright">&copy; Designed & Developed By Waseem</h3>
      </div>
   </div>
   <div class="left-sign-in" id='left'>
   <img src="front-end-inner.png" height="300px" width="300px" class="img" alt=""/>
    <div class="cont">
    <div class="logo"><i class="fas fa-house-damage" style="color:black;font-size:20px;padding:8px 0px 0px 8px"></i></div>
    <h3 class="logo-text">DiGi</h3>
    </div>
   </div>
  <div>
  </div>
  
  </div>
  <div class="log-in" style="display:none" id="thirdView">
  
   <div class="right-sign-in" id='right_sign'>
         <h1 class="sign-up-heading">Sign In</h1>
      <h1 class="dots">...</h1>
      <div class="sign-up-input">
     <input type="text" placeholder="Username" class="txt"/>
     
     <input type="password" placeholder="Password" class="txt"/>
     
     <input type="button" value="Sign In" class="btn"/>
     <h3 class="copyright">&copy; Designed & Developed By Waseem</h3>
     
      </div>
   </div>
   <div class="left-sign-in" id='left_sign'>
   <img src="4.png" height="300px" width="300px" class="img" alt=""/>
    <div class="cont">
    <div class="logo"><i class="fas fa-house-damage" style="color:black;font-size:20px;padding:8px 0px 0px 8px"></i></div>
    <h3 class="logo-text">DiGi</h3>
    </div>
   </div>
  
  
  </div>
  
  
 
 </div>
 <script>
 var btnSignUp=document.getElementById('sign-up-button');
 var btnSignIn=document.getElementById('sign-in-button');
 var firstView=document.getElementById('main');
 var signUpView=document.getElementById('secondView');
 var loginView=document.getElementById('thirdView');
 var left=document.getElementById('left');
 var right=document.getElementById('right');
 var left_sign=document.getElementById('left_sign');
 var right_sign=document.getElementById('right_sign');
 btnSignUp.onclick=function(){
 firstView.style.display="none";
 signUpView.style.display="block";
 
  var pos1 = -100;
  var pos=-100;
    var id1 = setInterval(frame, 5);
    function frame() {
    if (pos1 ==0) {
      clearInterval(id1);
  // func();
    } else {
      pos1++; 
      left.style.left= pos1 + 'px'; 
   pos++; 
      right.style.right= pos + 'px'; 
      
       
    }
  }
 
 /*/function func(){
 var pos = -100;
    var id = setInterval(frame, 10);
    function frame() {
    if (pos ==0) {
      clearInterval(id);
    } else {
      pos++; 
      right.style.right= pos + 'px'; 
      
       
    }
  }//}*/
 }
 btnSignIn.onclick=function(){
 firstView.style.display="none";
 thirdView.style.display="block";
  var pos2 = -100;
  var pos3=-100;
    var id2 = setInterval(frame, 5);
    function frame() {
    if (pos2 ==0) {
      clearInterval(id2);
  // func();
    } else {
      pos2++; 
      left_sign.style.left= pos2 + 'px'; 
   pos3++; 
      right_sign.style.right= pos3 + 'px'; 
      
       
    }
 }
 }
 </script>
</body>
</html>