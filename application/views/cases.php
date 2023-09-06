<div class="container mt-5">
        <h2 class="mb-4">Relatar Casos</h2>
        <form action="<?= base_url()?>Cases/report_case_form" method="POST" class="border rounded p-4 bg-light">
            <div class="mb-3">
                <label for="resume_case" class="form-label">Resumo do Caso</label>
                <input type="text" class="form-control" name="resume_case" id="resume_case" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="4" required></textarea>
            </div>
            <div class="mb-3 d-none">
                <label for="descricao" class="form-label">Relator</label>
                <input type="number" class="form-control" name="relator" id="relator" value="<?= $user->id_users ?>">
            </div>
            <div class="mb-3">
                <label for="priority" class="form-label">Prioridade</label><br>
                <select class="form-select" name="priority" id="priority" required>
                    <option value="" disabled selected>Selecione a prioridade</option>
                    <option value="alta">Alta</option>
                    <option value="media">Média</option>
                    <option value="baixa">Baixa</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">RELATAR</button>
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