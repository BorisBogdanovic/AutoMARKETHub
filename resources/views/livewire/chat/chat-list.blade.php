<div class="flex flex-col transition-all h-full overflow-hidden">
    <header class="px-3 z-10 bg-white sticky top-0 w-full py-2">
        <div class="border-b justify-between flex items-center pb-2">
            <div class="flex items-center gap-2">
                <h5 class="font-extrabold text-2xl">Chats</h5>
            </div>
            <button>
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     viewBox="0 0 16 16">
                    <path
                        d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>
        </div>

        <div class="flex gap-3 items-center overflow-x-hidden p-2 bg-white">
            <button @click="setType('all')" :class="{ 'bg-blue-100 border-0 text-black': type === 'all' }"
                    class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1 lg:py-2.5 border">
                All
            </button>
            <button @click="setType('deleted')" :class="{ 'bg-blue-100 border-0 text-black': type === 'deleted' }"
                    class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1 lg:py-2.5 border">
                Deleted
            </button>
        </div>


    </header>
    <main class="h-full relative overflow-y-hidden" style="contain:content">
        <ul class="p-2 grid w-full spacey-y-2">
            <li class="py-3 hover:bg-gray-50 rounded-2xl dark:hover:bg-gray-70 transition-colors duration-150 flex gap-4 relative w-full cursor-pointer px-2">

                <a href="#" class="shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                         class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd"
                              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                </a>
                <aside class="grid grid-cols-12 w-full">
                    <a href="#"
                       class="col-span-11 border-b pb-2 border-gray-200 relative overflow-hidden truncate leading-5 w-full flex-nowrap p-1">
                        <div class="flex justify-between w-full items-center">

                            <h6 class="truncate font-medium tracking-wider text-gray-900">
                                boris

                            </h6>

                            <small class="text-gray-700">
                                23.06.2023
                            </small>

                        </div>

                        <div class="flex gap-x-2 items-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-check2-all" viewBox="0 0 16 16">
                                    <path
                                        d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                  </svg>
                            </span>


                            {{--                            <span>--}}
                            {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
                            {{--                                     fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">--}}
                            {{--                                            <path--}}
                            {{--                                                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>--}}
                            {{--                                        </svg>--}}
                            {{--                            </span>--}}


                            <p class="grow truncate text-sm font-[100]">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aliquid dolore
                                dolorem ducimus earum eius eligendi eos et facilis itaque magnam minima officiis
                                perspiciatis provident recusandae, saepe sed temporibus tenetur!
                            </p>


                            <span class="font-bold p-px px-2 text-xs shrink-0 rounded-full bg-blue-500 text-white">
10
                             </span>


                        </div>
                    </a>
                    <div class="col-span-1 flex flex-col text-center my-auto relative">
                        <div x-data="{ open: false }" @click.away="open = false">
                            <button @click="open = !open">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-three-dots-vertical w-7 h-7 text-gray-700" viewBox="0 0 16 16">
                                    <path
                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                </svg>
                            </button>

                            <div x-show="open" class="absolute right-0 mt-2 bg-white border rounded-lg shadow-lg p-1">
                                <button
                                    class="items-center gap-3 flex w-full px-4 py-2 text-left text-sm leading-5 text-gray-500 hover:bg-gray-100 rounded-lg transition-all duration-150 ease-in-out focus:outline-none focus:bg-gray-100"
                                    @click="open = false">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-person-circle mr-2" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                            <path fill-rule="evenodd"
                                                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                        </svg>
                                        <span class="truncate">View Profile</span>

                                    </div>
                                </button>
                                <button
                                    class="items-center gap-3 flex w-full px-4 py-2 text-left text-sm leading-5 text-gray-500 hover:bg-gray-100  rounded-lg transition-all duration-150 ease-in-out focus:outline-none focus:bg-gray-100"
                                    @click="open = false">
            <span class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-trash mr-2 " viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                </svg>
                Delete
            </span>
                                </button>
                            </div>
                        </div>
                    </div>


                </aside>

            </li>
        </ul>


    </main>
</div>
