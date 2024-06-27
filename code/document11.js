//import { getStorage, ref } from "firebase/storage";
//<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/9.6.9/firebase-storage.js"></script>

const firebaseConfig = {
    apiKey: "AIzaSyBzNxCcnq5Mgbq5ojojdXjs9TzYcGURFLM",
    authDomain: "insure-10fea.firebaseapp.com",
    databaseURL: "https://insure-10fea-default-rtdb.firebaseio.com",
    projectId: "insure-10fea",
    storageBucket: "insure-10fea.appspot.com",
    messagingSenderId: "952535704771",
    appId: "1:952535704771:web:9be8cdc3f2d37020dc2e76",
    measurementId: "G-935ZW5E3LG"
  };
  firebase.initializeApp(firebaseConfig);

    const testdb10=firebase.database().ref('WebApp/Claim/AccidentDocument');
    document.getElementById('document1').addEventListener('submit',submitForm);

    function submitForm(e){
        e.preventDefault();
        var policy=getElementVal10('policy');
        
        save10(policy);
        console.log(policy);
    };

    const save10= (policy) =>{
        var newform10 = testdb10.push();
    
        newform10.set({
            policy:policy
        });
    };
    
    const getElementVal10 = (id) =>{
        return document.getElementById(id).value;
    };


    function uploadImage(e){

        console.log(e.target.files[0])
        
        const storage = getStorage();
        const fileRef = firebase.storage.ref().child('policy');
        const uploadTask = fileRef.put(e.target.files[0])
        uploadTask.on('state_changed', 
  (snapshot) => {
   
    const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
    if(progress=='100') alert('uploaded')
 
  }, 
  (error) => {
   console.log(error)
  }, 
  () => {
    
    getDownloadURL(uploadTask.snapshot.ref).then((downloadURL) => {
      console.log('File available at', downloadURL);
    });
  }
);
    }