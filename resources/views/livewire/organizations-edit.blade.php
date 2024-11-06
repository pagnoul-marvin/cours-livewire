<main class="main-content px-4 py-8 md:flex-1 md:p-12 md:overflow-y-auto relative">
    <template x-if="$wire.feedback">

        <div x-data="{
                    init(){
                        setTimeout(function(){
                            $wire.feedback = false;
                        }, 2000)
                    }
                }">
            <div class="dissolve absolute top-4 flex items-center justify-between mb-8 max-w-3xl bg-green-500 rounded">
                <div class="flex items-center">
                    <svg class="shrink-0 ml-4 mr-2 w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <polygon points="0 11 2 9 7 14 18 3 20 5 7 18"></polygon>
                    </svg>
                    <div class="py-4 text-white text-sm font-medium" x-html="$wire.feedback"></div>
                </div>
                <button type="button" class="group mr-2 p-2">
                    <svg class="block w-2 h-2 fill-green-800 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                         width="235.908" height="235.908" viewBox="278.046 126.846 235.908 235.908">
                        <path
                            d="M506.784 134.017c-9.56-9.56-25.06-9.56-34.62 0L396 210.18l-76.164-76.164c-9.56-9.56-25.06-9.56-34.62 0-9.56 9.56-9.56 25.06 0 34.62L361.38 244.8l-76.164 76.165c-9.56 9.56-9.56 25.06 0 34.62 9.56 9.56 25.06 9.56 34.62 0L396 279.42l76.164 76.165c9.56 9.56 25.06 9.56 34.62 0 9.56-9.56 9.56-25.06 0-34.62L430.62 244.8l76.164-76.163c9.56-9.56 9.56-25.06 0-34.62z"></path>
                    </svg>
                </button>
            </div>
        </div>

    </template>
    <div class="px-4 py-8 md:flex-1 md:p-12 md:overflow-y-auto"
         scroll-region="">
        <div x-data="{
        organization_name:$wire.form.name
        }">
            <h1 class="mb-8 text-3xl font-bold"><a class="text-indigo-400 hover:text-indigo-600"
                                                   href="/organizations">Organizations</a><span
                    class="text-indigo-400 font-medium">/</span>
                <span x-html="organization_name"></span>
            </h1>
            <div class="max-w-3xl bg-white rounded-md shadow overflow-hidden">
                <form wire:submit="save">
                    <div class="flex flex-wrap -mb-8 -mr-6 p-8">
                        <div class="pb-8 pr-6 w-full lg:w-1/2">
                            <label class="form-label"
                                   for="text-input-7125169c-f0d4-4660-9ec1-2371fdbb1ea2">Name:</label>
                            <input id="text-input-7125169c-f0d4-4660-9ec1-2371fdbb1ea2"
                                   class="form-input"
                                   type="text"
                                   x-model="organization_name"
                                   wire:model.blur="form.name"
                            >
                            @error("form.name")

                            <span class="text-red-500">{{$message}}</span>

                            @enderror
                        </div>
                        <div class="pb-8 pr-6 w-full lg:w-1/2">
                            <label class="form-label"
                                   for="text-input-7af247c0-2f45-4fd1-a651-a7a1ca2b3bb4">Email:</label>
                            <input id="text-input-7af247c0-2f45-4fd1-a651-a7a1ca2b3bb4"
                                   class="form-input"
                                   type="text"
                                   wire:model.blur="form.email">
                            @error("form.email")

                            <span class="text-red-500">{{$message}}</span>

                            @enderror
                        </div>
                        <div class="pb-8 pr-6 w-full lg:w-1/2">
                            <label class="form-label"
                                   for="text-input-f5ebd790-0c20-4e6e-992e-bed7c7c53295">Phone:</label>
                            <input id="text-input-f5ebd790-0c20-4e6e-992e-bed7c7c53295"
                                   class="form-input"
                                   type="text"
                                   wire:model.blur="form.phone">

                            @error("form.phone")

                            <span class="text-red-500">{{$message}}</span>

                            @enderror
                        </div>
                        <div class="pb-8 pr-6 w-full lg:w-1/2">
                            <label class="form-label"
                                   for="text-input-ad27f55c-806a-4237-9856-d492737bd583">Address:</label>
                            <input id="text-input-ad27f55c-806a-4237-9856-d492737bd583"
                                   class="form-input"
                                   type="text"
                                   wire:model.blur="form.address">
                            @error("form.address")

                            <span class="text-red-500">{{$message}}</span>

                            @enderror
                        </div>
                        <div class="pb-8 pr-6 w-full lg:w-1/2">
                            <label class="form-label"
                                   for="text-input-100272d8-225e-4b2b-a551-de26c45a5287">City:</label>
                            <input id="text-input-100272d8-225e-4b2b-a551-de26c45a5287"
                                   class="form-input"
                                   type="text"
                                   wire:model.blur="form.city">
                            @error("form.city")

                            <span class="text-red-500">{{$message}}</span>

                            @enderror
                        </div>
                        <div class="pb-8 pr-6 w-full lg:w-1/2">
                            <label class="form-label"
                                   for="text-input-65113d09-63c4-4b41-bd73-82aa54baad78">Province/State:</label>
                            <input id="text-input-65113d09-63c4-4b41-bd73-82aa54baad78"
                                   class="form-input"
                                   type="text"
                                   wire:model.blur="form.region">

                            @error("form.region")

                            <span class="text-red-500">{{$message}}</span>

                            @enderror
                        </div>
                        <div class="pb-8 pr-6 w-full lg:w-1/2">
                            <label class="form-label"
                                   for="select-input-f7e0fabc-6161-47c8-9d2f-a1972054fde4">Country:</label>
                            <select id="select-input-f7e0fabc-6161-47c8-9d2f-a1972054fde4"
                                    class="form-select"
                                    wire:model.change="form.country">
                                <option></option>
                                <option value="CA">Canada</option>
                                <option value="US">United States</option>
                            </select>

                            @error("form.country")

                            <span class="text-red-500">{{$message}}</span>

                            @enderror

                        </div>
                        <div class="pb-8 pr-6 w-full lg:w-1/2">
                            <label class="form-label"
                                   for="text-input-8b5d0b5f-fd26-497f-80b4-2beddcd719aa">Postal code:</label>
                            <input id="text-input-8b5d0b5f-fd26-497f-80b4-2beddcd719aa"
                                   class="form-input"
                                   type="text"
                                   wire:model.blur="form.postal_code">

                            @error("form.postal_code")

                            <span class="text-red-500">{{$message}}</span>

                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100">
                        <button class="flex items-center btn-indigo ml-auto"
                                type="submit">
                            <template x-on:organization-updated="spinning">
                                <div x-data="{
                                init(){
                                    setTimeout(function(){
                                       spinning = false;
                                    }, 500)
                                }
                            }">
                                    <div class="btn-spinner mr-2"></div>
                                </div>
                            </template>
                            Update Organization
                        </button>
                    </div>
                </form>
                <form wire:submit="destroy">
                    <button class="text-red-600 hover:underline"
                            tabindex="-1"
                            type="submit">Delete Organization
                    </button>
                </form>
            </div>
            <h2 class="mt-12 text-2xl font-bold">Contacts</h2>
            <div class="mt-6 bg-white rounded shadow overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <tr class="text-left font-bold">
                        <th class="pb-4 pt-6 px-6">Name</th>
                        <th class="pb-4 pt-6 px-6">City</th>
                        <th class="pb-4 pt-6 px-6"
                            colspan="2">Phone
                        </th>
                    </tr>
                    @foreach($organization->contacts as $contact)
                        <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
                            <td class="border-t">
                                <a class="flex items-center px-6 py-4 focus:text-indigo-500"
                                   href="/contacts/{{ $contact->id }}/edit">{{ $contact->name }}</a>
                            </td>
                            <td class="border-t">
                                <a class="flex items-center px-6 py-4"
                                   tabindex="-1"
                                   href="/contacts/{{ $contact->id }}/edit">{{ $contact->city }}</a>
                            </td>
                            <td class="border-t">
                                <a class="flex items-center px-6 py-4"
                                   tabindex="-1"
                                   href="/contacts/{{ $contact->id }}/edit">{{ $contact->phone }}</a>
                            </td>
                            <td class="w-px border-t">
                                <a class="flex items-center px-4"
                                   tabindex="-1"
                                   href="/contacts/{{ $contact->id }}/edit">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20"
                                         class="block w-6 h-6 fill-gray-400">
                                        <polygon
                                            points="12.95 10.707 13.657 10 8 4.343 6.586 5.757 10.828 10 6.586 14.243 8 15.657 12.95 10.707"></polygon>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</main>
