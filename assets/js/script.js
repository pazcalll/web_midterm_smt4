// $('#search-text').on('keyup', function(e){
//     if(e.keyCode == 13)
//     { 
//         searchMovies();
//     }
// })

// $('#btn-search').on('click', function(e){
//     searchMovies();
// })
$('#del').on('click', function(e){
    deleter();
})
// $('#movie-list').on('click', '#btn-details', function(e){
//     $.ajax({
//         url:'http://www.omdbapi.com',
//         type:'GET',
//         dataType:'json',
//         data:{
//             'apikey' : 'fc56e592', //API Key
//             'i' : $(this).data('id') //Parameter i untuk pencarian film berdasarkan id film  / omdbID
//         },
//         success: function(result){
//             if(result.Response === "True"){
//                 $('.modal-body').html('');
//                 $('.modal-body').append(`
//                     <div class="container-fluid">
//                         <div class="row">
//                             <div class="col-md-4">
//                                 <img src="` + result.Poster + `" class="img-fluid">
//                             </div>
//                             <div class="col-md-8">
//                                 <ul class="list-group">
//                                   <li class="list-group-item"><h4>`+ result.Title +`</h4></li>
//                                   <li class="list-group-item">Released : `+ result.Released +`</li>
//                                   <li class="list-group-item">Genre : `+ result.Genre +`</li>
//                                   <li class="list-group-item">Writer : `+ result.Writer +`</li>
//                                   <li class="list-group-item">Actors : `+ result.Actors +`</li>
//                                   <li class="list-group-item">Production : `+ result.Production +`</li>
//                                   <li class="list-group-item">Plot : `+ result.Plot +`</li>
//                                 </ul>
//                             </div>
//                         </div>
//                     </div>    
//                 `);
//             }
//             else{
//                 $('#movie-list').append(`
//                     <div class="col-sm-12 text-center">
//                         <h1>`+reult.Error+`</h1>
//                     </div>
//                 `);
//             }
//         }
//     });
// })
function deleter(){
    $.ajax({
        url:'http://localhost/phpmyadmin/',
        type: 'DELETE',
        datatype: 'json',
        data:{
            'db': 'lamp',
            'table': 'tb_facility',
            
        },
        success: function(result){
            let room = result.Search;
            $('#del').html('');
            if (result.Response =="True") {
                $('#del').append(`
                <?php
                    $this->db->where('id', `+data.id+`);
                    $this->db->delete('tb_facility');
                ?>
                `)
            }
        }
    })
}
function getAll(){
    $.ajax({
        url: 'http://localhost/phpmyadmin/',
        type: 'GET',
        datatype: 'json',
        success: function(result){
            let room = result.Search;
        }
    })
}
// function searchMovies(){
//     $.ajax({
//         url:'http://www.omdbapi.com/',
//         type: 'GET',
//         dataType:'json',
//         data:{
//             'apikey' : 'fc56e592',
//             's' : $('#search-text').val() //Parameter's pencarian film berdasarkan judul
//         },
//         success: function(result){
//             let movies = result.Search;
//             $('#movie-list').html('');
//             if(result.Response == "True"){
//                 $.each(movies, function(i,data){
//                     $('#movie-list').append(`
//                     <div class="col-md-4 mb-3">
//                         <div class="card" style="width: 18rem;">
//                             <img src="`+data.Poster+`" class="card-img-top" height="300px">
//                             <div class="card-body">
//                                 <h5 class="card-title">`+data.Title+`</h5>
//                                 <p class="card-text">Year : `+data.Year+`</p>
//                                 <a href="#" class="btn btn-primary" id="btn-details"
//                                 data-id="`+data.imdbID+`" data-toggle="modal" data-target="#exampleModal">Show Details</a>
//                             </div>
//                         </div>
//                     </div>`
//                     );
//                 })
//             }
//             else{
//                 $('#movie-list').append(`
//                     <div class="col-sm-12 text-center">
//                         <h1>`+reult.Error+`</h1>
//                     </div>
//                 `);
//             }
//         }
//     });
//     $('#search-text').val("");
// }

