<div class="row">
    <div class="container col-md-12">
        <!-- Contéudo Javascript Aqui -->
    </div>
</div>

<script>
    fetch('https://rickandmortyapi.com/api/character', {
        method: 'GET'
    })
    .then(response => response.json())
    .then(function(json){
        var container = document.querySelector('.container');

        json.results.map(function(results){
            // console.log(json);
            container.innerHTML+=
                `<center>
                <div>
                    <div> <img src=` + results.image + `> </div>
                    <strong>Nome:</strong> <span> ` + results.name + ` </span><br>
                    <strong>Espécie:</strong> <span> ` + results.species + ` </span><br>
                    <strong>Status:</strong> <span> ` + results.status + ` </span><br>
                    <hr>
                </div>
            `;
        })
    })
</script>
