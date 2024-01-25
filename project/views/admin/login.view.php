<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">Login input</h1>
    </div>
  </div>
  <div class="row">
      <form class="" action="index.html" method="post">
        <label for="enail">email</label>
        <input class="form-control" type="text" name="email" id="email" value="">
    </div>
    <div class="form-group">
      <form class="" action="index.html" method="post">
        <label for="password">password</label>
        <input class="form-control" type="text" name="password" id="password" value="">
    </div>
    <div class="form group">
      <input type="submit" name="login" value="login">
    </div>
    </form>
    </form>
    </form>
  </div>
  <div class="row">
    <?php
    if(isset($viewBag['status'])){
      echo $viewBag['status'] ;
    }
     ?>
  </div>
</div>
