// JavaScript Document
function bloodBankValidation()
			{
			var statename =document.getElementById('statename');
			var stateval=document.getElementById('stateval');
			if(statename.value==""){
				stateval.innerHTML="Please Select State";
				stateval.style.color="#CC1616";
				statename.focus();
				return false;
			}else{
				stateval.style.visibility="hidden";
			}
			var districtname=document.getElementById('districtname');
			var districtval=document.getElementById('districtval');
			if(districtname.value==""){
				districtval.innerHTML="Please Select District";
				districtval.style.color="#CC1616";
				districtname.focus();
				return false;
			}else{
				districtval.style.visibility="hidden";
			}
			var bbankname=document.getElementById('bbankname');
			if(bbankname.value.trim()==""){
				bbankval.innerHTML="Please Enter Blood Bank Name";
				bbankval.style.color="#CC1616";
				bbankname.focus();
				return false;
			}else{
				bbankval.style.visibility="hidden";
			}
			var address=document.getElementById('address');
			if(address.value.trim()==""){
				addressval.innerHTML="Please Enter Address";
				addressval.style.color="#CC1616";
				address.focus();
				return false;
			}else{
				addressval.style.visibility="hidden";
			}
			var cno=document.getElementById('cno');
			var cnoval=document.getElementById('cnoval');
			if(cno.value==""){
				cnoval.innerHTML="Please Enter Contact No";
				cnoval.style.color="#CC1616";
				cno.focus();
				return false;
			}else{
				cnoval.style.visibility="hidden";
			}
			if(cno.value!=10){
				cnoval.style.visibility="visible";
				cnoval.innerHTML="Please Enter Valid Contact Number";
				cnoval.style.color="#CC1616";
				cno.focus();
				return false;
			}else{
				cnoval.style.visibility="hidden";
			}
			var email=document.getElementById('email').value;
			var emailval=document.getElementById('emailval');
			if(email.trim()==""){
				emailval.innerHTML="Please Enter Email Id";
				emailval.style.color="#CC1616";
				return false;
			}else{
				emailval.style.visibility="hidden";
			}
			var emailregx=/^([a-zA-Z0-9._-]+)@([a-zA-Z0-9_-]+)\.([a-zA-Z]{2,6})(.[a-zA-Z]{2,6})?$/;
			if(emailregx.test(email)==false){
				emailval.style.visibility="visible";
				emailval.innerHTML="Please Enter Valid Email Id";
				emailval.style.color="#CC1616";
				return false;
			}else{
				emailval.style.visibility="hidden";
			}
			var password=document.getElementById('password');
			var passwordval=document.getElementById('passwordval');
			if(password.value.trim()==""){
				passwordval.innerHTML="Please Enter Password";
				passwordval.style.color="#CC1616";
				password.focus();
				return false;
			}else{
				passwordval.style.visibility="hidden";
			}	
			var conpassword=document.getElementById('conpassword');
			var conpasswordval=document.getElementById('conpasswordval');
			if(conpassword.value.trim()==""){
				conpasswordval.innerHTML="Please Enter Confirm Password";
				conpasswordval.style.color="#CC1616";
				conpassword.focus();
				return false;
			}else{
				conpasswordval.style.visibility="hidden";
			}
			if(conpassword.value.trim()!=password.value.trim()){
				conpasswordval.style.visibility="visible";
				conpasswordval.innerHTML="Password Missmatch";
				conpasswordval.style.color="#CC1616";
				conpassword.focus();
				return false;
			}else{
				conpasswordval.style.visibility="hidden";
			}
		}
		function bloobankvalidation(key){
			var ascciCode=key.keyCode;
			if(!(ascciCode==32 || ascciCode==8 || ascciCode==127) && (ascciCode<65 || ascciCode>90) && (ascciCode<97 || ascciCode>122)){
				return false;
			}else{
				return true;
			}
		}
		
		function contactNoValidate(key)
		{
		var asccicode=key.keyCode;
		if(!(asccicode==8 || asccicode==127) && (asccicode<48 || asccicode>57)){
			return false;
		}else{
			return true;
		}
	
}
		