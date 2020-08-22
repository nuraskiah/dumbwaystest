function isUsernameValid(username){
	if(username.length >= 5 && username.length <= 9){
      if(username.search("[A-z]") == 0) return true;
      	else return false;
    }
  	else return false;
}


function isPasswordValid(password){
	if(password.length >= 8 ){
      const specialChar = /[ `!#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
      const upperCase = /[A-Z]/;
      const at = /@/;
      if(specialChar.test(password) && upperCase.test(password) && at.test(password)) return true;
      else return false;
    }
  	else return false;
}
