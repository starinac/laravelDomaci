let startMealPlan=document.getElementById('mealButton');
let mealPlanForm=document.getElementsByClassName('mealPlanForm')[0];

let startTreningPlan=document.getElementById('workoutButton');
let workoutPlanForm=document.getElementsByClassName('workoutPlanForm')[0];

startMealPlan.addEventListener('click',()=>{
    mealPlanForm.style.display='flex';
});

startTreningPlan.addEventListener('click',()=>{
    workoutPlanForm.style.display='flex';
});