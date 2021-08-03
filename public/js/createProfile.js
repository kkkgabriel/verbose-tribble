window.$ = window.jQuery;
var $ = window.$;

console.log("Create Profile.js is working");

$(document).ready(function()
{
    $("#submit").on("click", function(e)
    {
        alert("Profile created / updated!");
    })
});