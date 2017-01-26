<div class="row home-block">
    <div class="col-xs-12 col-sm-6 col-md-4 block-task" id="home-profil">
        <div class="classWithPad">
            <div><h2>Profil</h2></div>
            <div>
                <i class="fa fa-user" aria-hidden="true"></i>
                <a href="/userinfo/" class="home-effect">Voir</a>
            </div>

        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 block-task" id="home-phonebook">
        <div class="classWithPad">
            <div><h2>Annuaire</h2></div>
            <div><i class="fa fa-address-book" aria-hidden="true"></i>
                <a href="/phonebook/" class="home-effect">Voir</a></div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 block-task" id="home-course">
        <div class="classWithPad">
            <div><h2>Cours</h2></div>
            <div><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <a href="/module/" class="home-effect">Voir</a></div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 block-task" id="home-quizz">
        <div class="classWithPad">
            <div><h2>Quizz</h2></div>
            <div><i class="fa fa-question-circle" aria-hidden="true"></i>
                <a href="/quizz/" class="home-effect">Voir</a></div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 block-task" id="home-create-class">
        <div class="classWithPad">
            <div><h2>Créer une classe</h2></div>
            <div><i class="fa fa-pencil" aria-hidden="true"></i></i>
                <a href="/classroom/" class="home-effect">Voir</a></div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 block-task" id="home-class">
        <div class="classWithPad">
            <div><h2>Salle de classe</h2></div>
            <div><i class="fa fa-home" aria-hidden="true"></i></i>
                <a href="/classroom/1/enter/" class="home-effect">Voir</a></div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    var number = $('.block-task').length ;
    console.log(number);
    if (number % 2 === 0) {
    }
    else {
        if(number < 4){
            $( ".block-task" ).removeClass( "col-sm-6", "col-md-4" ).addClass('col-md-6');
            $( ".block-task" ).last().removeClass( "col-sm-6 col-md-4" ).addClass('col-md-12');
        }
        $( ".block-task" ).last().removeClass( "col-sm-6 col-md-4" ).addClass('col-sm-12 col-md-6');
        $( ".block-task" ).eq(-2).removeClass( "col-md-4" ).addClass('col-md-6');
    }
</script>