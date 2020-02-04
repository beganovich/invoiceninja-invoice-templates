@extends('_layouts.master')

@section('body')

<style>
    #imageContainer {
        background-image: url('/assets/images/006-photographer-2.jpg');
        background-size: cover;
    }
</style>

<div class="px-16 py-10">
    <div class="flex justify-end">
        <span class="text-orange-700">Invoice NO. D-085</span>
        <span class="ml-6">Invoice Date: Jan 7, 2015</span>
    </div>
    <div class="flex items-center justify-between mt-2s">
        <div ref="logo">
            <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="w-40">
        </div>
        <div class="flex">
            <span class="uppercase font-semibold">Payment due: </span>
            <span class="ml-4">Mar 10, 2015</span>
            <span class="ml-4 uppercase font-semibold">Amount due:</span>
            <span class="ml-4 text-orange-700">$3,060.00</span>
        </div>
    </div>
</div>
<div class="flex content-center flex-wrap bg-gray-200 h-auto p-16" id="imageContainer">
    <div class="flex flex-col">
        <div class="flex">
            <p class="uppercase text-orange-800">To:</p>
            <div class="flex flex-col ml-2">
                <span class="font-semibold">Koala Photography</span>
                <span>872 Samson Street</span>
                <span>San Antonio, Texas 95175</span>
                <span>United States</span>
                <span>demo@invoiceninja.com</span>
            </div>
        </div>
        <div class="flex mt-5">
            <p class="uppercase text-orange-800">From:</p>
            <div class="flex flex-col ml-2">
                <span class="font-semibold">Ninja Sample</span>
                <span>Contact@InvoiceNinja.com</span>
                <span>1-800-555-Ninja</span>
                <span>123 Ninja Blvd.</span>
                <span>NinjaLand, 97315</span>
                <span>United States</span>
            </div>
        </div>
    </div>
</div>
<div class="px-16 py-16">
    <table class="w-full table-auto">
        <thead class="text-left border-b-4 border-black">
            <tr>
                <th class="font-normal px-4 py-2 uppercase">Item</th>
                <th class="font-normal px-4 py-2 uppercase">Description</th>
                <th class="font-normal px-4 py-2 text-right uppercase">Unit Cost</th>
                <th class="font-normal px-4 py-2 text-right uppercase">Quantity</th>
                <th class="font-normal px-4 py-2 uppercase text-right">Line Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Painting Service</td>
                <td ref="description" class="px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Repair Service</td>
                <td ref="description" class="px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$170.00</td>
            </tr>
            <tr class="border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Painting Service</td>
                <td ref="description" class="px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Repair Service</td>
                <td ref="description" class="px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$170.00</td>
            </tr>
            <tr class="border-b border-black">
                <td colspan="3" ref="note" class="px-4 py-4">Passed Car Inspection. Vehicle overall in good condition. <br> Return for tune up for 10 months to 1 year.</td>
                <td ref="quantity" class="px-4 py-4">
                    <p>Subtotal</p>
                    <p>Discount 5%</p>
                    <p>Paid to Date</p>
                </td>
                <td ref="line.total" class="px-4 py-4 text-right">
                    <p>$1,161.00</p>
                    <p>$58.05</p>
                    <p>$0.00</p>
                </td>
            </tr>
            <tr>
                <td colspan="5" ref="terms" class="px-4 py-4">
                    <p ref="terms" class="font-semibold">Terms</p>
                    <p>All repairs guaranteed for up to 6 months. Please call us with <br> any questions or concerns regarding repairs or any other issues.</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" ref="terms" class="px-4 py-4"></td>
                <td ref="terms" class="px-4 py-1 bg-orange-700">
                    <span class="text-white">Balance Due</span>
                </td>
                <td ref="terms" class="px-4 py-1 bg-orange-700 text-right">
                    <span class="text-white">$3,060.00</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection