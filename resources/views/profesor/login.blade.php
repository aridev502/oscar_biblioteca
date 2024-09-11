<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('theme/login.css')}}">
</head>

<body>

    <div id="back">
        <canvas id="canvas" class="canvas-back"></canvas>
        <div class="backRight">
        </div>
        <div class="backLeft">
        </div>
    </div>

    <div id="slideBox">
        <div class="topLayer">
            <div class="left">
                <div class="content">
                    <h2>Sign Up</h2>
                    <form id="form-signup" method="post" onsubmit="return false;">

                    </form>
                </div>
            </div>
            <div class="right">
                <div class="content">
                    
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('plugins/bootstrap/jquery.min.js')}}"></script>
    <script src="{{asset('theme/login.js')}}"></script>

</body>

</html>