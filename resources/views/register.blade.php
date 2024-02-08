<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="max-w-4xl mx-auto font-[sans-serif] text-[#333] p-6">

<form action="{{ route('register') }}" method="post">
@csrf
        <div class="grid sm:grid-cols-2 gap-y-7 gap-x-12">

          <div>
          <label for="role" class="text-sm mb-2 block">Select Role:</label>
            <select name="role" id="role" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500">
            <option value="chose">choose</option>
            <option value="driver">Driver</option>
            <option value="passenger">Passenger</option>
            </select>
        </div>
          <div>
            <label class="text-sm mb-2 block">First Name</label>
            <input name="name" type="text" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter name" />
          </div>
          <div>
            <label class="text-sm mb-2 block">Email Id</label>
            <input name="email" type="text" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter email" />
          </div>
          <div>
            <label class="text-sm mb-2 block">Password</label>
            <input name="password" type="password" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter password" />
          </div>
          <div id="driverFields" style="display: none;">
          <div>
            <label class="text-sm mb-2 block">Description</label>
            <input name="description" type="description" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter confirm password" />
          </div>
          <div>
            <label class="text-sm mb-2 block">plateNumber</label>
            <input name="plateNumber" type="description" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter confirm password" />
          </div>
          <div>
            <label class="text-sm mb-2 block">vehicleType</label>
            <input name="vehicleType" type="description" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter confirm password" />
          </div>
          <div>
            <label class="text-sm mb-2 block">location</label>
            <input name="location" type="description" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter confirm password" />
          </div>
          <div>
            <label class="text-sm mb-2 block">paymentType</label>
            <input name="paymentType" type="description" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter confirm password" />
          </div>
          <div>
            <label class="text-sm mb-2 block">paymentType</label>
            <select name="statue" id="statue" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500">
                <option value="0">Active</option>
                <option value="1">inactive</option>
            </select>
        </div>
        </div>
        <div id="passengerFields" style="display: none;">
          <div>
            <label class="text-sm mb-2 block">Phone</label>
            <input name="phone" type="phone" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter confirm phone" />
          </div>
          </div>
        </div>
        <div class="!mt-10">
          <button type="submit" class="min-w-[150px] py-3 px-4 text-sm font-semibold rounded text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">
            Sign up
          </button>
        </div>
      </form>
    </div>

    <!-- Add this script at the bottom of your HTML file -->
<script>
    $(document).ready(function () {
        $('#role').change(function () {
            var selectedRole = $(this).val();

            // Hide all role-specific fields
            $('#driverFields, #passengerFields').hide();

            // Show fields based on the selected role
            if (selectedRole === 'driver') {
                $('#driverFields').show();
            } else if (selectedRole === 'passenger') {
                $('#passengerFields').show();
            }
        });
    });
</script>

</body>
</html>
