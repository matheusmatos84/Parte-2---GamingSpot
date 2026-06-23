<?php include "header.php" ?>

    <!-- SEÇÃO DE "LOGIN" -->
    <section class="page-section" style="background-color: white; margin-top: 5%;">
        <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Acesse o Sistema</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="bi bi-telephone"></i></div>
                <div class="divider-custom-line"></div>
            </div>

                <?php

                        //Verifica se há algum parâmetro chamado 'erroLogin' sendo recebido por GET
                        if(isset($_GET['erroLogin'])){
                            $erroLogin = $_GET['erroLogin'];

                            if($erroLogin == 'dadosInvalidos'){
                                echo "<div class='alert alert-warning text-center'><strong>USUÁRIO ou SENHA</strong> inválidos!</div>";
                            }
                        }

                    ?>

            <!-- FORMULARIO -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form id="contatoForm" data-sb-form-api-token="API_TOKEN" action="actionLogin.php" method="POST">

                        <!-- EMAIL -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="emailUsuario" type="email" placeholder="usuario@dominio.com" name="emailUsuario" required/>
                            <label for="emailUsuario">Endereço de Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Um email é necessário.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email invalido!.</div>
                        </div>

                        <!-- SENHA -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="senhaUsuario" placeholder="Digite a sua senha!" type="password" name="senhaUsuario" required/>
                            <label for="phoneContato">Senha</label>
                            <div class="invalid-feedback">Digite a sua senha!</div>
                        </div>

                        <!-- BOTAO DE ENVIAR -->
                        <button class="btn btn-primary btn-xl" id="submitButtonContato" type="submit">Login</button>
                        
                    </form>

                    <div class="container py-5 text-center">Ainda não é cadastrado? <a href="formUsuario.php" title="Ir para o formulário de cadastro de usuário">Clique aqui!</a></div>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>