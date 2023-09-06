<div class="container mt-5">

        <h2 class="mb-4">EDIÇÃO</h2>
        
        <a type="submit" class="btn btn-danger" href="<?=base_url()?>Users">VOLTAR</a>
        
        <br>
        <br>

        <form action="<?= base_url()?>Users/editUserForm" method="POST" class="border rounded p-4 bg-light">
            <div class="mb-3 d-none">
                <label for="descricao" class="form-label">id</label>
                <input type="number" class="form-control" value="<?= $user->id_users ?>" name="id_user" id="id_user">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Nome</label>
                <input class="form-control" value="<?= $user->nome ?>" name="nome" id="nome" rows="4" readonly disabled>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $user->email; ?>">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" type="text" class="form-control" name="senha" id="senha" value="<?php echo $user->password; ?>">
            </div>
            <button type="submit" class="btn btn-success">EDITAR</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

<?php
// Verifica se a flashdata "falhaLogin" está definida e não está vazia
if ($this->session->flashdata('case_success')) { ?>
<script>
  // Emitindo o SweetAlert para informar que as credenciais de login são inválidas
  Swal.fire({
    icon: "success",
    title: "SUCESSO",
    text: " <?= $this->session->flashdata('case_success') ?>"
  });
</script>;

<?php
}
?>