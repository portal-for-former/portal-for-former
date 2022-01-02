function validate(){
     var fname=document.forms["myform"]["fname"].value;
     var lname=document.forms["myform"]["lname"].value;
     var email=document.forms["myform"]["email"].value;
     var mobile=document.forms["myform"]["mobile"].value;
    
     var pass=document.forms["myform"]["pass"].value;
     var cpass=document.forms["myform"]["cpass"].value;

     if(fname==null || fname==""  ){
           document.getElementById("error").innerHTML="enter First Name";
           return false;
        }

     if(lname==null || lname==""  ){
        document.getElementById("error").innerHTML="enter Last Name";
        return false;
        }

     if( email==null ||  email==""  ){
            document.getElementById("error").innerHTML="enter Email";
            return false;
        }
    if(mobile==null || mobile==""  ){
            document.getElementById("error").innerHTML="enter Mobile Number";
            return false;
         }
 
    if(pass==null || pass==""  ){
         document.getElementById("error").innerHTML="enter Password";
         return false;
         }
 
    if(cpass==null || cpass==""  ){
             document.getElementById("error").innerHTML="enter Confirm Password";
             return false;
         }
        
    if(pass != cpass){
      document.getElementById("error").innerHTML="Password and Confirm Password should be same";
      return false;
    }

            var lowerCaseLetters = /[a-z]/g;
            if(pass.value.match(lowerCaseLetters)) {
               
            } else {
               document.getElementById("pp").innerHTML="Password should contain lowercase";
               return false;
            }

            var upperCaseLetters = /[A-Z]/g;
               if(myInput.value.match(upperCaseLetters)) {
                  
               } else {
                  document.getElementById("pp").innerHTML="Password should contain uppercase";
                  return false;
               }

               var numbers = /[0-9]/g;
               if(myInput.value.match(numbers)) {
                 
               } else {
                  document.getElementById("pp").innerHTML="Password should contain numbers";
                  return false;
               }
             
              
               if(myInput.value.length >= 8) {
                
               } else {
                  document.getElementById("pp").innerHTML=" your password length is less then 8";
                  return false;
               }

}