// Document ready function to be called on page load
$(document).ready(function() {
    setInterval(function() {cursorAnimation()}, 600);
    typeWriter("Wouter Dolk", "main-title-text", 0, 50);
    typeWriter("Student and full stack developer", "sub-title-text", 650, 20);

    $('[data-project-button]').click(toggleProjects);
    $('[data-skill-button]').click(toggleSkills);
});

// STAR FLICKER FUNCTION
for (var i = 0; i < 40; i++) {
    var h_w = Math.floor(Math.random() * 10) + 5;
    var star = '<div class="star" style="animation: twinkle '+((Math.random()*6) + 4)+'s linear '+((Math.random()*3) + 0.2)+'s infinite; top: '+
    (Math.random()*$('.space').height() - 10) +'px; left: '+
    (Math.random()*$(window).width() - 10) +'px; height: '+
    h_w +'px; width: ' + h_w + 'px"></div>';
    $('.space').append(star);
}

// BLINKING CURSOR FUNCTION
function cursorAnimation() {
    $('.typing-cursor').animate({
        opacity: 0
    }, 'fast', 'swing').animate({
        opacity: 1
    }, 'fast', 'swing');
}

// TYPE WRITER FUNCTION
function typeWriter(text, target, start_time, delay){
    var i = 0;
    var txt = text;
    var target = target;
    var delay = delay;
    setTimeout(type, start_time);

    function type() {
        if (i < txt.length) {
          document.getElementById(target).innerHTML += txt.charAt(i);
          i++;
          setTimeout(type, delay);
        }
    }
}

// TOGGLE VISABILITY FUNCTIONS
function toggleProjects(){
    var type = $(this).data("project-button");
    if(type == 'all'){
        $('[data-project]').show("slow");
    }else if(type == 'school'){
        $('[data-project=school]').show("slow");
        $('[data-project=personal]').hide("slow");
    }else if(type == 'personal'){
        $('[data-project=school]').hide("slow");
        $('[data-project=personal]').show("slow");
    }
};

function toggleSkills(){
    var type = $(this).data("skill-button");
    if(type == 'all'){
        $('[data-skill]').show("slow");
    }else if(type == 'language'){
        $('[data-skill=framework]').hide("slow");
        $('[data-skill=other]').hide("slow");
        setTimeout(function(){
            $('[data-skill=language]').show("slow");
        },500);
    }else if(type == 'framework'){
        $('[data-skill=language]').hide("slow");
        $('[data-skill=other]').hide("slow");
        setTimeout(function(){
            $('[data-skill=framework]').show("slow");
        },500);
    }else if(type == 'other'){
        $('[data-skill=language]').hide("slow");
        $('[data-skill=framework]').hide("slow");
        setTimeout(function(){
            $('[data-skill=other]').show("slow");
        },500);
    }
};