@extends('layouts.employee')

@section('container')
<div class=" w-full h-screen pt-20">
    <div id="" class="bg-white w-full lg:w-[500px] h-max p-4 pl-8 mx-auto mb-10 shadow-lg rounded-md">
        <input type="text" name="search" id="search" placeholder="Cari Karyawan Melalui Nama dan NIK" class="border-2 w-full h-10 bg-white">
    </div>
    <div class="bg-white w-full lg:w-[400px] h-max p-4 pl-8 mx-auto mb-10 shadow-lg rounded-md">
        <table class="w-full">
            <thead class="">
                <th class="text-start">Nama</th>
                <th class="text-start">NIK</th>
            </thead>
            <tbody class="">
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script>
    $('#search').on('keyup', function(){
        search();
    });

    function search(){
     var keyword = $('#search').val();
     $.post('/dashboard/view/search',
      {
         _token: $('meta[name="csrf-token"]').attr('content'),
         keyword:keyword
       },
       function(data){
        table_post_row(data);
          console.log(data);
       });
}
    // table row with ajax
    function table_post_row(res){
    let htmlView = '';
    if(res.User.length <= 0){
        htmlView+= `
        <tr>
            <td colspan="1">No data.</td>
            <td colspan="1">No data.</td>
        </tr>`;
    } else {
        for(i=0; i<res.User.length; i++){
        htmlView += `
            <tr> 
                <td>`+res.User[i].name+`</td>
                <td class=""><img src="data:image/png;base64,{{ DNS1D::getBarcodePNG(`+res.User[i].NIK`, 'C39') }}" width="120px" height="60px">
                    <a>`+res.User[i].NIK+`</a>
                </td>
            </tr>
        `;
        }    
    }
        $('tbody').html(htmlView);
    }
</script>   
@endsection