// pass
document.querySelector('.qwe').onclick = tgh;
    function tgh() {
    let login = document.querySelector('#login').value;
    let pass = document.querySelector('#password').value;

    if (login == '1234' && pass == '1234')
        document.location.href = 'kab1.html';

    
    else $(document).ready(function(){
        $(".qwe").click(function(){
           $("#password").after("логин или пароль не верный");
        });
        return 0;
    })
    return false;
}

