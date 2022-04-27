<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="WQltMKEBwLJyKt9V7IvRetAsNhJI4XlqGyDNjbz5">

    <title>Laravel</title>

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="http://127.0.0.1:8000">
                    Laravel
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    po
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="127.0.0.1:8000/logout" method="POST"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> 
                                        {{ __('Logout') }}
                                    </a> 

                                    <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" class="d-none">
                                        @csrf
                                     {{-- <input type="hidden" name="_token" value="WQltMKEBwLJyKt9V7IvRetAsNhJI4XlqGyDNjbz5">                                    --}} --}}
                                     </form>

                                     {{-- <a class="dropdown-item" href="javascript:void(0);"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> 
                                        {{ __('Logout') }}
                                    </a> --}}

                                    {{-- <form id="logout-form" action=" http://127.0.0.1:8000/logout " method="POST" class="d-none">
                                        @csrf
                                    </form>  --}}

                                </div>
             </li>
           </ul>
       </div>
   </div>
 </nav>

        {{-- <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                     You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
        </main> --}}
    {{-- </div>
</body>
</html> --}}



{{-- <html> --}}
<head>
<title>フォルダ一覧</title>
</head>
 <table border = "1"> 
    <tr>
        <th>id</th>
        <th>user_id</th>
        <th>title</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    
         {{-- @foreach($folders  as $folder)      --}}
    <tr>
        <td>{{$folder->id }}</td>  
        <td>{{$folder->user_id}}</td>
        <td>{{$folder->title}}</td>
         <td>{{$folder->updated_at}}</td>
        <td>{{$folder->created_at}}</td> 
    </tr> 
        {{-- @endforeach     --}}
</table>

{{-- <div class="user_id">
    {{ Auth::id() }}
    </div> --}}


{{-- </html> --}}