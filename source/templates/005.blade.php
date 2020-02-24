@extends('_layouts.master')

@section('body')
<div class="px-12 py-16">
    <div class="flex">
        <div class="w-1/2 border-l pl-4 border-black mr-4">
            <p class="font-semibold uppercase text-yellow-600">From:</p>
            <div class="flex">
                <div class="flex flex-col mr-5">
                    <span>Ninja Sample</span>
                    <span>Contact@InvoiceNinja.com</span>
                    <span>1-800-555-Ninja</span>
                </div>
                <div class="flex flex-col">
                    <span>123 Ninja blvd.</span>
                    <span>NinjaLand, 97315</span>
                    <span>United States</span>
                </div>
            </div>
        </div>
        <div class="w-1/3 border-l pl-4 border-black flex flex-col">
            <p class="font-semibold uppercase text-yellow-600">To:</p>
            <span class="font-semibold">Michael Auto Depot</span>
            <span>1121 Manhatten Blvd</span>
            <span>Pitssburg, PA 45682</span>
            <span>United States</span>
            <span>demo@invoiceninja.com</span>
        </div>
        <div class="w-1/3 mt-5">
            <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="w-48">
        </div>
    </div>
    <div class="flex flex-col mx-6 mt-10">
        <h1 class="font-semibold uppercase text-6xl">Invoice</h1>
        <div class="flex mt-1">
            <span class="font-semibold uppercase text-yellow-600">Invoice No. 2008027</span>
            <div class="ml-4">
                <span class="uppercase">Invoice date:</span>
                <span>Sep 6, 2014</span>
            </div>
            <div class="ml-10">
                <span class="uppercase">Payment due:</span>
                <span>Sep 18, 2014</span>
            </div>
            <div class="ml-4">
                <span class="uppercase">Amount due:</span>
                <span class="text-yellow-600">$1,102.95</span>
            </div>
        </div>
    </div>
    <table class="w-full table-auto mt-24">
        <thead class="text-left">
            <tr>
                <th class="px-4 py-2 uppercase font-semibold border-l-2 border-black">Item</th>
                <th class="px-4 py-2 uppercase font-semibold border-l-2 border-black">Description</th>
                <th class="px-4 py-2 uppercase font-semibold border-l-2 border-black">Unit Cost</th>
                <th class="px-4 py-2 uppercase font-semibold border-l-2 border-black">Quantity</th>
                <th class="px-4 py-2 uppercase font-semibold border-l-2 border-black text-right">Line Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td ref="item" class="border-l-2 border-black px-4 py-4">Painting Service</td>
                <td ref="description" class="border-l-2 border-black px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right border-l-2 border-black px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right border-l-2 border-black px-4 py-4">1</td>
                <td ref="line.total" class="text-right border-l-2 border-black px-4 py-4">$885.00</td>
            </tr>
            <tr>
                <td ref="item" class="border-l-2 border-black px-4 py-4">Repair Service</td>
                <td ref="description" class="border-l-2 border-black px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right border-l-2 border-black px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right border-l-2 border-black px-4 py-4">1</td>
                <td ref="line.total" class="text-right border-l-2 border-black px-4 py-4">$170.00</td>
            </tr>
            <tr>
                <td ref="item" class="border-l-2 border-black px-4 py-4">Painting Service</td>
                <td ref="description" class="border-l-2 border-black px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right border-l-2 border-black px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right border-l-2 border-black px-4 py-4">1</td>
                <td ref="line.total" class="text-right border-l-2 border-black px-4 py-4">$885.00</td>
            </tr>
            <tr>
                <td ref="item" class="border-l-2 border-black px-4 py-4">Repair Service</td>
                <td ref="description" class="border-l-2 border-black px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right border-l-2 border-black px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right border-l-2 border-black px-4 py-4">1</td>
                <td ref="line.total" class="text-right border-l-2 border-black px-4 py-4">$170.00</td>
            </tr>
        </tbody>
    </table>
    <div class="flex justify-between mt-8">
        <div class="w-1/2">
            <div class="flex flex-col">
                <p>Wedding photos will be available approximately 1 month after the wedding date. Thank you for your patience!</p>
                <div class="pt-4">
                    <p class="font-bold">Terms</p>
                    <p>Payment must be met within 21 days of the day of service.</p>
                </div>
            </div>
        </div>
        <div class="w-1/3 flex flex-col">
            <div class="flex px-3 mt-6">
                <section class="w-1/2 text-right flex flex-col">
                    <span>Subtotal</span>
                    <span>Discount</span>
                    <span>Paid To Date</span>
                </section>
                <section class="w-1/2 text-right flex flex-col">
                    <span>$0</span>
                    <span>$0</span>
                    <span>$0</span>
                </section>
            </div>
            <section class="flex bg-black text-white px-3 mt-1">
                <p class="w-1/2 text-right">Balance Due</p>
                <p class="text-right w-1/2">$0.00</p>
            </section>
        </div>

    </div>
</div>
@endsection