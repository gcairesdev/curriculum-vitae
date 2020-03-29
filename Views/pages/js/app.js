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

//Função para adicionar uma nova formação acadêmica.
$('#adiciona-formacao').click(function(e){

   e.preventDefault();//Evita que o formulário seja enviado após clicar no botão.

   var linha =     '<div class="formacao">'+
                      '<div class="formacao-body">'+
                         '<div class="form-group">'+
                         '<label for="curso">Curso</label>'+
                         '<input type="text" class="form-control" id="curso" name="curso[]">'+
                         '</div>'+
 
                         '<div class="row">'+
                              '<div class="col">'+
                                 '<div class="form-group">'+
                              '      <label for="instituicao">Instituição</label>'+
                              '      <input type="text" class="form-control" id="instituicao" name="instituicao[]">'+
                              '   </div>'+
                              '</div>'+
                              '<div class="col">'+
                              '   <div class="form-group">'+
                              '      <label for="ano_conclusao">Ano de conclusão</label>'+
                              '      <input type="text" class="form-control" name="ano_conclusao[]">'+
                              '   </div>'+
                              '</div>'+
                              '<div class="col">'+
                              '   <div class="form-group">'+
                                    '<button id="remover-formacao" class="btn btn-secondary"><i class="fas fa-trash-alt"></i></button>'+
                                 '</div>'+
                              '</div>'+
                           '</div>'+
                      '</div>'+
                   '</div>';
   
   $('#formacoes').append(linha);//Adiciona nova linha como filha na div formações

   $('#formacoes').on("click", "#remover-formacao", function(){//Função para remover a div adicionada
      $(this).parent().parent().parent().parent().remove();//Sobe na árvore de elementos até chegar na div pai adicionada e a remove.
   })
});