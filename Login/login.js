const username = document.getElementById('username');
const password  =  document.getElementById('password');


function validateForm(){
    if(username.value  == ''){
        alert('Shkruani Username')
        
    }
     else if(password.value =='' || password.value.length < 8){
        alert('Shkruani passwordin me 8 ose me shume karaktere')
        
    }
    else{
        alert('Ju jeni kyqur')
    }

}

/*
function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}



*/ 