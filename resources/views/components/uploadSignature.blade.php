<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
   
    <div class="p-6 text-gray-900 dark:text-gray-100">
        
      <form action="/upload-signature" method="POST" enctype="multipart/form-data">
        @csrf
      

        <div class="flex lg:flex-row flex-col item-center justify-around">
        <!--1st signature-->

        <div class="items-center justify-center "> 
          <div class="flex item-center justify-center my-4">
            <h1>1st signature</h1>
          </div> 

          <div class="flex items-center justify-center">
            <label  for="signature_1" class=" flex flex-col items-center justify-center w-64  h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">             
                <div  id="content1" class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">JPEG, PNG or JPG  (MAX. 2MB)</p>
                </div>
                <img id="imagePreview1" src="#" alt="Preview1" style="display: none;" class="rounded-lg w-64 h-64">
                <input onchange="NumberOne(event)" id="signature_1"  name="signature_1" type="file" accept="image/*" class="w-72 hidden"  /> 
            </label>
        </div>
 

        </div> 

        <!--2nd signature-->

        <div class=" items-center justify-center "> 
          <div class="flex item-center justify-center my-4">
            <h2>2nd signature</h2>
          </div> 
          <div class="flex items-center justify-center">
            <label  for="signature_2" class=" flex flex-col items-center justify-center w-64  h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">             
                <div  id="content2" class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">JPEG, PNG or JPG  (MAX. 2MB)</p>
                </div>
                <img id="imagePreview2" src="#" alt="Preview2" style="display: none;" class="rounded-lg w-64 h-64">
                <input onchange="NumberTwo(event)" id="signature_2" name="signature_2" type="file" accept="image/*" class="w-72 hidden"  /> 
            </label>
        </div>
        
        </div> 

        <!--3rd signature-->
        <div class=" items-center justify-center "> 
          <div class="flex item-center justify-center my-4">
            <h2>3rd signature</h2>
          </div> 
          <div class="flex items-center justify-center">
            <label  for="signature_3" class=" flex flex-col items-center justify-center w-64  h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">             
                <div  id="content3" class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">JPEG, PNG or JPG  (MAX. 2MB)</p>
                </div>
                <img id="imagePreview3" src="#" alt="Preview3" style="display: none;" class="rounded-lg w-64 h-64">
                <input onchange="NumberThree(event)" id="signature_3" name="signature_3" type="file" accept="image/*"  class="w-72 hidden"  /> 
            </label>
        </div>
        

         
      </div>
      </div>

      <div class="flex  justify-center mt-5 lg-pl-10 pl-0">
        @if ($errors->any())
          <div >
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red-600 ">{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif

      </div>

      <div class="flex item-center justify-around mt-5">

        <button 
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" 
        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload Signatures</button>

       

      </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <div class="h-4/5 p-6">
            
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Data privacy and Agreement') }}
            </h2>
        <div class="h-80 overflow-auto pr-3">
            <p class="indent-8 mt-1 text-md text-gray-600 dark:text-gray-400 mt-8">
                {{__('Welcome to IntegriSign! This Data Privacy Terms and Agreement outlines how we collect, use, disclose, and protect your personal information when you use our web application. By using IntegriSign, you consent to the practices described in this agreement.') }}
            </p>
            <p class="font-semibold mt-1 text-md text-gray-900 dark:text-gray-100 mt-8">
                {{ __('Information We Collect') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('We may collect various types of information from you, including but not limited to:') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('Personal Information: This includes your name, email address, and any other information you provide while using our services.') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('Signature Data: In the case of utilizing the Signature Authenticator feature, we may collect and process your signature data for verification purposes.') }}
            </p>

            <p class="font-semibold mt-1 text-md text-gray-900 dark:text-gray-100 mt-8">
                {{ __('Use of Information') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('To provide and improve our services.') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('To verify your identity using the Orb algorithm for signature authentication.') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('To communicate with you, including responding to your inquiries or providing updates about our services.') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('To comply with legal obligations.') }}
            </p>

            <p class="font-semibold mt-1 text-md text-gray-900 dark:text-gray-100 mt-8">
                {{ __('Data Protection') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('We are committed to protecting your data and maintaining its confidentiality. We implement technical and organizational measures to safeguard your personal information from unauthorized access, disclosure, alteration, or destruction.') }}
            </p>

            <p class="font-semibold mt-1 text-md text-gray-900 dark:text-gray-100 mt-8">
                {{ __('Disclosure of Information') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('We do not sell, trade, or rent your personal information to third parties. However, we may share your information in the following cases:') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('With third-party service providers that assist us in operating our services.') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('To comply with legal requirements or respond to lawful requests.') }}
            </p>

            <p class="font-semibold mt-1 text-md text-gray-900 dark:text-gray-100 mt-8">
                {{ __('Your Choices') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('You can manage your personal information through your account settings. You have the right to access, correct, or delete your personal information.') }}
            </p>

            <p class="font-semibold mt-1 text-md text-gray-900 dark:text-gray-100 mt-8">
                {{ __('Cookies and Tracking') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('We may use cookies and similar tracking technologies to enhance your experience on our website. You can adjust your browser settings to control the use of cookies.') }}
            </p>

            <p class="font-semibold mt-1 text-md text-gray-900 dark:text-gray-100 mt-8">
                {{ __('Updates to this Agreement') }}
            </p>
            <p class=" mt-1 text-md text-gray-600 dark:text-gray-400 mt-4">
                {{ __('This Data Privacy Terms and Agreement may be updated from time to time. We will notify you of any significant changes and provide you with the opportunity to review the revised terms.') }}
            </p>

            <p class="font-semibold mt-1 text-md text-gray-600 dark:text-gray-400 mt-8">
                {{ __('By using IntegriSign, you agree to the terms outlined in this Data Privacy Terms and Agreement.') }}
            </p>
        
        </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                 <x-primary-button class="ml-3"
                 type="submit" 
                >{{ __('i agree') }}
                </x-primary-button>
                
            </div>
        </div>
    </x-modal>



      </form>

    </div>
  
</div>



<script type="text/javascript">
  function NumberTwo(event) {
      const fileInput = event.target;
      const label = fileInput.parentElement;
      const imagePreview = label.querySelector('#imagePreview2');
      const contentDiv = label.querySelector('#content2'); // Select the first div
      
      const reader = new FileReader();
      reader.onload = function(e) {
          imagePreview.src = e.target.result;
          imagePreview.style.display = 'block';
          
          // Remove the content div from the label
          if (contentDiv) {
              label.removeChild(contentDiv);
          }
      };
      reader.readAsDataURL(fileInput.files[0]);
      
  }

  function NumberOne(event) {
                const fileInput = event.target;
                const label = fileInput.parentElement;
                const imagePreview = label.querySelector('#imagePreview1');
                const contentDiv = label.querySelector('#content1'); // Select the first div
                console.log(label);
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                    
                    // Remove the content div from the label
                    if (contentDiv) {
                        label.removeChild(contentDiv);
                    }
                };
                reader.readAsDataURL(fileInput.files[0]);
               
            }

function NumberThree(event) {
                const fileInput = event.target;
                const label = fileInput.parentElement;
                const imagePreview = label.querySelector('#imagePreview3');
                const contentDiv = label.querySelector('#content3'); // Select the first div
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                    
                    // Remove the content div from the label
                    if (contentDiv) {
                        label.removeChild(contentDiv);
                    }
                };
                reader.readAsDataURL(fileInput.files[0]);
                console.log('siganture_3');
            }
</script>
