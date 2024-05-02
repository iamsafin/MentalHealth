<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Test</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Mental Health Test</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="well.php">Well being Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Mental Health Test</h1>
		<div class="">
            
        </div>
        <form id="mentalHealthForm">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="q1" class="form-label">Question 1: Do you often feel anxious or worried?</label>
                        <select id="q1" class="form-control">
                            <option value="0" selected>Not at all</option>
                            <option value="3">Sometimes</option>
                            <option value="6">Frequently</option>
                            <option value="10">Almost always</option>
                        </select>
                    </div>
                    <!-- Add more questions here -->
                    <div class="form-group">
                        <label for="q3" class="form-label">Question 3: Do you often feel hopeless or helpless?</label>
                        <select id="q3" class="form-control">
                            <option value="0" selected>Not at all</option>
                            <option value="3">Sometimes</option>
                            <option value="6">Frequently</option>
                            <option value="10">Almost always</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="q5" class="form-label">Question 5: Do you have difficulty concentrating?</label>
                        <select id="q5" class="form-control">
                            <option value="0" selected>Not at all</option>
                            <option value="3">Sometimes</option>
                            <option value="6">Frequently</option>
                            <option value="10">Almost always</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="q7" class="form-label">Question 7: Do you have frequent physical complaints?</label>
                        <select id="q7" class="form-control">
                            <option value="0" selected>Not at all</option>
                            <option value="3">Sometimes</option>
                            <option value="6">Frequently</option>
                            <option value="10">Almost always</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="q9" class="form-label">Question 9: Do you experience panic attacks?</label>
                        <select id="q9" class="form-control">
                            <option value="0" selected>Not at all</option>
                            <option value="3">Sometimes</option>
                            <option value="6">Frequently</option>
                            <option value="10">Almost always</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="q2" class="form-label">Question 2: Do you have trouble sleeping at night?</label>
                        <select id="q2" class="form-control">
                            <option value="0" selected>Not at all</option>
                            <option value="3">Sometimes</option>
                            <option value="6">Frequently</option>
                            <option value="10">Almost always</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="q4" class="form-label">Question 4: Do you frequently experience mood swings?</label>
                        <select id="q4" class="form-control">
                            <option value="0" selected>Not at all</option>
                            <option value="3">Sometimes</option>
                            <option value="6">Frequently</option>
                            <option value="10">Almost always</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="q6" class="form-label">Question 6: Do you often feel tired or fatigued?</label>
                        <select id="q6" class="form-control">
                            <option value="0" selected>Not at all</option>
                            <option value="3">Sometimes</option>
                            <option value="6">Frequently</option>
                            <option value="10">Almost always</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="q8" class="form-label">Question 8: Do you feel nervous or on edge often?</label>
                        <select id="q8" class="form-control">
                            <option value="0" selected>Not at all</option>
                            <option value="3">Sometimes</option>
                            <option value="6">Frequently</option>
                            <option value="10">Almost always</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="q10" class="form-label">Question 10: Do you often feel irritable or angry?</label>
                        <select id="q10" class="form-control">
                            <option value="0" selected>Not at all</option>
                            <option value="3">Sometimes</option>
                            <option value="6">Frequently</option>
                            <option value="10">Almost always</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-block" onclick="calculateScore()">Submit</button>
        </form>

        <div id="result" class="mt-5" style="display:none;">
            <h2>Your Result:</h2>
            <p id="resultText" class="lead"></p>
        </div>
    </div>
	

    <!-- Add Bootstrap JavaScript and its dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
