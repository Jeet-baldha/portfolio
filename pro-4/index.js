console.log('Hello WOrld!');

const user = document.getElementById('name');
const eMail = document.getElementById('e-mail');
const phone = document.getElementById('phone');
const password = document.getElementById('password');
let validEmail=false;
let validPhone=false;
let validUSer=false;

// console.log(name,eMail,phone);

user.addEventListener('blur',()=>{
    console.log("name is blur");
    //validate name here

    let regX = /^[A-Za-z]([0-9a-zA-Z]){2,10}$/;
    let str = user.value;
    console.log(regX,str);

    if(regX.test(str)){
        console.log('its matched');
        user.classList.remove('is-invalid');
        validUSer=true;
    }
    else{
        console.log('your name is invalid');
        user.classList.add('is-invalid');
        validUSer=false;
    }
    
});

eMail.addEventListener('blur',()=>{
    console.log(eMail);
    //validate email here
    let regX =  /^([_\-\.0-9a-z]+)@([_\-\.0-9a-z]+)\.([a-z])/;
    let str = eMail.value;
    console.log(regX,str);

    if(regX.test(str)){
        console.log('its matched');
        eMail.classList.remove('is-invalid');
        validPhone=true;
    }
    else{
        console.log('your email is invalid');
        eMail.classList.add('is-invalid');
        validPhone=false;
    }
    
});

phone.addEventListener('blur',()=>{
    console.log("phone is blur");
    //validate phone here
    let regX = /[(0-9)]{10}/;
    let str = phone .value;
    console.log(regX,str);

    if(regX.test(str)){
        console.log('number matched');
        phone.classList.remove('is-invalid');
        validEmail=true;
    }
    else{
        console.log('your number is invalid');
        phone.classList.add('is-invalid');
        validEmail=false;
    }
    
});

password.addEventListener('blur',()=>{
    console.log("password is blur");
    //validate password here
    let regX = /[(a-zA-z0-9)]{6}/;
    let str = password .value;
    console.log(regX,str);

    if(regX.test(str)){
        console.log('number matched');
        password.classList.remove('is-invalid');
    }
    else{
        console.log('your number is invalid');
        password.classList.add('is-invalid');
    }
});

let submit = document.getElementById('submit')

submit.addEventListener('click',(e)=>{
    e.preventDefault()

    console.log('submit');
    if(validEmail && validPhone && validUSer){
        console.log('phone, email and user are valid submit the forn');
        let success = document.getElementById('success');
        success.classList.add('show');
        faliure.classList.remove('show')
    }
    else{
    let faliure = document.getElementById('failure');
    faliure.classList.add('show');
    success.classList.remove('show');
    }
})