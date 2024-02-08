<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head content here -->
</head>
<body>
    <div class="max-w-4xl mx-auto font-[sans-serif] text-[#333] p-6">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div>
                <label for="email" class="text-sm mb-2 block">Email:</label>
                <input name="email" type="text" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter email" />
            </div>
            <div>
                <label for="password" class="text-sm mb-2 block">Password:</label>
                <input name="password" type="password" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter password" />
            </div>
            <div class="!mt-10">
                <button type="submit" class="min-w-[150px] py-3 px-4 text-sm font-semibold rounded text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>
</html>
