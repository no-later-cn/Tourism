$(function () {
    var sliarrn = [];
    var $thead = $('#thead'),
        $tbody = $('#tbody'),
        bg = $('.bg'),
        wk = true,
        slidate = new Date(),
        _nullnei = '',
        de = slidate.getDate();
    var min = $('.conent');
    var monthFirst = new Date(slidate.getFullYear(), parseInt(slidate.getMonth()), 1).getDay();//获取当月的1日等于星期几
    var d = new Date(slidate.getFullYear(), parseInt(slidate.getMonth() + 1), 0); //获取月
    var conter = d.getDate();//获取当前月的天数
    de = de + monthFirst - 1;
    var year = slidate.getFullYear();//当前年份
    var dat = slidate.getDate();//天
    var nian= year + '-' + month + '-' + dat;
    $('.time').text(nian);
    var month = slidate.getMonth() + 1;//当前月份

    //遍历日历网格
    for (var i = 1; i <= 6; i++) {
        _nullnei += "<tr>";
        for (var j = 1; j <= 7; j++) {
            _nullnei += '<td></td>';
        }
        _nullnei += "</tr>";
    }
    $tbody.html(_nullnei);
    $.get('/index.php/personal/signin')
        .done(function (data) {
            data.forEach(function (i, v) {
                sliarrn.push(parseInt((i.day)) + (monthFirst - 2))
                if(data[v].day == dat){
                    $('.bg .color p').css({color:'#000'})
                }else{
                    Funback()
                }
            })
            Funmore();//本月未签到样式
                Funmonth();//查询已签到
        })
    //遍历网格内容
    var $slitd = $tbody.find("td");
    for (var i = 0; i < conter; i++) {
        $slitd.eq(i + monthFirst).html("<p>" + parseInt(i + 1) + "</p>")
    }
    $tbody.on("click", function () {
            $.get('/index.php/personal/signin_add',{signin_data: dat})
                .done(function (data) {
                    if(data === 'ok'){
                        Funmonth();	//再次查询签到
                        $slitd.eq(parseInt(de)).removeClass('color');
                        alert('已签到');
                    }else {
                        alert('签到失败');
                    }
                })
    })
    var flag = true;
    $(".calendar").click(function () {
        $(bg).toggleClass('active');
    })
    $(document).bind('click', bg, function (e) {
        var qd = e.target;
        if ($(qd).is(bg)) {
            $(bg).toggleClass('active');
        }
    })
    function Funback() {
        $slitd.eq(parseInt(de)).addClass('color')
    }
    function Funmore() {
        for (var i = 0; i < de; i++) {
            $slitd.eq(i).addClass('weiqian')
        }
    }
    function Funmonth() {
        for (var i = 0; i < conter; i++) {
            for (var j = 0; j < sliarrn.length; j++) {
                if (i == sliarrn[j]) {
                    $slitd.eq(i + 1).addClass('los')
                }
            }
        }
    }
})