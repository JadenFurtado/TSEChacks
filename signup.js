// Get a reference to the database service
var database = firebase.database();
function userRegistration(){
 googleSignin();
 writeUserData();  
}
function writeUserData() {
    firebase.auth().onAuthStateChanged((user)=>{
   if(user){
      firebase.database().ref('users/' + user.uid).set({
        username: user.displayName,
        email: user.email,
        profile_picture : user.photoURL
      });
      console.log("success");
      location.replace("https://jadenfurtado.github.io/TSEChacks/profile.html");
    }else{
      location.href="/login.html";
    }
  });
}
//writeUserData();
/*
/*
firebase.auth().onAuthStateChanged((user) => {
  if (user) {
    var uid = user;
    console.log(uid);
    return uid;
  } else {
    location.replace="http://127.0.0.1/login.html";
  }
});

//add a task
function addTask(taskName){
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  firebase.auth().onAuthStateChanged((user)=>{
    if(user){
      var taskListRef = firebase.database().ref("users/"+user.uid+"/tasks");
      var newTaskRef = taskListRef.push();
      newTaskRef.set({
      taskName:taskName,
      taskDate:date
      });
    }else{
      location.replace="http://127.0.0.1/login.html";
    }
  });
}
addTask("this is a simple task description");

function editTask(taskId,taskName){
  firebase.auth().onAuthStateChanged((user)=>{
    if(user){
      var takListRef = firebase.database().ref("users/"+user.uid+"/tasks/"+taskId);
      var newTaskRef = taskListRef.push();
      newTaskRef.set({
        taskName:taskName,
        taskDate:date
      });
    }else{
      location.replace="http://127.0.0.1/login.html";
    }
  });
}

function getTaskList(userId){
  firebase.auth().onAuthStateChanged((user)=>{
    if(user){
      var userId = firebase.database().ref("users/"+user.uid+"/tasks");
      
    }
  });
}

/*
//writeUserData("w1kab2ifdTQF5YVNfgjjxP4XDj33","Jaden Furtado","furtadojaden@gmail.com","https://lh3.googleusercontent.com/a-/AOh14GgIwg6FR9gna930Pe82F70Tgq882J307-zpb2Osxg=s96-c");

function check(data){
	//console.log(data);
}
//console.log(firebase.auth());
function checkIfUserExists(userId){
console.log("inside");
var starCountRef = firebase.database().ref('users/'+"w1kab2ifdTQF5YVNfgjjxP4XDj33");
//console.log(starCountRef);
starCountRef.on("value", function(snapshot) {
  console.log(snapshot.val());
}, function (error) {
  console.log("Error: " + error.code);
});
}
checkIfUserExists(1);
*/
