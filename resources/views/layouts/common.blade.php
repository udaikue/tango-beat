<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Tango Beat</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                font-size: 14pt;
                color: #999;
                margin: 5px;;
            }
            h1 {
                font-size: 20pt;
                color: #666;
                margin: 10px;
            }
            th {
              font-size: 14pt;
            }
            .content {
                margin: 10px;
            }
            .footer {
                text-align: left;
                font-size: 10pt;
                margin: 10px;
                border-bottom: solid 1px #ccc;
                color: #ccc;
            }
        </style>
    </head>
    <body>
    <h1>
      @yield('title')
    </h1>
    <div class='content'>
      @yield('content')
    </div>
    <div class='footer'>
      copyright 2022 TangoBeat
    </div>
    </body>
</html>
