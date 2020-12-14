<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New contact form submission</title>

    <style>
        table tr td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>New contact form submission</h1>
    <table width="100%" border="1" cellspacing="10" style="border-collapse: collapse;">
        <tbody>
            <tr>
                <td>Name</td>
                <td>{{ $form['name'] }}</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>{{ $form['email'] }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $form['subject'] }}</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>{!! nl2br($form['message']) !!}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>