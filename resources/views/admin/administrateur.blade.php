<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrateur</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
    <!--NavBar-->
    {{--@include('admin.navBarAdmin')--}}

    <!--Nav-->
    <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">
        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white items-center">
                <svg class="ml-5 stroke-current text-white" id="_x33_0" enable-background="new 0 0 64 64" height="50" viewBox="0 0 64 64" width="50" xmlns="http://www.w3.org/2000/svg"><g><path d="m42 9c-7.168 0-13 5.832-13 13s5.832 13 13 13 13-5.832 13-13-5.832-13-13-13zm-11 13c0-.418.028-.828.074-1.234l3.132-2.068 2.794 1.841v2.923l-2.795 1.841-3.131-2.062c-.045-.408-.074-.821-.074-1.241zm17.762-5.017-2.83 1.865-2.932-1.466v-3.765l3.388-1.698c.766.335 1.481.759 2.145 1.252zm-6.762 7.899-3-1.5v-2.764l3-1.5 3 1.5v2.764zm-1-7.5-2.932 1.466-2.831-1.865.225-3.808c.663-.493 1.379-.918 2.145-1.253l3.393 1.696zm-5.762 9.635 2.83-1.865 2.932 1.466v3.765l-3.388 1.698c-.766-.335-1.481-.759-2.145-1.252zm7.762-.399 2.932-1.466 2.831 1.865-.225 3.808c-.663.493-1.379.918-2.145 1.253l-3.393-1.696zm6.794-1.316-2.794-1.841v-2.923l2.795-1.841 3.131 2.062c.045.408.074.821.074 1.241 0 .418-.028.828-.074 1.234zm.969-8.362-.102-1.699c.626.8 1.145 1.686 1.532 2.641zm-7.24-5.822-1.523.764-1.526-.763c.5-.07 1.007-.119 1.526-.119.518 0 1.024.048 1.523.118zm-10.186 4.127-.1 1.696-1.431.945c.387-.955.905-1.841 1.531-2.641zm-1.53 10.872 1.43.942.102 1.699c-.625-.8-1.145-1.685-1.532-2.641zm8.67 6.765 1.523-.764 1.526.763c-.5.07-1.007.119-1.526.119-.518 0-1.024-.048-1.523-.118zm10.186-4.127.1-1.696 1.431-.945c-.387.955-.905 1.841-1.531 2.641z"/><path d="m51.136 5.5h12.728v2h-12.728z" transform="matrix(.707 -.707 .707 .707 12.245 42.562)"/><path d="m53.586 2h2.828v2h-2.828z" transform="matrix(.707 -.707 .707 .707 13.988 39.77)"/><path d="m49.586 6h2.828v2h-2.828z" transform="matrix(.707 -.707 .707 .707 9.988 38.113)"/><path d="m54.757 10h8.485v2h-8.485z" transform="matrix(.707 -.707 .707 .707 9.503 44.941)"/><circle cx="18" cy="14" r="1"/><path d="m30.238 49.176.869-.87-1.499-5.997c-1.66-6.639-6.476-11.792-12.608-14.053v-3.256h2c2.206 0 4-1.794 4-4v-2.586l2.414-2.414-.707-.707c-1.101-1.101-1.707-2.564-1.707-4.122v-.272c2.279-.465 4-2.484 4-4.899v-5.618l-1.447.723c-1.202.601-2.491.936-3.832.997l-10.283.468c-5.853.266-10.438 5.064-10.438 10.924 0 3.795 1.921 7.262 5.14 9.273l2.86 1.787v3.065l-6.101 6.864c-1.224 1.377-1.899 3.152-1.899 4.996 0 4.147 3.374 7.521 7.521 7.521h1.612l1.073 7.515 2.749-1.375c-.074 1.898-.243 3.801-.511 5.679l-.597 4.181h22.434l-.896-3.585c-.899-3.594-2.305-7.029-4.147-10.239zm-9.238-31.59v1.414h-2c-1.103 0-2-.897-2-2h-2c0 2.206 1.794 4 4 4h2c0 1.103-.897 2-2 2h-6v2h2v2.626c-1.291-.328-2.632-.517-4-.584v-8.456l-1.707-1.707c-.189-.189-.293-.441-.293-.708v-.171c0-.551.449-1 1-1h1v-3c0-.551.449-1 1-1h9v.171c0 1.754.573 3.42 1.63 4.784zm-13.801 3.484c-2.629-1.643-4.199-4.475-4.199-7.576 0-4.788 3.747-8.708 8.529-8.926l10.282-.467c1.096-.05 2.164-.251 3.189-.601v2.5c0 1.654-1.346 3-3 3h-10c-1.654 0-3 1.346-3 3v1.171c-1.164.413-2 1.525-2 2.829v.171c0 .801.312 1.555.879 2.122l1.121 1.121v2.782zm-4.199 18.409c0-1.076.324-2.113.904-3.004l4.196 1.799-.581.726h-2.519v2h16c1.103 0 2 .897 2 2s-.897 2-2 2h-12.479c-3.044 0-5.521-2.477-5.521-5.521zm9.153 7.521h8.847c2.206 0 4-1.794 4-4s-1.794-4-4-4h-10.919l2.7-3.375-1.562-1.25-1.823 2.278-4.164-1.784 5.201-5.851c8.187.193 15.24 5.796 17.235 13.776l1.225 4.899-2.699 2.699c-.612.611-1.621.775-2.396.389l-2.528-1.265c-1.446-.722-3.236-.651-4.683.071l-3.793 1.897zm14.177 14c.439-1.685.67-3.415.67-5.162v-.838h-2v.838c0 1.752-.262 3.483-.751 5.162h-9.096l.271-1.898c.329-2.305.512-4.648.558-6.975l1.499-.75c.894-.447 2.002-.519 2.895-.071l2.529 1.266c1.525.759 3.5.438 4.703-.765l1.159-1.159c1.617 2.915 2.868 6.013 3.677 9.252l.275 1.1z"/></g></svg>
                <a class="font-semibold text-3xl text-white" href="{{ route('pageAccueilAdmin') }}">SENFOOT</a>
            </div>

            <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                <span class="relative w-full">
                    <input type="search" placeholder="Search" class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                        <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </span>
            </div>

            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, {{ $LoggedUserInfo['prenom'] }} {{ $LoggedUserInfo['nom'] }}
                                <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                            <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
                                <div class="border border-gray-800"></div>
                                <a href="{{ route('deconnexion') }}" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex flex-col md:flex-row">

        <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">
            <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="{{ route('pageAccueilAdmin') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-500">
                            <i class="fas fa-chart-area pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Dashboard</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{ route('pageCalendrier') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                            <i class="fas fa-calendar pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Calendrier</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{route('pageTransfert')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                            <i class="fas fa-exchange-alt pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Transfert</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-gray-500">
                            <i class="fa fa-user pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Entraineur</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{route('pageSuperAdmin')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-green-500">
                            <i class="fa fa-user pr-0 md:pr-3 text-green-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Administrateur</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{ route('deconnexion') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-600">
                            <i class="fas fa-sign-out-alt fa-fw pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Log out</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-green-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">Gerer les administrateurs</h3>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                        <a href="{{ route("creerCompte") }}" class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-green-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600">Ajouter</h5>
                                <h3 class="font-bold text-3xl">
                                    @php
                                        $nbrCompte = 0;
                                        foreach ($comptes as $compte) {
                                            $nbrCompte++;
                                        }
                                        echo "$nbrCompte";
                                    @endphp
                                    <span class="text-green-600">
                                        <i class="fas fa-caret-up"></i>
                                    </span>
                                </h3>
                            </div>
                        </a>
                    </div>
                    <!--/Metric Card-->
                </div>
            </div>

            <div>
                @if ($comptes->count() > 0)

                        <div class="flex justify-center font-semibold text-4xl mt-8 mb-6">
                            Liste des administrateurs
                        </div>
                        <div class="flex justify-center">
                            <table class="table text-gray-400 border-separate space-y-6 text-sm mt-5">
                                <thead class="bg-green-500 text-white">
                                    <tr>
                                        <th class="px-6 py-3">PRENOM</th>
                                        <th class="px-6 py-3">NOM</th>
                                        <th class="px-12 py-3">LOGIN</th>
                                        <th class="px-6 py-3">MOT DE PASSE</th>
                                        <th class="px-6 py-3">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comptes as $compte)
                                        <tr class="bg-green-100 lg:text-black">
                                            <td class="border px-6 py-2">{{ $compte->prenom }}</td>
                                            <td class="border px-6 py-2">{{ $compte->nom }}</td>
                                            <td class="border py-2 font-bold text-center">{{ $compte->login }}</td>
                                            <td class="border py-2 text-center">{{ $compte->password }}</td>
                                            <td class="border px-6 py-2 text-center flex justify-between">
                                                {{--    <a href="{{ route('pageModifJoueur',$effectif->id) }}" class="border bg-green-500 hover:bg-green-700 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>--}}
                                                <a href="#">
                                                    <div class="w-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg class="stroke-current text-purple-600" height="18pt" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a href="#" class="mr-2">
                                                    <div class="w-2 transform hover:text-red-500 hover:scale-110">
                                                        <svg class="stroke-current text-red-600" height="18pt" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                @endif
            </div>
        </div>

    </div>
    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>

  </body>
</html>
