document.getElementById('submit').addEventListener('click', function newbank(){
    const emailUser=document.getElementById('userInput');
    const emailFeild=emailUser.value ;
    console.log(emailFeild);
    const passwordUser=document.getElementById('userPassword');
    const passwordfeild=passwordUser.value;
 
    if(emailFeild=='jakirhossainmunir79@gmail.com'&& passwordfeild=='1234'){
        window.location.href='index.html';
    }
    else {
       alert('someting is wrong ');
    }
})

