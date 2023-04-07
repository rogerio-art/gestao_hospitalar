
<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

$ (function (){
$ ("#ddlselect") .change(function(){
    var mostrarnome=$("#ddlselect option:selected").text();
    $ ("#txtresults") .val (mostrarnome);
   })
})
</script> 


</head>
<body>
</br>
<hr/>
<select id="ddlselect">
    <option value="" selected disabled>--rogerio--</option>
<option value="1">c#</option>
<option value="2">php</option>
<option value="1">pyton</option>
<option value="2">react</option>
</select>
<input type="text" readonly="readyonly" id="txtresults"/>





</body>
</html>