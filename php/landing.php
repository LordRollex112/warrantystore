<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 2/26/17
 * Time: 5:33 PM
 */
session_start();
include('header.php');?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form>
                    <div class="form-group">
                        <input type="file" name="file" id="file" class="inputfile" />
                        <label for="file">Choose an image to upload</label>
                    </div>

                        <button type="submit" name ="file-btn" class="btn btn-default">Upload</button>
                </form>
            </div>
        </div>
     </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>