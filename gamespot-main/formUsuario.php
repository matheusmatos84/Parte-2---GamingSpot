<?php include "header.php" ?> 
 
 <!-- SEÇÃO DE "LOGIN" -->
        <section class="page-section" style="background-color: white; margin-top: 5%;">
            <div class="container">

                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Cadastro de Usuário</h2>

                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="bi bi-telephone"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <!-- FORMULARIO DE CONTATO -->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contatoForm" data-sb-form-api-token="API_TOKEN" action="actionLogin.php" method="POST">

                            <!-- NOME -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nameContato" type="text" placeholder="Adicione seu nome..."  style="background-color: white;" required/>
                                <label for="name">Nome Completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Um nome é necessário.</div>
                            </div>

                            <!-- EMAIL -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="emailContato" type="email" placeholder="name@example.com" required/>
                                <label for="email">Endereço de Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Um email é necessário.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email invalido!.</div>
                            </div>

                            <!-- NÚMERO -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phoneContato" type="tel" placeholder="(10) 99999-0000" requiredpattern="^\(\d{2}\)\s\d{5}-\d{4}$" maxlength="15"/>
                                <label for="phoneContato">Número de Telefone</label>
                                <div class="invalid-feedback">Digite o telefone no formato correto (ex: (10) 99999-0000)</div>
                            </div>



                            <!-- MENSAGEM -->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="messageContato" type="text" placeholder="Adicione sua mensagem aqui..." style="height: 10rem" required></textarea>
                                <label for="message">Mensagem</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Uma mensagem é necessária.</div>
                            </div>

                            <!-- ERRO NA MENSAGEM -->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Erro ao enviar mensagem!</div>
                            </div>

                            <!-- BOTAO DE ENVIAR -->
                            <button class="btn btn-primary btn-xl" id="submitButtonContato" type="submit">Cadastrar</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>