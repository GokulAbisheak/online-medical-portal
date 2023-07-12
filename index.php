<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SantèHealth</title>
    <link rel="stylesheet" href="./styles/index.css" />
  </head>
  <body>
    <div class="min-h-screen flex justify-center items-center">
      <div class="flex h-600 bg-white shadow-md">
        <div class="w-400 bg-primary h-full relative">
          <div class="w-full text-center text-cursive text-5xl text-white mt-8">
            Welcome Back!
          </div>
          <div class="absolute bottom-minus-4">
            <img class="max-w-full" src="./assets/login_img.png" />
          </div>
        </div>
        <div class="w-400 h-full relative flex justify-center items-center">
          <div class="input-group">
            <div class="text-xl mb-4 text-primary semi-bold w-full text-center">SantèHealth</div>
            <input type="text" placeholder="Email" class="input-box" />
            <input type="password" placeholder="Password" class="input-box" />
            <input type="submit" value="login" class="primary-button" />
            <a href="/forgotpassword.php" class="a-link">Forgot Password?</a>
            <a href="/signup.php" class="a-link">Don't have an account?</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
