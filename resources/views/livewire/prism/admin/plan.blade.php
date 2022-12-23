<div class="container mx-auto px-4 sm:px-8">
    <div class="py-4">


        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">

            <div class="mb-4 flex flex-row items-center justify-between">
                <div class="left"></div>
                <div class="right flex-1 text-right">
                    <x-jet-secondary-button wire:click="create">Add a plan</x-jet-secondary-button>
                </div>
            </div>
        </div>

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow-sm rounded overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr class="bg-white">
                            <th
                                class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Name
                            </th>
                            <th
                                class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                PriceId
                            </th>
                            <th
                                class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Members
                            </th>
                            <th
                                class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Contents
                            </th>
                            <th
                                class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Status
                            </th>
                            <th
                                class="px-5 py-3 border-b border-gray-200  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Action
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach( ($plans ?? []) as $plan )
                        @livewire('prism.admin.plan-item',['plan'=>$plan])
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>


