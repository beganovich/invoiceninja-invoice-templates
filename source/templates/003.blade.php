@extends('_layouts.master')

@section('body')

<div class="flex static bg-gray-800 p-12">
    <div class="w-1/2">
        <div class="absolute bg-white pt-10 px-10 pb-16 inline-block align-middle">
            <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="bg-white w-48">
        </div>
    </div>
    <div class="w-1/2 flex">
        <div class="w-64 flex flex-col text-white">
            <span class="my-1">Ninja Sample</span>
            <span class="my-1">Contact@InvoiceNinja.com</span>
            <span class="my-1">1-800-555-Ninja</span>
        </div>
        <div class="flex flex-col text-white">
            <span class="my-1">123 Ninja Blvd.</span>
            <span class="my-1">NinjaLand, 97315</span>
            <span class="my-1">United States</span>
        </div>
    </div>
</div>

<div class="flex mt-32 pl-12">
    <div class="w-1/2 mr-40 flex flex-col">
        <h2 class="text-2xl uppercase font-semibold text-teal-600 tracking-tight">Your Invoice</h2>
        <p class="font-semibold mt-5">Super Car Cleaners</p>
        <p class="my-1">825 Wissahickon Drive</p>
        <p class="my-1">Baltimore, MAryland 21075</p>
        <p class="my-1">United States</p>
        <p class="my-1">douglasclean@supercarweb.com</p>
    </div>
    <div class="w-1/2">
        <div class="w-full bg-teal-600 px-5 py-3 text-white flex">
            <div class="w-48 flex flex-col text-white">
                <span class="my-1 flex items-center">Invoice Number</span>
                <span class="my-1">PO Number</span>
                <span class="my-1">Invoice Date</span>
                <span class="my-1">Due Date</span>
                <span class="my-1">Balance Due</span>
            </div>
            <div class="w-32 flex flex-col text-white">
                <span class="my-1 font-semibold">041-A</span>
                <span class="my-1">9135</span>
                <span class="my-1">Nov 2, 2014</span>
                <span class="my-1">Jan 1, 2015</span>
                <span class="my-1">$405.00</span>
            </div>
        </div>
    </div>
</div>

<table class="w-full table-auto mt-8">
    <thead class="text-left">
        <tr>
            <th class="px-12 text-2xl px-4 py-2">Item</th>
            <th class="px-12 text-2xl px-4 py-2">Description</th>
            <th class="px-12 text-2xl px-4 py-2">Unit Cost</th>
            <th class="px-12 text-2xl px-4 py-2">Quantity</th>
            <th class="px-12 text-2xl px-4 py-2">Line Total</th>
        </tr>
    </thead>
    <tbody>
        <tr class="bg-gray-200">
            <td ref="item" class="text-teal-600 py-5 pl-12">Painting Service</td>
            <td ref="description" class="py-5 pl-12">25 hours painting</td>
            <td ref="unit.cost" class="py-5 pl-12">885.00</td>
            <td ref="quantity" class="py-5 pl-12">1</td>
            <td ref="line.total" class="py-5 pl-12">$885.00</td>
        </tr>
        <tr>
            <td ref="item" class="text-teal-600 py-5 pl-12">Repair Service</td>
            <td ref="description" class="py-5 pl-12">Sanding and painting dresser</td>
            <td ref="unit.cost" class="py-5 pl-12">170.00</td>
            <td ref="quantity" class="py-5 pl-12">1</td>
            <td ref="line.total" class="py-5 pl-12">$170.00</td>
        </tr>
        <tr class="bg-gray-200">
            <td ref="item" class="text-teal-600 py-5 pl-12">Painting Service</td>
            <td ref="description" class="py-5 pl-12">25 hours painting</td>
            <td ref="unit.cost" class="py-5 pl-12">885.00</td>
            <td ref="quantity" class="py-5 pl-12">1</td>
            <td ref="line.total" class="py-5 pl-12">$885.00</td>
        </tr>
        <tr>
            <td ref="item" class="text-teal-600 py-5 pl-12">Repair Service</td>
            <td ref="description" class="py-5 pl-12">Sanding and painting dresser</td>
            <td ref="unit.cost" class="py-5 pl-12">170.00</td>
            <td ref="quantity" class="py-5 pl-12">1</td>
            <td ref="line.total" class="py-5 pl-12">$170.00</td>
        </tr>
        <tr class="bg-gray-200">
            <td ref="item" class="text-teal-600 py-5 pl-12">Painting Service</td>
            <td ref="description" class="py-5 pl-12">25 hours painting</td>
            <td ref="unit.cost" class="py-5 pl-12">885.00</td>
            <td ref="quantity" class="py-5 pl-12">1</td>
            <td ref="line.total" class="py-5 pl-12">$885.00</td>
        </tr>
    </tbody>
</table>

<div class="flex px-4 mt-6 w-full px-12">
    <div class="w-1/2">
        Thank you for choosing Super Car Cleaners.
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

<div class="flex px-4 mt-4 w-full items-end px-12">
    <div class="w-1/2">
        <p class="font-semibold">Terms</p>
        Net 30
    </div>
    <div class="w-1/2 flex">
        <div class="w-1/2 text-right flex flex-col">
            <span class="text-2xl font-semibold">Balance Due</span>
        </div>
        <div class="w-1/2 text-right flex flex-col">
            <span class="text-2xl text-teal-600 font-semibold">$1,838.00</span>
        </div>
    </div>
</div>

@endsection