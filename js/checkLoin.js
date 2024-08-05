function checkLogin(){
        if( document.adminLogin.username.value == "" &&  document.adminLogin.username.isInteger ){
            alert( "Please provide your username!" );
            document.adminLogin.username.focus() ;

        }
}