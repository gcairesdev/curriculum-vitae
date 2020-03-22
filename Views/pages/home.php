<div class="container">
    <form action="" method="post">
        <section class="dados_pessoais">
            <h2>1.1 Dados pessoais</h2>
            <div class="form-group">
                Nome completo <span class="color-red">*</span>
                <input type="text" name="nome_completo" class="form-control" id="nome_completo" maxlength="45" required>
            </div>
            <div class="form-group">
                E-mail <span class="color-red">*</span>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                Nacionalidade
                <input type="text" name="nacionalidade" class="form-control" id="nacionalidade" placeholder="Brasileiro(a)">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        Idade
                        <input type="number" name="idade" class="form-control" id="idade">
                     </div>
                </div>  
                <div class="col">
                    <div class="form-group">
                        Gênero
                        <select name="genero" class="form-control" id="genero">
                            <option value=""></option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                            <option value="3">Outro</option>
                            <option value="4">Prefiro não dizer</option>
                        </select>
                    </div>
                </div>  
            </div>
            <div class="form-group">
                Estado civil
                <select name="estado_civil" class="form-control" id="estado_civil">
                    <option value=""></option>
                    <option value="1">Solteiro(a)</option>
                    <option value="2">Casado(a)</option>
                    <option value="3">Divorciado(a)</option>
                    <option value="4">Viúvo(a)</option>
                    <option value="5">Separado(a)</option>
                </select>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        Telefone residencial
                        <input type="text" name="tel_residencial" class="form-control" id="tel_residencial" placeholder="(00) 1234-5678">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        Celular
                        <input type="text" name="tel_residencial" class="form-control" id="tel_residencial" placeholder="(00) 9 1234-5678">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        Endereço
                        <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Casa A, Rua B, Bairro C">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        Cidade
                        <input type="text" name="cidade" class="form-control" id="cidade">
                    </div>
                </div>
            </div>
            <div class="form-group">
                Estado
                <input type="text" name="estado" class="form-control" id="estado">
            </div>
            <div class="form-group">
                Cep
                <input type="text" name="cep" class="form-control" id="cep">
            </div>

            <h2>1.2 Objetivo</h2>
            <div class="form-group">
                Faça um pequeno texto, objetivo e claro
                <textarea name="objetivo" class="form-control" id="objetivo" rows="5"></textarea>
            </div>
        </section>

        <section class="formacao_academica">
            <h2>2.1 Formação acadêmica</h2>
            <div class="form-group">
                Curso
                <input type="text" class="form-control" name="curso[]">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        Instituição
                        <input type="text" class="form-control" name="instituicao[]">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        Ano de conclusão
                        <input type="text" class="form-control" name="ano_conclusao[]">
                    </div>
                </div>
            </div>

            <h2>2.2 Qualificações e cursos complementares</h2>
            <div class="form-group">
                Descreva algumas outras qualificaçoes
                <textarea name="outras_qualificacoes" class="form-control" id="outras_qualificacoes" rows="5"></textarea>
            </div>
        </section>
        
        <section class="experiencia">
            <h2>3.2 Experiência</h2>
            <div class="form-group">
                Empresa
                <input type="text" class="form-control" name="empresa[]">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        Início em
                        <input type="date" class="form-control" name="inicio_experiencia[]">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        Fim em
                        <input type="date" class="form-control" name="fim_experiencia[]">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="checkbox" name="trabalho_atual" id="trabalho_atual">
                Trabalho atualmente nessa empresa
            </div>
            <div class="form-group">
                Cargo
                <input type="text" class="form-control" name="cargo[]">
            </div>
            <div class="form-group">
                Descrição das suas principais funções na empresa
                <textarea name="descricao_experiencia[]" class="form-control" id="descricao_experiencia" rows="5"></textarea>
            </div>

            <h2>3.2 Atividades complementares</h2>
            <div class="form-group">
                Descreva algumas atividades complementares
                <textarea name="descricao_experiencia[]" class="form-control" id="descricao_experiencia" rows="5"></textarea>
            </div>
        </section>
        
        <section class="info_adicionais">
            <h2>4.1 Informações adicionais</h2>
            <div class="form-group">
                Descreva algumas informações adicionais
                <textarea name="informacoes_adicionais" class="form-control" id="informacoes_adicionais" rows="5"></textarea>
            </div>
        </section>
    </form>
</div>