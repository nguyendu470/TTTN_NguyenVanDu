$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id,ulr){
    if(confirm('ban co muon xoa')){
        $.ajax({
            type: 'DELETE',
            datatype:'JSON',
            data: {id},
            url: url,
            success:function(result){
                console.log(result);
            }
        })
    }
}