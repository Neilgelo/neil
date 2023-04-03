<?php require_once 'includes/header.php'?>

<body>

<h1 class="text-center">Registration for IT conference</h1>
<form>
  <div class="form-group">
    <label for="exampleInputFname">First Name</label>
    <input type="text" placeholder="Enter your First name"class="form-control" id="exampleInputFName">
  </div>

  <div class="form-group">
    <label for="exampleInputLname">Last Name</label>
    <input type="text" placeholder="Enter your Last name"class="form-control" id="exampleInputLName">
  </div>

  <div class="form-group">
    <label for="bdaymonth">Date of birth</label>
    <input type="month"  id="bdaymonth" name="bdaymonth">
  </div>
<fieldset class= "for-group row">

    <legend class= "col-form- label col -sm-2 float-sm-left pt-0"> Specialty</legend>
    <div class="col-sm-10">
    <div class="form check">
  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
  <label class="form-check-label" for="gridRadios1">
    Database Admin
</label>
</div>

<div class="form check">
  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
  <label class="form-check-label" for="gridRadios1">
    Sofware Developer
    </label>
</div>

<div class="form check">
  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" checked>
  <label class="form-check-label" for="gridRadios1">
  Web Administrator
</label>
</div>


<div class="form check">
  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" checked>
  <label class="form-check-label" for="gridRadios1">
   Other
   </label>
</div>

</div>
</fieldset>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"  placeholder= " Enter your email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" placeholder ="Enter your password" class="form-control" id="exampleInputPassword1">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require_once 'includes/footer.php'?>