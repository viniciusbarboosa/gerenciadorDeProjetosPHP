<a type="button" class="btn btn-danger" href="<?= base_url()?>/Users/adminUsers">
        VOLTAR
</a>

<div class="container mt-5">
        <h1>Formulário de Adição de Usuário</h1>
        <form action="<?= base_url()?>Users/addUserDB" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="tipoUsuario" class="form-label">Tipo de Usuário</label><br>
                <select class="form-select" id="tipoUsuario" name="tipoUsuario" required>
                    <option value="admin">Administrador</option>
                    <option value="dev">Desenvolvedor</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Usuário</button>
        </form>
    </div>