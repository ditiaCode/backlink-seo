<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            // cek ada cookie atau tidak
            if ($.cookie('cookie') === undefined) {
                $('#cookie').prop('checked', false);
            } else {
                if ($.cookie('cookie') === 'true') {
                    // set checkbox checked
                    $('#cookie').attr('checked', true);
                } else {
                    $('#cookie').attr('checked', false);
                }
            }
        });
    </script>
</head>

<body>

    <div class="container">
        <h1>Cookie</h1>
        <label for="cookie">Cookie</label>
        <input type="checkbox" name="cookie" id="cookie">
    </div>

    <script>

        // UPDATE COOKIE CHANGED
        $('#cookie').on('change', function() {
            $('#cookie').is(':checked') ? ($.cookie('cookie', 'true')) : ($.cookie('cookie', 'false'));
        });

        console.log($.cookie('cookie'));
    </script>
</body>

</html>