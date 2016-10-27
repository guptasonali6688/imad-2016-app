$(document).ready(function() {
 $('#submit').click(function() {
 var name=document.getElementById('name').value;
 var password=document.getElementById('password').value;
 var mail=document.getElementById('mail').value;
 var chk = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 if(name=='')
 {
  $('#name').html('Enter your name');
  return false;
 }
 if(password=='')
 {
  $('#password').html('Enter your password');
  return false;
 }
 if(mail=='')
 {
  $('#mail').html('Enter your mail');
  return false;
 }
 if(!chk.test(mail))
 {
  $('#mail').html('Enter valid email');
  return false;
 }
 });

 });
