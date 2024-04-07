<main class="py-4">

    <div class="container my-5">
        <div class="card border shadow">
            <div class="row">
                <div class="col-12">
                    <div class="row">

                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Contribuyentes" value="149" quantity="+49" color="#13b256"
                                icon="users" />
                        </div>

                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Actividad Economica" value="501" quantity="+7"
                                color="#13b256" icon="shop" />
                        </div>


                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Publicidad" value="250" quantity="-7" color="#13b256"
                                icon="bullhorn" />
                        </div>

                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Inmueble Urbano" value="100" quantity="+7" color="#13b256"
                                icon="house" />
                        </div>

                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Vehiculos" value="800" quantity="-7" color="#13b256"
                                icon="car" />
                        </div>

                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Aseo Urbano" value="26" quantity="+7" color="#13b256"
                                icon="trash" />
                        </div>

                    </div>
                </div>
            </div>
            <livewire:area-chart />
        </div>
    </div>

    <div class="container mt-5">

        <div class="row gap-3 gap-lg-0">

            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border shadow h-auto">
                    <livewire:stat-card title="Title" value="00.0K" quantity="+00" color="#13b256" icon="users" />
                </div>
            </div>
            <div class="col-12 col-lg-10">
                <div class="card border shadow h-auto">
                    <div class="row">

                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Contribuyentes" value="149" quantity="+49" color="#13b256"
                                icon="users" />
                        </div>

                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Actividad Economica" value="501" quantity="+7"
                                color="#13b256" icon="shop" />
                        </div>


                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Publicidad" value="250" quantity="-7" color="#13b256"
                                icon="bullhorn" />
                        </div>

                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Inmueble Urbano" value="100" quantity="+7" color="#13b256"
                                icon="house" />
                        </div>

                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Vehiculos" value="800" quantity="-7" color="#13b256"
                                icon="car" />
                        </div>

                        <div class="col-6 col-lg-2 d-flex align-items-center">
                            <livewire:stat-card title="Aseo Urbano" value="26" quantity="+7" color="#13b256"
                                icon="trash" />
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="row gap-3 gap-lg-0 mt-5">
            <div class="col-12 col-lg-6">
                <div class="card border shadow">
                    <livewire:bar-custom-chart />
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card border shadow">
                    <livewire:bar-chart />
                </div>
            </div>
        </div>

    </div>

    <!-- chart de area que va de Enero a Diciembre, y se llena de Enero hasta el mes N actual /> -->
    <div class="container my-5">
        <div class="card border shadow py-4">
            <livewire:area-chart type="graph-partial" />
        </div>
    </div>


</main>
