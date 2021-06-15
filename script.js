var HPPokemonPika = document.getElementById('HPPokemonChar').value;
var HPPokemonChar = document.getElementById('HPPokemonChar').value;
var WeaknessPika = document.getElementById('WeaknessPika').value;
var WeaknessChar = document.getElementById('WeaknessChar').value;
var ResistancePika = document.getElementById('ResistancePika').value;
var ResistanceChar = document.getElementById('ResistanceChar').value;
var Weaknessmultiplier = 0;
var Resistancemultiplier = 0;



$(document).on('click','.Attackbtn', function(){
    var damage = $(this).data('damage')
    var pokemonnmbr = $(this).data('pokemon')
    console.log(damage);
    console.log(pokemonnmbr);
    if (pokemonnmbr === "pika"){
        Weaknessmultiplier = 1;
        Resistancemultiplier = 1;
        var damagetotal = damage * Weaknessmultiplier;
        console.log(damagetotal);
        var yeet = $("#HPPokemonChar").val() - damagetotal + 10;
        console.log(yeet);
        $("#HPPokemonChar").val(yeet);
        }
        else {
        }
    if (pokemonnmbr === "char"){
        Weaknessmultiplier = 2.5;
        var damagetotalchar = damage * Weaknessmultiplier;
        console.log(damagetotalchar);
        var DmgTotal = $("#HPPokemonPika").val() - damagetotalchar;
        console.log(DmgTotal);
        $("#HPPokemonPika").val(DmgTotal);
        }
        else {
        }
    if (DmgTotal < 0){
        $("#HPPokemonPika").val("0");
    }
    if (yeet < 0){
        $("#HPPokemonChar").val("0");
    }
})