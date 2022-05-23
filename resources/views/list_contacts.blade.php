<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Contacts in DB with pagination
        </h2>
    </x-slot>
    
        <div class="flex flex-wrap m-14">
            <div class="w-full">
                @forelse ($contacts as $contact)
                <div class=" rounded overflow-hidden shadow-lg m-14">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">{{ $contact->name }}</div>
                      <p class="text-gray-700 text-base">
                        {{ $contact->address }}
                      </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                        📱 {{ $contact->phone }}
                      </span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                        ✉️ {{ $contact->email }}
                      </span>
                      <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2">
                        created by: ✏️ {{ $contact->user->name }}
                      </span>
                    </div>
                  </div>
                @empty
                    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                        <p class="font-bold">No Contacts</p>
                  </div>
                @endforelse
                {{ $contacts->links() }}
            </div>
          
                
        </div>
</x-app-layout>



