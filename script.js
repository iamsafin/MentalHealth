function calculateScore() {
    var questions = document.querySelectorAll('.form-control');
    var totalScore = 0;

    questions.forEach(function(question) {
        totalScore += parseInt(question.value);
    });

    displayResult(totalScore);
}

function displayResult(score) {
    var resultText = document.getElementById('resultText');
    var resultDiv = document.getElementById('result');

    var scoreMessage = "Your Score is " + score + ". ";

    if (score < 20) {
        resultText.innerText = scoreMessage + "Your mental health appears to be in a good state according to WHO standards.";
    } else if (score < 40) {
        resultText.innerText = scoreMessage + "Your mental health suggests mild symptoms according to WHO standards. Consider seeking professional advice.";
    } else if (score < 60) {
        resultText.innerText = scoreMessage + "Your mental health suggests moderate symptoms according to WHO standards. Seeking professional help is recommended.";
    } else {
        resultText.innerText = scoreMessage + "Your mental health suggests severe symptoms according to WHO standards. Urgent professional intervention is advised.";
    }

    resultDiv.style.display = 'block';
}
