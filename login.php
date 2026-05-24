<?php
session_start();

//jika sudah login arahkan ke index.php
if (isset($_SESSION['status_login']) && $_SESSION['status_login']) {
  header("location:index.php");
  exit();
}
?>



<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <title>Digital Gift Card</title>
</head>

<body>
  <!--login page-->
  <div class=" bg-teal-400 min-h-screen flex items-center justify-center">
    <div class="bg-white border-3 flex flex-col items-center justify-center w-1/2 rounded-lg">
      <div class="w-32 h-32 pt-4 mb-4">
        <img src="koki.jpg" alt="" class="rounded-full border-2 text-teal-500">
      </div>
      <div class="text-lg font-bold pt-4 text-teal-500 ">Log In Your Account</div>
      <div class="text-sm text-slate-400 mb-6">enter your email and password below to log in</div>

      <form action="proses_login.php" method="post" class="flex flex-col w-full px-2">
        <div class="flex flex-col mb-2 w-full gap-2">
          <label for="email">Email address</label>
          <input type="email" name="email" id="email"
            class="w-full outline-none px-2 py-1 border-2 border-teal-400 rounded" placeholder="Input Your Email" />
        </div>
        <div class="flex flex-col mb-2 w-full gap-2 mb-8">
          <label for="password">password</label>
          <input type="password" name="password" id="password"
            class="w-full outline-none px-2 py-1 border-2 border-teal-400 rounded" placeholder="Input Your password" />
        </div>
        <button type="submit"
          class="flex flex-col items-center justif-center text-lg bg-teal-500 rounded text-white mb-4 cursor-pointer font-bold py-2 ">Login
    </div>
    </form>
  </div>
  </div>
  <!--login end-->
</body>

</html>