<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>

<script src="https://use.typekit.net/hoy3lrg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
<style class="cp-pen-styles">
body {
  /* display: flex;
  align-items: center;
  justify-content: center; */
  min-height: 100vh;
  background: black;
  font-family: "proxima-nova", "Source Sans Pro", sans-serif;
  font-size: 1em;
  letter-spacing: 0.1px;
  color: #32465a;
  text-rendering: optimizeLegibility;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
  -webkit-font-smoothing: antialiased;
}

#frame {
  width: 100%;
  min-width: 80%;
  max-width: 100%;
  height: 100%;
  min-height: 80%;
  max-height: 100%;
  background: #E6EAEA;
}
@media screen and (max-width: 360px) {
  #frame {
    width: 100%;
    height: 100vh;
  }
}
#frame #sidepanel {
  float: left;
  min-width: 280px;
  max-width: 340px;
  width: 40%;
  height: 100%;
  background: #2c3e50;
  color: #f5f5f5;
  overflow: hidden;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel {
    width: 58px;
    min-width: 58px;
  }
}
#frame #sidepanel #profile {
  width: 80%;
  margin: 25px auto;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile {
    width: 100%;
    margin: 0 auto;
    padding: 5px 0 0 0;
    background: #32465a;
  }
}
#frame #sidepanel #profile.expanded .wrap {
  height: 210px;
  line-height: initial;
}
#frame #sidepanel #profile.expanded .wrap p {
  margin-top: 20px;
}
#frame #sidepanel #profile.expanded .wrap i.expand-button {
  -moz-transform: scaleY(-1);
  -o-transform: scaleY(-1);
  -webkit-transform: scaleY(-1);
  transform: scaleY(-1);
  filter: FlipH;
  -ms-filter: "FlipH";
}
#frame #sidepanel #profile .wrap {
  height: 60px;
  line-height: 60px;
  overflow: hidden;
  -moz-transition: 0.3s height ease;
  -o-transition: 0.3s height ease;
  -webkit-transition: 0.3s height ease;
  transition: 0.3s height ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap {
    height: 55px;
  }
}
#frame #sidepanel #profile .wrap img {
  width: 50px;
  border-radius: 50%;
  padding: 3px;
  border: 2px solid #e74c3c;
  height: auto;
  float: left;
  cursor: pointer;
  -moz-transition: 0.3s border ease;
  -o-transition: 0.3s border ease;
  -webkit-transition: 0.3s border ease;
  transition: 0.3s border ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap img {
    width: 40px;
    margin-left: 4px;
  }
}
#frame #sidepanel #profile .wrap img.online {
  border: 2px solid #2ecc71;
}
#frame #sidepanel #profile .wrap img.away {
  border: 2px solid #f1c40f;
}
#frame #sidepanel #profile .wrap img.busy {
  border: 2px solid #e74c3c;
}
#frame #sidepanel #profile .wrap img.offline {
  border: 2px solid #95a5a6;
}
#frame #sidepanel #profile .wrap p {
  float: left;
  margin-left: 15px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap p {
    display: none;
  }
}
#frame #sidepanel #profile .wrap i.expand-button {
  float: right;
  margin-top: 23px;
  font-size: 0.8em;
  cursor: pointer;
  color: #435f7a;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap i.expand-button {
    display: none;
  }
}
#frame #sidepanel #profile .wrap #status-options {
  position: absolute;
  opacity: 0;
  visibility: hidden;
  width: 150px;
  margin: 70px 0 0 0;
  border-radius: 6px;
  z-index: 99;
  line-height: initial;
  background: #435f7a;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options {
    width: 58px;
    margin-top: 57px;
  }
}
#frame #sidepanel #profile .wrap #status-options.active {
  opacity: 1;
  visibility: visible;
  margin: 75px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options.active {
    margin-top: 62px;
  }
}
#frame #sidepanel #profile .wrap #status-options:before {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 8px solid #435f7a;
  margin: -8px 0 0 24px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options:before {
    margin-left: 23px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul {
  overflow: hidden;
  border-radius: 6px;
}
#frame #sidepanel #profile .wrap #status-options ul li {
  padding: 15px 0 30px 18px;
  display: block;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li {
    padding: 15px 0 35px 22px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li:hover {
  background: #496886;
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
    width: 14px;
    height: 14px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
  content: '';
  position: absolute;
  width: 14px;
  height: 14px;
  margin: -3px 0 0 -3px;
  background: transparent;
  border-radius: 50%;
  z-index: 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
    height: 18px;
    width: 18px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li p {
  padding-left: 12px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li p {
    display: none;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
  background: #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
  border: 1px solid #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
  background: #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
  border: 1px solid #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
  background: #e74c3c;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
  border: 1px solid #e74c3c;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
  background: #95a5a6;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
  border: 1px solid #95a5a6;
}
#frame #sidepanel #profile .wrap #expanded {
  padding: 100px 0 0 0;
  display: block;
  line-height: initial !important;
}
#frame #sidepanel #profile .wrap #expanded label {
  float: left;
  clear: both;
  margin: 0 8px 5px 0;
  padding: 5px 0;
}
#frame #sidepanel #profile .wrap #expanded input {
  border: none;
  margin-bottom: 6px;
  background: #32465a;
  border-radius: 3px;
  color: #f5f5f5;
  padding: 7px;
  width: calc(100% - 43px);
}
#frame #sidepanel #profile .wrap #expanded input:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search {
  border-top: 1px solid #32465a;
  border-bottom: 1px solid #32465a;
  font-weight: 300;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #search {
    display: none;
  }
}
#frame #sidepanel #search label {
  position: absolute;
  margin: 10px 0 0 20px;
}
#frame #sidepanel #search input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  padding: 10px 0 10px 46px;
  width: calc(100% - 25px);
  border: none;
  background: #32465a;
  color: #f5f5f5;
}
#frame #sidepanel #search input:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search input::-webkit-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input::-moz-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-ms-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-moz-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #contacts {
  height: calc(100% - 177px);
  overflow-y: scroll;
  overflow-x: hidden;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts {
    height: calc(100% - 149px);
    overflow-y: scroll;
    overflow-x: hidden;
  }
  #frame #sidepanel #contacts::-webkit-scrollbar {
    display: none;
  }
}
#frame #sidepanel #contacts.expanded {
  height: calc(100% - 334px);
}
#frame #sidepanel #contacts::-webkit-scrollbar {
  width: 8px;
  background: #2c3e50;
}
#frame #sidepanel #contacts::-webkit-scrollbar-thumb {
  background-color: #243140;
}
#frame #sidepanel #contacts ul li.contact {
  position: relative;
  padding: 10px 0 15px 0;
  font-size: 0.9em;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact {
    padding: 6px 0 46px 8px;
  }
}
#frame #sidepanel #contacts ul li.contact:hover {
  background: #32465a;
}
#frame #sidepanel #contacts ul li.contact.active {
  background: #32465a;
  border-right: 5px solid #435f7a;
}
#frame #sidepanel #contacts ul li.contact.active span.contact-status {
  border: 2px solid #32465a !important;
}
#frame #sidepanel #contacts ul li.contact .wrap {
  width: 88%;
  margin: 0 auto;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap {
    width: 100%;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap span {
  position: absolute;
  left: 0;
  margin: -2px 0 0 -2px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  border: 2px solid #2c3e50;
  background: #95a5a6;
}
#frame #sidepanel #contacts ul li.contact .wrap span.online {
  background: #2ecc71;
}
#frame #sidepanel #contacts ul li.contact .wrap span.away {
  background: #f1c40f;
}
#frame #sidepanel #contacts ul li.contact .wrap span.busy {
  background: #e74c3c;
}
#frame #sidepanel #contacts ul li.contact .wrap img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin-right: 10px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap img {
    margin-right: 0px;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap .meta {
  padding: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #contacts ul li.contact .wrap .meta {
    display: none;
  }
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .name {
  font-weight: 600;
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview {
  margin: 5px 0 0 0;
  padding: 0 0 1px;
  font-weight: 400;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  -moz-transition: 1s all ease;
  -o-transition: 1s all ease;
  -webkit-transition: 1s all ease;
  transition: 1s all ease;
}
#frame #sidepanel #contacts ul li.contact .wrap .meta .preview span {
  position: initial;
  border-radius: initial;
  background: none;
  border: none;
  padding: 0 2px 0 0;
  margin: 0 0 0 1px;
  opacity: .5;
}
#frame #sidepanel #bottom-bar {
  position: absolute;
  width: 100%;
  bottom: 0;
}
#frame #sidepanel #bottom-bar button {
  float: left;
  border: none;
  width: 50%;
  padding: 10px 0;
  background: #32465a;
  color: #f5f5f5;
  cursor: pointer;
  font-size: 0.85em;
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button {
    float: none;
    width: 100%;
    padding: 15px 0;
  }
}
#frame #sidepanel #bottom-bar button:focus {
  outline: none;
}
#frame #sidepanel #bottom-bar button:nth-child(1) {
  border-right: 1px solid #2c3e50;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button:nth-child(1) {
    border-right: none;
    border-bottom: 1px solid #2c3e50;
  }
}
#frame #sidepanel #bottom-bar button:hover {
  background: #435f7a;
}
#frame #sidepanel #bottom-bar button i {
  margin-right: 3px;
  font-size: 1em;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button i {
    font-size: 1.3em;
  }
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button span {
    display: none;
  }
}
#frame .content {
  float: right;
  width: 60%;
  height: 100%;
  overflow: hidden;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame .content {
    width: calc(100% - 58px);
    min-width: 300px !important;
  }
}
@media screen and (min-width: 900px) {
  #frame .content {
    width: calc(100% - 340px);
  }
}
#frame .content .contact-profile {
  width: 100%;
  height: 60px;
  line-height: 60px;
  background: #f5f5f5;
}
#frame .content .contact-profile img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin: 9px 12px 0 9px;
}
#frame .content .contact-profile p {
  float: left;
}
#frame .content .contact-profile .social-media {
  float: right;
}
#frame .content .contact-profile .social-media i {
  margin-left: 14px;
  cursor: pointer;
}
#frame .content .contact-profile .social-media i:nth-last-child(1) {
  margin-right: 20px;
}
#frame .content .contact-profile .social-media i:hover {
  color: #435f7a;
}
#frame .content .messages {
  height: auto;
  min-height: calc(100% - 93px);
  max-height: calc(100% - 93px);
  overflow-y: scroll;
  overflow-x: hidden;
}
@media screen and (max-width: 735px) {
  #frame .content .messages {
    max-height: calc(100% - 105px);
  }
}
#frame .content .messages::-webkit-scrollbar {
  width: 8px;
  background: transparent;
}
#frame .content .messages::-webkit-scrollbar-thumb {
  background-color: rgba(0, 0, 0, 0.3);
}
#frame .content .messages ul li {
  display: inline-block;
  clear: both;
  float: left;
  margin: 15px 15px 5px 15px;
  width: calc(100% - 25px);
  font-size: 0.9em;
}
#frame .content .messages ul li:nth-last-child(1) {
  margin-bottom: 20px;
}
#frame .content .messages ul li.sent img {
  margin: 6px 8px 0 0;
}
#frame .content .messages ul li.sent p {
  background: #435f7a;
  color: #f5f5f5;
}
#frame .content .messages ul li.replies img {
  float: right;
  margin: 6px 0 0 8px;
}
#frame .content .messages ul li.replies p {
  background: #f5f5f5;
  float: right;
}
#frame .content .messages ul li img {
  width: 22px;
  border-radius: 50%;
  float: left;
}
#frame .content .messages ul li p {
  display: inline-block;
  padding: 10px 15px;
  border-radius: 20px;
  max-width: 205px;
  line-height: 130%;
}
@media screen and (min-width: 735px) {
  #frame .content .messages ul li p {
    max-width: 300px;
  }
}
#frame .content .message-input {
  position: absolute;
  bottom: 0;
  width: 100%;
  z-index: 99;
}
#frame .content .message-input .wrap {
  position: relative;
}
#frame .content .message-input .wrap input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  float: left;
  border: none;
  width: 92%;
  padding: 0px 0px 0px 0px;
  font-size: 0.8em;
  color: #32465a;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap input {
    padding: 15px 32px 16px 8px;
  }
}
#frame .content .message-input .wrap input:focus {
  outline: none;
}
#frame .content .message-input .wrap .attachment {
  position: absolute;
  right: 60px;
  z-index: 4;
  margin-top: 10px;
  font-size: 1.1em;
  color: #435f7a;
  opacity: .5;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap .attachment {
    margin-top: 17px;
    right: 65px;
  }
}
#frame .content .message-input .wrap .attachment:hover {
  opacity: 1;
}
#frame .content .message-input .wrap button {
  float: right;
  border: none;
  width: 75px;
  height: 62px;
  padding: 12px 0;
  cursor: pointer;
  background: #32465a;
  color: #f5f5f5;
}
::placeholder 
{
  padding-left: 7px;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap button {
    padding: 16px 0;
  }
}
#frame .content .message-input .wrap button:hover {
  background: #435f7a;
}
#frame .content .message-input .wrap button:focus {
  outline: none;
}


</style></head><body>

<div id="frame">
	<div id="sidepanel">
		<div id="profile">
			<div class="wrap">
				<img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />
        <p id="admin"> 
          Admin
          <a id="logout">
             <i class="fa fa-sign-out" style="color:white" aria-hidden="true"></i> 
          </a>
        </p>
        
				<!-- <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i> -->
				
			</div>
		</div>
		<div id="search">
			<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
			<input type="text" id="searchid" placeholder="Search contacts..." />
		</div>
		<div id="contacts">
      
        <ul id="chatid">

        </ul> 
		</div>
	</div>
	<div class="content" id="screencontent">
		<div id="activeClass">

      <div class="contact-profile">
        
      </div>
  
       <div class="messages">
       <!-- sent - message from user
        replies - message admin -->
      </div>

    </div>
		
	</div>
</div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

</body>


<script>
  
  $('#chatid').on('click', 'li', function() 
  {
          $('#chatid li.btn-click').removeClass('btn-click');
          $(this).addClass('btn-click');
  });
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
   
  $(document).ready(function()
  {
    var messagecount = [];
    var nonmessagecount = [];
    var lastmessage='';
    var unreadmessage = 0;

    var usersList = db.collection("users").get().then(function(querySnapshot) 
    {
      querySnapshot.forEach(function(doc) 
      {
        var firebaseId = doc.id;
        var name = doc.data().name;
        usersref.doc(firebaseId).collection("message").orderBy("timestamp",'desc').limit(1).get().then((querySnapshot2) => 
        {
            if(querySnapshot2.docs.length!=0)
            {
              lastmessage=querySnapshot2.docs[0].data().Content;

              var len = querySnapshot2.docs[0].data().timestamp;
              var datas = db.collection("adminChat").doc(firebaseId).collection("message").orderBy("timestamp",'desc').limit(1).onSnapshot(function(snapshot)
              {
                snapshot.docChanges().forEach(function(change)
                {
                  if (change.type === "added") 
                  {
                    // console.log("Data: ", change.doc.data().timestamp);
                    if(change.doc.data().timestamp > len )
                    {
                      // console.log("NEW");
                      location.reload(true);
                    }
                  }
                });
              });

              var seenBy=querySnapshot2.docs[0].data().seenBy;
              if(seenBy.includes("Admin") || seenBy.includes("admin"))
              {
                  unreadmessage=0;
              }
              else
              {
                  unreadmessage++;
              
              }
              if(unreadmessage>0)
              {
                  var message =  '<input type="hidden" value="'+firebaseId+'" name="fireId'+firebaseId+'" id="fireId'+firebaseId+'"><li id="listLi" class="class'+firebaseId+' contact"><span onclick="clickUser(\'' + firebaseId + '\')" id="'+firebaseId+'" value='+firebaseId+'><div class="wrap"><img src="http://emilcarlsson.se/assets/jonathansidwell.png" alt="" /><div class="meta"><p id="username" class="name">'+name+'</p><p id="unreadmsg" align="center" style="background-color:white;color:black;border-top-left-radius: 50%;border-top-right-radius: 50%;border-bottom-left-radius: 50%;border-bottom-right-radius: 50%;width: 6%;margin-top:-4%;margin-left: 90%;height: 4%;padding-top: 1%;">'+unreadmessage+'</p><p class="preview">' +lastmessage+ '</p></div></div></span></li>';
                  
                  var search =message.includes('""');
                  if(search == true)
                  {
                    message.replace('""', '"');
                    $('#chatid').prepend(message);
                  }
              }
              else
              {
                  $('#chatid').append('<input type="hidden" value="'+firebaseId+'" name="fireId'+firebaseId+'" id="fireId'+firebaseId+'"><li id="listLi" class=" class'+firebaseId+' contact"><span onclick="clickUser(\'' + firebaseId + '\')" id="'+firebaseId+'" value='+firebaseId+'><div class="wrap"><img src="http://emilcarlsson.se/assets/jonathansidwell.png" alt="" /><div class="meta"><p id="username" class="name">'+name+'</p><p class="preview">' +lastmessage+ '</p></div></div></span></li>');
              }
            }
        });
        messagecount.forEach(function(item)
        {
          $('#chatid').append(item);
        });

      });
    })
    .catch(function(error) 
    {
        console.log("Error getting documents: ", error);
    });
  });

  function clickUser(firebaseId)
  {
      $('#screencontent').load(location.href + " #activeClass");

      var idFromAdmin = [];
      var idFromUser = [];
      var datetime = d.getTime();
      var usersref= db.collection("adminChat").doc(firebaseId).collection("message");
      if(firebaseId)
      {
          var userMessageCollection=usersref;
          userMessageCollection.orderBy("timestamp",'desc').get().then((querySnapshot1) => 
          {
            querySnapshot1.forEach((messages)=>
            {
                if(messages.data().seenBy!='Admin' || messages.data().seenBy!='admin')
                {
                    var timestamp=messages.data().timestamp;
                    var seenBy=messages.data().seenBy;
                    if(seenBy.includes("Admin") || seenBy.includes("admin"))
                    {
                        
                    }
                    else
                    {
                        var adminArr = ["Admin"];
                        var printMy = messages.data().seenBy;
                        var newArr = adminArr.concat(printMy);
                        userMessageCollection.doc(timestamp).update({seenBy : newArr})
                        .then((function()
                        {
                        }));
                        var x=document.getElementById("unreadmsg");
                        x.style.display = "none";
                        unreadmessage=0;
                    }
                }

                var adminMsg = messages.data().idFrom == "Admin" || messages.data().idFrom == "admin";
                if(adminMsg)
                {

                  var adminFireMsg = '<ul><li class="replies"> <p>'+messages.data().Content+'</p></li></ul>';
                  $('.messages').prepend(adminFireMsg);
                }
                else
                {
                  var UserFireMsg = '<ul><li class="sent"> <p>'+messages.data().Content+'</p></li></ul>';
                  $('.messages').prepend(UserFireMsg);
                }

            });
          });
          
          var docRef = db.collection("users").doc(firebaseId);
          docRef.get().then(function(doc) 
          {
              if (doc.exists) 
              {
                var userName = doc.data().name;
                var headMsg = '<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" /><p>'+userName+'</p><div class="message-input"><div class="wrap"><input id="inputText" type="text" placeholder="Write your message..." /><button id="msgSent" onclick="msgSent(\'' + firebaseId + '\')" class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button></div></div>';
                $('.contact-profile').prepend(headMsg);
              } 
              else 
              {
              }
          }).catch(function(error) {
              console.log("Error getting document:", error);
          });
          
      }
      else
      {
      }  
            
  }

  let logout=document.getElementById('logout');
  logout.addEventListener('click',e=>
  {
    firebase.auth().signOut().then(function() 
    {
      window.location.replace("/");
    }, function(error) 
    {
      var errorCode = error.code;
      var errorMessage = error.message;
      console.log(errorCode);
      console.log(errorMessage);
    });
  });
  
  function msgSent(firebaseId)
  {
      var db = firebase.firestore();
      var currentdate = new Date(); 
      var datetime = currentdate.getTime();
      var chatData=$('#inputText').val();
      var usersref= db.collection("adminChat");
      var userMessageCollection= usersref.doc(firebaseId).collection("message");
      
      var docData = {
          idFrom: 'Admin',
          idTo: firebaseId,
          timestamp:datetime.toString(),
          Content: chatData,
          type: 0,
          seenBy: ['Admin'],
          
      };

      userMessageCollection.doc((datetime).toString()).set(docData).then(function() 
      {
          if(docData.seenby == 'Admin')
          {
            var ctime = docData.timestamp;
            var displaytime = new Date();
          }
      }).catch(function(error) 
      {
          console.log("Error getting document:", error);
      });

      var adminFireMsg = '<ul><li class="replies"> <p>'+chatData+'</p></li></ul>';
      $('.messages').append(adminFireMsg);

      $('#inputText').val('');
  }

  $("#searchid").on("keyup", function() 
  {
    var userName=$(this).val();
    
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("searchid");
    filter = input.value.toUpperCase();
    ul = document.getElementById("chatid");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) 
    {
        a = li[i].getElementsByTagName("p")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) 
        {
            li[i].style.display = "";
        } else 
        {
            li[i].style.display = "none";
        }
    }

  });
  </script>
</html>