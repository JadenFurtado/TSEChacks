
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
  }
  });
  var provider = new firebase.auth.GoogleAuthProvider();
  function googleSignin() {
     firebase.auth().setPersistence(firebase.auth.Auth.Persistence.LOCAL);
     firebase.auth()
     .signInWithPopup(provider).then(function(result) {
        firebase.auth().currentUser.getIdToken(true).then(function(idToken) {
           console.log(firebase.auth().currentUser);
           
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
        location.href="https://jadenfurtado.github.io/TSEChacks/login.html";
     }, function(error) {
        console.log('Signout Failed');  
     });
  }
