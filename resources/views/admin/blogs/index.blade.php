<x-admin.app>
    @if (session('success'))
        <div class="alert bg-blue-400 rounded-xl w-fit alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="p-4 sm:ml-64">
        <div class="create-btn flex justify-end p-4">
            <a href="{{ route('admin.blogs.create') }}"><button class="bg-gray-900 text-sm p-2 text-gray-100 ">Create
                    New</button></a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Sn.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            slug
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $blog->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $blog->title }}

                            </td>
                            <td class="px-6 py-4">
                                {{ $blog->category }}

                            </td>
                            <td class="px-6 py-4">
                                {{ $blog->slug }}
                            </td>
                            <td class="px-6 py-4 text-right flex gap-10">
                                <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="cursor-pointer">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.app>
