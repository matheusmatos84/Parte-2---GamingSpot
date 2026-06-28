<?php include "header.php" ?> 
 
 <!-- SEÇÃO DE "LOGIN" -->
    <section class="page-section" style="background-color: white; margin-top: 5%;">
        <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Cadastro de Usuário</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="bi bi-controller"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <!-- FORMULARIO DE CONTATO -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form action="actionUsuario.php" method="POST" class="was-validated">

                        <!-- NOME -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="nomeUsuario" type="text" placeholder="Adicione seu nome..."  style="background-color: white;" name="nomeUsuario" required>
                            <label for="name">Nome Completo</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Um nome é necessário.</div>
                        </div>

                        <!-- DATA NASC -->
                        <div class="form-floating mt-3 mb-3">
                            <input type="date" class="form-control" id="dataNascimentoUsuario" placeholder="dataNascimentoUsuario" name="dataNascimentoUsuario" required>
                            <label for="dataNascimentoUsuario">Data de Nascimento</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- EMAIL -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="emailUsuario" type="email" placeholder="name@example.com" name="emailUsuario" required>
                            <label for="email">Endereço de Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Um email é necessário.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email invalido!.</div>
                        </div>

                        <div class="form-floating mt-3 mb-3">
                            <input type="password" class="form-control" id="senhaUsuario" placeholder="Senha" name="senhaUsuario" required>
                            <label for="senhaUsuario">Senha</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mt-3 mb-3">
                            <input type="password" class="form-control" id="confirmarSenhaUsuario" placeholder="Confirmar Senha" name="confirmarSenhaUsuario" required>
                            <label for="confirmarSenhaUsuario">Confirmar Senha</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- BOTAO DE ENVIAR -->
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>