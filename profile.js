

firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      // User is signed in, see docs for a list of available properties
      // https://firebase.google.com/docs/reference/js/firebase.User
      var uid = user.uid;
      console.log("logged in");
      console.log(uid);
      //document.getElementById("signin").style.display = "none";
      //document.getElementById("signout").style.display = "block";
      document.getElementById("profilePicture").src=user.photoURL;
      document.getElementById("profilePicture1").src=user.photoURL;
      document.getElementById("profileName1").textContent=user.displayName;
      // ...
    } else {
    location.replace("http://localhost/login.html");
  	}
});