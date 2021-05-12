<?php $judul="Rating"; include "../templates/header.php"; include "../core.php";
 
 $id = $_GET['id'];
 
?>

<link rel="stylesheet" href="../../rateyo/jquery.rateyo.css"/>
    <div class="container my-5 pt-3 pb-5" style="border: 3px solid #F7882F ; border-radius:15px; width: 50%;">
        <div class="row">

            <form action="rating.php?id=<?=$id?>" method="post">

                <div>
                    <h3>Rating </h3>
                    <p> berikan penilaian dan ulasan anda</p>

                </div>
                <hr style="color: #F7882F; height: 3px;">

                <div class="rateyo" id= "rating"
                    data-rateyo-rating="4"
                    data-rateyo-num-stars="5"
                ></div>
                <input type="hidden" name="rating">
                
                <span class='result'>0</span>
               
                <div class="form-outline my-4">
                    <textarea class="form-control" id="textAreaExample" rows="5" name="pesan"></textarea>
                    <label class="form-label" for="textAreaExample">Message</label>
                </div>

        </div>

        <button type="submit" class="btn btn-warning float-end ms-2 "  style="color:white; width:100%" name="submit">Save</button>

        </form>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

    <script>
        $(function () {
            $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                var rating = data.rating;
                
                $(this).parent().find('.result').text('Rating : '+ rating);
                $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            });
        });
    </script>
<?php
include "../templates/footer.php";
?>

