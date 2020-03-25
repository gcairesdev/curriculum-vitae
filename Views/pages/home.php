<div class="curriculum-vitae container" id="">
    <form action="" method="post">
        <section class="dados-pessoais">
            <h2 class="titulo-seccao">1.1 Dados pessoais</h2>
            <div class="form-group">
                <label for="nome_completo">Nome completo <span class="text-red">*</span></label>
                <input type="text" name="nome_completo" class="form-control" id="nome_completo" maxlength="45" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail <span class="text-red">*</span></label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="nacionalidade">Nacionalidade</label>
                <input type="text" name="nacionalidade" class="form-control" id="nacionalidade" placeholder="Brasileiro(a)">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="idade">Idade</label>
                        <input type="number" name="idade" class="form-control" id="idade">
                     </div>
                </div>  
                <div class="col">
                    <div class="form-group">
                        <label for="genero">Gênero</label>
                        <select name="genero" class="form-control" id="genero">
                            <option value=""></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>
                            <option value="Prefiro não dizer">Prefiro não dizer</option>
                        </select>
                    </div>
                </div>  
            </div>
            <div class="form-group">
                <label for="estado_civil">Estado civil</label>
                <select name="estado_civil" class="form-control" id="estado_civil">
                    <option value=""></option>
                    <option value="Solteiro(a)">Solteiro(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>
                    <option value="Viúvo(a)">Viúvo(a)</option>
                    <option value="Separado(a)">Separado(a)</option>
                </select>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="tel_residencial">Telefone residencial</label>
                        <input type="text" name="tel_residencial" class="form-control" id="tel_residencial" placeholder="(00) 1234-5678">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" name="celular" class="form-control" id="celular" placeholder="(00) 9 1234-5678">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Casa A, Rua B, Bairro C">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Cidade">Cidade</label>
                        <input type="text" name="cidade" class="form-control" id="cidade">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" name="estado" class="form-control" id="estado">
            </div>
            <div class="form-group">
                <label for="cep">Cep</label>
                <input type="text" name="cep" class="form-control" id="cep">
            </div>

            <h2 class="titulo-seccao">1.2 Objetivo</h2>
            <div class="form-group">
                <label for="objetivo">Faça um pequeno texto, objetivo e claro</label>
                <textarea name="objetivo" class="form-control" id="objetivo" rows="5"></textarea>
            </div>
        </section>

        <section class="formacao_academica">
            <h2 class="titulo-seccao">2.1 Formação acadêmica</h2>
            <div class="form-group">
                <label for="curso">Curso</label>
                <input type="text" class="form-control" id="curso" name="curso[]">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="instituicao">Instituição</label>
                        <input type="text" class="form-control" id="instituicao" name="instituicao[]">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="ano_conclusao">Ano de conclusão</label>
                        <input type="text" class="form-control" name="ano_conclusao[]">
                    </div>
                </div>
            </div>

            <h2 class="titulo-seccao">2.2 Qualificações e cursos complementares</h2>
            <div class="form-group">
                <label for="outras_qualificacoes">Descreva algumas outras qualificaçoes</label>
                <textarea name="outras_qualificacoes" class="form-control" id="outras_qualificacoes" rows="5"></textarea>
            </div>
        </section>
        
        <section class="experiencia">
            <h2 class="titulo-seccao">3.2 Experiência</h2>
            <div class="form-group">
                <label for="empresa">Empresa</label>
                <input type="text" class="form-control" id="empresa" name="empresa[]">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="inicio_experiencia">Início em</label>
                        <input type="date" class="form-control" id="inicio_experiencia" name="inicio_experiencia[]">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="fim_experiencia">Fim em</label>
                        <input type="date" class="form-control" id="fim_experiencia" name="fim_experiencia[]">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="checkbox" name="trabalho_atual" id="trabalho_atual">
                <label for="trabalho_atual">Trabalho atualmente nessa empresa</label>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo[]">
            </div>
            <div class="form-group">
                <label for="descricao_experiencia">Descrição das suas principais funções na empresa</label>
                <textarea name="descricao_experiencia[]" class="form-control" id="descricao_experiencia" rows="5"></textarea>
            </div>

            <h2 class="titulo-seccao">3.2 Atividades complementares</h2>
            <div class="form-group">
                <label for="atividades_complementares">Descreva algumas atividades complementares</label>
                <textarea name="descricao_experiencia[]" class="form-control" id="atividades_complementares" rows="5"></textarea>
            </div>
        </section>
        
        <section class="info_adicionais">
            <h2 class="titulo-seccao">4.1 Informações adicionais</h2>
            <div class="form-group">
                <label for="informacoes_adicionais">Descreva algumas informações adicionais</label>
                <textarea name="informacoes_adicionais" class="form-control" id="informacoes_adicionais" rows="5"></textarea>
            </div>
        </section>

        <div class="botoes-footer">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <button type="button" class="form-control btn btn-secondary" id="anterior">< Anterior</button>
                    </div>
                    <div class="col">
                        <button type="button" class="form-control btn btn-primary" id="seguinte">Seguinte ></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="form-control btn btn-success" id="pre-visualizar" name="pre_visualizar"><i class="fas fa-file-pdf"></i> Pré visualizar</button> 
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>