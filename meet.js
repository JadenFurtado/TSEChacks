
// var link;
// function genLink(){
//     const timestamp = Date.now(); 
//     link = `https://meet.jit.si/${timestamp}`; 
//     console.log(link)
// }
// genLink();

// firebase.auth().onAuthStateChanged((user)=>{
//     if(user){
//         // const nodemailer = require('nodemailer')

//         // // Gmail account info
//         // const transporter = nodemailer.createTransport({
//         //   service: 'gmail',
//         //   auth: {
//         //     user: 'ridergomez810@gmail.com',
//         //     pass: 'Yohan@123'
//         //   }
//         // });
        
//         // // Email info
//         // const mailOptions = {
//         //   from: 'ridergomez810@gmail.com',
//         //   to: 'yohangupta1@gmail.com',
//         //   subject: 'Meet Link',
//         //   text: `Join meet using this link: ${link}`
//         // };
        
//         // // Send email 📧  and retrieve server response
//         // transporter.sendMail(mailOptions, function(error, info){
//         //   if (error) {
//         //     console.log(error);
//         //   } else {
//         //     console.log('Email sent: ' + info.response);
//         //   }
//         // });
//         Email.send({
//             Host: 'smtp.gmail.com',
//             Username: 'Rider Gomez',
//             Password: 'Yohan@123',
//             To: 'yohangupta123@gmail.com',
//             From: 'ridergomez810@gmail.com',
//             Subject: 'Meet Link',
//             Body: `Join meet using this link: ${link}`
//           })
//             .then(function (message) {
//               alert("Mail has been sent successfully")
//             });
//      }else{
//        location.replace="http://127.0.0.1/login.html";
//      }
    
// });
