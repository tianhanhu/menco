<!DOCTYPE HTML>
<html>  
<body>


<form method="post" id="demo">
User Name: <input type="text" name="username" onkeyup ="setuser(this.value)"><br>
Password: <input type="text" name="password" onkeyup= "setpassword(this.value)"><br>

<button type="button" onclick="loadDoc()">Change Content</button>

</form>

<script>
function setuser(str) { 
    $username = str;
}
</script>

<script>
function setpassword(str) { 
    $password = str;
}
</script>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "login.php?q="+$username+"&p="+$password, true);
  xhttp.send();
}
</script>

</body>
</html>