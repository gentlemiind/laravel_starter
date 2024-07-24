<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Ajouter un contact</title>
</head>

<body>

    <div class="phone">
        <form id="myForm" method="POST"  action="/addcontact">
            @csrf
            <div class="title">Ajouter un contact</div>
            <div class="input">
                <label for="fullname">Nom complet</label>
                <input type="text" name="name" placeholder="ex. Ndiaga Ndiaye">
            </div>
            <div class="input">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="ex. ndiagandiaye@gmail.com">
            </div>
            <div class="input">
                <label for="telephone">Téléphone</label>
                <input type="text" name="phone" placeholder="ex. 774661853">
            </div>
            <div class="form-footer">
                <button type="reset" >Annuler</button>
                <button type="submit">Enregistrer</button>
            </div>
        </form>
    </div>
</body>
<script>

let form = document.getElementById("myForm");
form.addEventListener("reset", function(e){
    e.preventDefault();
    window.location.href = '/';
});

</script>

</html>