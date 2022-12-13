var pass = document.getElementById("PSS");
var mssg = document.getElementById("message");    
var strng = document.getElementById("strenght");    

function validate(){
    
    function containNumbers(str) {
        return /[0-9]/.test(str);
    }
    
    function containSpecial(str) {
        var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
        return format.test(str);
    }
    
    
    /* Hide-show password tip*/
    if(pass.value.length > 0 ){
      mssg.style.display = "block";

    }                      
    else{
      mssg.style.display = "none";

        
    }    
    
    /* Check password*/
    if (pass.value.length < 4){
      strng.innerHTML = "weak";
      mssg.style.color = "red";
      pass.style.borderColor = "red";
    }
    
    else if(pass.value.length > 4   && containNumbers(pass.value) == true && containSpecial(pass.value) == false){
        
        strng.innerHTML = "medium";
        mssg.style.color = "yellow";
        pass.style.borderColor = "yellow";
        
    }
    else if(pass.value.length > 8 && containNumbers(pass.value) == true && containSpecial(pass.value) == true){
        
      strng.innerHTML = "strong";
      mssg.style.color = "green";
      pass.style.borderColor = "green";
        }
}                      
           
    
pass.addEventListener('input', validate);
    