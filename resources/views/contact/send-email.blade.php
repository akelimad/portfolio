<style>
    table tr td {
        padding: 10px;
    }
</style>
<h1>New contact form submission</h1>
<table width="100%" border="1" style="border-collapse: collapse;">
    <tbody>
        <tr>
            <td>Name</td>
            <td>{{ $form['name'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $form['email'] }}</td>
        </tr>
        <tr>
            <td>Subject</td>
            <td>{{ $form['subject'] }}</td>
        </tr>
        <tr>
            <td>Message</td>
            <td>{!! nl2br($form['message']) !!}</td>
        </tr>
    </tbody>
</table>