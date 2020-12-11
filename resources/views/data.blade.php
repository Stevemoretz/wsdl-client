<html>
<head>
    <style>
        *{
            color: #e6e6e6;
        }
        body{
            background-color: #d7cff9;
        }
    </style>
</head>
<body style="display: flex;align-items: center;justify-content: center">
<div style="background-color: #296860;padding: 10px;border-radius: 2px 10px 10px 10px ;border: 1px solid purple;box-shadow: -7px 10px 5px 0px rgba(0,0,0,0.75)">
    <div>
        @if($data)
            <h3 style="font-weight: bold">LAST VALUE : {{$data}}</h3>
            <div style="width: 100%;height: 1px;background-color: #878787;margin-bottom: 10px"></div>
        @endif
    </div>
</div>
</body>
</html>
