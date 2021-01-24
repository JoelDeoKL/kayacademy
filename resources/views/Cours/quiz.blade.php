@extends('layout')

@section('content')


<div class="container" style="margin-top:200px; margin-bottom:200px;">
    <div class="col-lg-8 m-auto text-center">
        @foreach($chapitres as $chapitre)
            <h4>Bienvenue dans ce Quiz</h4>
            <p>Nous organisons ce Quiz pour le chapitre <strong>{{$chapitre->titre_chapitre}}</strong> afin de nous
                assurer si vous avez belle et bien compris cette partie avant de passer de la suite
            </p>

            <h4>Comment proceder</h4>

            <p>Voila comment se deroule le Quiz, nous vous donnons une séries de 5 questions avec
                des assertions dont vous ne pouvez qu'un choisir une et une fois que vous finissez
                de repondre aux questions cliquez sur le bouton <strong>Envoyer</strong> automoatiquement
                on vous renvoies les resultats qui seront à la fin calculé pour votre pourcentage à la
                fin de la formation donc ne negligé pas ce Quiz.<br>Si vous ne vous sentez pas pret,
                vous pouvez revenir en arrière pour etre bien sur de reussir à ce Quiz généralement facile
                à aborder. Notez que chaque Quiz ne dure que 10 minutes après etre lancer faute de quoi le
                Quiz sera interompu et le resultat seront envoyés comme tel.
            </p>
            <a href="#" class="btn btn-primary">Commencer le Quiz</a>
            <hr>
            <h3>QUIZ Chapitre {{$chapitre->titre_chapitre}}</h3>
        @endforeach

        @foreach($quiz as $quiz)
            <ul>
                <li>
                    {{$quiz->question}}
                </li>
                <div>
                    <input type="radio" name="question_1" id="1">
                    <label for="1">{{$quiz->rep1}}</label>
                </div>
                <div>
                    <input type="radio" name="question_1" id="1">
                    <label for="1">{{$quiz->rep2}}</label>
                </div>
                <div>
                    <input type="radio" name="question_1" id="1">
                    <label for="1">{{$quiz->rep3}}</label>
                </div>
                <div>
                    <input type="radio" name="question_1" id="1">
                    <label for="1">{{$quiz->rep4}}</label>
                </div>
                <div>
                    <input type="radio" name="question_1" id="1">
                    <label for="1">{{$quiz->rep5}}</label>
                </div>
            </ul>
        @endforeach
    </div>
    <div class="col-lg-8 m-auto text-center">
        <a href="#" class="btn btn-primary">Envoyer les reponses</a>
    </div>
</div>


@endsection