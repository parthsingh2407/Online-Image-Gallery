<?php
?>
<html><head>
 <link rel="stylesheet" href="ccss/style.css">
<script>function showHint(str){if (str.length==0){ document.getElementById("txtHint").innerHTML=""; return;}if (window.XMLHttpRequest){
                     xmlhttp=new XMLHttpRequest();}else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); }
xmlhttp.onreadystatechange=function() {if (xmlhttp.readyState==4 && xmlhttp.status==200) {document.getElementById("txtHint").innerHTML=xmlhttp.responseText;} }xmlhttp.open("GET","gethint.php?q="+str,true); xmlhttp.send();}</script></head><body><p><b>Start typing a name in the input field below:</b></p><form><p>Suggestions: <span id="txtHint"></span></p>
 <section class="container">
    <form class="search" method="post" action="index.html">
      <input type="search" name="q" placeholder="Search..." autocomplete="off" onkeyup="showHint(this.value)" onchange="DropDown(this.value)">
      <ul class="search-ac">

    </form>
  </section>
</body></html>