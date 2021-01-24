const api_url =  
      "https://s3-ap-southeast-1.amazonaws.com/he-public-data/books8f8fe52.json"; 
  
// Defining async function 
async function getapi(url) { 
    
    // Storing response 
    const response = await fetch(url); 
    
    // Storing data in form of JSON 
    var data = await response.json(); 
    console.log(data); 
    if (response) { 
        //hideloader(); 
    } 
    show(data); 
} 
// Calling that async function 
getapi(api_url); 
  
// Function to hide the loader 
/*function hideloader() { 
    document.getElementById('loading').style.display = 'none'; 
} */
// Function to define innerHTML for HTML table 
function show(data) { 
    let tab = ""; 
    
    for (let r of data.values(data[10])) { 
        

        row_data=`
                    <div class="card">
                    <!--img src="book.png" alt="Avatar" style="width:50%"-->
                        <div class="container">
                            <h4><b>${r.title}</b></h4>
                            <p>Rating: ${r.average_rating}</p>
                            <p>Price: ${r.price}</p>
                            <button>Add to Cart</button>
                            <button>View Details</button>
                        </div>
                    </div>
                `;
                tab += row_data;
    } 
    
    document.getElementById("books").innerHTML = tab; 
} 
/*
var script = document.createElement('script');
script.src = '"https://code.jquery.com/jquery-3.5.1.js"';
script.type='text/javascript';
$('#txt-search').keyup(function(){
    var searchField = $(this).val();
    if(searchField === '')  {
        $('#filter-records').html('');
        return;
    }
    getapi(api_url); 
    jsondata=data;
    var regex=new RegExp(searchField,"i");
    $.each(data, function(key, val){
        if ((val.title==search(regex)) ) {
            console.log(val.title)
          }
    
})


});

*/