$(document).ready(function(){
/* ajx call from already exit email registerd*/
$("#stuemail").on("keypress blur",function(){

var stuemail=$("#stuemail").val();

$.ajax({

    url:"addstudent.php",
    method:"post",
    data:{
     checkemail:"checkemail",
     stuemail:stuemail, },
    success :function(data)
    {
    
    console.log(data);
    
    },
  });
});
});
function addstu(){

//var reg=/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
var stuname =$("#stuname").val();
var stuemail =$("#stuemail").val();
var stuemail=$("#stuemail").val();
var stupass=$("#stupass").val();
// checking from fields on the form submission//
if(stuname.trim()=="")
{

    $("#statusMsg1").html
{
 
    '<small style=="color:red;">Please Enter Name!</small>'
};

};



};