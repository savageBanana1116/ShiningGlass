
<!-- in /templates/Users/login.php -->
<div class="row">
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Admin Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('email', ['required' => true, 'style' => 'width:30%;justify-content: center;']) ?>
        <?= $this->Form->control('password', ['required' => true, 'style' => 'width:30%']) ?>
    </fieldset>
    <br>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>
<br>
    <button onclick="myFunction()" class="btn btn-primary">Forgot Password?</button>
<br>
    <script>
        function myFunction() {
            alert("Please contact administrator at Administration@ShiningGlass.com for further assistance");
        }
    </script>
    <?= $this->Html->link("Add User", ['action' => 'add']) ?>
</div>
</div>
