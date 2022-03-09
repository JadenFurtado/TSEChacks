var db = firebase.database(); 
document.getElementById("message-form").addEventListener("submit", sendMessage);

function sendMessage(e) {
    e.preventDefault();
  
    const timestamp = Date.now();
    const messageInput = document.getElementById("message-input");
    const message = messageInput.value;
  
    messageInput.value = "";
  
    document
      .getElementById("messages")
      .scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
  
    firebase.auth().onAuthStateChanged((user)=>{
        if(user){
            var conversationListRef = db.ref('conversations/'); 
            var newConversationRef = conversationListRef.push(); 
            
            newConversationRef.set({
                user1Id : user.uid,
                user2Id : "jOaREOYFtWVw0OYCfJlj1DrmYDl1",
                messages : {
                  sender : user.uid,
                  time : timestamp, 
                  msg : message 
                }
            })
         }else{
           location.replace="http://127.0.0.1/login.html";
         }
    });
}

// const fetchChat = db.ref("conversations/");
// fetchChat.on("child_added", function (snapshot) {
//     const messages = snapshot.val();
//     const message = `<li class=${
//       username === messages.username ? "sent" : "receive"
//     }><span>${messages.username}: </span>${messages.message}</li>`;
//     // append the message on the page
//     document.getElementById("messages").innerHTML += message;
//   });