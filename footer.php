


<!-- Start Style for my footer delete after getting scss sheet-->
<style>
.footer {
    margin-bottom: 0px;
    padding-top: 10px;
    padding-left: 0px;
    width: 100%;
    background-color: #273444;
    color: white;
    font-size: 20px;

}
.copy{
    font-size= 10px;
    padding: 10px;
    margin-bottom: 0;

}
</style>
<!-- End Style for my footer delete after getting scss sheet-->

<!-- footer -->
<section class="footer">
    <div class="col-md-12">
        <div class="row">
            <div class="navbar">
            <a href="#" class="w3-bar-item w3-button" id="home">HOME</a>
            <a href="/signup.php" class="w3-bar-item w3-button">Become a Member ~ Sign UP</a>
            <a href="index.php" class="w3-bar-item w3-button">Member ~ Sign In</a>
            <a href="#our_stamps" class="w3-bar-item w3-button">Browse Our Collection</a>
            <a href="#sundayauction" class="w3-bar-item w3-button">Sunday Auction</a>
            <a href="#newsletter" class="w3-bar-item w3-button">Our News</a>
            <a href="#contactinfo" class="w3-bar-item w3-button">Contact Us</a>
            <p class="copy">Copyright &copy; 2019 The Posting Den</p>        
        </div>
    </div>
</section>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="/scripts.js"></script>


</body>

</html>
<?php
// don't forget to add the paypal logo to footer
// change when small screen
?>


<?php
mysqli_close($conn);
?>