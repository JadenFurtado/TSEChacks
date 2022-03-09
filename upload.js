
var U;

function fileUpload(){
	const ref = firebase.storage().ref();
	const file = document.querySelector('#photo').files[0]
	const name = (+new Date()) + '-' + file.name;
	const metadata = {
  		contentType: file.type
	};
	const task = ref.child(name).put(file, metadata);
	task
  	.then(snapshot => snapshot.ref.getDownloadURL())
  	.then((url) => {
    	console.log(url);
    	document.querySelector('#someImageTagID').src = url;
    	addPost(url);
  	})
  	.catch(console.error);
}

function addPost(url){
	var postName=document.querySelector("#postName").value;
	var today = new Date();
	var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  	firebase.auth().onAuthStateChanged((user)=>{
    	if(user){
    		var taskListRef = firebase.database().ref("users/"+user.uid+"/posts");
      		var newTaskRef = taskListRef.push();
      		newTaskRef.set({
      			postName:postName,
      			imageURL:url,
      			taskDate:date
    		});
	    }else{
      		location.replace="http://127.0.0.1/login.html";
    	}
	});
}
