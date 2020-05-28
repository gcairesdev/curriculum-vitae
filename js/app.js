$('#pre-visualizar').click(togglePreviewVisibility);
$('.preview-btn-close').click(togglePreviewVisibility);

$('.next').click(proxPagina);
$('.prev').click(voltaPagina);

$('#adiciona-formacao').click(addFormacao);
$('#remove-formacao').click(removeFormacao);

$('#adiciona-experiencia').click(addExperiencia);
$('#remove-experiencia').click(removeExperiencia);

$("#tel_residencial").mask('(99) 9999-9999');
$("#celular").mask('(99) 9 9999-9999');
$("#cep").mask('99.999-999');

function togglePreviewVisibility() {
   $('#preview').toggleClass('ative');
}

function proxPagina() {
   $('.form')
      .find('section.ative')
      .removeClass('ative')
      .next('section')
      .addClass('ative');
}

function voltaPagina() {
   $('.form')
      .find('section.ative')
      .removeClass('ative')
      .prev('section')
      .addClass('ative');
}

function addFormacao() {
   $('.formacao').clone().appendTo($('#formacoes'));
}

function removeFormacao() {
   $('.formacao').last().remove();
}

function addExperiencia() {
   $('.experiencia').clone().appendTo($('#experiencias'));
}

function removeExperiencia() {
   $('.experiencia').last().remove();
}
