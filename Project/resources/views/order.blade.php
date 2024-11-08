@extends('layouts.app')

@section('content')
    <h1 class="text-2xl max-w-80 h-20 border-b border-black flex items-center justify-center mx-auto my-0 mb-20">
        Подтверждение товаров
    </h1>
    <div class="max-w-7xl w-full mx-auto my-0">
        <div class="flex justify-between gap-10">
            <div class="max-w-80 w-full">
                <div class="p-16 border border-black w-full flex flex-col gap-12">
                    @if (Auth::user()->photo)
                        <img src="{{ asset('/storage/' . Auth::user()->photo) }}" alt="" class="rounded-full">
                    @else
                        <img src="{{ asset('img/avatar.png') }}" alt="" class="rounded-full">
                    @endif
                    <p class="text-center border-b border-black py-2 text-xl">
                        {{ Auth::user()->name }}
                    </p>
                    <p class="text-center border-b border-black py-2 text-xl">
                        Всего покупок: 2
                    </p>
                </div>
            </div>
            <ul class="flex flex-col gap-8">
                <li class="flex gap-5">
                    <div class="w-full p-4 border border-black flex flex-col gap-4">
                        <img src="../public/product.png" alt="" class="w-44">
                        <div>
                            <h3 class="mb-5 text-xl">
                                Видеокарта ASUS GeForce RTX 4080 ProArt OC edition [PROART-RTX4080-O16G]
                            </h3>
                            <div class="flex justify-between mb-5">
                                <p class="text-xl">
                                    #000000
                                </p>
                                <p class="text-xl">
                                    165.999 руб.
                                </p>
                            </div>
                            <div class="flex items-center justify-end gap-5">
                                <button class="py-2 px-6 text-xl bg-white transition-all hover:bg-black/10">
                                    Отменить
                                </button>
                                <button class="py-2 px-6 text-xl bg-[#E98074] transition-all hover:bg-[#d67165]">
                                    Подтвердить
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="flex gap-5">
                    <div class="w-full p-4 border border-black flex flex-col gap-4">
                        <img src="../public/product.png" alt="" class="w-44">
                        <div>
                            <h3 class="mb-5 text-xl">
                                Видеокарта ASUS GeForce RTX 4080 ProArt OC edition [PROART-RTX4080-O16G]
                            </h3>
                            <div class="flex justify-between mb-5">
                                <p class="text-xl">
                                    #000000
                                </p>
                                <p class="text-xl">
                                    165.999 руб.
                                </p>
                            </div>
                            <div class="flex items-center justify-end gap-5">
                                <button class="py-2 px-6 text-xl bg-white transition-all hover:bg-black/10">
                                    Отменить
                                </button>
                                <button class="py-2 px-6 text-xl bg-[#E98074] transition-all hover:bg-[#d67165]">
                                    Подтвердить
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="flex gap-5">
                    <div class="w-full p-4 border border-black flex flex-col gap-4">
                        <img src="../public/product.png" alt="" class="w-44">
                        <div>
                            <h3 class="mb-5 text-xl">
                                Видеокарта ASUS GeForce RTX 4080 ProArt OC edition [PROART-RTX4080-O16G]
                            </h3>
                            <div class="flex justify-between mb-5">
                                <p class="text-xl">
                                    #000000
                                </p>
                                <p class="text-xl">
                                    165.999 руб.
                                </p>
                            </div>
                            <div class="flex items-center justify-end gap-5">
                                <button class="py-2 px-6 text-xl bg-white transition-all hover:bg-black/10">
                                    Отменить
                                </button>
                                <button class="py-2 px-6 text-xl bg-[#E98074] transition-all hover:bg-[#d67165]">
                                    Подтвердить
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="flex gap-5">
                    <div class="w-full p-4 border border-black flex flex-col gap-4">
                        <img src="../public/product.png" alt="" class="w-44">
                        <div>
                            <h3 class="mb-5 text-xl">
                                Видеокарта ASUS GeForce RTX 4080 ProArt OC edition [PROART-RTX4080-O16G]
                            </h3>
                            <div class="flex justify-between mb-5">
                                <p class="text-xl">
                                    #000000
                                </p>
                                <p class="text-xl">
                                    165.999 руб.
                                </p>
                            </div>
                            <div class="flex items-center justify-end gap-5">
                                <button class="py-2 px-6 text-xl bg-white transition-all hover:bg-black/10">
                                    Отменить
                                </button>
                                <button class="py-2 px-6 text-xl bg-[#E98074] transition-all hover:bg-[#d67165]">
                                    Подтвердить
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="max-w-80 w-full">
                <div class="py-12 px-11 border border-black w-full flex flex-col gap-12">
                    <a href="#!" class="w-full py-5 text-center bg-[#D0C0A5] text-xl transition-all hover:bg-[#E98074]">
                        Отчет по продажам
                    </a>
                    <a href="#!" class="w-full py-5 text-center bg-[#D0C0A5] text-xl transition-all hover:bg-[#E98074]">
                        Изменить фото
                    </a>
                    <a href="#!" class="w-full py-5 text-center bg-[#D0C0A5] text-xl transition-all hover:bg-[#E98074]">
                        Изменить имя
                    </a>
                    <a href="#!" class="w-full py-5 text-center bg-[#D0C0A5] text-xl transition-all hover:bg-[#E98074]">
                        Панель управления
                    </a>
                </div>

                <div class="max-w-sm w-full rounded-lg p-4 md:p-6">

                    <div class="flex justify-between items-start w-full">
                        <div class="flex-col items-center">
                            <div class="flex items-center mb-1">
                                <h5 class="text-xl font-bold leading-none text-gray-900 me-1">Статистика заказов за все время</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Line Chart -->
                    <div class="py-6" id="pie-chart"></div>
                </div>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <script>

        const getChartOptions = () => {
            return {
                series: [30, 70],
                colors: ["#AB2323", "#6BD356"],
                chart: {
                    height: 420,
                    width: "100%",
                    type: "pie",
                },
                stroke: {
                    colors: ["white"],
                    lineCap: "",
                },
                plotOptions: {
                    pie: {
                        labels: {
                            show: true,
                        },
                        size: "100%",
                        dataLabels: {
                            offset: -25
                        }
                    },
                },
                labels: ["Отменено", "Продано"],
                dataLabels: {
                    enabled: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                },
                legend: {
                    position: "bottom",
                    fontFamily: "Inter, sans-serif",
                },
                yaxis: {
                    labels: {
                        formatter: function (value) {
                            return value + "%"
                        },
                    },
                },
                xaxis: {
                    labels: {
                        formatter: function (value) {
                            return value  + "%"
                        },
                    },
                    axisTicks: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                },
            }
        }

        if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
            chart.render();
        }

    </script>
@endsection
