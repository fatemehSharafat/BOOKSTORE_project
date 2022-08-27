<!--js-->
<!-- custom  js bootstrap cdn link  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
<!-- custom  jquery cdn link  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom  link  -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- ============ custom link for slider =========== -->
<!--<script src="Public/js/jquery.min.js"></script>-->
<!--<script src="Public/js/popper.js"></script>-->
<!--<script src="Public/js/bootstrap.min.js"></script>-->
<script src="Public/js/owl.carousel.min.js"></script>
<script src="Public/js/main.js"></script>
<!-- ============ end custom link for slider =========== -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>


    $('#subscribeEmail').submit(function (event) {
        event.preventDefault();
        var url = $(this).attr('action');
        var email = $('input[name="newsEmail"]').val();
        var data = {'email': email};

        $.post(url, data, function (msg) {
            if (msg == 1) {
                $('input[name="newsEmail"]').val('');
                toastr["success"]("عضويت با موفقيت انجام شد", "تبريك")
            } else if (msg == 2) {

                toastr["warning"]("شما قبلا عضو شديد.", "هشدار")


            } else {
                toastr["error"]("!عضويت انجام نشد", "خطا");

                   }
        })
        })

</script>

</body>
</html>