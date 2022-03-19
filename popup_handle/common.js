
var userid = "Hello"
var userpw = 1234

function openPop(param1, param2){

    console.log(param1);
    console.log(param2);
    window.open("pop.html?param1="+param1+"&param2="+param2, "_blank", "width=200px height=300px");
}

function closePop(){
    self.close();
}

function closechild(){
    
}


/*
function openPop(){

    //console.log(param1)
    //console.log(param2)

    //frm �˾�â �̸� 
    window.open("", "frm", "width=200px height=300px");
    //document.myform.submit();
    $("#myform").submit();
}
*/