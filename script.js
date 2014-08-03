

function validateForm()
{
var a=document.forms["register"]["firstname"].value;
var b=document.forms["register"]["lastname"].value;
var c=document.forms["register"]["username"].value;
var d=document.forms["register"]["password"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Gender name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("address must be filled out");
  return false;
  }

};

$('input').focus(function(){
  if($(this).attr('placeholder')&& $(this).val()!=""){
    $('.ph').fadeOut();
    $(this).after('<div class="ph">'+$(this).attr('placeholder')+'</div>');
    $(this).parent().find('.ph').fadeIn();
  }
});
$('input').keyup(function(){
  console.log($(this).val());
  if($(this).attr('placeholder')&&$(this).val!=""){
    $(this).after('<div class="ph">'+$(this).attr('placeholder')+'</div>');
    $(this).parent().find('.ph').fadeIn();
  }
});

$('input').blur(function(){
     $('.ph').fadeOut();
});
