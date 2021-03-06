<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <title>Notelib</title>
  <!-- <style type="text/css">
    @import  "style.css";
</style> -->
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #5f4f34;">
  <div class="container fluid">
  <!-- Brand -->
  <span class="navbar-brand mb-0 h1">Notelib</span>
  <!-- Links -->
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="/" ><b>Home</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/Synopsis"><b>Synopsis</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/bookname"><b>Books</b></a>
      </li>
    <li class ="nav-item">
        <a class="nav-link" href="/Done"><b>Done</b><a>
  </ul>
  </div>
</nav>
<br/><br/>
<h3><?php echo $__env->yieldContent('navbar'); ?></h3>

<?php echo $__env->yieldContent('konten'); ?>
</body>
</html>
<?php /**PATH /Users/isra/Documents/dev/php/library/resources/views/template.blade.php ENDPATH**/ ?>