var database = firebase.database();
function updateInfo(){
    var ts = document.getElementById('tech-stack').value; 
    var gl = document.getElementById('github-link').value; 
    var rs = document.getElementById('resume').value;
    firebase.auth().onAuthStateChanged((user)=>{
        if(user){
           firebase.database().ref('users/' + user.uid).set({
            username: user.displayName,
            email: user.email,
            profile_picture : user.photoURL,
            tech_stack : ts,
            github_link : gl, 
            resume : rs
           });
           console.log("data updated");
         }else{
           location.replace="http://127.0.0.1/login.html";
         }
       });
}