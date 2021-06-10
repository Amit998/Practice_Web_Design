function linkvalidate(link){
    const re=/(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;

    return re.test(link);
}
function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function submitForm(){

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

    var countVar=0;

   
    // console.log(name,email,weblink,imageLink)




    if(name.length < 4 ||  name.length > 20){
        document.getElementById('error_msg_name').style.visibility="visible";
        document.getElementById('error_msg_name').innerHTML="Length Must Be Bewtween 4 - 20";
        
    }else{
        countVar+=1;
        document.getElementById('error_msg_name').style.visibility="hidden";
    }
    if(email.length == 0){
        document.getElementById('error_msg_mail').style.visibility="visible";
        document.getElementById('error_msg_mail').innerHTML="mail cannot be empty";
        
    }else if(validateEmail(email)){
        countVar+=1;
        document.getElementById('error_msg_mail').style.visibility="hidden";
        
    }else{
        document.getElementById('error_msg_mail').style.visibility="visible";
        document.getElementById('error_msg_mail').innerHTML="please check the email format";
    }


    if(weblink.length == 0){
        document.getElementById('error_msg_weblink').style.visibility="visible";
        document.getElementById('error_msg_weblink').innerHTML="cant be empty";
        
    }else if(linkvalidate(weblink)){
        countVar+=1;
        document.getElementById('error_msg_weblink').style.visibility="hidden";
    }else{
        document.getElementById('error_msg_weblink').style.visibility="visible";
        document.getElementById('error_msg_weblink').innerHTML="broken link";
    }

    if(imageLink.length == 0){
        document.getElementById('error_msg_profile_image').style.visibility="visible";
        document.getElementById('error_msg_profile_image').innerHTML="cannot empty";
        
    }else if(linkvalidate(imageLink)){
        countVar+=1;
        document.getElementById('error_msg_profile_image').style.visibility="hidden";
    }
    else{
        document.getElementById('error_msg_profile_image').style.visibility="visible";
        document.getElementById('error_msg_profile_image').innerHTML="broken link";
    }


    if( male==false && female == false ){
        document.getElementById('error_msg_gender').style.visibility="visible";
        document.getElementById('error_msg_gender').innerHTML="please select gender"
    }else if(male == true){
        countVar+=1;
        genderStr="male";
        document.getElementById('error_msg_gender').style.visibility="hidden";
    }else if(female == true){
        countVar+=1;
        genderStr="female";
        document.getElementById('error_msg_gender').style.visibility="hidden";
    }

    if( css==false && html == false && java == false){
        document.getElementById('error_msg_skill').innerHTML="please select skills"
        document.getElementById('error_msg_skill').style.visibility="visible";
    }else{
        countVar+=1;
    }
    if(css == true){
        skillStr+=",Css";
        document.getElementById('error_msg_skill').style.visibility="hidden";
    }
    if(html == true){
        skillStr+=",Html";
        document.getElementById('error_msg_skill').style.visibility="hidden";
    }
    if(java == true){
        skillStr+=",Java";
        document.getElementById('error_msg_skill').style.visibility="hidden";
    }

    if(countVar == 6){
        skillStr=skillStr.slice(1,skillStr.length);

        console.log('success');
        console.log(skillStr);

        tbody.innerHTML+=`
            \n
            <tr class="fade-in">
                <th scope="row fade-in">${countVar}</th>
                <td>
                    <section>
                        <b class="text fade-in">${name}</b>
                        <h6 class="text fade-in">${genderStr}</h6>
                        <h6 class="text fade-in">${email}</h6>
                        <a href="${weblink}" class="fade-in">${weblink}</a>
                        <p class="fade-in">${skillStr}</p>
                    </section>
                </td>
                <td>
                    <div class="row justify-content-center p-2">
                        <img class="fade-in" src="${imageLink}" alt="" height="100" width="100">
                    </div>
                
                </td>
        `;
    }
    

    // console.log(skillStr)



}

function clearForm(){
    document.getElementById('name').value="";
    document.getElementById('mail').value="";
    document.getElementById('weblink').value="";
    document.getElementById('imageLink').value="";
    document.getElementById('male').checked=false;
    document.getElementById('female').checked=false;

    document.getElementById('html').checked=false;
    document.getElementById('css').checked=false;
    document.getElementById('java').checked=false;



    document.getElementById('error_msg_name').style.visibility="hidden";
    document.getElementById('error_msg_mail').style.visibility="hidden";
    document.getElementById('error_msg_weblink').style.visibility="hidden";
    document.getElementById('error_msg_profile_image').style.visibility="hidden";
    document.getElementById('error_msg_skill').style.visibility="hidden";
    document.getElementById('error_msg_gender').style.visibility="hidden";


}