<div id="viewRecipe" class="fixed inset-0  overflow-y-auto hidden" aria-labelledby="modal-title-viewRecipe" role="dialog" aria-model="true">

    <div class="fixed inset-0 bg-gray-900/37 transition-opacity">    
        <!-- modal container -->
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:p-0 z-99">
            <center>
                <!-- panel -->
                <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl overflow-y-auto text-left max-h-[95vh] flex flex-col">
                    <div class="bg-white p-6 sm:p-8">
                           <!-- <div class="px-6 pt-6 pb-4 flex justify-between items-center border-b border-gray-100">
                                <h3 class="text-xl font-semibold text-gray-900">Create New Recipe</h3>
                                <button onclick="document.getElementById('viewRecipe').classList.add('hidden'); document.body.classList.remove('overflow-hidden');"  id="close-recipe-modal-x" class="text-gray-400 hover:text-gray-700 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div> -->

                        <div data-modal-content class="p-1 space-y-6 overflow-y-auto flex-grow ">
                            
                             <img class="rounded-t-lg object-cover h-59 w-full" src="" alt="There's food in here somewhere..." />

                            <!-- below the image area  -->
                             <div class="justify-between">
                                <div class="flex justify-between text-left  border-b pb-5">
                                    <!-- left side upper -->
                                    <div class="w-3.5/6 flex flex-col justify-start items-start">
                                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Pansit Bato</h5>
                                        
                                        <p class="mb-3 text-[#717182] text-lg">A Filipino noodle dish from the Bicol region, named after its town of origin in Camarines Sur. Its name, which means "rock noodles," comes from the traditional practice of sun-drying the noodles over stones, which gives them a firm, thick texture and a slightly smoky flavor.</p>

                                        <div class="flex justify-center items-center mt-4">
                                            <div>
                                                <img class="w-9 h-9 rounded-full object-cover border-2 border-gray-300 " src="{{ asset('user-light.png') }}"  alt="Profile image">
                                            </div>
                                            <div class="flex flex-col justify-start items-start ml-3 text-sm">
                                                <!-- name of poster -->
                                                <p>Noah Van Array</p>
                                                <!-- date posted -->
                                                <p>October 20, 2025</p>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- right side upper -->
                                    <div class="w-2.5/6 flex flex-row mt-3 justify-end items-end h-full">
                                        <div class="flex flex-row">
                                            <!-- edit btn -->
                                            <div  class="flex w-24 hover:bg-gray-200 hover:text-gray-700 items-center justify-center px-4 py-2 mr-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-150 hover:bg-gray-200 hover:text-gray-700">
                                                <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="216 216 96 216 40.51 160.51" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="164" y1="92" x2="68" y2="188" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M96,216H48a8,8,0,0,1-8-8V163.31a8,8,0,0,1,2.34-5.65L165.66,34.34a8,8,0,0,1,11.31,0L221.66,79a8,8,0,0,1,0,11.31Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="136" y1="64" x2="192" y2="120" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                <p>Edit</p>
                                            </div>

                                            <!-- dlt btn -->
                                            <div class="flex w-28 hover:bg-gray-200 hover:text-gray-700 items-center justify-center px-4 py-2 mr-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-150 hover:bg-gray-200 hover:text-gray-700">
                                                <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="216" y1="56" x2="40" y2="56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="104" y1="104" x2="104" y2="168" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="152" y1="104" x2="152" y2="168" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M200,56V208a8,8,0,0,1-8,8H64a8,8,0,0,1-8-8V56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M168,56V40a16,16,0,0,0-16-16H104A16,16,0,0,0,88,40V56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                <p>Delete</p>
                                            </div>                                    
                                        </div>

                                        <div >
                                             <!-- tag -->
                                              <div class="w-16 p-1 mt-3 mb-2 mr-3 text-xs text-[#9f2d00] bg-[#ffedd4] border border-{#ffd6a7} rounded-lg">
                                                  <center>Breakfast</center>
                                              </div>

                                            <!-- HERE ARE THE OTHER TAGS PLS USE -y -->
                                           <!--  <div class="w-16 p-1 mb-2 mr-3 text-xs text-[#016630] bg-[#dcfce7] border border-{#b9f8cf} rounded-lg">
                                                <center>Lunch</center>
                                            </div>
    
                                            <div class="w-16 p-1 mb-2 mr-3 text-xs text-[#2b4cbe] bg-[#dbeafe] border border-{#bedbff} rounded-lg">
                                                <center>Dinner</center>
                                            </div>
    
                                            <div class="w-16 p-1 mb-2 mr-3 text-xs text-[#ab165b] bg-[#fce7f3] border border-{#f4cbe1} rounded-lg">
                                                <center>Dessert</center>
                                            </div>
    
                                            <div class="w-16 p-1 mb-2 mr-3 text-xs text-[#bd9857] bg-[#fef9c2] border border-{#fef18c} rounded-lg">
                                                <center>Snack</center>
                                            </div>

                                            <div class="w-16 p-1 mb-2 mr-3 text-xs text-[#8638be] bg-[#f3e8ff] border border-{#ead6ff} rounded-lg">
                                                <center>Appetizer</center>
                                            </div> -->
                                        </div>
                                    </div>


                                 </div>
                            </div>

                        </div>  
                    </div>

                    <!-- close section, not content -->
                    <div class="sticky flex justify-end items-end px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-150">
                        <button 
                            onclick="document.getElementById('viewRecipe').classList.add('hidden'); document.body.classList.remove('overflow-hidden');" 
                            type="button" 
                            class="cursor-pointer px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-200 hover:text-gray-700 rounded-lg hover:bg-gray-50 transition duration-150">
                            Close
                        </button> 
                    </div>

                </div>
            </center>
        </div>
    </div>
</div>