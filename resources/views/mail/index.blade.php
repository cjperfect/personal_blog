<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .container {
            width: 90%;
            padding: 15px;
        }

        .title {
            font-size: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #999;
        }

        .content {
            line-height: 2;
            font-size: 14px;
            margin: 15px 0;
            color: #666;
        }

        .contact {
            font-size: 12px;
            text-align: right;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="title">{{$subject}}</h2>
    <div class="content">
        {{$content}}
    </div>
    <p class="contact">联系方式: {{$contact}}</p>
</div>
</body>
</html>
