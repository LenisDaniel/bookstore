<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/steps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">


</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="step-register">
    <div class="register-box">
        <div class="">
            <!-- multistep form -->
            <form id="msform" action="" method="post" enctype="multipart/form-data">
                <!-- progressbar -->
                <ul id="eliteregister">
                    <li class="active">Basic Info</li>
                    <li>Detailed Info</li>
                    <li>Picture & Price</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Register your book</h2>
                    <h3 class="fs-subtitle">This is Step 1</h3>
                    <input type="text" class="form-control" name="book_name" placeholder="Book Name" />
                    <select class="form-control" name="category_id">
                        <option value="-1">Select One Category</option>
                    </select>
                    <br/>
                    <textarea class="form-control" name="descr" rows="5" placeholder="Book Description"></textarea>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Please be accurate on this info</h2>
                    <h3 class="fs-subtitle">This is Step 2</h3>
                    <input type="text" name="author" placeholder="Author" />
                    <input type="text" name="version" placeholder="Version" />
                    <input type="text" name="year" placeholder="Book Year" />
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">All books go through an approval process </h2>
                    <h3 class="fs-subtitle">Final Step</h3>
                    <label>Please upload a quality picture (w:400px h:500px)</label>
                    <input type="file" name="picture"/>
                    <input type="text" name="conditions" placeholder="Book Condition" />
                    <input type="text" name="price" placeholder="Price" />
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
            </form>
            <div class="clear"></div>
        </div>
    </div>
</section>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/sidebar-nav.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/register-init.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/waves.js') }}"></script>
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/jQuery.style.switcher.js') }}"></script>

</body>
</html>