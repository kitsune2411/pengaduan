<?php include "../templates/header.php"; ?>

<link rel="stylesheet" href="../../rateyo/jquery.rateyo.css"/>
    <div class="container mt-5">
        <div class="row">

            <form action="" method="post">

                <div>
                    <h3>
                        Rating System</h3>

                </div>
                <hr style="color: #F7882F; height: 3px;">
                <h5>Pesan</h5>

                <div class="rateYo" id="rating" data-rateyo-rating="4" data-rateyo-num-stars="5" data-rateyo-score="3">
                </div>
                <div>  
                    <textarea name="text" id="text" placeholder="pesan"> </textarea>
                </div>

                <span class='result'>0</span>
                <input type="hidden" name="rating">

        </div>

        <div><input type="submit" name="add"> </div>

        </form>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

    <script>
        $(function() {
            $(".rateyo").rateYo().on("rateyo.change", function(e, data) {
                var rating = data.rating;
                $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
                $(this).parent().find('.result').text('rating :' + rating);
                $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            });
        });
    </script>
  <script src="../../rateyo/jquery.js"></script>
  <script src="../../rateyo/jquery.rateyo.js"></script>
<?php
require 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $rating = $_POST["rating"];

    $sql = "INSERT INTO ratee  VALUES ('','$text','$rating')";
    if (mysqli_query($conn, $sql)) {
        echo "
        <script>
        alert('Berhasil');
    </script>
        
        ";
        return header('location:dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

include "../templates/footer.php";
?>

