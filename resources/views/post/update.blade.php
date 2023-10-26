<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Update Post</title>
    </head>

    <body class="h-screen bg-gray-50">

        <div class="flex min-h-full flex-col justify-center   lg:px-8">

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white shadow p-4">
                <form class="space-y-6" action="{{route('posts.update',$post->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">
                            Title
                        </label>
                        <div class="mt-2">
                            <input id="title" name="title" type="text" required value="{{$post->title}}"
                                class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">
                            Body
                        </label>
                        <div class="mt-2">
                            <textarea id="body" name="body" rows="3"
                                class="block w-full rounded-md border-0 bg-white/5 py-1.5 px-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$post->body}}
                        </textarea>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- <form action="{{route('posts.update',$post->id)}}" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{$post->title}}">
            <br />
            <textarea name="body">
                {{$post->body}}
            </textarea>
            <button type="submit">Update</button>

        </form> --}}

    </body>

</html>