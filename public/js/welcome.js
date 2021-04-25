// Sets the initial title for left half when page loads.
function set_initial_title()
{
    document.getElementById('mainTitle').innerHTML = "Daily Reflection";
}

function load_daily_reflection()
{
    document.getElementById('mainTitle').innerHTML = "Daily Reflection";
    $('#welcome-left').load('/welcome/dailyreflection');
}

function load_preamble()
{
    document.getElementById('mainTitle').innerHTML = "Preamble";
    $('#welcome-left').load('/welcome/preamble');
}

function load_how_it_works()
{
    document.getElementById('mainTitle').innerHTML = "How It Works";
    $('#welcome-left').load('/welcome/howitworks');
}

function load_steps()
{
    document.getElementById('mainTitle').innerHTML = "The 12 Steps";
    $('#welcome-left').load('/welcome/steps');
}

function load_traditions()
{
    document.getElementById('mainTitle').innerHTML = "The 12 Traditions";
    $('#welcome-left').load('/welcome/traditions');
}

function load_promises()
{
    document.getElementById('mainTitle').innerHTML = "The Promises";
    $('#welcome-left').load('/welcome/promises');
}

function load_responsibility()
{
    document.getElementById('mainTitle').innerHTML = "Responsibility Statement";
    $('#welcome-left').load('/welcome/responsibility');
}