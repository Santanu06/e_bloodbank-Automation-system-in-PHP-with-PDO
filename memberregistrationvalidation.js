function formValidation()
{
	var state=document.getElementById('statename');
	var valstate=document.getElementById('valstate');
	if(state.value==""){
		valstate.innerHTML="Please select State";
		valstate.style.color="#CF0B0E";
		state.focus();
		return false;
	}else{
		valstate.style.visibility="hidden";
	}
	var district=document.getElementById('districtname');
	var valdistrict=document.getElementById('valdistrict');
	if(district.value==""){
		valdistrict.innerHTML="Please select District";
		valdistrict.style.color="#CF0B0E";
		district.focus();
		return false;
	}else{
		valdistrict.style.visibility="hidden";
	}
	var name=document.getElementById('name');
	var valname=document.getElementById('valname');	
	if(name.value.trim()==""){
		valname.innerHTML="Please Enter Name";
		valname.style.color="#CF0B0E";
		name.focus();
		return false;
	}else{
		valname.style.visibility="hidden";
	}
	var image=document.getElementById('image');
	var valimage=document.getElementById('valimage');
	if(image.value==""){
		valimage.innerHTML="Please Upload Image";
		valimage.style.color="#CF0B0E";
		return false;
	}else{
		valimage.style.visibility="hidden";
	}
	var address=document.getElementById('address');
	var valaddress=document.getElementById('valaddress');
	if(address.value.trim()==""){
		valaddress.innerHTML="Please Enter Address";
		valaddress.style.color="#CF0B0E";
		return false;
	}else{
		valaddress.style.visibility="hidden";
	}
	
	var genderMale=document.getElementById('gendermale');
	var genderFemale=document.getElementById('genderfemale');
	var valgender=document.getElementById('valgender');
	if(genderMale.checked==false && genderFemale.checked==false){
		valgender.innerHTML="Please Select Gender";
		valgender.style.color="#CF0B0E";
		return false;
	}else{
		valgender.style.visibility="hidden";
	}

	var age=document.getElementById('age');
	var valage=document.getElementById('valage');
	if(age.value.trim()==""){
		valage.innerHTML="Please Enter Age";
		valage.style.color="#CF0B0E";
		age.focus();
		return false;
	}else{
		valage.style.visibility="hidden";
	}
	if(age.value<18 || age.value>55){
		valage.style.visibility="visible";
		valage.innerHTML="Your age is not Eligible for Blood Donation";
		valage.style.color="#CF0B0E";
		age.focus();
		return false;
	}else{
		valage.style.visibility="hidden";
	}
	var contactNo=document.getElementById('contactno');
	var valcontactno=document.getElementById('valcontactno');
	if(contactNo.value.trim()==""){
		valcontactno.innerHTML="Please Enter Contact No";
		valcontactno.style.color="#CF0B0E";
		contactNo.focus();
		return false;
	}else{
		valcontactno.style.visibility="hidden";
	}
	if(contactNo.value.trim().length!=10){
		valcontactno.style.visibility="visible";
		valcontactno.innerHTML="Invalid Contact No";
		valcontactno.style.color="#CF0B0E";
		contactNo.focus();
		return false;
	}else{
		valcontactno.style.visibility="hidden";
	}
		
	var emailId=document.getElementById('email').value;
	var valemail=document.getElementById('valemail');
	if(emailId.trim()==""){
		valemail.innerHTML="Please Enter Email Id";
		valemail.style.color="#CF0B0E";
		return false;
	}else{
		valemail.style.visibility="hidden";
	}
	
	var regxemailid=/^([a-zA-Z0-9._-]+)@([a-zA-Z0-9_-]+)\.([a-zA-Z]{2,6})(.[a-zA-Z]{2,6})?$/;
	if(regxemailid.test(emailId)==false){
		valemail.style.visibility="visible";
		valemail.innerHTML="Invalid Email Id";
		valemail.style.color="#CF0B0E";
		return false;
	}else{
		valemail.style.visibility="hidden";
	}
	var password=document.getElementById('password');
	var valpassword=document.getElementById('valpassword');
	
	if(password.value.trim()==""){
		valpassword.innerHTML="Please Enter Password";
		valpassword.style.color="#CF0B0E";
		password.focus();
		return false;
	}else{
		valpassword.style.visibility="hidden";
	}
	
	
	var conpassword=document.getElementById('conpassword');
	var valconpassword=document.getElementById('valconpassword');
	if(conpassword.value.trim()==""){
		valconpassword.innerHTML="Please Enter Confirm Password";
		valconpassword.style.color="#CF0B0E";
		conpassword.focus();
		return false ;
	}else{
		valconpassword.style.visibility="hidden";
	}
	if(password.value!=conpassword.value){
		valconpassword.style.visibility="visible";
		valconpassword.innerHTML="Password missmatch";
		valconpassword.style.color="#CF0B0E";
		conpassword.focus();
		return false ;
	}else{
		valconpassword.style.visibility="hidden";
	}
	var bloodGroup=document.getElementById('bloodgroup');
	var valbloodgroup=document.getElementById('valbloodgroup')
	if(bloodGroup.value==""){
			valbloodgroup.innerHTML="Please Select your Blood Group";
			valbloodgroup.style.color="#CF0B0E";
			bloodGroup.focus();
			return false ;
	}else{
		valbloodgroup.style.visibility="hidden";
	}
}
function nameValidation(key)
{
	var asciiCode=key.keyCode;
	if(!(asciiCode==8 || asciiCode==127 || asciiCode==32) && (asciiCode<65 || asciiCode>90)&&(asciiCode<97 || asciiCode>122))
	{
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

	