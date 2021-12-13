{{$users->name}}
{{$users->email}}
{{$users->created_at}}

@if(session('success_msg'))

                  {{ session('success_msg')}}

@endif