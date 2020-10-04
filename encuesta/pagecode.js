function submitQuiz() {
    console.log('submitted');
    var element = document.getElementById("content");
    element.classList.add("hide");

    var element = document.getElementById("thanks");
    element.classList.add("show");

    var element = document.getElementById("btn-link");
    element.classList.add("show");
    
    window.scrollTo(0, 0);

    // get each answer score
    function answerScore (qName) {
        var radiosNo = document.getElementsByName(qName);

        for (var i = 0, length = radiosNo.length; i < length; i++) {
               if (radiosNo[i].checked) {
        // do something with radiosNo
                var answerValue = Number(radiosNo[i].value);
            }
        }
        // change NaNs to zero
        if (isNaN(answerValue)) {
            answerValue = 0;
        }
        return answerValue;
    }

// calc score with answerScore function
    var calcScore = (answerScore('q1') + answerScore('q2') + answerScore('q3') + answerScore('q4'));
    console.log("CalcScore: " + calcScore); // it works!

// function to return correct answer string
    function correctAnswer (correctStringNo, qNumber) {
        console.log("qNumber: " + qNumber);  // logs 1,2,3,4 after called below
        return ("The correct answer for question #" + qNumber + ": &nbsp;<strong>" +
            (document.getElementById(correctStringNo).innerHTML) + "</strong>");
        }

// print correct answers only if wrong (calls correctAnswer function)
    if (answerScore('q1') === 0) {
        document.getElementById('correctAnswer1').innerHTML = 'Requiere un Manifiesto de Impacto Ambiental ';
        document.innerHTML = correctAnswer('correctString1', 1);
    }
    if (answerScore('q2') === 0) {
        document.getElementById('correctAnswer2').innerHTML = 'Requiere presentar las condicionantes ante la autoridad de impacto ambiental';
        document.innerHTML = correctAnswer('correctString2', 2);
    }
    if (answerScore('q3') === 0) {
        document.getElementById('correctAnswer3').innerHTML = 'Requiere factibilidad de uso de suelo';
        document.innerHTML = correctAnswer ('correctString3', 3);
    }
    if (answerScore('q4') === 0) {
        document.getElementById('correctAnswer4').innerHTML = 'Requiere dictamen de uso de suelo';
        document.innerHTML = correctAnswer('correctString4', 4);
    }
    if (answerScore('q5') == 0) {
        document.getElementById('correctAnswer5').innerHTML = 'Requiere contabilizar sus residuos y realizar el registro como Generador de Residuos de Manejo Especial';
        document.innerHTML = correctAnswer('correctString5', 5);
    }
    if (answerScore('q6') === 0) {
        document.getElementById('correctAnswer6').innerHTML = 'Requiere registro como generador de residuos de Manejo especial';
        document.innerHTML = correctAnswer('correctString6', 6);
    }
    if (answerScore('q7') === 0) {
        document.getElementById('correctAnswer7').innerHTML = ' Requiere presentar anualmente su reporte de Residuos de Manejo Especial';
        document.innerHTML = correctAnswer('correctString7', 7);
    }
    if (answerScore('q8') === 0) {
        document.getElementById('correctAnswer8').innerHTML = ' Requiere presentar el cumplimiento a las medidas dictadas en su registro como Generador de Residuos de Manejo Especial';
        document.innerHTML = correctAnswer('correctString8', 8);
    }
    if (answerScore('q9') === 0) {
        document.getElementById('correctAnswer9').innerHTML = 'Requiere realizar un Plan de Manejo';
        document.innerHTML = correctAnswer('correctString9', 9);
    }
    if (answerScore('q10') === 0) {
        document.getElementById('correctAnswer10').innerHTML = ' Requiere realizar su reporte anual de Residuos de Manejo Especial ';
        document.innerHTML = correctAnswer('correctString10', 10);
    }
    if (answerScore('q11') === 0) {
        document.getElementById('correctAnswer11').innerHTML = ' Relleno sanitario, por una empresa autorizada, reciclaje u otro tipo de disposición  ';
        document.innerHTML = correctAnswer('correctString11', 11);
    }
    if (answerScore('q12') === 0) {
        document.getElementById('correctAnswer12').innerHTML = ' Requiere contratar a un proveedor autorizado ante la Secretaria ';
        document.innerHTML = correctAnswer('correctString12', 12);
    }
    if (answerScore('q13') === 0) {
        document.getElementById('correctAnswer13').innerHTML = ' Requiere tramitar y obtener su licencia de emisiones  a la atmósfera ';
        document.innerHTML = correctAnswer('correctString13', 13);
    }
    if (answerScore('q14') === 0) {
        document.getElementById('correctAnswer14').innerHTML = ' Requiere tramitar la licencia de emisiones a la atmósfera ';
        document.innerHTML = correctAnswer('correctString14', 14);
    }
    if (answerScore('q15') === 0) {
        document.getElementById('correctAnswer15').innerHTML = ' Se requiere implementar un sistema de control para emisiones a la atmósfera ';
        document.innerHTML = correctAnswer('correctString15', 15);
    }
    if (answerScore('q16') === 0) {
        document.getElementById('correctAnswer16').innerHTML = ' Se requiere realizar la bitácora de operación y mantenimiento de los equipos utilizados para el control de emisiones a la atmósfera ';
        document.innerHTML = correctAnswer('correctString16', 16);
    }
    if (answerScore('q17') === 0) {
        document.getElementById('correctAnswer17').innerHTML = ' Se requiere realizar la bitácora de operación y mantenimiento de los equipos utilizados para el control de emisiones a la atmósfera  ';
        document.innerHTML = correctAnswer('correctString17', 17);
    }
    if (answerScore('q18') === 0) {
        document.getElementById('correctAnswer18').innerHTML = ' Requiere realizar análisis de acuerdo a la normativa aplicable  ';
        document.innerHTML = correctAnswer('correctString18', 18);
    }
    if (answerScore('q19') === 0) {
        document.getElementById('correctAnswer19').innerHTML = ' Pase a la siguiente pregunta ';
        document.innerHTML = correctAnswer('correctString19', 19);
    }
    if (answerScore('q21') === 0) {
        document.getElementById('correctAnswer21').innerHTML = ' Requiere tramitar la licencia de descarga para sus aguas residuales de proceso o título de concesión para permiso de descarga  ';
        document.innerHTML = correctAnswer('correctString21', 21);
    }
    if (answerScore('q22') === 0) {
        document.getElementById('correctAnswer22').innerHTML = ' Requiere dar tratamiento previo a la descarga de aguas residuales de proceso  ';
        document.innerHTML = correctAnswer('correctString22', 22);
    }
    if (answerScore('q23') === 0) {
        document.getElementById('correctAnswer23').innerHTML = ' Requiere realizar su bitácora de operación y mantenimiento del equipo para el tratamiento y control de sus aguas residuales de proceso';
        document.innerHTML = correctAnswer('correctString23', 23);
    }
    if (answerScore('q24') === 0) {
        document.getElementById('correctAnswer24').innerHTML = ' Requiere realizar análisis de sus aguas residuales de proceso, previo a sus descarga  ';
        document.innerHTML = correctAnswer('correctString24', 24);
    }
    if (answerScore('q25') === 0) {
        document.getElementById('correctAnswer25').innerHTML = ' Requiere instalar un acceso fácil y permanente al punto de descarga de sus aguas residuales  ';
        document.innerHTML = correctAnswer('correctString25', 25);
    }
    if (answerScore('q26') === 0) {
        document.getElementById('correctAnswer26').innerHTML = ' Este es un trámite anual, y requiere encontrarse vigente  ';
        document.innerHTML = correctAnswer('correctString26', 26);
    }
    if (answerScore('q27') === 0) {
        document.getElementById('correctAnswer27').innerHTML = ' Requiere realizar y presentar ante la dirección de bomberos su plan de atención de emergencia por incendio';
        document.innerHTML = correctAnswer('correctString27', 27);
    }
    if (answerScore('q28') === 0) {
        document.getElementById('correctAnswer28').innerHTML = ' Requiere conformarla ';
        document.innerHTML = correctAnswer('correctString28', 28);
    }
    if (answerScore('q29') === 0) {
        document.getElementById('correctAnswer29').innerHTML = ' Requiere contar con capacitación anual ';
        document.innerHTML = correctAnswer('correctString29', 29);
    }
    if (answerScore('q30') === 0) {
        document.getElementById('correctAnswer30').innerHTML = ' Requiere contar con capacitación anual ';
        document.innerHTML = correctAnswer('correctString30', 30);
    }
    if (answerScore('q31') === 0) {
        document.getElementById('correctAnswer31').innerHTML = ' Requiere contar con capacitación anual ';
        document.innerHTML = correctAnswer('correctString31', 31);
    }
    if (answerScore('q32') === 0) {
        document.getElementById('correctAnswer32').innerHTML = ' Requiere contar con capacitación anual ';
        document.innerHTML = correctAnswer('correctString32', 32);
    }
    if (answerScore('q33') === 0) {
        document.getElementById('correctAnswer33').innerHTML = ' Requiere contar con por lo menos 2 simulacros anuales dependiendo el giro, Escuelas, Gaseras, plantas de tratamiento, giro de mayor riesgo:  3 ';
        document.innerHTML = correctAnswer('correctString33', 33);
    }
    if (answerScore('q34') === 0) {
        document.getElementById('correctAnswer34').innerHTML = ' Estudio de riesgo ante la secretaria ';
        document.innerHTML = correctAnswer('correctString34', 34);
    }
    if (answerScore('q35') === 0) {
        document.getElementById('correctAnswer35').innerHTML = ' Presentar el estudio de riesgo ante la secretaria ';
        document.innerHTML = correctAnswer('correctString35', 35);
    }
    if (answerScore('q36') === 0) {
        document.getElementById('correctAnswer36').innerHTML = ' Cumplir con condicionantes ';
        document.innerHTML = correctAnswer('correctString36', 36);
    }
    if (answerScore('q37') === 0) {
        document.getElementById('correctAnswer37').innerHTML = ' Deberán aprobarse los programas  ';
        document.innerHTML = correctAnswer('correctString37', 6);
    }
    if (answerScore('q38') === 0) {
        document.getElementById('correctAnswer38').innerHTML = ' Deberá contar con sistemas de seguridad y condiciones de operación en caso de contingencia ambiental o emergencia ecológica  ';
        document.innerHTML = correctAnswer('correctString38', 38);
    }

// calculate "possible score" integer
    var questionCountArray = document.getElementsByClassName('question');

    var questionCounter = 0;
    for (var i = 0, length = questionCountArray.length; i < length; i++) {
        questionCounter++;
    }

}


