
firebase.auth().onAuthStateChanged((user) => {
  if (user) {
    // User is signed in, see docs for a list of available properties
    // https://firebase.google.com/docs/reference/js/firebase.User
    var uid = user.uid;
    console.log("logged in");
    console.log(uid);
    document.getElementById("signin").style.display = "none";
    document.getElementById("signout").style.display = "block";
    // ...
  } else {
   document.getElementById("signin").style.display = "block";
    document.getElementById("signout").style.display = "none";
   console.log("logged out");

//provider.addScope("https://www.googleapis.com/auth/calendar");
console.log(firebase.auth().currentUser);
/*
function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
*/
console.log(firebase.auth().currentUser);
}
});
var provider = new firebase.auth.GoogleAuthProvider();
function googleSignin() {
   firebase.auth().setPersistence(firebase.auth.Auth.Persistence.LOCAL);
   firebase.auth()
   .signInWithPopup(provider).then(function(result) {
      // This gives you a Google Access Token. You can use it to access the Google API.
      //var token = result.credential.accessToken;
      //access token of google apis
      //localStorage.setItem("auth_token",token);

      //var user = result.user;
      firebase.auth().currentUser.getIdToken(true).then(function(idToken) {
         console.log(firebase.auth().currentUser);
         //firebase id token
      /*
      localStorage.setItem("idToken",idToken);
      setCookie("user",token,1);
      setCookie("token",idToken,1);
      alert("logged in");
      
      firebase.auth().setPersistence(firebase.auth.Auth.Persistence.LOCAL)
  .then(() => {
    // Existing and future Auth states are now persisted in the current
    // session only. Closing the window would clear any existing state even
    // if a user forgets to sign out.
    // ...
    // New sign-in will be persisted with session persistence.
    var provider = new firebase.auth.GoogleAuthProvider();
    return firebase.auth().GoogleAuthProvider();
  })
  .catch((error) => {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
  });
  */
      //location.href="https://127.0.0.1:5000/user";
}).catch(function(error) {
  // Handle error
});  
   
   }).catch(function(error) {
   
      var errorCode = error.code;
      var errorMessage = error.message;     
      console.log(error.code);
      console.log(error.message);

   });
}


function googleSignout() {
   localStorage.removeItem("idToken");
   localStorage.removeItem("auth_token");
   firebase.auth().signOut()
   .then(function() {
      console.log('Signout Succesfull');
   }, function(error) {
      console.log('Signout Failed');  
   });
}