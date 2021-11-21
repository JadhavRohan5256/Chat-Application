// sending messege

var scrollDown = function() {
    let chatBox = document.getElementById('middleSection');
    chatBox.scrollTop = chatBox.scrollHeight;
}
scrollDown();

$(document).ready(function(){
    $('#form').on("submit",function(e) {
        e.preventDefault();
        var value = new FormData(this);
        // console.log(value);
        $.ajax({
            url:"messegeSend.php",
            type:"post",
            data:value,
            contentType:false,
            processData:false,
            success:function(data) {
                if(data != 1) {
                    $('#messege').val("");
                    
                }
                else {
                    alert("not ok");
                }
                
            }
        });
    });
});

// $(document).ready(function(){
//     setInterval(function(){

//         console.log(value);
//         var value = new FormData(this);
//             $.ajax({
//                 url:"messegeSelect.php",
//                 type:"post",
//                 data:value,
//                 contentType:false,
//                 processData:false,
//                 success:function(data){
//                     $('.middleSection').html(data);
//                     scrollDown();
//                 }
//             });
//     },500);
// });

// fetching data from database to chat page 
const chat = document.querySelector('.middleSection');
setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","messegeSelect.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chat.innerHTML = data;
                scrollDown();
            }
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
},500);


