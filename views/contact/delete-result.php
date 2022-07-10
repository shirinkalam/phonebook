<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="<?=asset_url()?>/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?=asset_url()?>/css/all.min.css"/>
    <link rel="stylesheet" href="<?=asset_url()?>/css/index_style.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col m-5 p-5">
            <?php if($deleted_count):?>
                <span class="text-primary">Deleted Contact Successfuly!</span>
            <?php else:?>
                <span class="text-danger">Contact Not Exists</span>
            <?php endif;?>
            </div>
        </div>
        <div class="row">
            <div class="col m-5 mt-3 p-5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(241, 242, 243); display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <circle cx="50" cy="50" r="32" stroke-width="8" stroke="#1d3f72" stroke-dasharray="50.26548245743669 50.26548245743669" fill="none" stroke-linecap="round">
                        <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
                    </circle>
                    <circle cx="50" cy="50" r="23" stroke-width="8" stroke="#5699d2" stroke-dasharray="36.12831551628262 36.12831551628262" stroke-dashoffset="36.12831551628262" fill="none" stroke-linecap="round">
                        <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" keyTimes="0;1" values="0 50 50;-360 50 50"></animateTransform>
                    </circle>
                    </svg>
                Redirecting to home
                <script>
                    setTimeout(function(){location.href='<?=site_url()?>'},100);</script>
            </div>
        </div>
    </div>
</body>
</html>