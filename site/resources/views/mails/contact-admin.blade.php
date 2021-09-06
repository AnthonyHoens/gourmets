<!doctype html>
<html lang=fr>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <main>
            <h1>
                {{ $contact['first_name'] . $contact['name'] }}: {{ $contact['subject'] }}
            </h1>
            <h2>
                {{ $contact['email'] }}
            </h2>
            <p>
                {{ $contact['message'] }}
            </p>
        </main>
    </body>
</html>
