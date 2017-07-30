<h1>
    Tests
</h1>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-2">
                <?= $this->Html->link("Novas Solicitações",array('controller' => 'tests', 'action' => 'add'));?></div>
            <div class="col-md-2">
                <?= $this->Html->link("Agendados",array('controller' => 'tests', 'action' => 'relatorio'));?></div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

    <?= $this->Html->link("Voltar",array('controller' => 'pages', 'action' => 'home')); ?>

</section>
