// LINK VALIDATION

function linkvalidate(link){
    const re=/(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
    return re.test(link);
}

// MAIL VALIDATION
function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

// SUBMIT FUNCTION
function submitForm(){

    // GETTING ALL THE ELEMENTS BY ID
    var name=document.getElementById('name').value;
    var email=document.getElementById('mail').value.trim();
    var weblink=document.getElementById('weblink').value.trim();
    var imageLink=document.getElementById('imageLink').value.trim();

    var male=document.getElementById('male').checked;
    var female=document.getElementById('female').checked;
    var genderStr="";

    var java=document.getElementById('java').checked;
    var html=document.getElementById('html').checked;
    var css=document.getElementById('css').checked;
    var skillStr="";

    var tbody=document.getElementById('tbody');

    // COUNTER TO CHECK VALID FIELD
    var countVar=0;

    

    

    // VALIDATING TO CHECK ALL THE FIELD

    if(name.length < 4 ||  name.length > 20){
        document.getElementById('error_msg_name').style.visibility="visible";
        document.getElementById('error_msg_name').innerHTML="Length Must Be Bewtween 4 - 20";
        
        
    }else{
        countVar+=1;
        document.getElementById('error_msg_name').style.visibility="hidden";
        document.getElementById('error_msg_name').innerHTML="";
        // document.getElementById('error_msg_name').style.marginTop="0px";
        // document.getElementById('error_msg_name').style.padding="0px";

        
    }
    if(email.length == 0){
        document.getElementById('error_msg_mail').style.visibility="visible";

        // document.getElementById('error_msg_mail').style.padding=10;
        // document.getElementById('error_msg_mail').style.marginTop=10;

        document.getElementById('error_msg_mail').innerHTML="Mail field is empty";
        
    }else if(validateEmail(email)){
        countVar+=1;
        document.getElementById('error_msg_mail').style.visibility="hidden";
        document.getElementById('error_msg_mail').innerHTML="";
        
        
    }else{
        document.getElementById('error_msg_mail').style.visibility="visible";
        document.getElementById('error_msg_mail').innerHTML="Please check the email format";
        
    }


    if(weblink.length == 0){
        document.getElementById('error_msg_weblink').style.visibility="visible";
        document.getElementById('error_msg_weblink').innerHTML="Website link Field is empty";
        
    }else if(linkvalidate(weblink)){
        countVar+=1;
        document.getElementById('error_msg_weblink').style.visibility="hidden";
        document.getElementById('error_msg_weblink').innerHTML="";
    }else{
        document.getElementById('error_msg_weblink').style.visibility="visible";
        document.getElementById('error_msg_weblink').innerHTML="Please Check link";
    }

    if(imageLink.length == 0){
        document.getElementById('error_msg_profile_image').style.visibility="visible";
        document.getElementById('error_msg_profile_image').innerHTML="Profile Image link Field is empty";
        
    }else if(linkvalidate(imageLink)){
        countVar+=1;
        document.getElementById('error_msg_profile_image').innerHTML="";
        document.getElementById('error_msg_profile_image').style.visibility="hidden";
    }
    else{
        document.getElementById('error_msg_profile_image').style.visibility="visible";
        document.getElementById('error_msg_profile_image').innerHTML="Check The link";
    }


    // CHECK AND GET RADIO BUTTON VALUES FOR GENDER

    if( male==false && female == false ){
        document.getElementById('error_msg_gender').style.visibility="visible";
        document.getElementById('error_msg_gender').innerHTML="Please Select Gender"
    }else if(male == true){
        countVar+=1;
        genderStr="Male";
        document.getElementById('error_msg_gender').innerHTML="";
        document.getElementById('error_msg_gender').style.visibility="hidden";

    }else if(female == true){
        countVar+=1;
        genderStr="Female";
        document.getElementById('error_msg_gender').innerHTML="";
        document.getElementById('error_msg_gender').style.visibility="hidden";
    }

    // CHECK AND GET CHECKBOX VALUES FOR SKILLS

    if( css==false && html == false && java == false){
        document.getElementById('error_msg_skill').innerHTML="please select skills"
        document.getElementById('error_msg_skill').style.visibility="visible";
    }else{
        countVar+=1;
    }
    if(css == true){
        skillStr+=",Css";
        document.getElementById('error_msg_skill').innerHTML="";
        document.getElementById('error_msg_skill').style.visibility="hidden";
    }
    if(html == true){
        skillStr+=",Html";
        document.getElementById('error_msg_skill').innerHTML="";
        document.getElementById('error_msg_skill').style.visibility="hidden";
    }
    if(java == true){
        skillStr+=",Java";
        document.getElementById('error_msg_skill').innerHTML="";
        document.getElementById('error_msg_skill').style.visibility="hidden";
    }

    // CHECKING IF ALL THE FIELD IS CORRECT THEN INSERT
    if(countVar == 6){
        skillStr=skillStr.slice(1,skillStr.length);
        // ADDING INTO THE TABLE
        tbody.innerHTML+=`
            \n
            <tr class="fade-in">
               
                <td>
                    <section>
                        <b class="text fade-in">${name}</b>
                        <h6 class="text fade-in">${genderStr}</h6>
                        <a href="${weblink}" class="fade-in" target="_blank">${weblink}</a>
                        <h6 class="text fade-in">${email}</h6>
                        
                        <p class="fade-in">${skillStr}</p>
                    </section>
                </td>
                <td>
                    <div class="row justify-content-center p-2">
                    
                        <a href="${imageLink}" target="_blank" rel="noopener noreferrer"><img class="fade-in" src="${imageLink}" alt="No Image Found" height="150" width="150"></a>
                    </div>
                
                </td>
        `;
        // AFTER INSERTING CLEAR ALL FILED
        document.getElementById('name').value="";
        document.getElementById('mail').value="";
        document.getElementById('weblink').value="";
        document.getElementById('imageLink').value="";
        document.getElementById('male').checked=false;
        document.getElementById('female').checked=false;
    
        document.getElementById('html').checked=false;
        document.getElementById('css').checked=false;
        document.getElementById('java').checked=false;
    }
    



}

function clearForm(){
    // RESET ALL FILED
    document.getElementById('name').value="";
    document.getElementById('mail').value="";
    document.getElementById('weblink').value="";
    document.getElementById('imageLink').value="";
    document.getElementById('male').checked=false;
    document.getElementById('female').checked=false;

    document.getElementById('html').checked=false;
    document.getElementById('css').checked=false;
    document.getElementById('java').checked=false;


    // REMOVE THE ERROR MESSAGE
    document.getElementById('error_msg_name').style.visibility="hidden";
    document.getElementById('error_msg_mail').style.visibility="hidden";
    document.getElementById('error_msg_weblink').style.visibility="hidden";
    document.getElementById('error_msg_profile_image').style.visibility="hidden";
    document.getElementById('error_msg_skill').style.visibility="hidden";
    document.getElementById('error_msg_gender').style.visibility="hidden";


    // Adding Null to the error div
    document.getElementById('error_msg_skill').innerHTML="";
    document.getElementById('error_msg_gender').innerHTML="";
    document.getElementById('error_msg_profile_image').innerHTML="";
    document.getElementById('error_msg_weblink').innerHTML="";
    document.getElementById('error_msg_mail').innerHTML="";
    document.getElementById('error_msg_name').innerHTML="";
  
}
