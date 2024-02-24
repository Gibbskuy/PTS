<!DOCTYPE html>
<html>
<body>

<p>Setting a default value to a function parameter.</p>
<p id="demo"></p>

<script>
function myFunction(x, y) {
  if (y === undefined) {
    y = 2;
  }  
  return x * y;
}
document.getElementById("demo").innerHTML = myFunction(4);
</script>

</body>
</html>

