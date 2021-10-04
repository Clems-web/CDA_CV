//Animation

function titleAnim() {

    setTimeout((function () {$('h1').css('color', 'red')}), 1000);
    setTimeout((function () {$('h1').css('color', 'orange')}), 2000);
    setTimeout((function () {$('h1').css('color', 'yellow')}), 3000);
    setTimeout((function () {$('h1').css('color', 'green')}), 4000);

    setTimeout((function () {$('h2').css('font-size', '1rem')}), 5000);
    setTimeout((function () {$('h2').css('font-size', '2rem')}), 6000);
    setTimeout((function () {$('h2').css('font-size', '3rem')}), 7000);
    setTimeout((function () {$('h2').css('font-size', '4rem')}), 7000);

    setTimeout((function () {$('h3').css('font-size', '1rem')}), 8000);
    setTimeout((function () {$('h3').css('font-size', '2rem')}), 9000);
    setTimeout((function () {$('h3').css('font-size', '3rem')}), 10000);

}
titleAnim();

// Section show and hide

$('#first-arrow').click(function () {
    $(this).toggleClass("fa-sort-up");
    $('#ddDegree').toggleClass("visible");
})

$('#second-arrow').click(function () {
    $(this).toggleClass("fa-sort-up");
    $('#ddHobbies').toggleClass("visible");
})

$('#third-arrow').click(function () {
    $(this).toggleClass("fa-sort-up");
    $('#ddExperience').toggleClass("visible");
})




let labels = $('label');

for (let label of labels) {
    label = $(label);
    let tabLetter = label.innerHTML.split("");
    label.innerHTML = "";

    for (let x = 0; x < tabLetter.length; x++) {
        let span = document.createElement('span');
        span.innerHTML = tabLetter[x];
        label.appendChild(span);
    }
    label.addEventListener('mouseover',
        function () {

            let letter = document.getElementsByTagName('span');
            let interval = (x) => {
                setTimeout(() => {
                    letter[x].style.color = 'red';
                    letter[x].style.fontStyle = 'italic';
                    x++;
                    if(x < letter.length) {
                        interval(x);}
                }, 1000);
            }
            interval(0);
        }
    )
}

let image = document.getElementById('imgKermit1');
let flag = true;


image.addEventListener('mouseover', function () {
    if (flag) {
        let interval = (x) => {
            setTimeout(() => {
                image.style.transform = "rotateY(" + x + "deg)";
                x++;
                if(x < 180) {
                    interval(x);
                }
                else {
                    flag = false;
                }
                if (x === 90) {
                    image.setAttribute('src', 'https://media.nouvelobs.com/ext/uri/sreferentiel.nouvelobs.com/file/rue89/5f41cf3fb6d4f6598fae9c1903fb5bbb.jpg');
                }
            }, 10);
        }
        interval(0);
    }

    else {
        let interval = (x) => {
            setTimeout(() => {
                image.style.transform = "rotateY(" + x + "deg)";
                x--;
                if(x > 0) {
                    interval(x);
                }
                else {
                    flag = true;
                }
                if (x === 90) {
                    image.setAttribute('src', 'data:image/jpeg;base64,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');
                }
            }, 10);
        }
        interval(180);
    }

});

let divList = document.getElementById("list");

const xhr = new XMLHttpRequest();
xhr.open("GET", "./ul.JSON");

// Exploit JSON and display them in HTML format
xhr.onload = function(){
    const result = JSON.parse(xhr.responseText);

    for (let element of result.ul) {

        let createUl = document.createElement('ul');
        divList.appendChild(createUl);

        for (let li of element.li) {
            let createLi = document.createElement('li');
            createLi.innerHTML = li;
            createUl.appendChild(createLi);
        }
    }
}

// Send request
xhr.send();





