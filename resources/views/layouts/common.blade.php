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
                text-align: center;
                margin: 5px;
            }
            h1 {
                font-size: 20pt;
                color: #666;
                margin: 10px;
            }
            th, td {
              font-size: 14pt;
              padding: 0.25em;
            }
            .content {
                display: inline-block;
                margin: 10px;
            }
            .add-btn {
                display: inline-block;
                text-decoration: none;
                background: #87befd;
                color: #FFF;
                width: 60px;
                height: 60px;
                line-height: 60px;
                border-radius: 50%;
                text-align: center;
                overflow: hidden;
                transition: .4s;
                }
            .add-btn:hover {
                background: #668ad8;
                }
            .table-btn{
                display: inline-block;
                padding: 0.5em 1em;
                text-decoration: none;
                color: #67c5ff;
                border: double 4px #67c5ff;
                border-radius: 3px;
                transition: .4s;
              }

            .table-btn:hover {
                background: #67c5ff;
                color: white;
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
