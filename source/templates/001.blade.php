@extends('_layouts.master')

@section('body')

<div class="mx-16 my-10">
    <div class="flex items-center">
        <div class="w-1/3">
            <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="w-48">
        </div>
        <div class="w-auto flex">
            <div class="mr-10">
                <p class="text-blue-500">Ninja Sample</p>
                <p class="text-gray-600">Contact@InvoiceNinja.com</p>
                <p class="text-gray-600">1-800-555-Ninja</p>
            </div>
            <div>
                <p class="text-gray-600">123 Ninja Blvd.</p>
                <p class="text-gray-600">NinjaLand, 97315</p>
                <p class="text-gray-600">United States</p>
            </div>
        </div>
    </div>

    <h1 class="mt-12 uppercase text-2xl text-blue-500 ml-4">
        Invoice
    </h1>

    <div class="border-b border-gray-400"></div>

    <div class="ml-4 py-4">
        <div class="flex">
            <div class="w-40 flex flex-col">
                <span>Invoice Number</span>
                <span>Invoice Date</span>
                <span>Due Date</span>
                <span>Balance Due</span>
            </div>
            <div class="w-48 flex flex-col">
                <span class="font-semibold" id="invoice.number">00984</span>
                <span id="invoice.date">Sep 8, 2014</span>
                <span id="due.date">Nov 9, 2014</span>
                <span id="balance.due">$1,838.80</span>
            </div>
            <div class="w-56 flex flex-col">
                <span class="font-semibold">Marcus Industries</span>
                <span id="invoice.date">1776 Patrior Blvd., A2</span>
                <span id="due.date">Washington, DC. 44211</span>
                <span id="balance.due">United States</span>
                <span id="balance.due">demo@invoiceninja.com</span>
            </div>
        </div>
    </div>

    <div class="border-b border-gray-400"></div>

    <table class="w-full table-auto mt-8">
        <thead class="text-left">
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
                <td ref="item" class="text-blue-600 border-t border-b border-gray-400 px-4 py-4">Painting Service</td>
                <td ref="description" class="border-t border-b border-gray-400 px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="border-t border-b border-gray-400 px-4 py-4">885.00</td>
                <td ref="quantity" class="border-t border-b border-gray-400 px-4 py-4">1</td>
                <td ref="line.total" class="border-t border-b border-gray-400 px-4 py-4">$885.00</td>
            </tr>
            <tr class="bg-gray-200">
                <td ref="item" class="text-blue-600 border-t border-b border-gray-400 px-4 py-4">Repair Service</td>
                <td ref="description" class="border-t border-b border-gray-400 px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="border-t border-b border-gray-400 px-4 py-4">170.00</td>
                <td ref="quantity" class="border-t border-b border-gray-400 px-4 py-4">1</td>
                <td ref="line.total" class="border-t border-b border-gray-400 px-4 py-4">$170.00</td>
            </tr>
            <tr>
                <td ref="item" class="text-blue-600 border-t border-b border-gray-400 px-4 py-4">Painting Service</td>
                <td ref="description" class="border-t border-b border-gray-400 px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="border-t border-b border-gray-400 px-4 py-4">885.00</td>
                <td ref="quantity" class="border-t border-b border-gray-400 px-4 py-4">1</td>
                <td ref="line.total" class="border-t border-b border-gray-400 px-4 py-4">$885.00</td>
            </tr>
            <tr class="bg-gray-200">
                <td ref="item" class="text-blue-600 border-t border-b border-gray-400 px-4 py-4">Repair Service</td>
                <td ref="description" class="border-t border-b border-gray-400 px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="border-t border-b border-gray-400 px-4 py-4">170.00</td>
                <td ref="quantity" class="border-t border-b border-gray-400 px-4 py-4">1</td>
                <td ref="line.total" class="border-t border-b border-gray-400 px-4 py-4">$170.00</td>
            </tr>
        </tbody>
    </table>

    <div class="flex px-4 mt-6 w-full">
        <div class="w-1/2">
            Thank you for choosing Marcus Industries.
            <br>
            Please call us with any questions.
        </div>
        <div class="w-1/2 flex">
            <div class="w-1/2 text-right flex flex-col">
                <span>Subtotal</span>
                <span>Discount %20</span>
                <span>Paid to Date</span>
            </div>
            <div class="w-1/2 text-right flex flex-col">
                <span>$2,311.00</span>
                <span>$462.20</span>
                <span>$10.00</span>
            </div>
        </div>
    </div>

    <div class="flex px-4 mt-4 w-full items-end">
        <div class="w-1/2">
            <p class="font-semibold">Terms</p>
            Net 30
        </div>
        <div class="w-1/2 flex">
            <div class="w-1/2 text-right flex flex-col">
                <span>Balance Due</span>
            </div>
            <div class="w-1/2 text-right flex flex-col">
                <span class="text-blue-600">$1,838.00</span>
            </div>
        </div>
    </div>
</div>

@endsection