<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Anasayfa</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">Anasayfa</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Toplam Sipariş Sayısı</p>
                                                        <h4 class="mb-0">{{ $totalOrders }}</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-copy-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Toplam Kazanç</p>
                                                        <h4 class="mb-0">{{ str_replace('.', ',',$totalPrice) }} ₺</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center ">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Kurye Sayısı</p>
                                                        <h4 class="mb-0">{{ $totalCourier }}</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Kurye Ataması Bekleyen Siparişler</h4>
                                        <p class="card-title-desc">Kurye atamasını her bölümün atama bekleyen siparişler alanından yapılmalıdır.</p>    
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>
                                                            Sipariş Numarası
                                                        </th>
                                                        <th>
                                                            Süre
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="atama-bekleyen">
                                                </tbody>
                                            </table>
        
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Kurye Üzerinde Bekleyen Siparişler</h4>
                                        <p class="card-title-desc">Kuryeler üzerlerindeki siparişi hazırlandıktan sonra kabul ederek yola çıkar.</p>    
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>
                                                            Sipariş Numarası
                                                        </th>
                                                        <th>
                                                            Kurye
                                                        </th>
                                                        <th>
                                                            Süre
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="kurye-atanan">
                                                </tbody>
                                            </table>
        
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Son 20 sipariş</h4>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="align-middle">Sipariş Numarası</th>
                                                        <th class="align-middle">Tarih & Saat</th>
                                                        <th class="align-middle">Fiyat</th>
                                                        <th class="align-middle">Bölüm</th>
                                                        <!-- <th class="align-middle">Detay Göster</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($last20Orders as $rs)
                                                    <tr>
                                                        @if($rs->category_name == 'teknoloji')
                                                        <td><a href="{{ route('admin_technology_order_show_pending', ['id' => $rs->id]) }}" class="text-body fw-bold">#{{$rs->order_number}}</a> </td>
                                                        @elseif($rs->category_name == 'kozmetik')
                                                        <td><a href="{{ route('admin_cosmetic_order_show_pending', ['id' => $rs->id]) }}" class="text-body fw-bold">#{{$rs->order_number}}</a> </td>
                                                        @elseif($rs->category_name == 'market')
                                                        <td><a href="{{ route('admin_market_order_show_pending', ['id' => $rs->id]) }}" class="text-body fw-bold">#{{$rs->order_number}}</a> </td>
                                                        @endif 

                                                        <td>
                                                        {{$rs->created_at = \Carbon\Carbon::parse($rs->created_at)->format('d-m-Y / H:i')}}
                                                        </td>
                                                        <td>
                                                            {{ str_replace('.', ',',$rs->discounted_total) }} ₺
                                                        </td>
                                                        <td>
                                                        @if($rs->category_name == 'teknoloji')
                                                            <span class="badge badge-pill badge-soft-info font-size-11">{{$rs->category_name}}</span>
                                                        @elseif($rs->category_name == 'kozmetik')
                                                            <span class="badge badge-pill badge-soft-danger font-size-11">{{$rs->category_name}}</span>
                                                        @elseif($rs->category_name == 'market')
                                                            <span class="badge badge-pill badge-soft-success font-size-11">{{$rs->category_name}}</span>
                                                        @else
                                                            <span class="badge badge-pill badge-soft-secondary font-size-11">{{$rs->category_name}}</span>
                                                        @endif                                                        
                                                        </td>
                                                        <!-- <td>
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                                Detay Göster
                                                            </button>
                                                        </td> -->
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Sipariş Sayısı</h4>
        
                                        <div id="column-charts" dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Sipariş Kazancı</h4>
                                        
                                        <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Saatlik Kazanç(Günlük)</h4>
                                        <div id="line-chart" class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Transaction Modal -->
                <!-- end modal -->

                <!-- subscribeModal -->
                <!-- end modal -->
@section('footer')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Her 10 saniyede bir AJAX isteği gönderme
        function veriGuncelle() {
            $.ajax({
                url: '/manager_admin_approvalPendingOrdersData', // Controller'daki route ile eşleşen URL
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var veriListesi = $("#kurye-atanan");
                    // Yeni verileri eklemek için önce mevcutları temizle
                    veriListesi.empty();
                    // Verileri kullanmak için bir fonksiyon
                    kuryeAtanan(response);
                    // AJAX isteği başarıyla tamamlandığında, response içindeki veriyi kullanabilirsiniz
                    setTimeout(veriGuncelle, 10000);
                },
                error: function(xhr, status, error) {
                    console.log(error);
					setTimeout(veriGuncelle, 10000);
                }
            });
            $.ajax({
                url: '/manager_admin_pendingOrdersData', // Controller'daki route ile eşleşen URL
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var veriListesi = $("#atama-bekleyen");
                    // Yeni verileri eklemek için önce mevcutları temizle
                    veriListesi.empty();
                    console.log(response);
                    // Verileri kullanmak için bir fonksiyon
                    atamaBekleyen(response);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        } // 10 saniyede bir güncelleme yapacak şekilde ayarlandı, ihtiyacınıza göre değiştirebilirsiniz

        $(document).ready(function () {
			veriGuncelle(); // İlk kez çağır
		});

        function kuryeAtanan(veriler) {
            var veriListesi = $("#kurye-atanan");
            // Verileri döngü ile işleme
            $.each(veriler, function (index, veri) {

                var updatedTime = new Date(veri.updated_at);
                var now = new Date();
                var diff = Math.floor((now - updatedTime) / 60000); // Zaman farkı dakika cinsinden

                var colorClass;
                var gecenZaman;
                var renkClass;

                // Zaman farkına göre renk sınıfını ve geçen zamanı belirle
                if (diff <= 5) {
                    colorClass = 'table-success';
                } else if (diff <= 10) {
                    colorClass = 'table-info';
                } else if (diff <= 20) {
                    colorClass = 'table-warning';
                } else {
                    colorClass = 'table-danger';
                }

                if (veri.order_number.includes('TCH')) {
                    var url = "{{ route('admin_technology_order_show_pending', ['id' => 'VERI_ID']) }}".replace('VERI_ID', veri.id);
                    renkClass = 'info'; 
                } else if (veri.order_number.includes('MRK')) {
                    var url = "{{ route('admin_market_order_show_pending', ['id' => 'VERI_ID']) }}".replace('VERI_ID', veri.id);
                    renkClass = 'success'; 
                } else if (veri.order_number.includes('CSM')) {
                    var url = "{{ route('admin_cosmetic_order_show_pending', ['id' => 'VERI_ID']) }}".replace('VERI_ID', veri.id);
                    renkClass = 'danger'; 
                } else {
                    renkClass = 'secondary'; 
                }

                // Gün, saat ve dakika cinsinden göster
                gecenZaman = '';
                var days = Math.floor(diff / 1440); // Bir günde 1440 dakika vardır
                var hours = Math.floor((diff % 1440) / 60);
                var minutes = diff % 60;

                if (days > 0) {
                    gecenZaman += days + ' gün ';
                }
                if (hours > 0) {
                    gecenZaman += hours + ' saat ';
                }
                if (minutes > 0) {
                    gecenZaman += minutes + ' dakika';
                }else {
                    var seconds = Math.floor((diff % 60) % 60);
                    gecenZaman += seconds + ' saniye';
                }

                var veriHTML = `
                <tr class="${colorClass}">
                    <th scope="row">${index+1}</th>
                    <td>
                        <span class="badge badge-pill badge-soft-${renkClass} font-size-11">
                            <a href="${url}" title="Düzenle">          
                                #${veri.order_number}
                            </a>
                        </span>
                    </td>
                    <td>${veri.courier.name_surname}</td>
                    <td>
                        ${gecenZaman}
                    </td>
                </tr>
                `;
                
                veriListesi.append(veriHTML);
            });
        }
        function atamaBekleyen(veriler) {
            var veriListesi = $("#atama-bekleyen");
            // Verileri döngü ile işleme
            $.each(veriler, function (index, veri) {

                var updatedTime = new Date(veri.updated_at);
                var now = new Date();
                var diff = Math.floor((now - updatedTime) / 60000); // Zaman farkı dakika cinsinden

                var colorClass;
                var gecenZaman;
                var renkClass;

                // Zaman farkına göre renk sınıfını ve geçen zamanı belirle
                if (diff <= 3) {
                    colorClass = 'table-success';
                } else if (diff <= 7) {
                    colorClass = 'table-info';
                } else if (diff <= 15) {
                    colorClass = 'table-warning';
                } else {
                    colorClass = 'table-danger';
                }

                if (veri.order_number.includes('TCH')) {
                    var url = "{{ route('admin_technology_order_show_pending', ['id' => 'VERI_ID']) }}".replace('VERI_ID', veri.id);
                    renkClass = 'info'; 
                } else if (veri.order_number.includes('MRK')) {
                    var url = "{{ route('admin_market_order_show_pending', ['id' => 'VERI_ID']) }}".replace('VERI_ID', veri.id);
                    renkClass = 'success'; 
                } else if (veri.order_number.includes('CSM')) {
                    var url = "{{ route('admin_cosmetic_order_show_pending', ['id' => 'VERI_ID']) }}".replace('VERI_ID', veri.id);
                    renkClass = 'danger'; 
                } else {
                    renkClass = 'secondary'; 
                }

                // Gün, saat ve dakika cinsinden göster
                gecenZaman = '';
                var days = Math.floor(diff / 1440); // Bir günde 1440 dakika vardır
                var hours = Math.floor((diff % 1440) / 60);
                var minutes = diff % 60;

                if (days > 0) {
                    gecenZaman += days + ' gün ';
                }
                if (hours > 0) {
                    gecenZaman += hours + ' saat ';
                }
                if (minutes > 0) {
                    gecenZaman += minutes + ' dakika';
                }else {
                    var seconds = Math.floor((diff % 60) % 60);
                    gecenZaman += seconds + ' saniye';
                }

                var veriHTML = `
                <tr class="${colorClass}">
                    <th scope="row">${index+1}</th>
                    <td>
                        <span class="badge badge-pill badge-soft-${renkClass} font-size-11">
                            <a href="${url}" title="Düzenle">   
                                #${veri.order_number}
                            </a>
                        </span>
                    </td>
                    <td>
                        ${gecenZaman}
                    </td>
                </tr>
                `;
                
                veriListesi.append(veriHTML);
            });
        }
    </script>
    <script>
        @php
            $chartData = json_encode($totalPricesByCategory);
        @endphp
        var chartData = <?php echo $chartData; ?>;
        options = {
    chart: {
        height: 320,
        type: "pie"
    },
    series: chartData.map(item => item.total_order_price),
    labels: chartData.map(item => item.category_name),
    colors: ["#556ee6", "#f46a6a", "#34c38f"],
    legend: {
        show: !0,
        position: "bottom",
        horizontalAlign: "center",
        verticalAlign: "middle",
        floating: !1,
        fontSize: "14px",
        offsetX: 0
    },
    responsive: [{
        breakpoint: 600,
        options: {
            chart: {
                height: 240
            },
            legend: {
                show: !1
            }
        }
    }]
};
(chart = new ApexCharts(document.querySelector("#pie_chart"), options)).render();
    </script>
    <script>
        @php
            $chartData = json_encode($monthlyOrders);
        @endphp
        var chartData = <?php echo $chartData; ?>;
        var columnChartWidth = $("#column-charts").width(),
    container = document.getElementById("column-charts"),
    data = {
        categories: ["Oca, 2023", "Şub, 2023", "Mar, 2023", "Nis, 2023", "May, 2023", "Haz, 2023", "Tem, 2023", "Ağu, 2023", "Eyl, 2023", "Eki, 2023", "Kas, 2023", "Ara, 2023"],
        series: chartData.map(warehouse => {
            return {
                name: warehouse.category_name,
                data: warehouse.months.map(month => month.order_count)
            };
        })
    },
    options = {
        chart: {
            width: columnChartWidth,
            height: 380,
            title: "Aylık Siparişler",
            format: "1,000"
        },
        yAxis: {
            title: "Sayı",
            min: 0,
            max: Math.max(...chartData.flatMap(warehouse => warehouse.months.map(month => month.order_count)))
        },
        xAxis: {
            title: "Month"
        },
        legend: {
            align: "top"
        }
    },
    theme = {
        chart: {
            background: {
                color: "#fff",
                opacity: 0
            }
        },
        title: {
            color: "#8791af"
        },
        xAxis: {
            title: {
                color: "#8791af"
            },
            label: {
                color: "#8791af"
            },
            tickColor: "#8791af"
        },
        yAxis: {
            title: {
                color: "#8791af"
            },
            label: {
                color: "#8791af"
            },
            tickColor: "#8791af"
        },
        plot: {
            lineColor: "rgba(166, 176, 207, 0.1)"
        },
        legend: {
            label: {
                color: "#8791af"
            }
        },
        series: {
            colors: ["#556ee6", "#f46a6a", "#34c38f"]
        }
    };
tui.chart.registerTheme("myTheme", theme), options.theme = "myTheme";
var columnChart = tui.chart.columnChart(container, data, options);
$(window).resize(function () {
    columnChartWidth = $("#column-charts").width(), columnChart.resize({
        width: columnChartWidth,
        height: 350
    })
});
    </script>
    <script>
        @php
            $chartData = json_encode($twoHourOrderPrice);
        @endphp
        var chartData = <?php echo $chartData; ?>;
        var dom = document.getElementById("line-chart"),
    myChart = echarts.init(dom),
    app = {};
option = null, option = {
    grid: {
        zlevel: 0,
        x: 50,
        x2: 50,
        y: 30,
        y2: 30,
        borderWidth: 0,
        backgroundColor: "rgba(0,0,0,0)",
        borderColor: "rgba(0,0,0,0)"
    },
    xAxis: {
        type: "category",
        data: ["9-11", "11-13", "13-15", "15-17", "17-19", "19-21", "21-23"],
        axisLine: {
            lineStyle: {
                color: "#8791af"
            }
        }
    },
    yAxis: {
        type: "value",
        axisLine: {
            lineStyle: {
                color: "#8791af"
            }
        },
        splitLine: {
            lineStyle: {
                color: "rgba(166, 176, 207, 0.1)"
            }
        }
    },
    series: [{
        data: chartData.map(item => item),
        type: "line"
    }],
    color: ["#34c38f"]
}, option && "object" == typeof option && myChart.setOption(option, !0);
dom = document.getElementById("mix-line-bar"), myChart = echarts.init(dom);
    </script>
@endsection
