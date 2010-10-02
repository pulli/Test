hsfsf
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="style/style1.css" />
 </head>
 <body>
 
 <h2>Calendar Sample</h2>
 
<?php
error_reporting(E_ALL);
    include_once 'calendarlib.php';
    $mycal = new calendarlib();
    $mycal->setLanguage(0);
    $mycal->setLinkTyp(4);
    $mycal->setGETVariableName('datum');
    $mycal->setDateWithGET();
    
    
    $mycal->addEvent('30-1-2008','http://www.tsql.de');
    $mycal->addEvent('22-2-2008','http://myip.tsql.de');
    $mycal->addEvent('25-2-2008');
    $mycal->addEvent('01-3-2008');
    $mycal->addEvent('2-3-2008');
    
    $mycal->showCAL();

?>



<br /><br />
linktyp=0 - No link | keine Links<br />
linktyp=1 - Full linked | vollst&auml;ndige Links<br />
linktyp=2 - Only forward and back | nur weiter und zurck<br />
linktyp=3 - Only entries with event | nur Eintr&auml;ge mit Event linken<br />
linktyp=4 - forward, backward and entries with event | Eintr&auml;ge mit Event sowie vor und zurück linken<br />
<br />
<br />
addevent('datum');  Simple event | einfaches Event<br />
addevent('datum','http://www.tsql.de');  Event with a special link | Event mit speziellem Link
<br />
 </body>
</html>
 
