<div>
    <div class="border-b flex flex-col overflow-y-scroll grow h-full">

        <header class="w-full sticky inset-x-0 flex py- top-0 z-10 bg-white border-b ">
            <div class="flex w-full items-center px-4 lg:py-5 gap-2 md:gap-5">


                <a class="shrink-0 lg:hidden" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"/>
                    </svg>
                </a>

                <div class="shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" class="bi bi-person-circle mr-2 h-9 w-9 lg:w-11 lg:h-11"
                         viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd"
                              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                </div>

                <h6 class="font-bold truncate">{{fake()->name()}}</h6>
            </div>
        </header>

        <main
            class="flex flex-col gap-3 p-4 overflow-y-auto flex-grow overscroll-contain overflow-x-hidden w-full my-auto">
            <div @class(
        [
            'max-w-[85%] md:max-w-[78%] flex w-auto gap-2 relative mt-2'
        ]
    )>

                <div @class(['shrink-0'])>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         class="bi bi-person-circle mr-2 h-9 w-9 lg:w-11 lg:h-11" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd"
                              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                </div>

                <div @class(
            [
                'flex flex-wrap text-[15px] rounded-xl p-2.5 flex flex-col text-black bg-[#f6f6f8fb]',
                'rounded-bl-none border border-gray-200/40' => false,
                'rounded-br-none bg-blue-500/80 text-white' => true
            ]
        )>
                    <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio id molestias ut. At
                        consequuntur deleniti doloribus ducimus eligendi, et ex officiis optio provident quos rem totam
                        vero! Doloribus veritatis, vero?
                    </p>
                    <div class="ml-auto flex gap-2">
                        <p @class([
                    'text-xs ',
                    'text-gray-500'=>false,
                    'text-white'=>true,
                    ])>5:25am</p>
                        <div>
                        <span  @class('text-gray-200')>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-check2-all" viewBox="0 0 16 16">
                                <path
                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                            </svg>
                        </span>
                            {{--                        <span @class('text-gray-200')>--}}
                            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
                            {{--                                 class="bi bi-check2" viewBox="0 0 16 16">--}}
                            {{--                                <path--}}
                            {{--                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>--}}
                            {{--                            </svg>--}}
                            {{--                        </span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <footer class="shrink-0 z-10 bg-white inset-x-0 ">

            <div class=" p-2 border-t">

                <form
                    method="POST" autocapitalize="off">
                    @csrf

                    <input type="hidden" autocomplete="false" style="display:none">

                    <div class="grid grid-cols-12">
                        <input
                            type="text"
                            autocomplete="off"
                            autofocus
                            placeholder="write your message here"
                            maxlength="1700"
                            class="col-span-10 p-2 bg-gray-100 border-0 outline-0 focus:border-0 focus:ring-0 hover:ring-0 rounded-lg  focus:outline-none">

                        <button class="col-span-2 flex items-center justify-center border rounded-lg bg-blue-500" type='submit'>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-send w-6 h-6 text-white" viewBox="0 0 16 16">
                                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                                </svg>
                            </div>
                        </button>
                    </div>
                </form>

                @error('body')

                <p> {{$message}} </p>

                @enderror

            </div>


        </footer>


    </div>
</div>
