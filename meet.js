
var link;
function genLink(){
    const timestamp = Date.now(); 
    link = `https://meet.jit.si/${timestamp}`; 
    console.log(link)
}
genLink();

firebase.auth().onAuthStateChanged((user)=>{
    if(user){
        var user1_email = 'furtadojaden@gmail.com'; 
        var user2_email = 'yohangupta123@gmail.com'; 
        Email.send({
            Host: "smtp.gmail.com",
            Username: "Rider Gomez",
            Password: "Yohan@123",
            To: user1_email, user2_email,
            From: "ridergomez810@gmail.com",
            Subject: "Meet Link",
            Body: `Join meet using this link: ${link}`
          })
            .then(function (message) {
              alert("Mail has been sent successfully")
            });
     }else{
       location.replace="http://127.0.0.1/login.html";
     }
});
