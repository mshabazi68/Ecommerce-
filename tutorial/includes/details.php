<!-- Details modal -->
<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">// lage modal-dialog
    <div class="modal-content">

      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="clsoe">
        <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center">Levis Jeans</h4>
      </div>

      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">

            <div class="col-sm-6">
              <!--  sm = small-->
              <div class="center-block">
                <img src="images/Products/men4.png" alt="Levis Jeans" class="details img-responsive">
              </div>
            </div>

            <div class="col-sm-6">
              <h4>Details</h4>
              <p> these jeans are amazing! They are straght leg , fit and look sexy on your body!</p>
              <hr>
              <p> Price: $34.99 </P>
              <p> Brand: Levis </P>
              <form action="add_cart.php" method="post">
                <div class="form-group">
                  <div class="col-xs-3">
                    <label for="quntity">Quntity:</label>
                    <input type="text" class="form-control" id="quntity" name="quntity">
                  </div><br><br>
                <!--  <div class="col-xs-9">

                </div> -->
                  <p>Available: 3</p>
                </div>

                <div class="form-group">
                  <label for="size"> Size: </label>
                  <select name="Size" id="size" class="form-control">
                    <option value=""></option>
                    <option value="28">28</option>
                    <option value="32">32</option>
                    <option value="36">36 </option>
                    </select>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <!-- modal-body-->
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close </button>
        <button class="btn btn-warning" type="submit"><span class="glyphicon <glyphicon-shopping-cart"> </span> Add to cart </button>
      </div>
    </div>
  </div>
</div>
