@extends('_layouts.master')

@section('body')

<div class="py-16 mx-16">
    <div class="flex justify-between">
        <div class="w-2/3 flex">
            <div>
                <p class="font-semibold">Berg Builders Inc.</p>
                <p>987 Conway Blvd.</p>
                <p>Los Angeles, California 90210</p>
                <p>United States</p>
                <p>demo@invoiceninja.com</p>
            </div>
            <div class="ml-6">
                <p>Ninja Sample</p>
                <p>Contact@InvoiceNinja.com</p>
                <p>1-800-555-Ninja</p>
            </div>
            <div class="ml-6">
                <p>123 Ninja Blvd.</p>
                <p>NinjaLand, 97315</p>
                <p>United States</p>
            </div>
        </div>
        <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="h-24 ml-2">
    </div>
    <div class="flex mt-8">
        <div class="w-2/3 flex">
            <h1 class="text-6xl uppercase font-semibold">Invoice</h1>
            <i class="ml-4 text-6xl text-pink-700">#1564</i>
        </div>
        <div class="w-1/3">
            <div class="flex flex-col">
                <section class="flex">
                    <span class="w-1/2 mr-2">Invoice Number</span>
                    <span class="font-semibold">20802</span>
                </section>
                <section class="flex">
                    <span class="w-1/2 mr-2">PO Number</span>
                    <span>654B</span>
                </section>
                <section class="flex">
                    <span class="w-1/2 mr-2">Invoice Date</span>
                    <span>Sep 6, 2014</span>
                </section>
                <section class="flex">
                    <span class="w-1/2 mr-2">Due Date</span>
                    <span>Sep 6, 2014</span>
                </section>
                <section class="flex">
                    <span class="w-1/2 mr-2">Balance Due</span>
                    <span>$4,518.00</span>
                </section>
            </div>
        </div>
    </div>
    <table class="w-full table-auto mt-20 border-t-4 border-b-4 border-pink-700 bg-white">
        <thead class="text-left rounded-lg">
            <tr>
                <th class="font-medium uppercase text-pink-700 text-xl px-4 py-5">Item</th>
                <th class="font-medium uppercase text-pink-700 text-xl px-4 py-2">Description</th>
                <th class="font-medium uppercase text-pink-700 text-xl px-4 py-2 text-right">Unit Cost</th>
                <th class="font-medium uppercase text-pink-700 text-xl px-4 py-2 text-right">Quantity</th>
                <th class="font-medium uppercase text-pink-700 text-xl px-4 py-2 text-right">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-gray-200">
                <td ref="item" class="font-semibold px-4 py-4">Painting Service</td>
                <td ref="description" class="px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="bg-gray-100">
                <td ref="item" class="font-semibold px-4 py-4">Repair Service</td>
                <td ref="description" class="px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-right px-4 py-4">$170.00</td>
            </tr>
            <tr class="bg-gray-200">
                <td ref="item" class="font-semibold px-4 py-4">Painting Service</td>
                <td ref="description" class="px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="bg-gray-100">
                <td ref="item" class="font-semibold px-4 py-4">Repair Service</td>
                <td ref="description" class="px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-right px-4 py-4">$170.00</td>
            </tr>
            <tr>
                <td colspan="3" ref="note" class="px-4 py-4">Thank you for choosing Berg Builders.</td>
                <td ref="quantity" class="px-4 py-4">
                    <p>Subtotal</p>
                    <p>Paid to Date</p>
                </td>
                <td ref="line.total" class="px-4 py-4 text-right">
                    <p>$1,161.00</p>
                    <p>$0.00</p>
                </td>
            </tr>
            <tr>
                <td colspan="5" ref="terms" class="px-4 py-4">
                    <p ref="terms" class="font-semibold">Terms</p>
                    <p>N 21</p>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="w-full flex justify-end mt-4">
        <p>Balance Due</p>
        <p class="ml-8 text-pink-700 font-semibold">$5,280.00</p>
    </div>
</div>

@endsection