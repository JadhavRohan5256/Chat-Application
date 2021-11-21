function load(){
    let password=document.getElementById('password');
    let open=document.getElementById('Open');
    let close=document.getElementById('Close');

    if(password.type === 'password'){
        password.type = "text";
        open.style.display = "block";
        close.style.display = 'none';
    }
    else{
        password.type = "password";
        open.style.display = "none";
        close.style.display = "block";
    }
}
// login ajax start 
$(document).ready(function(){
    $('#form').on("submit",function(e) {
        e.preventDefault();
        var value = $("#form").serialize();
        console.log(value);
        $.ajax({
            url:"login.php",
            type:"post",
            data:value,
            success:function(data) {
                if(data == 1) {
                    window.location.href = "homePage.php";
                }
                else {
                    $('.error p').html(data);
                    $('.error').show();
                }
            }
        });
    });
})
