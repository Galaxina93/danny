<div>
    <div class="m-4 border-2">
        <div class="flex justify-center p-6">
            <h2 class="text-xl dark:text-white font-bold">Login Verlauf</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Letzter Login</th>
                </tr>
                </thead>
                <tbody>

                    @foreach($last_logins as $last_login)
                        <tr class="hover:bg-gray-100">

                            <td class="border px-4 py-2">
                                {{$last_login['first_name']}} {{$last_login['last_name']}}
                            </td>
                            @if($last_login['last_seen'] == null)
                                <td class="border px-4 py-2">Noch nie eingeloggt</td>
                            @else
                                <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($last_login['last_seen'])->format('d.m.Y H:i')}}</td>
                            @endif

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>


    </div>
</div>
