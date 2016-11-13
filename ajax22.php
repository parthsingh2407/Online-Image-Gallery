<?php
?>
<html><head><script>
 <link rel="stylesheet" href="ajax10.css">
  <script src="ajax11.js"></script>
  <script src="ajax12.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">function showHint(str){if (str.length==0){ document.getElementById("txtHint").innerHTML=""; return;}if (window.XMLHttpRequest){
                     xmlhttp=new XMLHttpRequest();}else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); }
xmlhttp.onreadystatechange=function() {if (xmlhttp.readyState==4 && xmlhttp.status==200) {document.getElementById("txtHint").innerHTML=xmlhttp.responseText;} }xmlhttp.open("GET","gethint.php?q="+str,true); xmlhttp.send();}</script></head><body><div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
</div>
</body></html>