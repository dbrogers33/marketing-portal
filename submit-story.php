<?php require "includes/header.php";?>

<div class="row content drop-shadow">
  <div class="col-lg-10 col-lg-offset-1">
    <p>We are always wanting to get stories from all locations that we can share with our audience on facebook. If you have a picture or story, send it in here.</p>
  </div>
</div>

<div class="row content drop-shadow">
  <div class="col-lg-10 col-lg-offset-1">
    <form action="#">
      <div class="row">
        <div class="col-lg-4 form-group">
          <label name="name">Name: <input class="form-control" type="text" name="name"></label>
        </div>
        <div class="col-lg-4 form-group">
          <label name="name">Email: <input class="form-control" type="text" name="name"></label>
        </div>
        <div class="col-lg-4 form-group">
          <label class="btn btn-default btn-file">Upload Image <input class="form-control" type="file" style="display: none"></label>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 form-group">
          <label name="message">Tell Your Story:<textarea class="form-control" rows="4" name="message" placeholder="Please provide all details here..."></textarea></label>
        </div>
      </div>
      <button type="submit" class="btn btn-submit">Submit</button>
    </form>
  </div>
</div>


<?php require "includes/footer.php"; ?>
