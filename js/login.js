
function funonload() {
    
 
    console.log(localStorage.lastname)

    if(typeof(Storage)!=="undefined" && localStorage.lastname)
        {
        document.getElementById("login").innerHTML="Last name: " + localStorage.lastname;
        }
      else
        {
        document.getElementById("login").innerHTML="Sorry, your browser does not support web storage...";
        }
}

function Enter(){

    let akkEnter = document.getElementById("loginEnter").value
    alert(akkEnter)

    if(typeof(Storage)!=="undefined")
        {
        localStorage.lastname=akkEnter;
        
        }
    
}

