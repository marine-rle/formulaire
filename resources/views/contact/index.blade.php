<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>

    table,th,td {
        padding: 10px;
        border: 2px solid #219ebc;
        border-collapse: collapse;
    }

    table{
        width: 100%;
    }

    .row{
        margin: 0 auto;
    }

    .bg-white{
        width: 50%;
        padding:30px;
    }

    input,textarea{
        border: 2px solid #219ebc;
    }

</style>

<body>


    <!-- Page title -->
    <title>Formulaire</title>

    <div class="row">

        <!-- Contact form -->
        <div class="bg-white">
            <form action="{{ route('contact.store') }}" method="post">

                @csrf

                <div>
                    <label for="name">{{ __('Nom et prénom')}}</label><br>
                    <input type="text" name="name" id="name" required minlength="2" maxlength="50" style="width: 100%;"placeholder="Davis Sophie">
                </div><br>

                <div>
                    <label for="email">{{ __('Adresse email')}}</label><br>
                    <input type="email" name="email" id="email" required minlength="6" maxlength="60"  style="width: 100%;" placeholder="sophie@example.com">
                </div><br>

                <div>
                    <label for="message">{{ __('Message')}}</label><br>
                    <textarea name="message" id="message" required minlength="2" maxlength="200" style="height: 150px; width: 100%;" placeholder="Ecrivez votre message..."></textarea>
                </div><br>

                <div style="display: flex; justify-content: flex-end;">
                    <input type="submit" value="{{ __('Envoyer')}}" class="btn btn-info" >
                </div>

            </form>
        </div>

        <!-- Contact table -->
        <div class="bg-white">
            <table>
                <tr>
                    <th scope="col">Nom et prénom</th>
                    <th scope="col">Adresse email</th>
                    <th scope="col">Message</th>
                </tr>


                @foreach ($contact as $contacts )
                    <tr>
                        <td>{{$contacts->name}}</td>
                        <td>{{$contacts->email}}</td>
                        <td class="mess">{{$contacts->message}}</td>
                    </tr>
                @endforeach


            </table>
        </div>
    </div>


</body>
