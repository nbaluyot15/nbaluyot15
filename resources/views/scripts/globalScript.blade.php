<script>

function initiateAjaxPostRequest(url, method, data)
{
    return $.ajax({
                type : method,
                url  : url,
                data : {data : fields, "_token": "{{ csrf_token() }}"},
                cache: false
            });
}

function initiateAjaxGetRequest(url, method, data)
{
    return $.ajax({
                type : method,
                url  : url,
                data : data,
                cache: false
            });
}

function getuserDetailsRequest()
{   
    $.LoadingOverlay('Show');
    const fields = {  }
    initiateAjaxGetRequest('{{ route("getUserDetails") }}', 'GET', fields)
    .done(function (data){
        alert(JSON.stringify(data));
        $.LoadingOverlay('hide');
    });
}
</script>