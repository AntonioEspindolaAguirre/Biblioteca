
<!DOCTYPE html>
<html lang="es">

<html>
<head>  
    <script language="JavaScript">
    function setVisibility(id, visibility) {
    document.getElementById(id).style.display = visibility;
    }
    </script>
</head>
<body>
    <div id="HiddenStuff1" style="display:none">
    CONTENT TO HIDE 1
    </div>
    <div id="HiddenStuff2" style="display:none">
    CONTENT TO HIDE 2
    </div>
    <div id="HiddenStuff3" style="display:none">
    CONTENT TO HIDE 3
    </div>
    <input id="YOUR ID" title="HIDDEN STUFF 1" type=button name=type value='HIDDEN STUFF 1' onclick="setVisibility('HiddenStuff1', 'inline');setVisibility('HiddenStuff2', 'none');setVisibility('HiddenStuff3', 'none');";>
    <input id="YOUR ID" title="HIDDEN STUFF 2" type=button name=type value='HIDDEN STUFF 2' onclick="setVisibility('HiddenStuff1', 'none');";>
    <input id="YOUR ID" title="HIDDEN STUFF 3" type=button name=type value='HIDDEN STUFF 3' onclick="setVisibility('HiddenStuff1', 'inline');";>
</body>
</html>
</html>