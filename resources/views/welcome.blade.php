<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Babacar Fall">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="phone">
        <div class="searchbar">
            <img src="{{asset('img/hamburger.png')}}" alt="">
            <input type="text" placeholder="search for people">
            <span>bf</span>
        </div>
        
       
        @if (count($contacts) > 0)
            @foreach ($contacts as $contact)

                <div class="contact">

                    <div class="avatar">
                        A
                    </div>
                    
                    <div class="contact-infos">
                        <div class="name">
                           {{$contact->fullname}}
                        </div>
                        <div class="email">
                            {{$contact->email }} - {{$contact->phone}}
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>La liste est vide!</p>
        @endif

        <a href="/addcontact">
          <div class="floating-btn">+
        </div>  
        </a>
        
    </div>

</body>

</html>