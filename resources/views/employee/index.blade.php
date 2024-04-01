@extends('layouts.vertical')
@section('content')
    <div class="flex justify-between items-center mb-6">
        <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Eficiente ERP</h4>
        <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
            <div class="flex items-center gap-2">
                <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Eficiente</a>
            </div>
            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Empleados</a>
            </div>
            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">
                    Todos los empleados
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="flex justify-between items-center">
                <h4 class="card-title">Empleados</h4>
            </div>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overscroll-y-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 overscroll-y-auto">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">N. Empleado
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">CURP</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">RFC</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nacimiento
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Genero</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Accion</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">
                                            {{ $employee->n_employee }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 ">
                                            {{ $employee->name }} {{ $employee->paternal_surname }}
                                            {{ $employee->maternal_surname }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">
                                            {{ $employee->curp }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">
                                            {{ $employee->rfc }}
                                            @if (!$employee->rfc_verified)
                                                <br>
                                                <a class="text-primary hover:text-sky-700" href="#">
                                                    Verificar RFC
                                                </a>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">
                                            {{ $employee->birthdate }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">
                                            {{ $employee->gender }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            {{-- @if (!$employee->rfc_verified)
                                                <a class="text-primary hover:text-sky-700" href="#">
                                                    Verificar RFC
                                                </a>
                                            @endif --}}
                                            <a class="text-success hover:text-sky-700" href="#">
                                                Ver
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
