<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Segoe UI"', 'sans-serif'],
          }
        }
      }
    }
  </script>
</head>
<body class="flex min-h-screen bg-gray-50 font-sans">

  <div class="hidden lg:flex w-1/2 bg-[#133E87] fixed top-0 left-0 bottom-0 items-center justify-center">
    <div class="max-w-[600px] w-[90%] aspect-square rounded-2xl overflow-hidden shadow-2xl bg-white">
      <img src="{{ asset('images/tes.jpg') }}" alt="Login Illustration"
           class="w-full h-full object-cover object-center" />
    </div>
  </div>

  <div class="ml-auto lg:ml-[50%] w-full lg:w-1/2 h-screen overflow-y-auto bg-white flex items-center justify-center p-6">
    <div class="w-full max-w-2xl bg-white px-16 py-10 rounded-2xl shadow-xl">
      <h2 class="text-5xl font-bold text-left text-gray-800 mb-12">Log in</h2>

      <div class="mb-5">
        <p class="text-left text-sm font-semibold text-gray-700 mb-3">Masuk Sebagai</p>

        <div class="flex justify-center gap-14 mb-5">
          <div class="role-btn flex flex-col items-center px-14 py-1 rounded-lg border border-gray-300 bg-gray-100 text-gray-700 font-medium cursor-pointer transition hover:bg-gray-200"
               onclick="selectRole(this, 'student')">
            <div class="text-3xl mb-2">👨‍🎓</div>
            <div class="text-base">Student</div>
          </div>
          <div class="role-btn active flex flex-col items-center px-14 py-1 rounded-lg border border-gray-300 bg-blue-600 text-white font-medium cursor-pointer transition hover:bg-blue-700"
               onclick="selectRole(this, 'instructor')">
            <div class="text-3xl mb-2">🧑‍🏫</div>
            <div class="text-base">Instructor</div>
          </div>
        </div>

        <p class="text-sm font-bold text-gray-600 text-center">Go Back dan Cek Your Courses</p>


        <form method="POST" action="route('login')" class="space-y-4">
          @csrf
          <input type="hidden" name="role" id="selected-role" value="student">

          <div>
            <label class="block mb-2 text-sm font-semibold text-gray-700">Email Address</label>
            <input type="email" name="email" required autofocus placeholder="Enter your Gmail address"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="mb-1">
            <label class="block mb-1 text-sm font-semibold text-gray-700">Password</label>
            <input type="password" name="password" required autocomplete="current-password" placeholder="Enter your password"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="text-right text-sm mt-[-12px]">
            <a href="route('password.request')" class="text-blue-600 hover:underline">Forgot your password?</a>
          </div>

          <button type="submit"
                  class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition font-semibold">
            Log in
          </button>

          <p class="text-center text-sm mt-4 text-gray-600">
            Don't have an account?
            <a href="route('register')" class="text-blue-600 hover:underline">Sign up</a>
          </p>
        </form>

        <div class="mt-6 text-center text-gray-400 text-sm">@lms2025</div>
      </div>
    </div>
  </div>

  <script>
    function selectRole(el, role) {
      document.querySelectorAll('.role-btn').forEach(btn => {
        btn.classList.remove('bg-blue-600', 'text-white');
        btn.classList.add('bg-gray-100', 'text-gray-700');
      });
      el.classList.remove('bg-gray-100', 'text-gray-700');
      el.classList.add('bg-blue-600', 'text-white');
      document.getElementById('selected-role').value = role;
    }
  </script>

</body>
</html>
