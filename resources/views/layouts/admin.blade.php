<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Admin') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" >
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>  
        </script>
    </head>
    <body class="adminBody">
        <div id="app">

            @if(Request::url() === 'http://laravel-sandbox.dev/login')

            @else
            <div id="wrapper">

                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="{{ url('/admin') }}">
                                {{ config('', 'Sova dashboard') }}
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/admin/posts/create') }}">Nova objava</a>
                        </li>

                        <li>
                            <a href="{{ url('/admin/posts') }}">Objave</a>

                        </li>
                        <li>
                            <a href="{{ url('/admin/schedules/edit') }}">Izmeni termine</a>
                        </li>

                        <li>
                            <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            @endif
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                        <h1>{{{$var or 'Dobrodošao'}}}</h1>
                        </div>
                        <div class="col-md-3" id="divLocal"></div> 
                    </div>
                </div>
            </div>
            <hr/>
            
            <div class="container">
                @yield('content')
            </div>
        </div> <!-- app -->

        <!-- Scripts -->
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
        <script>
            new Vue({
                el:'#app',
                data:{
                    message:''
                }
            }); 
        </script>
        <script src="/js/moment-with-locales.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
    </html>