function validation() {

    let user = document.getElementById('user').value;
    let email = document.getElementById('email').value;
    let mobile = document.getElementById('mobile').value;
    let enquiry = document.getElementById('enquiry').value;
    let message = document.getElementById('message').value;

    //user interface error message

    if(user == ""){
        document.getElementById('USER').innerHTML= " ** please fill the username field";
        return false;   
    }

    if((user.length <= 8) || (user.length > 20)) {
        document.getElementById('USER').innerHTML= " ** username should be between 8 to 20";
        return false;      
    }

    if(!isNaN(user)) {
        document.getElementById('USER').innerHTML= " ** Only Alphebates are allowed";
        return false;   
    }

    //Email interface error message

    if(email == ""){
        document.getElementById('EMAIL').innerHTML= " ** please fill the EMAIL field";
        return false;   
    }

    if(email.indexOf('@') <= 0) {
        document.getElementById('EMAIL').innerHTML= " ** Email INVALID";
        return false;  
    }

    if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){  
        document.getElementById('EMAIL').innerHTML= " ** . is INVALID position";
        return false;  
    }


    //mobile interface error message

    if(mobile == ""){
        document.getElementById('PHONE').innerHTML= " ** please fill the mobile number field";
        return false;   
    }

    if(isNaN(mobile)) {
        document.getElementById('PHONE').innerHTML= " ** Only DIGITS are allowed";
        return false;   
    }

    if(mobile.length!=10){
        document.getElementById('PHONE').innerHTML= " ** Mobile number should be 10 digits";
        return false
    }


    //enquiry interface error message

    if(enquiry == ""){       
        document.getElementById('ENQUIRY').innerHTML= " ** Select any of following Enquiry";
        return false;
    }

    // if(enquiry.length!=select.value){
    //     document.getElementById('ENQUIRY').innerHTML="** select any enquiry";
    //     return false;
    // }

    function selectchange(select){
        if(select.value === 'Business'){
            Business();
        }
        else if(select.value === 'Company'){
            Company();
        }
        else if(select.value === 'Normal'){
            Normal();
        }
    }


    //message interface error message

    if(message == ""){
        document.getElementById('MESSAGE').innerHTML= " ** please fill the message field";
        return false;   
    } 

    if((message.length <= 4) || (message.length > 20)) {
        document.getElementById('MESSAGE').innerHTML= " ** Message should be between 4 to 20";
        return false;      
    }    

}