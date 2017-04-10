$(function () {
    var login=$('.open-journey');
    var regU=/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    var regP= /^[a-z0-9_-]{6,18}$/ ;
    var flagU=false,flagP=false;
    var messageU=$('.account .error-hint');
    var messageP=$('.password .error-hint');
    login.on('click',function () {
        var user=$('.user ');
        var pass=$('.password .password');
        if (regU.test($.trim(user.val))) {
            flagU=true
        }else{
            messageU.css({opacity:1,transition: 'transform .5s ease',
             transform: 'scale(1)'});
            // messageU.hide(2000,'slow');
            user.value='';
            return
        }
        if (regP.test($.trim(pass.val))) {
            flagP=true;
        }else{
            messageU.css({opacity:1,transition: 'transform .5s ease',
                transform: 'scale(0)'});
            messageP.css({opacity:1,transition: 'transform .5s ease',
                transform: 'scale(1)'});
            pass.value='';
            flagP=false;
            return
        }
        var roles={user:$.trim(user.val),password:$.trim(pass.val)};
        if (flagU&&flagP) {
            $.post({
                type: 'post',
                url: '/login/login',
                dataType: 'json',
                data: roles,
                success:function(data) {

                        if(data==='ok'){
                Location.href('/wifi.html')
                        }
                    }
                }
            )
        }
    })
})