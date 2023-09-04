    <div class="container mt-5">
        <h2 class="mb-4">LISTA DE CASOS</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Status</th>
                        <th>Resumo</th>
                        <th>Reporter</th>
                        <th>Priority</th>
                    </tr>
                </thead>
                <tbody>
                        <?php foreach ($cases as $case) { ?>
                    <tr>
                        <td><?php echo $case->id_cases; ?></td>
                        <td><span class="badge <?php if($case->state == "aguardando"){
                            echo  "bg-success";
                        }else if ($case->state == "desenvolvimento"){
                            echo  "bg-warning";
                        }else{
                            echo  "bg-danger";
                        }  ?>"><?php echo $case->state; ?></span></td>
                        <td><a href="<?=  base_url() ?>Cases/case/<?= $case->id_cases ?>"><?php echo $case->resume_case; ?></a></td>
                        <td><?php echo $case->reporter_name; ?></td>
                        <td><span class="badge <?php if($case->priority == "baixa"){
                            echo  "bg-success";
                        }else if ($case->priority == "media"){
                            echo  "bg-warning";
                        }else{
                            echo  "bg-danger";
                        }  ?>"><?php echo $case->priority; ?></span></td>
                    </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>