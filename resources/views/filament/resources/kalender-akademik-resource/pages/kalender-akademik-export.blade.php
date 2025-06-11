<x-filament-panels::page>
    <form class="space-y-8" action="#" method="POST" novalidate>
        <div>
            <label for="tahunAjaran" class="block mb-2 text-lg font-semibold text-gray-900">Option One</label>
            <select id="tahunAjaran" name="selectOne" required
                class="w-full rounded-xl border border-gray-300 bg-white py-3 px-4 text-gray-900 text-base focus:border-black focus:ring-2 focus:ring-black transition duration-300 ease-in-out">
                <option value="" disabled selected>Select option one</option>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>
        <div>
            <label for="selectTwo" class="block mb-2 text-lg font-semibold text-gray-900">Option Two</label>
            <select id="selectTwo" name="selectTwo" required
                class="w-full rounded-xl border border-gray-300 bg-white py-3 px-4 text-gray-900 text-base focus:border-black focus:ring-2 focus:ring-black transition duration-300 ease-in-out">
                <option value="" disabled selected>Select option two</option>
                <option value="optionA">Option A</option>
                <option value="optionB">Option B</option>
                <option value="optionC">Option C</option>
            </select>
        </div>
        <button type="submit"
            class="w-full py-4 rounded-xl bg-black text-white font-semibold text-lg hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-black transition duration-300 ease-in-out">
            Submit
        </button>
    </form>
</x-filament-panels::page>
