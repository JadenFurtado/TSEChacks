
function myData(){
firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      // User is signed in, see docs for a list of available properties
      // https://firebase.google.com/docs/reference/js/firebase.User
      var uid = user.uid;
      console.log("logged in");
      console.log(uid);
      //document.getElementById("signin").style.display = "none";
      //document.getElementById("signout").style.display = "block";
      document.getElementById("profileName1").textContent=user.displayName;
      document.getElementById("profilePicture").src=user.photoURL;
      document.getElementById("profilePicture1").src=user.photoURL;
      // ...
    } else {
    location.replace("https://jadenfurtado.github.io/TSEChacks/login.html/login.html");
    }
  });
}

function userData(userId){
//function getTaskList(userId){
  var ref = firebase.database().ref("users/"+userId);
ref.on("value", function(snapshot) {
    var childData = snapshot.val();
    var key = Object.keys(childData)[1];    //this will return 1st key.         
    var email=childData['email'];
    var userName = childData['username'];
    var profile_picture = childData['profile_picture'];
    document.getElementById("profileName1").textContent=userName;
    document.getElementById("profilePicture").src=profile_picture;
    document.getElementById("profilePicture1").src=profile_picture;
});
}
