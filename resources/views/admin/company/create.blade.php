<x-admin-layout>
    <x-slot name="header">
        {{__('Create Company')}} 
     </x-slot>

     <x-admin.form.card>
        <form action="{{route('admin.companies.store')}}" method="POST">
            @csrf
            <x-admin.form.field>
                <x-admin.form.lable for="name">Company Name</x-admin.form.lable>
                <x-admin.form.input name="name" id="name" type="text" :value="(old('name'))"></x-admin.form.input>
                <x-admin.form.error name="name"></x-admin.form.error>
            </x-admin.form.field>

            <x-admin.form.field>
                <x-admin.form.lable for="location">Location</x-admin.form.lable>
                <x-admin.form.input name="location" id="location" type="text" :value="(old('location'))"></x-admin.form.input>
                <x-admin.form.error name="location"></x-admin.form.error>
            </x-admin.form.field>

            <x-admin.form.field>
                <x-admin.form.lable for="phone">Phone</x-admin.form.lable>
                <x-admin.form.input name="phone" id="phone" type="tel" :value="(old('phone'))"></x-admin.form.input>
                <x-admin.form.error name="phone"></x-admin.form.error>
            </x-admin.form.field>

            <x-admin.form.field>
                <x-admin.form.lable for="email">Email</x-admin.form.lable>
                <x-admin.form.input name="email" id="email" type="email" :value="(old('email'))"></x-admin.form.input>
                <x-admin.form.error name="email"></x-admin.form.error>
            </x-admin.form.field>

            <x-admin.form.field>
                <x-admin.form.lable for="website">Website</x-admin.form.lable>
                <x-admin.form.input name="website" id="website" type="url" :value="(old('website'))"></x-admin.form.input>
                <x-admin.form.error name="website"></x-admin.form.error>
            </x-admin.form.field>

            <x-admin.form.field>
                <x-admin.form.lable for="description">Description</x-admin.form.lable>
                <x-admin.form.textarea name="description" id="description" :value="(old('description'))"></x-admin.form.textarea>
                <x-admin.form.error name="description"></x-admin.form.error>
            </x-admin.form.field>

            <x-admin.button type="submin" variant="primary">
                <svg class="h-7 w-7 fill-white mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M160 144C151.2 144 144 151.2 144 160L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 237.3C496 233.1 494.3 229 491.3 226L416 150.6L416 240C416 257.7 401.7 272 384 272L224 272C206.3 272 192 257.7 192 240L192 144L160 144zM240 144L240 224L368 224L368 144L240 144zM96 160C96 124.7 124.7 96 160 96L402.7 96C419.7 96 436 102.7 448 114.7L525.3 192C537.3 204 544 220.3 544 237.3L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 160zM256 384C256 348.7 284.7 320 320 320C355.3 320 384 348.7 384 384C384 419.3 355.3 448 320 448C284.7 448 256 419.3 256 384z"/></svg>
                Save
            </x-admin.button>
        </form>
     </x-admin.form.card>

     </div>
</x-admin-layout>