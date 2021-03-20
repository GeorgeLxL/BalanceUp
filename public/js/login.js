function validateform()
{
    if($('#username').val()=="" || $('#password').val()=="")
    {
        $('#error').html("名とパスワードを入力してください");
        return false;
    }
    else{
        $('#submit').click();
    }
}

function clearerror()
{
    $('#error').html("");
    $('#unkown').html("");
}