
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">delete term</h1>
        </div>
      </div>
      <div class="row">
        <p>Are you sure you want to delete <?= $model->term?> </p>

      </div>
      <div class="row">
        <!-- <a href="create.php">create new term</a> -->
        <input type="hidden" name="term" value="<?= $model->id ?>" name="org-term">

          <div class="form-group">
            <input type="submit" name="" value="delete>
          </div>
        </form>
      </div>
      <div class="row">
           </table>
      </div>
    </div>
