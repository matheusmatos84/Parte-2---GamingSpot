<?php include "header.php" ?> 

<!-- SEÇÃO DO "ANUNCIO" -->
    <section class="py-5" id="anuncie" style="margin-top: 7%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card anuncio-card">
                        <div class="card-body p-5">
                            <h2 class="mb-5">Cadastro de Anúncio:</h2>

                            <!-- FORMULÁRIO AQUI -->

                            <form action="actionAnuncio.php"
                                method="POST"
                                id="produtoForm"
                                class="was-validated"
                                enctype="multipart/form-data">

                                <div class="form-floating mt-3 mb-3">
                                    <input type="file"
                                        class="form-control"
                                        id="fotoAnuncio"
                                        name="fotoAnuncio"
                                        required>
                                    <label for="fotoAnuncio">Foto do Produto</label>
                                </div>

                                <div class="form-floating mt-3 mb-3">
                                    <input type="text"
                                        class="form-control"
                                        id="tituloAnuncio"
                                        placeholder="Título"
                                        name="tituloAnuncio"
                                        required>
                                    <label for="tituloAnuncio">Título do Anúncio</label>
                                </div>

                                <div class="form-floating mt-4 mb-4">
                                    <select class="form-select categoria-select"
                                            id="categoriaAnuncio"
                                            name="categoriaAnuncio"
                                            required>

                                        <option value="">Selecione uma categoria</option>
                                        <option value="Consoles">Consoles</option>
                                        <option value="Videogames">Videogames</option>
                                        <option value="Periféricos">Periféricos</option>

                                    </select>

                                    <label for="categoriaAnuncio" style="margin-right: 100px;">Categoria</label>
                                </div>

                                <div class="form-floating mt-3 mb-3">
                                    <textarea class="form-control"
                                            id="descricaoAnuncio"
                                            name="descricaoAnuncio"
                                            placeholder="Descrição"
                                            style="height: 120px"
                                            required></textarea>

                                    <label for="descricaoAnuncio">Descrição do Produto</label>
                                </div>

                                <div class="form-floating mt-3 mb-3">
                                    <input type="number"
                                        step="0.01"
                                        class="form-control"
                                        id="valorAnuncio"
                                        placeholder="Valor"
                                        name="valorAnuncio"
                                        required>

                                    <label for="valorAnuncio">Valor (R$)</label>
                                </div>

                                <button type="submit" class="btn btn-success">
                                    Publicar Anúncio
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "footer.php" ?>