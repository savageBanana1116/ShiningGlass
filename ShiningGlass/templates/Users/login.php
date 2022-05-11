<!-- in /templates/Users/login.php -->
<div class="row">
        <div class="d-flex justify-content-center h-200" style="padding-top: 20px">
            <div class="card">
                <div class="card-header">
                    <h3>Admin Login</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password">
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
                        <br>
                        <?= $this->Html->link("Add User (Removed on live)", ['action' => 'add']) ?>
                    </div>
                </div>
            </div>
    </div>

    <div class="column-responsive column-80" align="center">
            <div class="users form" style = "width: 50%">
                <?= $this->Flash->render() ?>
                <h3>Admin Login</h3>
                <?= $this->Form->create() ?>
                <fieldset>
                    <legend><?= __('Please enter your username and password') ?></legend>
                    <?= $this->Form->control('email', ['required' => true]) ?>
                    <?= $this->Form->control('password', ['required' => true]) ?>
                </fieldset>
            </div>
    </div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

