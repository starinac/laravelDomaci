<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/userPlans.css') }}">
</head>
<body>
    <div class="flex">
        <div class="card">
            <img src="{{URL('/images/mealPlan.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Meal plan</b></h4>
                    <p>Your desired trainer will create a personalized meal plan for you</p>
                </div>
        </div>
        <div class="card">
            <img src="{{URL('/images/gym.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Workout plan</b></h4>
                    <p>Your desired trainer will create a personalized workout plan for you</p>
                </div>
        </div>
    </div>
</body>
</html>