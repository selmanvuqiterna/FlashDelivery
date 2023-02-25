const fullname = document.getElementById('fullname');
const username = document.getElementById('username');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const password  =  document.getElementById('password');
const confirmPassword = document.getElementById('confirmPassword')

var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


function validateForm(){
   if(fullname.value === ""){
    alert("Ju lutem shtypni emrin tuaj te plote");
    return false;
   }
    else if(username.value === ""){
    alert("Ju lutem shtypni username tuaj te plote");
    
    return false;
   }
   else if(!(mailformat.test(email.value))){
    alert('Shtypni emailin sakte');
    return false;
   }

    else if(phone.value === ""){
    alert("Ju lutem shtypni numtin e telefonit tuaj te plote");
    
    return false;
   }
    else if(password.value === ""){
    alert("Ju lutem shtypni passwordin tuaj te plote");
   
    return false;
   }
    else if(confirmPassword.value !== password.value){
    alert("Ju lutem shtypni passwordin e njejte si ne fushen e mesiperme");
    
    return false;
   }
   
   else{
    alert('jeni kyqur me sukses')
   }
   return true;
    }


    







