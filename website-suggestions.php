<?php require "includes/header.php";?>

<div class="row content drop-shadow">
  <div class="col-lg-10 col-lg-offset-1">
    <p>As Hutson has grown we have developed more and more web content. If you see something that's not quite acting right, or think of something that we should add, please send us a message here. We will view the request, then take appropiate actions. If what your reporting is a bug, please copy the URL of the page and tell us what is happening.</p>
  </div>
</div>

<div class="row content drop-shadow">
  <div class="col-lg-10 col-lg-offset-1">
    <form action="#">
      <div class="row">
        <div class="col-lg-6 form-group">
          <label name="name">Name: <input class="form-control" type="text" name="name"></label>
        </div>
        <div class="col-lg-6 form-group">
          <label name="name">Email: <input class="form-control" type="text" name="name"></label>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 form-group">
          <label name="message">Website Suggestions:<textarea class="form-control" rows="4" name="message" placeholder="Please provide all details here..."></textarea></label>
        </div>
      </div>
      <button type="submit" class="btn btn-submit">Submit</button>
    </form>
  </div>
</div>


<?php require "includes/footer.php"; ?>
