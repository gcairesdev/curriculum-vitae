// Função de mostrar preview
$(document).ready(function(){
   $('#pre-visualizar').click(function(){
      $('#preview').addClass('ative');
   })
});

// Função de esconder preview
$(document).ready(function(){
   $('.preview-btn-close').click(function(){
      $('#preview').removeClass('ative');
   })
});

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
   
   //Função para só permitir entrada de números no input.
   $(document).on('keypress','.number',function(){
      return event.charCode >= 48 && event.charCode <= 57;	
   });
   
});


//Função para adicionar uma nova formação acadêmica.
$('#adiciona-formacao').click(function(e){

   e.preventDefault();//Evita que o formulário seja enviado após clicar no botão.

   var linha =    '<div class="formacao">'+
                  '  <div class="formacao-body">'+
                  '     <div class="form-group">'+
                  '        <label for="curso">Curso</label>'+
                  '        <input type="text" class="form-control" id="curso" name="curso[]">'+
                  '     </div>'+   
                  '     <div class="row">'+
                  '        <div class="col">'+
                  '           <div class="form-group">'+
                  '              <label for="instituicao">Instituição</label>'+
                  '              <input type="text" class="form-control" id="instituicao" name="instituicao[]">'+
                  '           </div>'+
                  '        </div>'+
                  '        <div class="col">'+
                  '           <div class="form-group">'+
                  '              <label for="ano_conclusao">Ano de conclusão</label>'+
                  '              <input type="text" class="form-control" name="ano_conclusao[]">'+
                  '           </div>'+
                  '        </div>'+
                  '        <div class="col">'+
                  '           <div class="form-group">'+
                  '              <button id="remover-formacao" class="btn btn-secondary"><i class="fas fa-trash-alt"></i></button>'+
                  '           </div>'+
                  '        </div>'+
                  '     </div>'+
                  '  </div>'+
                  '</div>';
   
   $('#formacoes').append(linha);//Adiciona nova linha como filha na div formações

   $('#formacoes').on("click", "#remover-formacao", function(){//Função para remover a div adicionada
      $(this).parent().parent().parent().parent().remove();//Sobe na árvore de elementos até chegar na div pai adicionada e a remove.
   })
});

//Função para adicionar uma nova experiência.
$('#adiciona-experiencia').click(function(e){

   e.preventDefault();

   var linha =       '<div class="expericencia">'+
                     '   <div class="expericencia-body">'+
                     '      <div class="form-group">'+
                     '         <label for="empresa">Empresa</label>'+
                     '         <input type="text" class="form-control" id="empresa" name="empresa[]">'+
                     '      </div>'+
                     '      <div class="row">'+
                     '         <div class="col">'+
                     '            <div class="form-group">'+
                     '               <label for="inicio_experiencia">Início em</label>'+
                     '               <input type="date" class="form-control" id="inicio_experiencia" name="inicio_experiencia[]">'+
                     '            </div>'+
                     '         </div>'+
                     '         <div class="col">'+
                     '            <div class="form-group">'+
                     '               <label for="fim_experiencia">Fim em</label>'+
                     '               <input type="date" class="form-control" id="fim_experiencia" name="fim_experiencia[]">'+
                     '            </div>'+
                     '         </div>'+
                     '      </div>'+
                     '         <div class="form-group">'+
                     '              <input type="checkbox" name="trabalho_atual" id="trabalho_atual">'+
                     '              <label for="trabalho_atual">Trabalho atualmente nessa empresa</label>'+
                     '         </div>'+
                     '         <div class="form-group">'+
                     '              <label for="cargo">Cargo</label>'+
                     '              <input type="text" class="form-control" id="cargo" name="cargo[]">'+
                     '         </div>'+
                     '         <div class="form-group">'+
                     '              <label for="descricao_experiencia">Descrição das suas principais funções na empresa</label>'+
                     '              <textarea name="descricao_experiencia[]" class="form-control" id="descricao_experiencia" rows="5"></textarea>'+
                     '         </div>'+
                     '         <div class="col">'+
                     '            <div class="form-group">'+
                     '               <button id="remover-experiencia" class="btn btn-secondary"><i class="fas fa-trash-alt"></i></button>'+
                     '            </div>'+
                     '         </div>'+
                     '   </div>'+
                     '</div>';

   $('#experiencias').append(linha);//Adiciona nova linha como filha na div experiências

   $('#experiencias').on("click", "#remover-experiencia", function(){//Função para remover a div adicionada
      $(this).parent().parent().parent().parent().remove();//Sobe na árvore de elementos até chegar na div pai adicionada e a remove.
   })

});