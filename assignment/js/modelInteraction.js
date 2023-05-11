//adapted from example code 'benskitchen.com'

var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}

var i = 0;

//0
function poly()
{
	var e = document.getElementById('wire');
    switch(i) {
        case 0:
            break;
        case 1:
            e.runtime.togglePoints(true);
	        e.runtime.togglePoints(true);
            break;

        case 2:
            e.runtime.togglePoints(true);
            break;
    }
    i=0;
    console.log("poly");
    console.log(i);
}

//2
function wireFrame()
{
    var e = document.getElementById('wire');
    switch(i) {
        case 0:
            e.runtime.togglePoints(true);
            e.runtime.togglePoints(true);
            break;

        case 1:
            e.runtime.togglePoints(true);
            break;
    }
    i=2;
    console.log("poly");
    console.log(i);
}

//1
function vertex()
{
	var e = document.getElementById('wire');
    switch(i) {
        case 0:
            e.runtime.togglePoints(true);
            break;

        case 2:
            e.runtime.togglePoints(true);
            e.runtime.togglePoints(true);
            break;
    }
    i=1;
    console.log("poly");
    console.log(i);
}

var lightOn = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function omniLight()
{
	lightOn = !lightOn;
	document.getElementById('model__omniLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function targetLight()
{
	lightOn = !lightOn;
	document.getElementById('model__targetLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}
