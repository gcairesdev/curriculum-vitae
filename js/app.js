$(document).ready(function(){

   $('#pre-visualizar').click(mostraPreview);
   $('.preview-btn-close').click(escondePreview);
   $('.next').click(proxPagina);
   $('.prev').click(voltaPagina);
   $('#adiciona-formacao').click(addFormacao);

   function mostraPreview() {
      $('#preview').addClass('ative');
   }

   function escondePreview() {
      $('#preview').removeClass('ative');
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

   // To-do
   (function mask() {
      $("#tel_residencial").mask('(99) 9999-9999');
      $("#celular").mask('(99) 9 9999-9999');
      $("#cep").mask('99.999-999');
      
      $(document).on('keypress','.number',function(){
         return event.charCode >= 48 && event.charCode <= 57;	
      });
   })();

   function addFormacao() {
      $('.formacao').clone().appendTo('#formacoes')
      // $('#formacoes').append($('.formacao').html());
   }

//    $('#formacoes').on("click", "#remover-formacao", function(){//Função para remover a div adicionada
//       $(this).parent().parent().parent().parent().remove();//Sobe na árvore de elementos até chegar na div pai adicionada e a remove.
//    })
// });

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

});
