@extends('Home.welcome')

@section('content')

    {{-- hero section  --}}
    <div class="jumbotron py-5 text-coklat">
        <div class="container">
            {{-- large view  --}}
            <div class="d-none mt-5 d-md-block">
                <div class="row">
                    <div class="col d-flex flex-column justify-content-center">
                        <h1> <span class="bg-kuning text-white">Welcome</span> Guys....</h1>
                        <p>Let's introduce my self, I'm <span style="text-decoration:underline;">Adnan Ega Maulana</span> from Tegal, Ungraduated Informatics Enginering in Institute Technology Telkom Purwokerto. I'm Web Developers with many experience build website with Framework Laravel and Codeigniter.</p>
                        <a href="" class="text-kuning fs-5 mx-auto mt-5" style="text-decoration: none">About Me <i class="bi bi-arrow-down-circle ms-2"></i></a>
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/hero.png') }}" alt="" width="550px">
                    </div>
                </div>
            </div>

            {{-- mobile view  --}}
            <div class="row d-block d-md-none">
                <div class="col-12 d-flex justify-content-center">
                    <img src="{{ asset('assets/hero.png') }}" alt="" width="350px">
                </div>
                <div class="col d-flex flex-column justify-content-center px-5">
                    <h1> <span class="bg-kuning text-white">Welcome</span> Guys....</h1>
                    <p>Let's introduce my self, I'm <span style="text-decoration:underline;">Adnan Ega Maulana</span> from Tegal, Ungraduated Informatics Enginering in Institute Technology Telkom Purwokerto. I'm Web Developers with many experience build website with Framework Laravel and Codeigniter.</p>
                    <a href="" class="text-kuning fs-5 mx-auto mt-3" style="text-decoration: none">About Me <i class="bi bi-arrow-down-circle ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    {{-- end hero section  --}}

    {{-- whaves  --}}
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f7f7f7" fill-opacity="1" d="M0,96L40,112C80,128,160,160,240,165.3C320,171,400,149,480,138.7C560,128,640,128,720,138.7C800,149,880,171,960,170.7C1040,171,1120,149,1200,165.3C1280,181,1360,235,1400,261.3L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg> --}}
    {{-- end whaves  --}}

    {{-- about section  --}}
    <div class="about bg-putih text-coklat mt-5 py-5" id="about">
        <h1 class="text-center mb-5"><span class="text-kuning underline">About</span> Me</h1>
        <div class="container">
            <div class="row px-3" style="text-align: justify">
                <div class="col-sm-12 col-md-6 mb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate minima, sint quos esse temporibus porro obcaecati delectus repudiandae assumenda illo iste consequuntur voluptas qui eaque perferendis ab laboriosam quia necessitatibus quo soluta dolore asperiores! Eius fugiat reiciendis quam neque error. Enim est dolores sunt impedit, perspiciatis alias blanditiis obcaecati animi.
                </div>
                <div class="col">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quod dolorum, commodi soluta iste, modi aperiam officiis aut nobis assumenda officia maxime? Ipsum totam autem adipisci dignissimos consectetur voluptates et aliquid vitae amet error reprehenderit corrupti, quaerat accusantium recusandae. Neque qui dolor fugiat molestiae laudantium sapiente commodi maxime sed? Accusantium.
                </div>
            </div>
        </div>
    </div> 
    {{-- end about section  --}}

    <div class="study">
        <div class="container">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni, consectetur rerum. Nostrum recusandae, sequi doloribus voluptate cumque iure? Adipisci consequatur facilis tenetur dolorum obcaecati error optio ipsum, asperiores quas quasi doloribus, labore vel eos! Doloremque ipsa officia eos at saepe quas, harum porro ad consequatur odit laborum nam magni ex! Hic beatae et illum placeat sed magnam doloribus soluta ratione error atque distinctio consequatur dolor tempora odio doloremque ad pariatur vel eveniet officia porro excepturi, nulla nostrum provident eligendi? Eius iusto possimus qui, odit debitis eaque minima ea repudiandae sapiente maiores dolore ducimus. Dolores, blanditiis ab ducimus architecto assumenda deleniti doloribus enim rerum quia voluptatibus dicta sit ex at? Voluptatum blanditiis molestiae eum, voluptas deserunt labore et laborum, autem pariatur quas commodi id fuga sed dicta illum unde illo quaerat magni. Adipisci esse labore rerum, dicta doloremque at magni corrupti distinctio sapiente possimus, minus nihil accusamus, molestias quam beatae in ab nulla sunt eos iste culpa ullam iusto ratione! Dicta id cupiditate tempora repellat soluta in aut explicabo quidem reprehenderit pariatur corrupti exercitationem autem dolorum totam aliquid, dolorem ullam vero possimus quisquam laborum amet. Debitis mollitia soluta aliquid provident iste? Excepturi aspernatur amet quam consequatur sed quia inventore et ullam.</p>
        </div>
    </div>
@endsection