<table class="table table-striped table-responsive-lg">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($influencers as $influencer)
            <tr>
                <th scope="row">{{$influencer->id}}</th>
                @if($export)
                    <td>{{$influencer->gender}}</td>
                @else
                    <td><i class="fas fa-{{$influencer->gender}}"></i></td>
                @endif
                <td>{{$influencer->age}}</td>
                <td>{{$influencer->full_name}}</td>
                <td>{{$influencer->email}}</td>
            </tr>
        @endforeach
    </tbody>
</table>