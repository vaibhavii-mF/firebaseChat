<html>
  <body>
    <input type="text" name="inputText" id="inputText">
    <button id="msgsent" name="msgSent" onclick="msgSent('WpMoJ6SGb91P65renEAH')">Send</button>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-firestore.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


    <script>
 
    var arr=[];
    var firebaseConfig = {
    apiKey: "AIzaSyDxAmGFrYHaThbHKFmC_R5YrEsQv1qGsyk",
    authDomain: "laravelchatdemo.firebaseapp.com",
    databaseURL: "https://laravelchatdemo.firebaseio.com",
    projectId: "laravelchatdemo",
    storageBucket: "laravelchatdemo.appspot.com",
    messagingSenderId: "896279278176",
    appId: "1:896279278176:web:05138d2917e691f1c40905",
    measurementId: "G-STRRGZ54NT"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);


    var db = firebase.firestore();

    var usersref= db.collection("adminChat");
    
    var arrUnreadMessage = [];
    var unreadmessage = 0;
    var lastmessage='';
    var d=new Date();
    var datetime=d.getTime();
    
   
    var firebase = 'WpMoJ6SGb91P65renEAH';
    function msgSent(firebaseId)
    {
        var currentdate = new Date(); 
        var datetime = currentdate.getTime();
        var chatData=$('#inputText').val();
        var usersref= db.collection("adminChat");
        var userMessageCollection= usersref.doc(firebaseId).collection("message");
        
        var docData = {
            idFrom: 'Vaibhavi',
            idTo: '',
            timestamp:datetime.toString(),
            Content: chatData,
            type: 1,
            seenBy: ['Vaibhavi'],
           
        };

        userMessageCollection.doc((datetime).toString()).set(docData).then(function() 
        {
            console.log("Document written!");
            if(docData.seenby == 'Admin')
            {
              var ctime = docData.timestamp;
              var displaytime = new Date();
            }
        }).catch(function(error) 
        {
            console.log("Error getting document:", error);
        });

        console.log("Done");

        $('#inputText').val('');
    }

  </script>


  </body>
</html>