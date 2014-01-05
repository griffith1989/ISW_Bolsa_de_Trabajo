$(document).on("ready",configApp);

function configApp()
{
    var canvas = document.getElementById("UtemCanvas");
    var ctx = canvas.getContext ("2d");
    canvas.width = screen.availWidth;
}