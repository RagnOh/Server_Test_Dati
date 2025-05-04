$(document).ready(function(){


    function checkStatus(){

        $.ajax('\ajaxCheckUpdate',{

       
            type:'GET',
            success: function(data){
                
                
               
                console.log(data);
                $.each(data,function(index,p){
                    console.log(p['done']);
                    if(p['done']==1){
                        updateBestPairsTable();
                    }
                });
            },
            error: function() {
                console.log('Si è verificato un errore durante la richiesta.');
              }
            });
    }

    function updateBestPairsTable()
        {
            $.ajax('\ajaxGetFavList',{
    
           
                type:'GET',
                success: function(data){
    
                    $('#favTable tbody').empty();
                    $.each(data,function(index,pair){
    
                        var newRow = '<tr class="riga">' +
                        '<td>' + pair['pair']+ '</td>' +
                        '<td>' + pair['binance'] + '</td>' +
                        '<td>' + pair['kraken'] + '</td>' +
                        '<td>' + pair['crypto'] + '</td>' +
                        '<td><button class="delete-button btn  btn-danger "><i class="bi bi-trash3-fill"></i>Delete</button></td>'+
                       '</tr>';
     
                     $('#favTable tbody').append(newRow);
                     

                    $('.delete-button').on('click', function() {
                        var row = $(this).closest('tr');
                        var favPair = row.find('td:first').text(); // Assuming the first column is the username
                        var csrfToken = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            
                            url: "/favPairs/" + favPair + "/destroy/confirm",
                            method: "GET",
                            data:{pairName: favPair},
                            success: function(response) {
                                window.location.href = "/favPairs/" + favPair + "/destroy/confirm";
                                row.remove();
                            },
                            error: function(error) {
                                console.log("Error deleting favPair: " + error.responseText);
                            }
                        });
                    });
                    
    
                        console.log(pair);
    
                    });
                },
                error: function(){
                    console.log('error');
                    
                }
                });
        }
    
        setInterval(checkStatus,1000);
    });