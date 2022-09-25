<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        // 略
        <title>Laravel</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    testAPI
                </div>
                <div id="app">
                    <api-retturn></api-retturn>  //Vueのtemplate呼び出し
                </div>
            </div>
        </div>
    </body>
</html>