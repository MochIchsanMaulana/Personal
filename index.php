<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ichsan Maulana</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/public/css/custom.css">
        <link rel="stylesheet" type="text/css" href="/public/css/jquery.fullpage.min.css">
        <!-- Styles -->    
    </head>
    <body>
        <div id="fullpage">
            <div class="section " id="section0">
                <div class="flex-center position-ref full-height">
                    <div class="content">
                        <div class="title m-b-md f-col-white">
                            Nice To Meet You!
                        </div>
                        <div class="title-sub m-b-md f-col-white">                  
                            please come back when i'ts ready
                        </div>
                    </div>
                </div>
            </div>
            <div class="section " id="section1">
                <div class="flex-center position-ref full-height">
                    <div class="content">
                        <div class="f-col-white">
                            <p>Made with <i class="fa fa-heart f-col-red"></i> by Ichsan Maulana</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/public/js/jquery.fullpage.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
              sectionsColor: ['#000000','#000000'],
              anchors: ['Intro', 'Credit'],
              menu: '#menu',
            });
        });
    </script>

</html>
