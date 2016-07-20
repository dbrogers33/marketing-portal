<?php require "includes/header.php";?>

<div class="row content drop-shadow">
  <div class="col-lg-10 col-lg-offset-1">
    <p>Marketing rerquest are to suggest future campaigns and materials. These suggestions will be reviewed at our monthly meetings with the coorisponding department. The request must come in 90 days prior to the start date. This will allow us ample time to plan, create, and execute a suggestion.</p>
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
          <label name="name">Department: <input class="form-control" type="text" name="name"></label>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 form-group">
          <label name="name">Start Date: <input class="form-control" type="text" name="name"></label>
        </div>
        <div class="col-lg-4 form-group">
          <label name="name">End Date: <input class="form-control" type="text" name="name"></label>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 form-group">
          <label name="message">Marketing Request:<textarea class="form-control" rows="4" name="message" placeholder="Please provide all details here..."></textarea></label>
        </div>
      </div>
      <button type="submit" class="btn btn-submit">Submit</button>
    </form>
  </div>
</div>


<?php require "includes/footer.php"; ?>
