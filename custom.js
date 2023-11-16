function vadidate(){
    var x = getElementByName("password");
    var y = getElementByName("cpassword");
    if(x == y){
        return true;
    }else{
        return false;
    }
}