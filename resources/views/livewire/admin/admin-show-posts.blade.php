<div class="container p-4 mx-auto">
    <div class="flex justify-between mb-4">
        <h1 class="mb-4 text-2xl font-semibold">Posts</h1>

        <div>
            <button class="px-4 py-2 text-sm font-medium text-white bg-gray-700 rounded hover:bg-gray-900">
                New post
            </button>
        </div>
    </div>
    <table class="w-full border border-collapse border-gray-300">
        <thead>
            <tr>
                <th class="px-4 py-2 border border-gray-300">Title</th>
                <th class="px-4 py-2 border border-gray-300">Category</th>
                <th class="px-4 py-2 border border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-4 py-2 border border-gray-300">Post 1 Title</td>
                <td class="px-4 py-2 border border-gray-300">Category 1</td>
                <td class="px-4 py-2 border border-gray-300">
                    <button class="mr-2 text-blue-500 border-none outline-none hover:text-blue-700">Edit</button>
                    <form action="#" method="POST" class="inline">
                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2 border border-gray-300">Post 2 Title</td>
                <td class="px-4 py-2 border border-gray-300">Category 2</td>
                <td class="px-4 py-2 border border-gray-300">
                    <button class="mr-2 text-blue-500 border-none outline-none hover:text-blue-700">Edit</button>
                    <form action="#" method="POST" class="inline">
                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
