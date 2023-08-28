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
      <button class="btn btn-success" type="button">Adicionar</button>
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