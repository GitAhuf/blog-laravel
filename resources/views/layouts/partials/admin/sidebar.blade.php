<aside class="w-64 sticky top-0 shadow" aria-label="Sidebar">
    <div class="px-3 py-4 overflow-y-auto bg-white h-screen">
        <h2 class="text-3xl text-gray-700 font-semibold mb-6">
            <a href="/">
                Coders Free
            </a>
        </h2>
       <ul class="space-y-2">
            @foreach ($links as $link)
                <li>
                    <a href="{{$link['url']}}" 
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100 {{$link['active']? 'bg-gray-100'  : ''}} ">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>

                        {{-- <span class="w-6 h-6 text-gray-900">
                            <i class="{{$link['icon']}}"></i>
                        </span> --}}
                        <span class="ml-3">{{$link['title']}}</span>
                    </a>
                </li>     
            @endforeach
       </ul>
    </div>
</aside> 