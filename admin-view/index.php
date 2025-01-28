<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-800 text-white">
            <div class="p-4 text-center text-xl font-bold border-b border-blue-700">
                Admin Dashboard
            </div>
            <nav class="mt-4">
                <ul>
                    <li><a href="#add-user" class="block py-2 px-4 hover:bg-blue-700">Add User</a></li>
                    <li><a href="#add-product" class="block py-2 px-4 hover:bg-blue-700">Add Product</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Add User Form -->
            <section id="add-user" class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-xl font-semibold mb-4">Add User</h2>
                <form action="add_user.php" method="POST" class="space-y-4">
                    <div>
                        <label for="firstname" class="block text-sm font-medium">First Name</label>
                        <input type="text" id="firstname" name="firstname" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="lastname" class="block text-sm font-medium">Last Name</label>
                        <input type="text" id="lastname" name="lastname" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium">Email</label>
                        <input type="email" id="email" name="email" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium">Password</label>
                        <input type="password" id="password" name="password" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium">Phone</label>
                        <input type="text" id="phone" name="phone" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Add User</button>
                </form>
            </section>

            <!-- Add Product Form -->
            <section id="add-product" class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Add Product</h2>
                <form action="add_product.php" method="POST" class="space-y-4">
                    <div>
                        <label for="product_name" class="block text-sm font-medium">Product Name</label>
                        <input type="text" id="product_name" name="product_name" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="category_id" class="block text-sm font-medium">Category ID</label>
                        <input type="number" id="category_id" name="category_id" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="subcategory_id" class="block text-sm font-medium">Subcategory ID</label>
                        <input type="number" id="subcategory_id" name="subcategory_id" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="weight" class="block text-sm font-medium">Weight</label>
                        <input type="text" id="weight" name="weight" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="price" class="block text-sm font-medium">Price</label>
                        <input type="number" step="0.01" id="price" name="price" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="count" class="block text-sm font-medium">Count</label>
                        <input type="number" id="count" name="count" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="image_url" class="block text-sm font-medium">Image URL</label>
                        <input type="text" id="image_url" name="image_url" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Add Product</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
