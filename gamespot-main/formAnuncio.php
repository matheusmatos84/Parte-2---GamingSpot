<?php include "header.php" ?>

<!-- SEÇÃO DE CADASTRO DE ANÚNCIO -->
<section class="page-section" style="background-color: white; margin-top: 5%;">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            Cadastro de Anúncio
        </h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="bi bi-controller"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">

                <form action="actionAnuncio.php" method="POST" enctype="multipart/form-data" class="was-validated">

                    <!-- FOTO -->
                    <div class="form-floating mt-3 mb-3">
                        <input type="file" class="form-control" id="fotoAnuncio" name="fotoAnuncio" required>
                        <label for="fotoAnuncio">Foto do Anúncio</label>
                    </div>

                    <!-- TÍTULO -->
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="tituloAnuncio" name="tituloAnuncio" placeholder="Título" required>
                        <label for="tituloAnuncio">Título do Anúncio</label>
                    </div>

                    <!-- CATEGORIA -->
                    <div class="form-floating mt-3 mb-3">
                        <select class="form-select" id="categoriaAnuncio" name="categoriaAnuncio" required>
                            <option value="">Selecione uma Categoria</option>
                            <option value="Perifericos">Periféricos</option>
                            <option value="Video-Games">Video-Games</option>
                            <option value="Consoles">Consoles</option>
                        </select>
                        <label for="categoriaAnuncio">Categoria</label>
                    </div>

                    <!-- DESCRIÇÃO -->
                    <div class="form-floating mt-3 mb-3">
                        <textarea class="form-control"
                                  id="descricaoAnuncio"
                                  name="descricaoAnuncio"
                                  style="height: 150px;"
                                  required></textarea>
                        <label for="descricaoAnuncio">Descrição</label>
                    </div>

                    <!-- VALOR -->
                    <div class="form-floating mt-3 mb-3">
                        <input type="number" step="0.01" class="form-control" id="valorAnuncio" name="valorAnuncio" placeholder="Valor" required>
                        <label for="valorAnuncio">Valor (R$)</label>
                    </div>

                    <!-- BOTÃO -->
                    <button type="submit" class="btn btn-success">
                        Criar Anúncio
                    </button>

                </form>

            </div>
        </div>

    </div>
</section>

<?php include "footer.php" ?>