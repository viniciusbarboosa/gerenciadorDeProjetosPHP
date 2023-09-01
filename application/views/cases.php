<div class="container mt-5">
        <h2 class="mb-4">Relatar Casos</h2>
        <form action="seu_controller.php" method="POST" class="border rounded p-4 bg-light">
            <div class="mb-3">
                <label for="state" class="form-label">Estado</label>
                <select class="form-select" name="state" id="state" required>
                    <option value="" disabled selected>Selecione o estado</option>
                    <option value="aguardando">Aguardando</option>
                    <option value="desenvolvimento">Em Desenvolvimento</option>
                    <option value="desenvolvido">Desenvolvido</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="resume_case" class="form-label">Resumo do Caso</label>
                <input type="text" class="form-control" name="resume_case" id="resume_case" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="4" required></textarea>
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
            <div class="mb-3 d-none">
                <label for="reporter" class="form-label">Repórter</label>
                <select class="form-select" name="reporter" id="reporter" required>
                    <option value="" disabled selected>Selecione um repórter</option>
                    <!-- Opções de repórteres aqui (geradas dinamicamente a partir do controller) -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">RELATAR</button>
        </form>
    </div>