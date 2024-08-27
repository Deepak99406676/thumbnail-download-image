// let's get all required elements

const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e)=>{
    e.preventDefault(); // preventing from from submitting
    statusTxt.style.color = "#0D6EFD";
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest();  //creating new xml object
    xhr.open("POST","message.php",true); // sending post request to message.php file
    xhr.onload = ()=>{  // once ajax loaded
        if(xhr.readyState == 4 && xhr.status == 200 ){ // if ajax response status is 200 & ready status is 4 means there is no any error
            let response = xhr.response; // storing ajax response in a response 
            // if response is an error like enter valid email address then we'll change status color to red
            if(response.indexOf("Email and Password field is required..!") != -1 || response.indexOf("Enter a Valid Email Address!") || response.indexOf("Sorry, Faild to send your message...!")){
                statusTxt.style.color = "white";
            }else{
                form.reset();
                setTimeout(()=>{
                    statusTxt.style.display = "none";
                },3000); // hide the statusTax after 3 second if the msg is sent
            }
            statusTxt.innerText = response;
        }
    }
    let formdata = new FormData(form); // Creating new FormData obj. This obj is used to send form data 
    xhr.send(formdata); // sending form data
}
