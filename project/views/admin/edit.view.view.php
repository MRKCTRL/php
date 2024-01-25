
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">edit term</h1>
        </div>
      </div>
      <div class="row">
        <!-- <a href="create.php">create new term</a> -->
        <input type="hidden" name="" value="<?= $model->id?>" name="org-term">
        <!-- <form class=" " action="index.html" method="post"> -->
          <div class="form-group">
            <label for="term">Term:</label>
            <input class="form-control" type="text" name="term" id="name" value="<?= $model->term ?>">
          </div>
          <div class="form-group">
            <label for="definition">definition: </label>
            <textarea class="form-control" name="definition" id="<?= $model->definition ?>" value="">  </textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="" value="edit term">
          </div>
        </form>
      </div>
      <div class="row">
           </table>
      </div>
    </div>
