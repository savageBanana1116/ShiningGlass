<!-- in /templates/Users/login.php -->
<?= $this->Html->css('cake.css') ?>
<div class="row">
        <div class="d-flex justify-content-center h-200" style="padding-top: 20px">
            <div class="card">
                <?= $this->Flash->render(); ?>
                <div class="card-header">
                    <h3>Admin Login</h3>
                </div>
                <div class="card-body">
                    <?= $this->Form->create() ?>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user" style="padding-right: 10px"></i> <?= $this->Form->control('email', ['required' => 'true', 'class' => 'form-control']) ?></span>
                            </div>

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key" style="padding-right: 10px"></i><?= $this->Form->control('password', ['required' => 'true', 'class' => 'form-control']) ?></span>
                            </div>
                        </div>
                        <div>
                            <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-success']); ?>
                            <?= $this->Form->end() ?>
                            </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div>
                        <button onclick="myFunction()" class="btn btn-dark">Forgot Password?</button>
                        <br>
                        <script>
                            function myFunction() {
                                alert("Please contact administrator at Administration@ShiningGlass.com for further assistance");
                            }
                        </script>
                    </div>
                </div>
            </div>
    </div>

</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

