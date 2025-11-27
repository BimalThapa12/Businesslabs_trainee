<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Subjects & Marks</title>
    <style>
        :root {
            --card-bg: #ffffff;
            --page-bg: #f3f6fb;
            --accent: #4f46e5;
            --muted: #6b7280;
            --radius: 12px;
            --shadow: 0 6px 18px rgba(15, 23, 42, 0.06);
            font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--page-bg);
            padding: 24px;
        }

        .wrap {
            width: 100%;
            max-width: 920px;
        }

        h1 {
            margin: 0 0 18px 0;
            font-size: 20px;
            color: #0f172a;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3);
            gap: 16px;
        }

        /* Card */
        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 16px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            border: 1px solid rgba(15, 23, 42, 0.04);
        }

        .card .title {
            font-weight: 600;
            color: #0f172a;
            font-size: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        label {
            font-size: 13px;
            color: var(--muted);
        }

        input[type="text"],
        input[type="number"],
        select {
            height: 40px;
            padding: 8px 10px;
            border-radius: 8px;
            border: 1px solid rgba(15, 23, 42, 0.08);
            font-size: 14px;
            outline: none;
            transition: box-shadow .12s, border-color .12s;
            background: white;
        }

        input:focus {
            border-color: var(--accent);
            box-shadow: 0 6px 14px rgba(79, 70, 229, 0.08);
        }

        .row {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .row .col {
            flex: 1;
        }

        .note {
            font-size: 12px;
            color: var(--muted);
        }

        /* submit area */
        .actions {
            margin-top: 14px;
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        button {
            padding: 10px 14px;
            border-radius: 10px;
            border: 0;
            background: var(--accent);
            color: white;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 6px 14px rgba(79, 70, 229, 0.12);
        }


        button:hover {
            background: #3e3abf;
            /* Darker shade on hover */
            transform: translateY(-3px);
            /* Slight lift */
            box-shadow: 0 10px 18px rgba(79, 70, 229, 0.20);

            /* Smoother transitions */
            transition:
                background 0.35s ease-in-out,
                box-shadow 0.35s ease-in-out,
                transform 0.35s ease-in-out;
        }


        button.secondary {
            background: transparent;
            color: var(--muted);
            box-shadow: none;
            border: 1px solid rgba(15, 23, 42, 0.06);
        }

        /* responsive */
        @media (max-width:840px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width:560px) {
            .cards {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        .error {
            color: #dc2626;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <h1>Enter Subjects & Marks</h1>

        <form id="marksForm" method="post">
            <div class="cards">
                <!-- Subject 1 -->
                <div class="card">
                    <div class="field">
                        <label for="subject1">Student name</label>
                        <input id="subject1" name="studentName" type="text" required />
                    </div>
                    <div class="title">Subject 1</div>





                    <div class="field">
                        <label for="subject1">Subject name</label>
                        <input id="subject1" name="subject1" pattern="[A-Za-z ]+" type="text"
                            placeholder="e.g. Mathematics" required />
                    </div>

                    <div class="field">
                        <label for="marks1">Marks (0 - 100)</label>
                        <input id="marks1" name="marks1" type="number" min="0" max="100" placeholder="e.g. 86"
                            required />
                        <div id="err1" class="error" style="display:none;"></div>
                    </div>

                    <div class="title">Subject 2</div>

                    <div class="field">
                        <label for="subject2">Subject name</label>
                        <input id="subject2" name="subject2" type="text" pattern="[A-Za-z ]+" placeholder="e.g. Physics"
                            required />
                    </div>

                    <div class="field">
                        <label for="marks2">Marks (0 - 100)</label>
                        <input id="marks2" name="marks2" type="number" min="0" max="100" placeholder="e.g. 74"
                            required />
                        <div id="err2" class="error" style="display:none;"></div>
                    </div>

                    <div class="title">Subject 3</div>

                    <div class="field">
                        <label for="subject3">Subject name</label>
                        <input id="subject3" name="subject3" pattern="[A-Za-z ]+" type="text"
                            placeholder="e.g. Chemistry" required />
                    </div>

                    <div class="field">
                        <label for="marks3">Marks (0 - 100)</label>
                        <input id="marks3" name="marks3" type="number" min="0" max="100" placeholder="e.g. 91"
                            required />
                        <div id="err3" class="error" style="display:none;"></div>
                    </div>
                </div>



                <div class="actions">
                    <button type="button" onclick="clearForm()" class="secondary">Clear</button>
                    <button type="submit" name="submit">Submit</button>
                </div>
        </form>

        <p class="note" id="result" style="margin-top:12px;"></p>
    </div>


    <?php

    define("fail", 40);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $student_Name = $_POST['studentName'];
        $subject1 = $_POST["subject1"];
        $marks1 = (int) $_POST["marks1"];
        $suject2 = $_POST["subject2"];
        $marks2 = (int) $_POST["marks2"];
        $suject3 = $_POST["subject3"];
        $marks3 = (int) $_POST["marks3"];


        echo "<h4>Student Name</h4>";
        echo "<br> $student_Name";
        echo "<h4>Subject Name and Score</h4>";
        echo "<br>$subject1";
        echo "$marks1" . "\n";
        echo "$suject2";
        echo "$marks2" . "\n";
        echo "$suject3";
        echo "$marks3";
    }



    $arr = array($marks1, $marks2, $marks3);
    echo "<h4>array Stored </h4>";
    var_dump($arr);


    function total($marks1, $marks2, $marks3)
    {
        return $marks1 + $marks2 + $marks3;

    }

    $obtain_total = total($marks1, $marks2, $marks3);

    echo " <h4>Total Marks</h4>$obtain_total";

    //for the percentage 
    function percentage($obtain_total)
    {
        $total = 300;
        return ($obtain_total) / $total * 100;
    }

    $pers = round(percentage($obtain_total));
    echo "<h4>Percentage is:</h4> {$pers}";

    // for checking the Grade system
    
    $percentage = $obtain_total; // make sure this is percentage, not total marks
    
    if ($percentage >= 90) {
        echo "<h4>Grade is A</h4>\n";
    } elseif ($percentage >= 75) {
        echo "<h4>Grade is B</h4>\n";
    } elseif ($percentage >= 50) {
        echo "<h4>Grade is C</h4>\n";
    } else {
        echo "<h4>Grade is F</h4>\n";
    }

    // for checking pass or fail 
    if ($pers >= fail) {
        echo "<h4> Status: Pass</h4>";
    } elseif ($pers <= fail) {
        echo "<h4> status: Fail</h4>";
    }

    //using array sum 
    $total = array_sum($arr) . "\n";

    echo " <h1>using the array sum</h1>$total";




    ?>




</body>

</html>