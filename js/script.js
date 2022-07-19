/* Navigation Menu Button function */
function myFunction() {
  var x = document.getElementById("dropdown1");
  var y = document.getElementById("main");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.position = "inherit";
    y.style.top = "0";
  } else {
    x.style.display = "block";
    y.style.position = "relative";
    y.style.top = "93px";
  }
}
function myFunction2() {
  var x = document.getElementById("dropdown2");
  var y = document.getElementById("main");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.position = "inherit";
    y.style.top = "0";
  } else {
    x.style.display = "block";
    y.style.position = "relative";
    y.style.top = "93px";
  }
}
function myFunction3() {
  var x = document.getElementById("dropdown3");
  var y = document.getElementById("main");
  var w = document.getElementById("menu-title-1");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.position = "inherit";
    y.style.top = "0";
    w.style.background ="transparent";
    w.innerHTML = "SERVICES <i class='arrow down'></i>";
  } else {
    x.style.display = "block";
    y.style.position = "relative";
    y.style.top = "93px";
    w.style.background = "white"
    w.innerHTML = "SERVICES <i class='arrow up'></i></p>";
  }
}
function myFunction4() {
  var x = document.getElementById("dropdown4");
  var y = document.getElementById("main");
  var w = document.getElementById("menu-title-2");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.position = "inherit";
    y.style.top = "0";
    w.style.background = "transparent";
    w.innerHTML = "GET INVOLVED <i class='arrow down'></i>";
  } else {
    x.style.display = "block";
    y.style.position = "relative";
    y.style.top = "93px";
    w.style.background = "white"
    w.innerHTML = "GET INVOLVED <i class='arrow up'></i></p>";
  }
}


/* Carousel */
/* https://codepen.io/Ljamic/pen/GzQRER */
 function myFunction5() {

    let slider = document.querySelector('#slider');
    let move = document.querySelector('#move');
    let moveLi = Array.from(document.querySelectorAll('#slider #move li'));
    let forword = document.querySelector('#slider #forword');
    let back = document.querySelector('#slider #back');
    let counter = 1;
    let time = 8000;
    let line = document.querySelector('#slider #line');
    let dots = document.querySelector('#slider #dots');
    let dot;

    for (i = 0; i < moveLi.length; i++) {

        dot = document.createElement('li');
        dots.appendChild(dot);
        dot.value = i;
    }

    dot = dots.getElementsByTagName('li');

    line.style.animation = 'line ' + (time / 1000) + 's linear infinite';
    dot[0].classList.add('active');

    function moveUP() {

        if (counter == moveLi.length) {

            moveLi[0].style.marginLeft = '0%';
            counter = 1;

        } else if (counter >= 1) {

            moveLi[0].style.marginLeft = '-' + counter * 100 + '%';
            counter++;
        } 

        if (counter == 1) {

            dot[moveLi.length - 1].classList.remove('active');
            dot[0].classList.add('active');

        } else if (counter > 1) {

            dot[counter - 2].classList.remove('active');
            dot[counter - 1].classList.add('active');

        }

    }

    function moveDOWN() {

        if (counter == 1) {

            moveLi[0].style.marginLeft = '-' + (moveLi.length - 1) * 100 + '%';
            counter = moveLi.length;
            dot[0].classList.remove('active');
            dot[moveLi.length - 1].classList.add('active');

        } else if (counter <= moveLi.length) {

            counter = counter - 2;
            moveLi[0].style.marginLeft = '-' + counter * 100 + '%';   
            counter++;

            dot[counter].classList.remove('active');
            dot[counter - 1].classList.add('active');

        }  

    }

    for (i = 0; i < dot.length; i++) {

        dot[i].addEventListener('click', function(e) {

            dot[counter - 1].classList.remove('active');
            counter = e.target.value + 1;
            dot[e.target.value].classList.add('active');
            moveLi[0].style.marginLeft = '-' + (counter - 1) * 100 + '%';

        });

    }

    forword.onclick = moveUP;
    back.onclick = moveDOWN;

    let autoPlay = setInterval(moveUP, time);

    slider.onmouseover = function() {

        autoPlay = clearInterval(autoPlay);
        line.style.animation = '';

    }

    slider.onmouseout = function() {

        autoPlay = setInterval(moveUP, time);
        line.style.animation = 'line ' + (time / 1000) + 's linear infinite';

    }
  
}




/* Carousel 2 */
/* https://codepen.io/Ljamic/pen/GzQRER */
  function myFunction6() {

  let sliderdos = document.querySelector('#slider2');
  let movedos = document.querySelector('#move2');
  let movedosLi = Array.from(document.querySelectorAll('#slider2 #move2 li'));
  let forworddos = document.querySelector('#slider2 #forword2');
  let backdos = document.querySelector('#slider2 #back2');
  let counterdos = 1;
  let time = 5000;
  let linedos = document.querySelector('#slider2 #line2');
  let dotsdos = document.querySelector('#slider2 #dots2');
  let dotdos;

  for (k = 0; k < movedosLi.length; k++) {

    dotdos = document.createElement('li');
    dotsdos.appendChild(dotdos);
    dotdos.value = k;
  }

  dotdos = dotsdos.getElementsByTagName('li');

  linedos.style.animation = 'line ' + (time / 1000) + 's linear infinite';
  dotdos[0].classList.add('active');

  function movedosUP() {

    if (counterdos == movedosLi.length) {

      movedosLi[0].style.marginLeft = '0%';
      counterdos = 1;

    } else if (counterdos >= 1) {

      movedosLi[0].style.marginLeft = '-' + counterdos * 100 + '%';
      counterdos++;
    }

    if (counterdos == 1) {

      dotdos[movedosLi.length - 1].classList.remove('active');
      dotdos[0].classList.add('active');

    } else if (counterdos > 1) {

      dotdos[counterdos - 2].classList.remove('active');
      dotdos[counterdos - 1].classList.add('active');

    }

  }

  function movedosDOWN() {

    if (counterdos == 1) {

      movedosLi[0].style.marginLeft = '-' + (movedosLi.length - 1) * 100 + '%';
      counterdos = movedosLi.length;
      dotdos[0].classList.remove('active');
      dotdos[movedosLi.length - 1].classList.add('active');

    } else if (counterdos <= movedosLi.length) {

      counterdos = counterdos - 2;
      movedosLi[0].style.marginLeft = '-' + counterdos * 100 + '%';
      counterdos++;

      dotdos[counterdos].classList.remove('active');
      dotdos[counterdos - 1].classList.add('active');

    }

  }

  for (k = 0; k < dotdos.length; k++) {

    dotdos[k].addEventListener('click', function (e) {

      dotdos[counterdos - 1].classList.remove('active');
      counterdos = e.target.value + 1;
      dotdos[e.target.value].classList.add('active');
      movedosLi[0].style.marginLeft = '-' + (counterdos - 1) * 100 + '%';

    });

  }

  forworddos.onclick = movedosUP;
  backdos.onclick = movedosDOWN;

  let autoPlay = setInterval(movedosUP, time);

  sliderdos.onmouseover = function () {

    autoPlay = clearInterval(autoPlay);
    linedos.style.animation = '';

  }

  sliderdos.onmouseout = function () {

    autoPlay = setInterval(movedosUP, time);
    linedos.style.animation = 'line ' + (time / 1000) + 's linear infinite';

  }

}

window.onload = function () {
  myFunction5();
  myFunction6();
}