const inputs = document.querySelectorAll('input');




const patterns={
    email:/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,15})(\.[a-z]{2,15})?$/,
    username:/^[\w]{6,12}$/i,
    password:/^[\w]{8,20}$/i
}

//validation function
function validate(field,regex){
    if(regex.test(field.value)){
        document.getElementById(field.attributes.id.value).classList.remove('invalid');
        document.getElementById(field.attributes.id.value).classList.add('valid');
    }else{
        document.getElementById(field.attributes.id.value).classList.remove('valid');
        document.getElementById(field.attributes.id.value).classList.add('invalid');
    }
}






inputs.forEach((input)=>{
    input.addEventListener('keyup',(e)=>{
        validate(e.target,patterns[e.target.attributes.id.value])
    });

});