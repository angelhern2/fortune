<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fortune Telling Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            background-image: url('../tarrotpictures/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 100%;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        img {
           width: 100%;         
           max-width: 10%;      
           height: auto;        
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
            color: white;
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
        
        <h1 style="color: black;">Welcome to Your Fortune Telling Experience</h1>
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

			<label for="fortunequestion">what specific question do you have about the subject answered above? <br> (please ask yes/no questions for more accuracy) </label>
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
    "Fool" => ["good" => "New beginnings, purity and Spontanety", "bad"=>" Recklessness , Fearlessness and Risk" ],
    "Magician" => ["good"=> "Self-confidence, resourcefulness and inner ability", "bad" => "Dark Powers, Manipulation and Narcissism"],
    "High Priestess" => ["good"=> "Perceptiveness, self-alignment, internal monologue", "bad" =>"Harm , Secrets and Hidden Agendas" ],
    "Empress" => ["good"=> "Kindness, loveliness, romance, connection and harmony", "bad" => "Selfishness , Impatience and a sense of being Overwhelmed"],
    "Emperor" => ["good"=> "Ruling, strength and structure", "bad" => "Tyranny , Chaos and Anger"  ],
    "Hierophant" => ["good"=> "Guidance, messages from above and tradition", "bad" => "Misconception , Hypocricy and Blind Faith" ] ,
    "Lovers" => ["good"=> "Relationships, choices and dedication", "bad" => "Suffering ,Obedience and Conflict"],
    "Chariot" =>["good"=> "Overcoming, positive results and personal triumph", "bad" => "Carlessness , Arrogance and Wanderlust"],
    "Strength" => ["good"=> "Victory and success at the end of a long personal battle", "bad" => "Struggle , Pride and Weakness"],
    "Hermit" => ["good"=> "Introspection, intelligence and solitude", "bad" => "Isolation , Resignation and Distance"],
    "Wheel Of Fortune" =>["good"=> "Changing of circumstances and power shifts", "bad" =>"Negative Phase , Bad Luck and Lack of control" ],
    "Justice" => ["good"=> "Truth, equality and laws", "bad" => "Unfairness , Guilt and Punishment"],
    "Hanged Man" => ["good"=> "Big changes, releasing things and waiting", "bad" =>"Standstill , Sacrifice and Lack of Control" ],
    "Death" => ["bad1"=> "Closing doors, opening doors and cycles", "bad" =>"Stagnation , Holding on and Greif"],
    "Temperance" => ["good"=> "Harmony, patience and satisfaction", "bad" => "Lack of Balance , Extremes and Fragility"],
    "Devil" => ["good"=> "Weakness, bad luck, fear and addiction", "bad" => "Freedom , Lack of Will and Resentment"],
    "Tower" => ["bad1"=> "Falling to pieces, weak foundations and endings", "bad" => "Collapse , Stormy times and Restlessness"],
    "Star" => ["good"=> "Hope, healing and positivity", "bad" => "Insecurity , Discouragment and Faithlessness"],
    "Moon" => ["good"=> "Deep-seated internal feelings and truths, mysteriousness", "bad" =>"Darkness , Fears and Insecurities" ],
    "Sun" => ["good"=> "Happiness, energy and starting on the right path", "bad" => "Negativity , Arrogance and Carelessness"],
    "Judgment" => ["good"=> "Transforming into your best self and growth", "bad" =>"Doubt, punishment and Destruction" ],
    "World" => ["good"=> "Triumph, a happy ending and fate", "bad" => "Incompletion , Emptyness and Lack of Closure"]
];


$tarrotminor =[
    "Ace of Cups" => ["good" => "Opportunity, Great Love and Joy" , "bad" => "Missed Opportunity, Blocked Creativity and Emotional Loss"],
    "Two of Cups" => ["good" => "Love, Friendship and Connection" , "bad" => "Trust Issues, Imbalance and Tension"],
    "Three of Cups" => ["good" => "Offspring, Happiness and Gratitude" , "bad" => "Feeling Distanced, Gossip and Overindulgence"],
    "Four of Cups" => ["bad1" => "Plateau, Bored and Disconnection" , "bad" => "Bitter, Angry and Apathy"],
    "Five of Cups" => ["bad1" => "Insight, Knowledge and Sadness" , "bad" => "Acceptance, Finding Peace and Separation"],
    "Six of Cups" => ["good" => "Romance, Love and Nostalgia" , "bad" => "Independence, Leaving and Moving Forward"],
    "Seven of Cups" => ["good" => "Warning, Hope and Choices" , "bad" => "Disappointment, Deception and False Expectations"],
    "Eight of Cups" => ["bad1" => "New Future, Walking Away and Disillusion" , "bad" => "Fear of Loss, Poor Timing and Uncertain Future"],
    "Nine of Cups" => ["good" => "Dreams, Enjoyment and Happiness" , "bad" => "Sluggishness, Exaggeration and Lack of Joy"],
    "Ten of Cups" => ["good" => "Love, Satisfaction and Harmony" , "bad" => "Feeling Neglected, Poor Timing and Shattered Dreams"],
    "Page of Cups" => ["good" => "Opportunity, Invitation and Affection" , "bad" => "Relationship Problems, Oversensitivity and Misunderstandings"],
    "Knight of Cups" => ["good" => "Romance, Infatuation and Well-Being" , "bad" => "Empty Promises, Moodiness and Fantasy"],
    "Queen of Cups" => ["good" => "Empathy, Sacrifice and Patience" , "bad" => "Mysticism, Dark and Insecurity"],
    "King of Cups" => ["good" => "Intense Love, Psychic Energy and Balance" , "bad" => "Coldness and Mocking, Warning"],
    
    "Ace of Pentacles" => ["good" => "Happiness, Joy and New Beginning" , "bad" => "Missed Opportunity, Financial Problems and Bad Investment"],
    "Two of Pentacles" => ["good" => "Adaptation, Ease and Priorities" , "bad" => "Loss of Balance, Disorganized and Carefree"],
    "Three of Pentacles" => ["good" => "Completion, Teamwork and Good Results" , "bad" => "Unfinished Business, Frustration and Delay"],
    "Four of Pentacles" => ["bad1" => "Security, Limit and Conservation" , "bad" => " Control, Standing Still and Greed"],
    "Five of Pentacles" => ["bad1" => "Poverty, Fear of Loss and Isolation" , "bad" => "Recovery, Hardship and Crisis"],
    "Six of Pentacles" => ["good" => "Tolerance, Generosity and Helpfulness" , "bad" => "Stinginess, Strings Attached and Domination"],
    "Seven of Pentacles" => ["good" => "Joy, Positive Results and Patience" , "bad" => "Impatience, Doubt and Disillusion"],
    "Eight of Pentacles" => ["good" => "Learning, Hard Work and Beginning" , "bad" => "Inexperience, Ignorance and Feeling Overworked"],
    "Nine of Pentacles" => ["good" => "Success, Great Love and Rewards" , "bad" => "Overspending, Materialism and Financial Insecurity"],
    "Ten of Pentacles" => ["good" => "Carefree, Harmony and Happy Love" , "bad" => "Lack of Stability, Money Problems and Miscommunication"],
    "Page of Pentacles" => ["good" => "Ambition, Diligence and Desire" , "bad" => "Missed Opportunity, Laziness and Greed"],
    "Knight of Pentacles" => ["good" => "Stability, Perseverance and Security" , "bad" => "Stupidity, Exaggeration and Potential Dishonesty"],
    "Queen of Pentacles" => ["good" => "Femininity, Fertility and Sensuality" , "bad" => "Indifference, Disappointment and Financial Problems"],
    "King of Pentacles" => ["good" => "Hard Work, Will to Success and Abundance" , "bad" => "Indulgence, Excess and Greed"],

    "Ace of Swords" => ["good" => "Reason, Illuminating and Sharp Mind" , "bad" => "Separation, Difficult Times and Confusion"],
    "Two of Swords" => ["bad1" => "Indecision, Solutions and Difficulties" , "bad" => "Torn, Skepticism and Negative Mind"],
    "Three of Swords" => ["bad1" => "Way Out, Liberation and Heartbreak" , "bad" => "Insult, Fraud, Painful Experience"],
    "Four of Swords" => ["bad1" => "Rest, Relaxation and Being Patient" , "bad" => "Standstill, Difficulties and Exclusion"],
    "Five of Swords" => ["bad1" => "Unwinnable, Sneakiness and Defeat" , "bad" => "Hate, Power Struggle and Ambush"],
    "Six of Swords" => ["good" => "New Beginning, Change and New Love" , "bad" => "Fears, Worries and Farewell"],
    "Seven of Swords" => ["bad1" => "Keen Mind, Intelligence and Insecurity" , "bad" => "Hatred, Maliciousness and Rethinking"],
    "Eight of Swords" => ["bad1" => "Overthinking, Self-Criticism and Entrapment" , "bad" => "Inhibitions, Hidden Personality and Lack of Space"],
    "Nine of Swords" => ["bad1" => "Upright: Stress, Anxiety and Hopelessness" , "bad" => "Hope, Despair and Fear of Loss"],
    "Ten of Swords" => ["bad1" => "Sudden Ending, Failure and Backstabbing" , "bad" => "Inevitable End, Intellectual Tyranny and Abrupt Conclusion"],
    "Page of Swords" => ["good" => "Clear Mind, New Experience and Adventure" , "bad" => "Discord, Conflicts and Tactlessness"],
    "Knight of Swords" => ["good" => "Honesty, Opposition and Conflict" , "bad" => "Malice, Cynicism and Ridicule"],
    "Queen of Swords" => ["good" => "Confident, Willing to Learn and Equality" , "bad" => "Cynical, Distance and Sharp-Tongued"],
    "King of Swords" => ["good" => "Intelligence, Clever Mind and Problem Solver" , "bad" => "Sneakiness, Irony and Cynicism"],

    "Ace of Wands" => ["good" => "Courage, Desire and Positivity" , "bad" => "Missed Opportunity, Miscommunication and Delay"],
    "Two of Wands" => ["good" => "Plans, Travel and New Ideas" , "bad" => "Indifference, Listlessness and Inner Conflict"],
    "Three of Wands" => ["good" => "Offspring, Happiness and Gratitude" , "bad" => "Obstacles, Delays and Frustration"],
    "Four of Wands" => ["good" => "Peace, Happiness and Harmony" , "bad" => "Delays, Debauchery and Transience"],
    "Five of Wands" => ["bad1" => "Strength, Competition and Conflict" , "bad" => "Bitter Competition, Sick Ambition and Untrustworthiness"],
    "Six of Wands" => ["good" => "Victory, Success and Good News" , "bad" => "Delay, Punishment and Excess Pride"],
    "Seven of Wands" => ["good" => "Victory, Hope and Defense" , "bad" => "Giving Up, Competition and Threat"],
    "Eight of Wands" => ["good" => "Travel, Movement and Communication" , "bad" => "Uncertainty, Miscommunication and Frustration"],
    "Nine of Wands" => ["good" => "Delimitation, Recognition and Strength" , "bad" => "Reluctance, Close-mindedness and Resistance"],
    "Ten of Wands" => ["bad1" => "No Perspective, Burden and Accomplishment" , "bad" => "Burnt Out, Pressure and Overwhelmed"],
    "Page of Wands" => ["good" => "Adventure, Chance and Growth" , "bad" => "Confusion, Miscommunication and Conflict"],
    "Knight of Wands" => ["good" => "Fiery Love, Self-Confidence and Motivation" , "bad" => "Impatience, Anger and Arguments"],
    "Queen of Wands" => ["good" => "Pride, Femininity and Self-Confidence" , "bad" => "Aggressiveness, Selfishness and Insecurity"],
    "King of Wands" => ["good" => "Security, Warmth and Strength" , "bad" => "Arrogance, Narcissism and Impulsive"],
    
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

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fortunelength = $_POST['fortunelength'];
    $typeoffortune = $_POST['fortuneType'];
    $fortunequestion = $_POST['fortunequestion'];

        echo "<div style='color: green; font-size : 20px; font-weight: bold;'>";
        

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
    
    // prints the fortunes bad sentence
    if ($randomInnerKey == 'bad1' || $randomInnerKey == 'bad' ){

        $badindex= array_rand($badDescriptions);
        $badending= $badDescriptions[$badindex];
        $sentence = "I see that you are asking about your ".$typeoffortune.", The ".$randomOuterKey.
        " card is trying to say is you will face feelings of  ".$randomInnerValue1.". In the ".$fortunelength ." term  ".$badending ." <br>";
    }
    

    // prints the fortunes good sentence
    if($randomInnerKey == 'good') {

        $goodindex= array_rand($goodDescriptions);
        $goodending= $goodDescriptions[$goodindex];
        $sentence = "I see that you are asking about your ".$typeoffortune.", The ".$randomOuterKey.
        " card is trying to say is you will face feelings of  ".$randomInnerValue1.". In the ".$fortunelength ." term  ".$goodending ." <br>";
    }

    
    if ($randomInnerKey == 'bad1' || $randomInnerKey == 'good' ){

        echo "The cards have chosen!!!  your card is The ".$randomOuterKey." (upright) <br>";         // tells you your card and its position                        
        echo "<br>";
        echo $sentence;
        echo "<br>";
        echo '<img src="../tarrotpictures/'.$randomOuterKey.'.jpg"  alt="'.$randomOuterKey.'"/>';        // prints the tarot card image upright
        echo "<br>";

    }

    if ( $randomInnerKey == 'bad'){

        echo "The cards have chosen!!!  your card is The ".$randomOuterKey." (upside down) <br>";         // tells you your card and its position 
        echo "<br>";
        echo $sentence;
        echo "<br>";
        echo '<img src="../tarrotpictures/'.$randomOuterKey.'.jpg" style="transform: rotate(180deg);" alt="upside down'.$randomOuterKey.'">';       // prints the tarot card image upsidedown          
        echo "<br>";
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