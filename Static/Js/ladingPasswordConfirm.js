var check_pass_word = '';
passwords = $('#password').get(0);
$(function () {
    var div = '\
	<div id="key">\
		<ul id="keyboard">\
			<li class="symbol"><span class="off">1</span></li>\
			<li class="symbol"><span class="off">2</span><p>ABC</p></li>\
			<li class="symbol btn_number_"><span class="off">3</span><p class="off">DEF</p></li>\
			<li class="tab"><span class="off">4</span><p>GHI</p></li>\
			<li class="symbol"><span class="off">5</span><p>JKL</p></li>\
			<li class="symbol btn_number_"><span class="off">6</span><p>MNO</p></li>\
			<li class="tab"><span class="off">7</span><p>PQRS</p></li>\
			<li class="symbol"><span class="off">8</span><p>TUV</p></li>\
			<li class="symbol btn_number_"><span class="off">9</span><p>WXYZ</p></li>\
			<li class=" cancle btn_number_">·</li>\
			<li class="symbol"><span class="off">0</span></li>\
			<li class="delete lastitem">删除</li>\
		</ul>\
	</div>\
	';
    var character, index = 0;
    $("input.pass").attr("disabled", true);
    $("#password").attr("disabled", true);
    $(".back-key").html(div);
    $('#keyboard li').click(function () {
        if ($(this).hasClass('delete')) {
            for (var i = 0, len = passwords.elements.length - 1; len >= i; len--) {
                if ($(passwords.elements[len]).val() != '') {
                    $(passwords.elements[len]).val('');
                    break;
                }
            }
            return false;
        }
        if ($(this).hasClass('cancle')) {
            // parentDialog.close();
            $(".back-key").empty();
            return false;
        }
        if ($(this).hasClass('symbol') || $(this).hasClass('tab')) {
            character = $(this).find('span').text();
            $(passwords.elements[index++ % 6]).val(character);
            if ($(passwords.elements[5]).val() != '') {
                index = 0;
            }
            /*for(var i= 0,len=passwords.elements.length;i<len;i++){
             if($(passwords.elements[i]).val()== null ||$(passwords.elements[i]).val()==undefined||$(passwords.elements[i]).val()==''){
             $(passwords.elements[i]).val(character);
             break;
             }
             }*/
            if ($(passwords.elements[5]).val() != '') {
                var temp_rePass_word = '';
                for (var i = 0; i < passwords.elements.length; i++) {
                    temp_rePass_word += $(passwords.elements[i]).val();
                }
                check_pass_word = temp_rePass_word;
                console.log(check_pass_word)
                // $("#key").hide();
                $.ajax({
                    url: 'confirmLadingPassword.do',
                    type: 'post',
                    data: {userName: 'heboy18', ladingPassword: check_pass_word},
                    dataType: 'json',
                    success: function (data) {
                        $('.alert').show();
                        $('.sad').css({backgroundImage: 'url(/Static/Imgs/pay/rmb.png)', height: '1.23rem'});
                        $('.pay-title').text('支付成功');
                        $('.pay-title-two').text('Payment failure');
                        $('.info').css({display: 'block'});
                        $('#button').css({backgroundImage: 'url(/Static/Imgs/pay/button1.png)'}).attr('href', '/index.php/index');
                    },
                    error: function (data) {
                        $('.alert').show();
                        $('.pay-title').text('支付失败');
                        $('.pay-title-two').text('Payment failure');
                        $('.info').css({display: 'none'})
                        $('.sad').css({backgroundImage: 'url(/Static/Imgs/pay/sad.png)'});
                        $('#button').css({backgroundImage: 'url(/Static/Imgs/pay/button.png)'}).attr('href', 'javascript:void(0);');
                        for (var i = 0; i < passwords.elements.length; i++) {
                            $(passwords.elements[i]).val('');
                        }
                        $('#button').click(function () {
                            $('.alert').css({display: 'none'});
                        })
                    }
                });
            }
        }
        return false;
    });
    $('.close').click(function () {
        $('.alert').css({display: 'none'});
    })
});
(function () {
    function tabForward(e) {
        e = e || window.event;
        var target = e.target || e.srcElement;
        if (target.value.length === target.maxLength) {
            var form = target.form;
            for (var i = 0, len = form.elements.length - 1; i < len; i++) {
                if (form.elements[i] === target) {
                    if (form.elements[i++]) {
                        form.elements[i++].focus();
                    }
                    break;
                }
            }
        }
    }

    var form = document.getElementById("password");
    form.addEventListener("keyup", tabForward, false);
})();