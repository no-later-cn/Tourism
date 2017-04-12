$(function () {
    var sliarrn = [5,6,7,8,9]
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

    var year=slidate.getFullYear();//当前年份
    var month=slidate.getMonth()+1;//当前月份
    var dat=slidate.getDate();//天
    $('.time').text(year+'-'+month+'-'+dat)
    //遍历日历网格
    for (var i = 1; i <= 6; i++) {
        _nullnei += "<tr>";
        for (var j = 1; j <= 7; j++) {
            _nullnei += '<td></td>';
        }
        _nullnei += "</tr>";
    }
    $tbody.html(_nullnei);

    //遍历网格内容
    var $slitd = $tbody.find("td");
    for (var i = 0; i < conter; i++) {
        $slitd.eq(i + monthFirst).html("<p>" + parseInt(i + 1) + "</p>")
    }

    Funback();//给当前日加样式
    Funmore();//本月未签到样式
    Funmonth();//查询已签到
    $tbody.on("click", function () {
        $slitd.eq(parseInt(de)).removeClass('color');
        if (wk == true) {
            sliarrn.push(de - 1);//把当日传入已签
            Funmonth();	//再次查询签到
            alert('已签到');
            wk=false;
        }
    })
    var flag= true;
    $(".calendar").click(function () {
        $(bg).toggleClass('active');
    })
    $(document).bind('click',bg,function(e){
        var qd=e.target;
        if($(qd).is(bg)){
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