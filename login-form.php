<form action="#" id="login-form" class="login-form">
  <label for="username" class="sc-only">Username</label>
  <input type="text" id="username" placeholder="Username">
  <label for="password" class="sc-only">Password</label>
  <input type="password" id="password" placeholder="Password">
</form>

<a href="#" class="btn">Login using OAUTH</a>

<style>
  .sc-only {
    font-size: 1px;
    color: transparent;
    position: absolute;
    top: -9000px;
    left: -900px;
  }

  .btn {
    margin: 0;
    padding: 5% 2%;
    border-radius: 5px;
    background-color: #ccc;
    color: #fff;
    border: 1px solid transparent;
  }

  .btn:active,
  .btn:hover,
  .btn:focus {
    border: 1px solid #ccc;
    background-color: transparent;
    color: #000;
  }
</style>