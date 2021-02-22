
    window.fbAsyncInit = function() {
        FB.init({
          appId            : app_id,
          autoLogAppEvents : true,
          xfbml            : true,
          version          : 'v9.0'
        });
        
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                //display user data
                //getFbUserData();
            }
        });

        
    };
    // Fetch the user profile data from facebook
    function getFbUserData(){
        FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
        function (response) {
            console.log('response', response.id)

            ///GUARDAR DATOS A LA BD
            saveUserData(response);
        });
    }

    $("#btnLoginFb").click(function(){
        FB.login(function (response) {
            if (response.authResponse) {
                // Get and display the user profile data
                getFbUserData();
            } else {
                
               console.log('Cancelado!!!')
            }
        }, {scope: 'email'});
    })

    function saveUserData(userData){
        $.post(base_url+'Home/registro_fb', 
                {oauth_provider:'facebook',userData: JSON.stringify(userData)}, 
                function(response){ 
                    console.log('response resulty', response)
                    if (response.result == 'OK') {
                        msj(response.result, response.msj);
                        
                        console.log('GUARDADO')
                    }else{
                        msj(response.result, response.msj);
                    }
                });
    }

    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        
        saveGoogleUser(profile);
        console.log('profile', profile)
    }

    function saveGoogleUser(profile){

        var params = {
            'nombre'    : profile.getName(),
            'picture'   : profile.getImageUrl(),
            'id_fb'     : profile.getId(),
            'correo'    : profile.getEmail(),
            'oauth_provider' : 'google'

        }
            
        $.ajax({
            type: 'ajax',
            method: 'post',
            url: base_url+'Home/registro_google',
            dataType: "JSON",
            async: true,
            data:params,
            success:function(response)
            {
                if (response.result == 'OK') {
                    msj(response.result, response.msj);
                    
                    console.log('GUARDADO')
                }else{
                    msj(response.result, response.msj);
                }
            } 
        }) 
        
       
    }
      

 
