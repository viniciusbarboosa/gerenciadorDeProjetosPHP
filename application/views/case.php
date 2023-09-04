<div class="container mt-5">

        <h2 class="mb-4">Relatar Casos</h2>
        <form action="<?= base_url()?>Cases/report_case_form" method="POST" class="border rounded p-4 bg-light">
            <div class="mb-3">
                <label for="resume_case" class="form-label">Resumo do Caso</label>
                <input type="text" class="form-control" name="resume_case" id="resume_case" disabled value="<?php echo $case->resume_case ?>">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="4" readonly><?= $case->descricao ?></textarea>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Relator</label>
                <input disabled type="number" class="form-control" name="relator_id" id="relator_id" value="<?= $user->id_users ?>">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Relator</label>
                <input disabled type="text" class="form-control" name="relator" id="relator" value="<?php echo $case->reporter_name; ?>">
            </div>
            <div class="mb-3 d-none">
                <label for="priority" class="form-label">Prioridade</label><br>
                <input disabled type="text" class="form-control" name="priority" id="priority" value="<?php echo $case->priority; ?>">
            </div>
            <div class="mb-3">
                <label for="priority" class="form-label">Status</label><br>
                <input disabled type="text" class="form-control" name="status" id="status" value="<?php echo $case->state; ?>">
            </div>
            <?php if ($caseAssigned): ?>
                <p>O caso está atribuído a MIM</p>
            <?php else: ?>
                <a class="btn btn-success" href="<?= base_url()?>Cases/reportForMe/<?php echo $case->id_cases ?>/<?= $user->id_users ?>/">ATRIBUIR A MIM</a>
            <?php endif; ?>
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