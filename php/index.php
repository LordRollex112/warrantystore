<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 2/26/17
 * Time: 4:05 P
 */
?>


<?php include('header.php') ?>

<div class="container">
    <!--
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <img src="../views/receipt1.jpg" alt="Image of receipt pile" height="100%" width="100%"/>
        </div>
    </div>
-->

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <?php if (isset($_SESSION['feedmsg'])){
                echo $_SESSION['feedmsg'];
                unset($_SESSION['feedmsg']);
            } ?>
            <h3>What is Lorem Ipsum?</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                <br/><br/></p>
            <h3>Why do we use it?</h3>
            <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            </p></div>



    </div>

</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>