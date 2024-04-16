    var pup=0;
    var dd=[0, 0, 0, 0, 0, 0];
    $(".registr").click(function(){
        for(var i=1;i<9;i++){
            if($("#q"+i).val()==""){
                pup=1;
            }
        }
        if (/^[а-яА-Я]{0,}$/.test($("#q1").val())){
            dd[0]=0;
        }
        else {
            pup=1;
            dd[0]=1;
        }
        if (/^[а-яА-Я]{0,}$/.test($("#q2").val())){
            dd[1]=0;
        }
        else {
            pup=1;
            dd[1]=1;
        }
        if (/^[а-яА-Я]{0,}$/.test($("#q3").val())){
            dd[2]=0;
        }
        else {
            pup=1;
            dd[2]=1;
        }
        if ((/[0-9]{10,}/.test($("#q5").val())&&(($("#q5").val().indexOf('+')==0 && $("#q5").val().indexOf('7')==1)||$("#q5").val().indexOf('8')==0))){
            dd[3]=0;
        }
        else {
            pup=1;
            dd[3]=1;
        }
        if (/[\w]{8,}/.test($("#q6").val())&&$("#q6").val().indexOf('@')>0 &&$("#q6").val().indexOf('.')>0){
            dd[4]=0;
        }
        else {
            pup=1;
            dd[4]=1;
        }
        if (/[\w]{6,}$/.test($("#q7").val())){
            dd[5]=0;
        }
        else {
            pup=1;
            dd[5]=1;
        }
        for(var i=0;i<6;i++){
            localStorage.setItem("dd"+i, dd[i]);
            
        }
        localStorage.setItem("pup1", pup);
        if (localStorage.getItem("pup1")==0) {
            localStorage.setItem("i", $("#q1").val());
            localStorage.setItem("f", $("#q2").val());
            localStorage.setItem("o", $("#q3").val());
            localStorage.setItem("n", $("#q5").val());
            localStorage.setItem("e", $("#q6").val());
            if ($("#q7").val()==$("#q8").val()) {
                localStorage.setItem("p", $("#q7").val());
            }
            pup2=1;
            localStorage.setItem("bigpop",pup2);
            flagl=1;
            flag="user";
            localStorage.setItem("cflag1", flagl);
            localStorage.setItem("cflag", flag);
            $(".registr").attr("href","kab.html");
        }
    
    
    
    });
    
    if (localStorage.getItem("bigpop")==1) {
    
        $("#e1").html(localStorage.getItem("i"));
        $("#e3").html(localStorage.getItem("f"));
        $("#e4").html(localStorage.getItem("l"));
        $("#e5").html(localStorage.getItem("n"));
        $("#e6").html(localStorage.getItem("e"));
    
    
    }
    
    // если пароли или логины неверные, то показываем блок с информацией
    if(localStorage.getItem('checkright')==1){
        $(".checknone").css("display","block");
    }
    // в противном случае блок остается скрытым
    else{
        $(".checknone").css("display","none");
    }
    
    // если обновим страницу, то обнуляем проверку правильности информации и записываем все с локал сторедж
    if(performance.navigation.type == 1){
    right=0;
    localStorage.setItem('checkright', right);
    $(".checknone").css("display","none");
    pup = 0;
    localStorage.setItem("pup1", pup);
    for(var i=0;i<6;i++){
        localStorage.setItem("dd"+i, 0);
        $(".checkreg").css("display","none");
    }
    }




