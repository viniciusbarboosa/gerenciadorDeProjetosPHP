                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
                    </div>

 <!--CONTENT-->
 <div class=" mt-4">
  <!-- Barra de Pesquisa e Botão Adicionar -->
  <div class="row mb-3">
    <div class="col-md-6">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Pesquisar...">
        <button class="btn btn-primary" type="button">Pesquisar</button>
      </div>
    </div>
    <div class="col-md-6 text-end">
      <a type="button" class="btn btn-success" href="<?= base_url()?>/Users/addUser">
          Adicionar
      </a>
    </div>
  </div>

  <!-- Tabela Dark -->
  <div class="table-responsive">
    <table class="table table-dark">
      <thead>
      
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Employee</th>
          <th scope="col">Tipo User</th>
        </tr>


      </thead>
      <tbody>
      <?php  foreach ($users as $usersKey => $usersValue) {
        
       ?>

        <tr>
          <td><?= $usersValue->nome ?></td>
          <td><?= $usersValue->email ?></td>
          <td><?php if( $usersValue->employee == 1){
            echo "CONTRATADO";
          }else{
            echo "INATIVADO";
          }?>
        
          </td>
          <td><?= $usersValue->tipo_user ?></td>
          <td>
          <?php if($usersValue->tipo_user != 'admin'){  ?>  
            <button class="btn btn-sm btn-info">Editar</button>
            <button class="btn btn-sm btn-danger">Inativar</button>
            <?php }  ?>
          </td>
        </tr>
        
        <?php 
         } 
        ?>

        <!-- Mais linhas da tabela aqui -->
      </tbody>
    </table>
  </div>
</div>

 <!--CONTENT-->
          



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


    <!--MODAL-->
<!-- Modal de Adicionar Usuário -->
<div class="modal fade" id="adicionarUsuarioModal" tabindex="-1" aria-labelledby="adicionarUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adicionarUsuarioModalLabel">Adicionar Usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário para adicionar um novo usuário -->
                <form method="post" action="<?php echo base_url('usuario/adicionar'); ?>">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Adicionar Usuário">
                </form>
            </div>
        </div>
    </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

<?php
// Verifica se a flashdata "falhaLogin" está definida e não está vazia
if ($this->session->flashdata('add_sucess')) { ?>
<script>
  // Emitindo o SweetAlert para informar que as credenciais de login são inválidas
  Swal.fire({
    icon: "success",
    title: "Sucesso!",
    text: " <?= $this->session->flashdata('add_sucess') ?>"
  });
</script>;

<?php
}
?>