<li class="nav-item">
    <button id="myCartDropdownButton1" data-dropdown-toggle="myCartDropdown1" type="button" class="inline-flex items-center rounded-lg justify-end p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
        <span class="sr-only">Cart</span>
        <svg class="w-5 h-5 lg:me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
        </svg> 
        <span class="hidden sm:flex">My Cart</span>
        <svg class="hidden sm:flex w-4 h-4 text-gray-900 dark:text-white ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
        </svg>              
    </button>
    
    <div id="myCartDropdown1" class="hidden z-10 mx-auto max-w-sm space-y-4 overflow-hidden rounded-lg bg-white p-4 antialiased shadow-lg dark:bg-gray-800">
        {{-- Loop through cart items --}}
        @forelse ($cartItems as $cartItem)
            <div class="grid grid-cols-2">
                <div>
                    <a href="#" class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">
                        {{ $cartItem->product->name }}
                    </a>
                    <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">
                        Rp{{ number_format($cartItem->price, 0, ',', '.') }}
                    </p>
                </div>
        
                <div class="flex items-center justify-end gap-6">
                    <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: {{ $cartItem->quantity }}</p>
        
                    <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button data-tooltip-target="tooltipRemoveItem{{ $cartItem->id }}" type="submit" class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                            <span class="sr-only"> Remove </span>
                            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                    <div id="tooltipRemoveItem{{ $cartItem->id }}" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                        Remove item
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Your cart is empty.</p>
        @endforelse
        
        {{-- Checkout button --}}
        @if ($cartItems->count() > 0)
            <a  title="Proceed to Checkout" class="mb-2 me-2 inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" role="button">
                Proceed to Checkout
            </a>
        @endif
    </div>
    </li>