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
        <form action="./" method="post">
            {{csrf_field()}}
            <label for="data">New Value to Send to Service : </label>
            <input style="border: 1px solid #4a5568;border-radius: 4px;outline: none;color: purple;padding: 3px" id="data" name="data">
            <br/>
            <div style="display: flex;align-items: center;justify-content: center;margin-bottom: -15px">
                <button title="Submit" style="background-color: mediumpurple;border-radius: 20px;margin-top: 10px;font-size: 13px;width: 100px;height: 30px;outline: none">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
