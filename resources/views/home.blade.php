@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row py-5 align-items-center ">

            <div class="col-8 ">
                <h1 class="my-5 text-success fw-bold">Mi Portafolio</h1>
                <p class="fs-3">HOLA! Mi nombre es <span class="text-success">{{ Auth::user()->name }}</span>
                </p>
                <p class="fs-5 text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, quam amet
                    cupiditate neque enim veritatis corporis nemo at aliquid aperiam iure in blanditiis iusto sunt. Animi
                    cumque libero dolores? Dolorum vero nesciunt, voluptates explicabo iusto tempore cum suscipit adipisci.
                    Iure animi labore officia soluta tempora optio dolores assumenda quaerat eveniet.</p>
            </div>
            <div class="col-4 px-4">
                <img src="http://www.w3bai.com/w3css/img_avatar2.png" alt="" class="rounded-circle " width="300"
                    height="300">
            </div>

        </div>
        <hr>
        <div class="row pt-5 pb-5">
            <div class="col-6 pt-4">
                <img src="https://cem.epn.edu.ec/imagenes/logos_institucionales/big_png/EPN_logo_big.png" alt="" width="500"
                    height="300">
            </div>
            <div class="col-6">
                <h2 class="mb-4 text-success">EDUCACIÓN</h2>
                <p class="fs-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat possimus
                    repudiandae sit minima maiores
                    dolores corporis! Possimus repudiandae ad quo beatae sequi dolorem magni ratione libero ea nostrum
                    ipsum, ab totam nisi asperiores! Nobis neque minus harum sunt velit illum esse laborum a iste ipsum
                    numquam dolore quis impedit eius porro, doloremque at itaque praesentium repellendus officia laboriosam!
                    Voluptatum fuga voluptas fugit? Odio illo aut, et delectus omnis vel quisquam ipsa sunt natus eius?
                    Itaque provident culpa eaque repellat dolore recusandae, minus voluptatem vel sint ipsam, libero
                    blanditiis deserunt rem.
                </p>
            </div>
        </div>
        <div class="row bg-success">
            <h2 class="fw-bold px-5 pt-5 text-white fs-4">SOFTWARE DEVELOPER</h2>
            <p class="px-5 pb-5 text-white fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit numquam atque
                blanditiis exercitationem porro! Ad eum inventore culpa blanditiis cumque, excepturi nobis consequuntur,
                repudiandae, ipsam veritatis amet ut nam voluptates. Suscipit harum nulla totam optio consectetur deserunt
                sequi vero reiciendis!</p>
        </div>

        <div class="row">

            <h1 class="fw-bold mb-5 text-center pt-5">SERVICIOS</h1>
            @foreach ($servicios as $servicio)
                <article class="col-12 col-md-6 ">
                    <div class=" card rounded rounded-3 overflow-hidden bg-light text-white text-center">
                        <img src="{{ $servicio['img'] }}" alt="" width="150" height="300" class="card-img">
                        <div class="card-img-overlay d-flex align-content-center flex-wrap m-4">
                            <h3 class="card-title ">{{ $servicio['Titulo'] }}</h3>
                            <p class="card-text text-justify">{{ $servicio['Contenido'] }}</p>
                        </div>

                    </div>
                    <br>
                </article>
            @endforeach
        </div>

    </div>



@endsection
