<form action="" method="post">

    <section class="dados_pessoais">

        <h2>1.1 Dados pessoais</h2>

        Nome completo <span class="color-red">*</span>
        <input type="text" name="nome_completo" id="nome_completo" maxlength="45" required>
        E-mail <span class="color-red">*</span>
        <input type="email" name="email" id="email" required>
        Nacionalidade
        <input type="text" name="nacionalidade" id="nacionalidade" placeholder="Brasileiro(a)">
        Idade
        <input type="number" name="idade" id="idade">
        Gênero
        <select name="genero" id="genero">
            <option value=""></option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
            <option value="3">Outro</option>
            <option value="4">Prefiro não dizer</option>
        </select>
        Estado civil
        <select name="estado_civil" id="estado_civil">
            <option value=""></option>
            <option value="1">Solteiro(a)</option>
            <option value="2">Casado(a)</option>
            <option value="3">Divorciado(a)</option>
            <option value="4">Viúvo(a)</option>
            <option value="5">Separado(a)</option>
        </select>
        Telefone residencial
        <input type="text" name="tel_residencial" id="tel_residencial" placeholder="(00) 1234-5678">
        Celular
        <input type="text" name="tel_residencial" id="tel_residencial" placeholder="(00) 9 1234-5678">
        Endereço
        <input type="text" name="endereco" id="endereco" placeholder="Casa A, Rua B, Bairro C">
        Cidade
        <input type="text" name="cidade" id="cidade">
        Estado
        <input type="text" name="estado" id="estado">
        Cep
        <input type="text" name="cep" id="cep">

        <h2>1.2 Objetivo</h2>

        Faça um pequeno texto, objetivo e claro
        <textarea name="objetivo" id="objetivo" rows="5"></textarea>

    </section>

    <section class="formacao_academica">

        <h2>2.1 Formação acadêmica</h2>

        Curso
        <input type="text" name="curso[]">
        Instituição
        <input type="text" name="instituicao[]">
        Ano de conclusão
        <input type="text" name="ano_conclusao[]">

        <h2>2.2 Qualificações e cursos complementares</h2>

        Descreva algumas outras qualificaçoes
        <textarea name="outras_qualificacoes" id="outras_qualificacoes" rows="5"></textarea>

    </section>
    
    <section class="experiencia">

        <h2>3.2 Experiência</h2>
        
        Empresa
        <input type="text" name="empresa[]">
        Início em
        <input type="date" name="inicio_experiencia[]">
        Fim em
        <input type="date" name="fim_experiencia[]">
        <input type="checkbox" name="trabalho_atual" id="trabalho_atual">
        Trabalho atualmente nessa empresa
        Cargo
        <input type="text" name="cargo[]">
        Descrição das suas principais funções na empresa
        <textarea name="descricao_experiencia[]" id="descricao_experiencia" rows="5"></textarea>

        <h2>3.2 Atividades complementares</h2>

        Descreva algumas atividades complementares
        <textarea name="descricao_experiencia[]" id="descricao_experiencia" rows="5"></textarea>

    </section>
    
    <section class="info_adicionais">

        <h2>4.1 Informações adicionais</h2>

        Descreva algumas informações adicionais
        <textarea name="informacoes_adicionais" id="informacoes_adicionais" rows="5"></textarea>
        
    </section>

</form>