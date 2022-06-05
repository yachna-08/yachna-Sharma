function validate()
{
 var username=document.getElementById("username").value;
 var password=document.getElementById("password").value;
 if(username=="admin" && password=="user")
 {
    window.open("main.html");
    return false;

 }
    else
 {
    alert("login failed");
 }


}
function signup()
{
    window.open("Signup.html");
    return false;
}

function main()
{
 var username1=document.getElementById("username-1").value;
 var password1=document.getElementById("password-1").value;
 var email=document.getElementById("email-id").value;
 if(username1=="admin" || password1=="user" || email=="yachnasharma1999@gmail.com")
 {
    window.open("main.html");
    return false;
 }
 else
 {
     alert("Enter valid details");
 }
}