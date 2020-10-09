## Session-Stealing-Using-XSS ##

# This is a demo application to steal cookie stored at the client side i.e. in the browser #

*The Process* 
1. First consider there is an vulnerable application hosted at Server A
2. The attacker will send his payload to the victim which is hosted at Server B(Attacker's Server)
3. The Victim will click on the payload and while his session with the legitimate application is going on which is hosted at Serve A, his cookies will be fetched and passed to the attacker's server i.e. server b.

