</div>

<!-- highlights current page link -->
<script>

if (location.pathname === "/") {
  console.log("this is the home page so there will be no underlines on the nav menu");
} else {
  $("a[href*='" + location.pathname + "']").addClass("current");
}
  console.log(location.pathname);
</script>

</body>
</html>
