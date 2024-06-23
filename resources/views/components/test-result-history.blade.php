<div  class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg pb-6 mt-6 lg:mt-10">

  
  <div class="sm:p-8 p-3">
    <p class="font-black text-lg sm:text-2xl dark:text-red-50 ">Verification History</p>
  </div>

  <div class="px-8 overflow-y-auto h-64">
        @foreach ($result_history as $result)
            <div class="flex flex-row justify-between  py-6 border-b border-transparent dark:border-slate-700">
              <div class="w-3/5" >
                <p class="text-slate-500 text-xs sm:text-sm">{{$result['date']}}</p>
                <p class="dark:text-red-50 text-black text-sm truncate">{{$result['fileName']}}</p>
              </div>
              <div>
              <div class="flex justify-around">
                
                <div class="mr-5"><p class="text-slate-500 text-xs sm:text-sm ">1st match accuracy</p></div>
                <div class="mr-5"><p class="text-slate-500 text-xs sm:text-sm ">2nd match accuracy</p></div>
                <div class="mr-5"><p class="text-slate-500 text-xs sm:text-sm ">3rd match accuracy</p></div>    
                 
              </div>

              <div class="flex justify-around">
                
                <div class="mr-5"><p class="text-white text-xs sm:text-sm ">{{$result['test1_result']}}%</p></div>
                <div class="mr-5"><p class="text-white text-xs sm:text-sm ">{{$result['test2_result']}}%</p></div>
                <div class="mr-5"><p class="text-white text-xs sm:text-sm ">{{$result['test3_result']}}%</p></div>    
                 
              </div>
           
             </div>
            </div>
        @endforeach
  </div>
  
</div>