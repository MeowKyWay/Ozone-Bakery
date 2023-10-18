@extends('layouts.main')

@section('content')
    <!-- Card Section -->
    <div class="max-w-screen-xl px-4 py-1 sm:px-2 lg:px-2 lg:py-1 mx-auto">
      
            <!-- Card -->
            <div class="bg-white rounded-xl shadow-lg mt-7 p-4 sm:p-7 dark:bg-slate-900">
                <div class="mb-3 flex flex-wrap">
                    <section class="flex flex-col items-stretch w-[30%] max-md:w-full">
                        <a onclick="goBack()" class="mr-auto mb-3 text-xl text-gray-800 dark:text-gray-200">
                            < Product Detail
                        </a>

                        <div class="flex flex-wrap items-start">
                            <img src="https://qph.cf2.quoracdn.net/main-qimg-37dda6fa7979664c76053ee03460d8f0-lq" class="h-90 w-90 rounded-3xl">
                        </div>        
                    </section>

                    <section class="flex flex-col items-stretch w-[47%] ml-5 max-md:w-full">
                            <h2 class="mt-8 text-3xl font-bold text-gray-800 dark:text-gray-200">
                                Product name
                            </h2>
                    
                            <p class="pl-4 mt-2 flex flex-wrap">
                                short description jamaja tingja ponyoponyoponyo sakananoko aoikumikara yaatekita
                            </p> 

                            <h1 class="text-3xl font-semibold mt-auto mb-3">
                            price
                            </h1>
                        </section>

                    <section class="flex flex-col items-stretch w-[20%] ml-auto max-md:w-full">
                        <button type="submit"
                            class="flex flex-wrap block mt-auto py-2 px-3 ml-auto rounded-md border border-transparent font-semibold bg-stone-500 text-white text-xl hover:bg-stone-600 transition-all text-sm rounded-3xl">
                        <img src="https://cdn.discordapp.com/attachments/1126214448139472999/1164191609949274203/Untitled_Artwork.png?ex=654250ed&is=652fdbed&hm=f063d65af471effaf530e9c680bfc5e71318cb64b51d69bda8d7803d40ec9f46&" 
                            class="h-8 justify-center">
                            Add to Cart
                        </button>
                    </section>
                </div>

                  
                    <div class="pl-5">
                        
                        
                    </div>

                    
                
                </div>

            </div>
            <!-- End Card -->
    </div>
    <!-- End Card Section -->

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
