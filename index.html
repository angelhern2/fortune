<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fortune Telling Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #555;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="submit"] {
            padding: 10px;
            width: 95%;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .fortune {
            margin-top: 20px;
            font-size: 1.2em;
            color: #444;
        }
    </style>
</head>
<body>

<h1>Tarrot Fortune Teller</h1>

<div class="container ">
        <h1>Welcome to Your Fortune Telling Experience</h1>
        <p>Answer a few questions to reveal your fortune.</p>
        <form action="fortune.php" method="post">

        <label for="fortunelength">Would you like a long-term fortune or short-term fortune?</label>
          <select name="fortunelength" id="fortunelength" required>
             <option value="long">Long term</option>
             <option value="short">Short term</option>
          </select>


        <label for="fortuneType">What type of fortune would you like?</label>
         <select name="fortuneType" id="fortuneType" required>
            <option value="career">Career</option>
            <option value="love">Love</option>
            <option value="health">Health</option>
         </select>

			<label for="fortunequestion">what specific question do you have about the subject answered above?</label>
            <input type="text" name="fortunequestion" id="fortunequestion" placeholder="e.g., will i find love? , will i win the lottery?" required>
			
			<input type="submit" value="Get My Fortune">
        </form>
    </div>

    <h1>Your Fortune Will appear below</h1>

<script>
        // Function to submit the form using Fetch API
        function submitFortuneForm(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form data
            const form = document.getElementById('fortuneForm');
            const formData = new FormData(form);

            // Send an Ajax request using Fetch
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.text()) // Get the response as text
            .then(data => {
                // Display the response in the results div
                document.getElementById('fortuneResults').innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
        }
    </script>



<?php 


$tarrotmajor =[ 
    "The Fool" => ["good" => "New beginnings, purity and Spontanety", "bad"=>" Recklessness , Fearlessness and Risk" ],
    "The Magician" => ["good"=> "Self-confidence, resourcefulness, inner ability", "bad" => "Dark Powers, Manipulation and Narcissism"],
    "The High Priestess" => ["good"=> "Perceptiveness, self-alignment, internal monologue", "bad" =>"Harm , Secrets and Hidden Agendas" ],
    "The Empress" => ["good"=> "Kindness, loveliness, romance, connection, harmony", "bad" => "Selfishness , Impatience and a sense of being Overwhelmed"],
    "The Emperor" => ["good"=> "Ruling, strength, structure", "bad" => "Tyranny , Chaos and Anger"  ],
    "The Hierophant" => ["good"=> "Guidance, messages from above, tradition", "bad" => "Misconception , Hypocricy and Blind Faith" ] ,
    "The Lovers" => ["good"=> "Relationships, choices, dedication", "bad" => "Suffering ,Obedience and Conflict"],
    "The Chariot" =>["good"=> "Overcoming, positive results, personal triumph", "bad" => "Carlessness , Arrogance and Wanderlust"],
    "Strength" => ["good"=> "Victory and success at the end of a long personal battle", "bad" => "Struggle , Pride and Weakness"],
    "The Hermit" => ["good"=> "Introspection, intelligence, solitude", "bad" => "Isolation , Resignation and Distance"],
    "Wheel Of Fortune" =>["good"=> "Changing of circumstances, power shifts", "bad" =>"Negative Phase , Bad Luck and Lack of control" ],
    "Justice" => ["good"=> "Truth, equality, laws", "bad" => "Unfairness , Guilt and Punishment"],
    "The Hanged Man" => ["good"=> "Big changes, releasing things, waiting", "bad" =>"Standstill , Sacrifice and Lack of Control" ],
    "Death" => ["bad1"=> "Closing doors, opening doors; cycles", "bad" =>"Stagnation , Holding on and Greif"],
    "Temperance" => ["good"=> "Harmony, patience, satisfaction", "bad" => "Lack of Balance , Extremes and Fragility"],
    "TheDevil" => ["good"=> "Weakness, bad luck, fear, addiction", "bad" => "Freedom , Lack of Will and Resentment"],
    "TheTower" => ["good"=> "Falling to pieces, weak foundations, endings", "bad" => "Collapse , Stormy times and Restlessness"],
    "TheStar" => ["good"=> "Hope, healing, positivity", "bad" => "Insecurity , Discouragment and Faithlessness"],
    "TheMoon" => ["good"=> "Deep-seated internal feelings and truths, mysteriousness", "bad" =>"Darkness , Fears and Insecurities" ],
    "TheSun" => ["good"=> "Happiness, energy, starting on the right path", "bad" => "Negativity , Arrogance and Carelessness"],
    "Judgment" => ["good"=> "Transforming into your best self, growth", "bad" =>"Doubt, punishment and Destruction" ],
    "TheWorld" => ["good"=> "Triumph, a happy ending, fate", "bad" => "Incompletion , Emptyness and Lack of Closure"]
];

$badDescriptions = [
    "The road the cards have shown is not the best. Please reconsider your actions to prevent what the cards foretell.",
    "The cards indicate challenges ahead. Tread carefully and take steps to avoid misfortune.",
    "Caution is advised; the cards suggest potential pitfalls on your current path.",
    "A difficult journey lies ahead. Consider seeking guidance or changing your direction.",
    "The cards foretell trouble. Be cautious and avoid risky situations.",
    "Uncertainty and turmoil are in the forecast. Take precautions and stay vigilant.",
    "A storm may be approaching. Prepare for the worst and hope for the best.",
    "The cards show signs of conflict and strife. Take steps to ensure peace and harmony.",
    "The path ahead is fraught with danger. Stay alert and make wise decisions.",
    "A difficult period may be coming. Focus on stability and avoid unnecessary risks."
];

$goodDescriptions = [
    "The cards have foretold greatness is within you. Keep continuing what you're doing—it is clearly working.",
    "Success is on the horizon. Stay focused and you'll achieve your goals.",
    "Your path is leading to prosperity. Embrace the opportunities that come your way.",
    "Fortune is smiling upon you. Continue with confidence and you'll go far.",
    "A positive change is approaching. Be ready to embrace new experiences.",
    "The cards indicate harmony and happiness. Keep nurturing your relationships and they will flourish.",
    "Your energy is attracting great things. Stay positive and keep moving forward.",
    "You are on the right track. Maintain your course and success will follow.",
    "The cards foresee a bright future. Stay determined, and you'll achieve greatness.",
    "Good things are coming your way. Stay open to new possibilities and enjoy the journey."
    
];

$tarrotminor =[
    "Ace of Cups" => ["good" => "Opportunity, Great Love, Joy" , "bad" => "Missed Opportunity, Blocked Creativity, Emotional Loss"],
    "Two of Cups" => ["good" => "Love, Friendship, Connection" , "bad" => "Trust Issues, Imbalance, Tension"],
    "Three of Cups" => ["good" => "Offspring, Happiness, Gratitude" , "bad" => "Feeling Distanced, Gossip, Overindulgence"],
    "Four of Cups" => ["bad1" => "Plateau, Bored, Disconnection" , "bad" => "Bitter, Angry, Apathy"],
    "Five of Cups" => ["bad1" => "Insight, Knowledge, Sadness" , "bad" => "Acceptance, Finding Peace, Separation"],
    "Six of Cups" => ["good" => "Romance, Love, Nostalgia" , "bad" => "Independence, Leaving, Moving Forward"],
    "Seven of Cups" => ["good" => "Warning, Hope, Choices" , "bad" => "Disappointment, Deception, False Expectations"],
    "Eight of Cups" => ["bad1" => "New Future, Walking Away, Disillusion" , "bad" => "Fear of Loss, Poor Timing, Uncertain Future"],
    "Nine of Cups" => ["good" => "Dreams, Enjoyment, Happiness" , "bad" => "Sluggishness, Exaggeration, Lack of Joy"],
    "Ten of Cups" => ["good" => "Love, Satisfaction, Harmony" , "bad" => "Feeling Neglected, Poor Timing, Shattered Dreams"],
    "Page of Cups" => ["good" => "Opportunity, Invitation, Affection" , "bad" => "Relationship Problems, Oversensitivity, Misunderstandings"],
    "Knight of Cups" => ["good" => "Romance, Infatuation, Well-Being" , "bad" => "Empty Promises, Moodiness, Fantasy"],
    "Queen of Cups" => ["good" => "Empathy, Sacrifice, Patience" , "bad" => "Mysticism, Dark, Insecurity"],
    "King of Cups" => ["good" => "Intense Love, Psychic Energy, Balance" , "bad" => "Coldness, Mocking, Warning"],
    
    "Ace of Pentacles" => ["good" => "Happiness, Joy, New Beginning" , "bad" => "Missed Opportunity, Financial Problems, Bad Investment"],
    "Two of Pentacles" => ["good" => "Adaptation, Ease, Priorities" , "bad" => "Loss of Balance, Disorganized, Carefree"],
    "Three of Pentacles" => ["good" => "Completion, Teamwork, Good Results" , "bad" => "Unfinished Business, Frustration, Delay"],
    "Four of Pentacles" => ["bad1" => "Security, Limit, Conservation" , "bad" => " Control, Standing Still, Greed"],
    "Five of Pentacles" => ["bad1" => "Poverty, Fear of Loss, Isolation" , "bad" => "Recovery, Hardship, Crisis"],
    "Six of Pentacles" => ["good" => "Tolerance, Generosity, Helpfulness" , "bad" => "Stinginess, Strings Attached, Domination"],
    "Seven of Pentacles" => ["good" => "Joy, Positive Results, Patience" , "bad" => "Impatience, Doubt, Disillusion"],
    "Eight of Pentacles" => ["good" => "Learning, Hard Work, Beginning" , "bad" => "Inexperience, Ignorance, Feeling Overworked"],
    "Nine of Pentacles" => ["good" => "Success, Great Love, Rewards" , "bad" => "Overspending, Materialism, Financial Insecurity"],
    "Ten of Pentacles" => ["good" => "Carefree, Harmony, Happy Love" , "bad" => "Lack of Stability, Money Problems, Miscommunication"],
    "Page of Pentacles" => ["good" => "Ambition, Diligence, Desire" , "bad" => "Missed Opportunity, Laziness, Greed"],
    "Knight of Pentacles" => ["good" => "Stability, Perseverance, Security" , "bad" => "Stupidity, Exaggeration, Potential Dishonesty"],
    "Queen of Pentacles" => ["good" => "Femininity, Fertility, Sensuality" , "bad" => "Indifference, Disappointment, Financial Problems"],
    "King of Pentacles" => ["good" => "Hard Work, Will to Success, Abundance" , "bad" => "Indulgence, Excess, Greed"],

    "Ace of Swords" => ["good" => "Reason, Illuminating, Sharp Mind" , "bad" => "Separation, Difficult Times, Confusion"],
    "Two of Swords" => ["good" => "Indecision, Solutions, Difficulties" , "bad" => "Torn, Skepticism, Negative Mind"],
    "Three of Swords" => ["bad1" => "Way Out, Liberation, Heartbreak" , "bad" => "Insult, Fraud, Painful Experience"],
    "Four of Swords" => ["bad1" => "Rest, Relaxation, Being Patient" , "bad" => "Standstill, Difficulties, Exclusion"],
    "Five of Swords" => ["good" => "Unwinnable, Sneakiness, Defeat" , "bad" => "Hate, Power Struggle, Ambush"],
    "Six of Swords" => ["good" => "New Beginning, Change, New Love" , "bad" => "Fears, Worries, Farewell"],
    "Seven of Swords" => ["bad1" => "Keen Mind, Intelligence, Insecurity" , "bad" => "Hatred, Maliciousness, Rethinking"],
    "Eight of Swords" => ["good" => "Overthinking, Self-Criticism, Entrapment" , "bad" => "Inhibitions, Hidden Personality, Lack of Space"],
    "Nine of Swords" => ["bad1" => "Upright: Stress, Anxiety, Hopelessness" , "bad" => "Hope, Despair, Fear of Loss"],
    "Ten of Swords" => ["bad1" => "Sudden Ending, Failure, Backstabbing" , "bad" => "Inevitable End, Intellectual Tyranny, Abrupt Conclusion"],
    "Page of Swords" => ["good" => "Clear Mind, New Experience, Adventure" , "bad" => "Discord, Conflicts, Tactlessness"],
    "Knight of Swords" => ["good" => "Honesty, Opposition, Conflict" , "bad" => "Malice, Cynicism, Ridicule"],
    "Queen of Swords" => ["good" => "Confident, Willing to Learn, Equality" , "bad" => "Cynical, Distance, Sharp-Tongued"],
    "King of Swords" => ["good" => "Intelligence, Clever Mind, Problem Solver" , "bad" => "Sneakiness, Irony, Cynicism"],

    "Ace of Wands" => ["good" => "Courage, Desire, Positivity" , "bad" => "Missed Opportunity, Miscommunication, Delay"],
    "Two of Wands" => ["good" => "Plans, Travel, New Ideas" , "bad" => "Indifference, Listlessness, Inner Conflict"],
    "Three of Wands" => ["good" => "Offspring, Happiness, Gratitude" , "bad" => "Obstacles, Delays, Frustration"],
    "Four of Wands" => ["good" => "Peace, Happiness, Harmony" , "bad" => "Delays, Debauchery, Transience"],
    "Five of Wands" => ["bad1" => "Strength, Competition, Conflict" , "bad" => "Bitter Competition, Sick Ambition, Untrustworthiness"],
    "Six of Wands" => ["good" => "Victory, Success, Good News" , "bad" => "Delay, Punishment, Excess Pride"],
    "Seven of Wands" => ["good" => "Victory, Hope, Defense" , "bad" => "Giving Up, Competition, Threat"],
    "Eight of Wands" => ["good" => "Travel, Movement, Communication" , "bad" => "Uncertainty, Miscommunication, Frustration"],
    "Nine of Wands" => ["good" => "Delimitation, Recognition, Strength" , "bad" => "Reluctance, Close-mindedness, Resistance"],
    "Ten of Wands" => ["bad1" => "No Perspective, Burden, Accomplishment" , "bad" => "Burnt Out, Pressure, Overwhelmed"],
    "Page of Wands" => ["good" => "Adventure, Chance, Growth" , "bad" => "Confusion, Miscommunication, Conflict"],
    "Knight of Wands" => ["good" => "Fiery Love, Self-Confidence, Motivation" , "bad" => "Impatience, Anger, Arguments"],
    "Queen of Wands" => ["good" => "Pride, Femininity, Self-Confidence" , "bad" => "Aggressiveness, Selfishness, Insecurity"],
    "King of Wands" => ["good" => "Security, Warmth, Strength" , "bad" => "Arrogance, Narcissism, Impulsive"],
    
];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fortunelength = $_POST['fortunelength'];
    $typeoffortune = $_POST['fortuneType'];
    $fortunequestion = $_POST['fortunequestion'];

        echo "<div style='color: red;'>";

    if  ($fortunelength == 'short'){

        $randomOuterKey = array_rand($tarrotminor);
        $randomInnerArray = $tarrotminor[$randomOuterKey];
        $randomInnerKey = array_rand($randomInnerArray);
        $randomInnerValue1 = $randomInnerArray[$randomInnerKey];

        // does this agian since the fortune will take two random cards

    }// short declerations ends here

    if  ($fortunelength == 'long'){

        //gets all random cards and gets them into acessabe variables
        $randomOuterKey = array_rand($tarrotmajor);
        $randomInnerArray = $tarrotmajor[$randomOuterKey];
        $randomInnerKey = array_rand($randomInnerArray);
        $randomInnerValue1 = $randomInnerArray[$randomInnerKey];

    }// long fortune decleration ends here

    echo "The cards have chosen!!!  your card is ".$randomOuterKey."<br>";;

    if ($randomInnerKey == 'bad' || $randomInnerKey == 'bad1'  ){

        $badindex= array_rand($badDescriptions);
        $badending= $badDescriptions[$badindex];
        echo "I see that you are asking about your ".$typeoffortune." life , what  the  ".$randomOuterKey.
        " card is trying to say is you will face feelings of  ".$randomInnerValue1." in the ".$fortunelength ." term so , ".$badending ." <br>";
        echo "(this mean more then likely no)";
    }

    if($randomInnerKey == 'good') {

        $goodindex= array_rand($goodDescriptions);
        $goodending= $goodDescriptions[$goodindex];
        echo "I see that you are asking about your ".$typeoffortune." life , what  the ".$randomOuterKey.
        " card is trying to say is you will face feelings of  ".$randomInnerValue1." in the ".$fortunelength ." term so , ".$goodending ." <br>";
        echo "(this mean more then likely yes)";
    }

   


}// end of check to see if submitted content is available

else {
    //prints if nothing has been posted , updates to populated text when submitted
    echo "<h1>Your Fortune Awaits.</h1>";

}

echo"</div>";  // just and end to a div that chnages text colors. keep!!

?>


    
</body>
</html>