// Função do botão seguinte
$(document).ready(function(){
    $('.next').click(function(){
       $('.form').find('section.ative').next('section').
       addClass('ative').prev().
       removeClass('ative');
 })
 });
 
 // Função do botão anterior
 $(document).ready(function(){
    $('.prev').click(function(){
       $('.form').find('section.ative').prev().
       addClass('ative').next().
       removeClass('ative');
 })
 });
// Função para por mascaras nos inputs
$(document).ready(function(){
   $("#tel_residencial").mask('(99) 9999-9999');
   $("#celular").mask('(99) 9 9999-9999');
   $("#cep").mask('99.999-999');

});
