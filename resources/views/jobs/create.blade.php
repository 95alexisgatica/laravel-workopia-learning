<x-layout>
    <x-slot name=title> Create Job </x-slot>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
        <h2 class="text-4xl text-center font-bold mb-4">
            Create Job Listing
        </h2>
        <form method="POST" action="/jobs" enctype="multipart/form-data">
            @csrf
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Job Info
            </h2>

            <x-inputs.text id="title" name="title" label="Job Title" placeholder="Software Developer" />

            <div class="mb-4">
                <x-inputs.text-area id="description" name="description" label="Job Description"
                    placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team..." />
            </div>

            <div class="mb-4">
                <x-inputs.text id="salary" name="salary" label="Salary" placeholder="$60,000 - $80,000" />
            </div>

            <div class="mb-4">
                <x-inputs.text-area id="requirements" name="requirements" label="Requirements"
                    placeholder="Bachelor's degree in Computer Science" />
            </div>

            <div class="mb-4">
                <x-inputs.text-area id="benefits" name="benefits" label="Benefits"
                    placeholder="Health insurance, 401k, paid time off" />
            </div>

            <div class="mb-4">
                <x-inputs.text id="tags" name="tags" label="Tags (comma separated)"
                    placeholder="PHP, Laravel, Remote" />
            </div>

            <div class="mb-4">
                <x-inputs.select id="job_type" name="job_type" label="Job Type" value="{{ old('job_type') }}"
                    :options="[
                        'Full-Time' => 'Full-Time',
                        'Part-Time' => 'Part-Time',
                        'Contract' => 'Contract',
                        'Internship' => 'Internship',
                        'Volunteer' => 'Volunteer',
                        'On-call' => 'On-call',
                    ]" />
            </div>

            <div class="mb-4">
                <x-inputs.select id="remote" name="remote" label="Remote" value="{{ old('remote') }}"
                    :options="[0 => 'No', 1 => 'Yes']" />
            </div>

            <div class="mb-4">
                <x-inputs.text id="address" name="address" label="Address" placeholder="123 Main St" />
            </div>

            <div class="mb-4">
                <x-inputs.text id="city" name="city" label="City" placeholder="Albany" />
            </div>

            <div class="mb-4">
                <x-inputs.text id="state" name="state" label="State" placeholder="NY" />
            </div>

            <div class="mb-4">
                <x-inputs.text id="zip_code" name="zip_code" label="Zip Code" placeholder="12345" />
            </div>

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info
            </h2>

            <div class="mb-4">
                <x-inputs.text id="company_name" name="company_name" label="Company Name" placeholder="Acme Inc." />
            </div>

            <div class="mb-4">
                <x-inputs.text-area id="company_description" name="company_description" label="Company Description"
                    placeholder="Company Description" />
            </div>

            <div class="mb-4">
                <x-inputs.text id="company_website" name="company_website" type="url" label="Company Website"
                    placeholder="https://www.acme.com" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="contact_phone">Contact Phone</label>
                <input id="contact_phone" type="text" name="contact_phone"
                    class="w-full px-4 py-2 border rounded focus:outline-none" placeholder="Enter phone" />
            </div>

            <div class="mb-4">
                <x-inputs.text id="contact_email" name="contact_email" label="Contact Email"
                    placeholder="Enter contact email" />
            </div>

            <div class="mb-4">
                <x-inputs.file id="company_logo" name="company_logo" label="Company Logo" />
            </div>

            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>
        </form>
    </div>
</x-layout>
