@extends('_layouts.master')

@section('body')

<div class="bg-orange-600 flex justify-between py-12 px-12">
    <div class="w-1/2">
        <h1 class="text-white font-bold text-5xl">Ninja Sample</h1>
    </div>
    <div class="w-1/2 flex justify-end">
        <div class="w-56 flex flex-col text-white">
            <span>Invoice Number</span>
            <span>Invoice Date</span>
            <span>Due Date</span>
            <span>Balance Due</span>
        </div>
        <div class="w-32 flex flex-col text-left text-white">
            <span class="font-semibold">041-A</span>
            <span>Nov 2, 2014</span>
            <span>Jan 1, 2015</span>
            <span>$405.00</span>
        </div>
    </div>
</div>

<div class="flex justify-between px-12 pt-12">
    <div class="w-1/2">
        <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="w-48">
    </div>
    <div class="w-1/2 flex justify-end">
        <div class="w-56 flex flex-col">
            <p class="font-bold">Smith Web & Design</p>
            <p>6619 Canterbury Drive</p>
            <p>Collegeville, Pennsylvania 19426</p>
            <p>United States</p>
            <p>demo@invoiceninja.com</p>
        </div>
        <div class="w-32">
            <!-- -->
        </div>
    </div>
</div>

<div class="px-12 pt-5 pb-20">
    <table class="w-full table-auto mt-8">
        <thead class="text-left text-white bg-gray-900">
            <tr>
                <th class="px-4 py-2">Item</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Unit Cost</th>
                <th class="px-4 py-2">Quantity</th>
                <th class="px-4 py-2">Line Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td ref="item" class="font-bold border-t border-b border-gray-900 px-4 py-4">Painting Service</td>
                <td ref="description" class="border-t border-b border-gray-900 px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="border-t border-b border-gray-900 px-4 py-4">885.00</td>
                <td ref="quantity" class="border-t border-b border-gray-900 px-4 py-4">1</td>
                <td ref="line.total" class="border-t border-b border-gray-900 px-4 py-4">$885.00</td>
            </tr>
            <tr>
                <td ref="item" class="font-bold border-t border-b border-gray-900 px-4 py-4">Repair Service</td>
                <td ref="description" class="border-t border-b border-gray-900 px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="border-t border-b border-gray-900 px-4 py-4">170.00</td>
                <td ref="quantity" class="border-t border-b border-gray-900 px-4 py-4">1</td>
                <td ref="line.total" class="border-t border-b border-gray-900 px-4 py-4">$170.00</td>
            </tr>
            <tr>
                <td ref="item" class="font-bold border-t border-b border-gray-900 px-4 py-4">Painting Service</td>
                <td ref="description" class="border-t border-b border-gray-900 px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="border-t border-b border-gray-900 px-4 py-4">885.00</td>
                <td ref="quantity" class="border-t border-b border-gray-900 px-4 py-4">1</td>
                <td ref="line.total" class="border-t border-b border-gray-900 px-4 py-4">$885.00</td>
            </tr>
            <tr>
                <td ref="item" class="font-bold border-t border-b border-gray-900 px-4 py-4">Repair Service</td>
                <td ref="description" class="border-t border-b border-gray-900 px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="border-t border-b border-gray-900 px-4 py-4">170.00</td>
                <td ref="quantity" class="border-t border-b border-gray-900 px-4 py-4">1</td>
                <td ref="line.total" class="border-t border-b border-gray-900 px-4 py-4">$170.00</td>
            </tr>
        </tbody>
    </table>

    <div class="flex px-4 mt-6 w-full">
        <div class="w-1/2">
            All design content is copyrighted until payment is complete.
        </div>
        <div class="w-1/2 flex">
            <div class="w-1/2 text-right flex flex-col">
                <span>Subtotal</span>
                <span>Paid to Date</span>
            </div>
            <div class="w-1/2 text-right flex flex-col">
                <span>$2,311.00</span>
                <span>$10.00</span>
            </div>
        </div>
    </div>

    <div class="flex px-4 mt-4 w-full items-end mt-5">
        <div class="w-1/2">
            <p class="font-semibold">Terms</p>
            Net 30
        </div>
    </div>

    <div class="mt-8 px-4 py-2 bg-gray-900 text-white">
        <div class="w-1/2"></div>
        <div class="w-auto flex justify-end">
            <div class="w-56">
                <p class="font-bold">Balance Due</p>
            </div>
            <p>$405.00</p>
        </div>
    </div>

</div>

<div class="bg-orange-600 flex justify-between py-8 px-12">
    <div class="w-1/2">
        <!-- // -->
    </div>
    <div class="w-1/2 flex justify-end">
        <div class="w-56 flex flex-col text-white">
            <span>Ninja Sample</span>
            <span>Contact@InvoiceNinja.com</span>
            <span>1-800-555-Ninja</span>
        </div>
        <div class="w-32 flex flex-col text-left text-white">
            <span class="font-semibold">123 Ninja Blvd.</span>
            <span>NinjaLand, 97315</span>
            <span>United States</span>
        </div>
    </div>
</div>

@endsection