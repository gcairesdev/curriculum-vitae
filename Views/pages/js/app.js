// Função do botão seguinte
$(document).ready(function(){
    $('.next').click(function(){
       $('.form').find('section.ative').next('section').
       addClass('ative').prev().
       removeClass('ative');
 })
 })
 
 // Função do botão anterior
 $(document).ready(function(){
    $('.prev').click(function(){
       $('.form').find('section.ative').prev().
       addClass('ative').next().
       removeClass('ative');
 })
 })