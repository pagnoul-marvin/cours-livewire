<div x-data="{open : @entangle('isOpen')}" x-show="open" class="fixed top-0 bg-gray-200 w-1/2 right-0 h-full z-1"
     x-transition:enter="transition ease-out duration-300 transform"
     x-transition:enter-start="opacity-0 translate-x-full"
     x-transition:enter-end="opacity-100 translate-x-0"
     x-transition:leave="transition ease-in duration-200 transform"
     x-transition:leave-start="opacity-100 translate-x-0"
     x-transition:leave-end="opacity-0 translate-x-full">

    <button class="bg-red-500 p-6" type="button" wire:click="closeModal">Close</button>

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

            <div>

                <input type="hidden" wire:model.blur="form.account_id">

            </div>

            <div class="flex items-center px-8 py-4">

                <button type="submit" class="flex items-center btn-indigo ml-auto">Create</button>

            </div>
        </div>
    </form>

</div>

