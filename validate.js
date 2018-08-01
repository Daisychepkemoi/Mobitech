

function validatte()
{
    
        var quantity = document.form.quantity;
        var price = document.form.price;
        var dprice = document.form.dprice;
       
        var isnum = /^\d+$/.test(val);

       
   // if(!(ch>='a' && ch<='z') || (!(ch>='A' && ch<='Z'))){
            
   if((quantity||price||dprice)!==isnum){
alert("only a digit is required");
quantity.focus();
return false;
   }
   
}
   
  //   if (email.value.indexOf("@", 0) < 0)
  //   {
  //       window.alert("Please enter a valid e-mail address.");
  //       email.focus();
  //       return false;
  //   }
  //   if (email.value.indexOf(".", 0) < 0)
  //   {
  //       window.alert("Please enter a valid e-mail address.");
  //       email.focus();
  //       return false;
  //   }
  //    if (password.value.length < 8 )
  //   {
  //       window.alert("Please enter a password of more than 7 characters");
  //      password.focus();
  //       return false;
  //   }
  //   if (firstname.value.indexOf("<", 0)>1){
  //       window.alert("Please enter a valid username address.");
  //   firstname.focus();
  //       return false;
  //   }
    
  // 	return true;
  // }



    
    
  
      


