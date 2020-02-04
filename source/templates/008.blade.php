@extends('_layouts.master')

@section('body')

<div class="my-16 mx-24">
    <div class="flex justify-between">
        <div class="w-1/2">
            <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="w-40 mt-8">
        </div>
        <div class="w-1/2 flex justify-end">
            <div class="flex flex-col text-gray-600">
                <p>Ninja Sample</p>
                <p>Contact@InvoiceNinja.com</p>
                <p>1-800-555-Ninja</p>
            </div>
            <div class="flex flex-col text-gray-600 ml-8">
                <p>123 Ninja Blvd.</p>
                <p>NinjaLand, 87315</p>
                <p>United States</p>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between mt-24">
        <div class="w-1/2 flex flex-col">
            <span>Invoice issued to</span>
            <section class="text-orange-600 mt-2">
                <p class="font-semibold">Gold & Wong Associates</p>
                <p>654 Wall Street, 101D</p>
                <p>New York, New York 11213</p>
                <p>United States</p>
                <p>demo@invoiceninja.com</p>
            </section>
        </div>
        <div class="w-1/2 ml-40 bg-orange-600 px-4 py-4 h-auto">
            <div class="flex flex-col text-white">
                <section class="flex">
                    <span class="w-1/2 mr-3">Invoice Number</span>
                    <span class="font-semibold">20802</span>
                </section>
                <section class="flex">
                    <span class="w-1/2 mr-3">PO Number</span>
                    <span>654B</span>
                </section>
                <section class="flex">
                    <span class="w-1/2 mr-3">Invoice Date</span>
                    <span>Sep 6, 2014</span>
                </section>
                <section class="flex">
                    <span class="w-1/2 mr-3">Due Date</span>
                    <span>Sep 6, 2014</span>
                </section>
                <section class="flex">
                    <span class="w-1/2 mr-3">Balance Due</span>
                    <span>$4,518.00</span>
                </section>
            </div>
        </div>
    </div>
    <table class="w-full table-auto my-20">
        <thead class="text-left bg-blue-900 rounded-lg">
            <tr>
                <th class="font-semibold text-white px-4 py-5">Item</th>
                <th class="font-semibold text-white px-4 py-2">Description</th>
                <th class="font-semibold text-white px-4 py-2 text-right">Unit Cost</th>
                <th class="font-semibold text-white px-4 py-2 text-right">Quantity</th>
                <th class="font-semibold text-white px-4 py-2 text-right">Line Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-gray-100">
                <td ref="item" class="border-4 border-white text-orange-700 px-4 py-4">Painting Service</td>
                <td ref="description" class="border-4 border-white px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="border-4 border-white text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="border-4 border-white text-right px-4 py-4">1</td>
                <td ref="line.total" class="border-4 border-white text-orange-700 text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="bg-gray-200">
                <td ref="item" class="border-4 border-white text-orange-700 px-4 py-4">Repair Service</td>
                <td ref="description" class="border-4 border-white px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="border-4 border-white text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="border-4 border-white text-right px-4 py-4">1</td>
                <td ref="line.total" class="border-4 border-white text-orange-700 text-right px-4 py-4">$170.00</td>
            </tr>
            <tr class="bg-gray-100">
                <td ref="item" class="border-4 border-white text-orange-700 px-4 py-4">Painting Service</td>
                <td ref="description" class="border-4 border-white px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="border-4 border-white text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="border-4 border-white text-right px-4 py-4">1</td>
                <td ref="line.total" class="border-4 border-white text-orange-700 text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="bg-gray-200">
                <td ref="item" class="border-4 border-white text-orange-700 px-4 py-4">Repair Service</td>
                <td ref="description" class="border-4 border-white px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="border-4 border-white text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="border-4 border-white text-right px-4 py-4">1</td>
                <td ref="line.total" class="border-4 border-white text-orange-700 text-right px-4 py-4">$170.00</td>
            </tr>
            <tr class="bg-gray-200">
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
                <td ref="terms" class="bg-blue-900 px-4 py-3">
                    <span class="text-white">Balance Due</span>
                </td>
                <td ref="terms" class="bg-blue-900 px-4 py-3 text-right">
                    <span class="text-white">$3,060.00</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection