

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Invoice</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-top: 0;
        }

        .logo {
            display: block;
            margin: 0 auto;
            max-width: 150px;
            width: 100%;
            height: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .success {
            color: green;
            text-align: center;
        }
        .error {
            color: red;
            text-align: center;
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .logo {
                max-width: 120px;
            }

            h1 {
                font-size: 24px;
            }

            table {
                font-size: 14px;
            }

            th,
            td {
                padding: 5px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <img src="https://readingpanel.lk/userUi/logo.jpg" alt="Logo" class="logo">
            <h1>Invoice</h1>
        </header>

        @if(isset($massage_success))
        <table>
            <tr>
                <th>Name of Paid</th>
                <td> {{$User}}</td>
            </tr>
            <tr>
                <th>Amount of Paid</th>
                <td> {{$amount}}</td>
            </tr>
            <tr>
                <th>Date of Paid</th>
                <td>{{$date}}</td>
            </tr>
        </table>
        <div class="success">
        {{$massage_success}}
        </div>
       
        @elseif(isset($massage_error))
        <div class="error">
        {{$massage_error}}
        </div>
        
        @endif
        <button onclick="window.print()">Print Invoice</button>
        <a href="/">Back To Home</a>

        
    </div>
</body>

</html>