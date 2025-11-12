<x-base-layout>

    <!-- Team -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">


        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($diretores as $diretor)
            <div class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full size-20" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            {{$diretor->nome}}
                        </h3>
                        <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                            {{$diretor->nacionalidade->nome}}
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500 dark:text-neutral-500">
                    {{$diretor->descricao}}
                </p>

                <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="{{route('detalhes-diretor', $diretor)}}">
                    Ver detalhes
                </a>
            </div>
            @endforeach
            <!-- End Col -->
   
        </div>
        <!-- End Grid -->

    </div>
    <!-- End Team -->
</x-base-layout>