                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
                    </div>

    <div class=" mt-4">
    <div class="row">
        <div class="col-md-8">
            <h2>Casos</h2>
            <?php  foreach ($myCases as $myCase) {
                
            ?>
            <div class="card mb-3">
                <div class="card-header">
                    <span style="background-color:<?php  
                        if ($myCase->state == "desenvolvido") {
                            echo "green";
                        }else{
                            echo "blue";
                        }
                    ?>">&#8203 &#8203 &#8203; &#8203; &#8203;&#8203; &#8203;&#8203;&#8203; &#8203; &#8203;</span> Caso #<?= $myCase->id_cases ?> : <?= $myCase->resume_case ?>
                </div>
                <div class="card-body">
                    <p class="card-text"><?= $myCase->descricao ?></p>
                    <?php  
                        if ($myCase->state <> "desenvolvido") {
                            
                    ?>
                    <a class="btn btn-success" href="<?=base_url() ?>Cases/concluirCase/<?= $myCase->id_cases ?>">MARCAR COMO RESOLVIDO</a>
                    <?php   
                        }
                    ?>
                </div>
            </div>
            <?php   
                }
            ?>
        </div>
        <div class="col-md-4">
            <h2>Linha do Tempo</h2>
            <ul class="list-group">
                <li class="list-group-item">Caso #123 aberto por João</li>
                <li class="list-group-item">Caso #124 atribuído a Maria</li>
                <li class="list-group-item">Caso #123 atualizado por João</li>
                <li class="list-group-item">Caso #124 resolvido por Maria</li>
            </ul>
        </div>
    </div>
</div>
                 

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; viniciusbarboosa</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

    <?php
  // Verifica se a flashdata "falhaLogin" está definida e não está vazia
  if ($this->session->flashdata('edit_users_success')) { ?>
    <script>
      // Emitindo o SweetAlert para informar que as credenciais de login são inválidas
      Swal.fire({
        icon: "success",
        title: "SUCESSO",
        text: " <?= $this->session->flashdata('edit_users_success') ?>"
      });
    </script>;
    
    <?php
  }
  ?>