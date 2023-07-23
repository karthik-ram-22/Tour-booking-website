function validate()
{
    let Name=document.myform.name.value;
    let age=document.myform.age.value;
    let date=document.myform.age.value;
    let mem=document.myform.mem.value;
    let email=document.myform.mail.value;
    let feedback=document.myform.textfeed.value;
    let pno=document.myform.pno.value;

   // let regEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g";
    //let regPhone="/^[0-9]{10}$/";
  //  let regName = "/w+$/g";
    if(Name===""){
        alert("Enter your name properly");
        Name.focus();
        return false;
    }
    if(age==="" ||isNaN(age)){
        alert("Enter your age correctly");
        age.focus();
        return false;
    }
    if(date===""){
        alert("Enter date of travel");
        date.focus();
        return false;
    }
    if(isNaN(mem) || mem===""){
        alert("Enter the number of members of the trip correctly");
        mem.focus();
        return false;
    }

    let s=document.getElementById("trip-drop");
    let strUser=s.options[s.selectedIndex].value;
    if(strUser===0){
        alert("Enter a trip package , no input given");
        s.focus();
        return false;
    }

    if(email===""){
        alert("Enter your email ID correctly");
        email.focus();
        return false;
    }

    if(pno===""){
        alert("Enter your Phone number correctly");
        pno.focus();
        return false;
    }

    if(feedback===""){
        alert("Enter the feedback");
        feedback.focus();
        return false;
    }

    return true;

}