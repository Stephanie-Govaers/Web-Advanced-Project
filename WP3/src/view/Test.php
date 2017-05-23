<html>
<script>
    function fetchDemo() {
        fetch('https://api.github.com/users/chriscoyier/repos')
            .then(response => {
            console.log(response);
    })
    }

    function getById(){
        var urlId = document.getElementById('getId').value;
        var getDataId;

        document.getElementById('idG').innerHTML = data[0].FavoriteId;
        document.getElementById('naamG').innerHTML = data[0].StudentId;
        document.getElementById('bDG').innerHTML = data[0].FavoritesIds;
    }


    function postData(){

        fetch('http://localhost/api/events', {
            method: 'POST',
            body: JSON.stringify({
                Event_name: document.getElementById('Name').value,
                Event_start: document.getElementById('Start').value,
                Event_end: document.getElementById('End').value,
                Event_person: document.getElementById('Person').value
            })
        })
            .then(function (data) {
                console.log('Req succesfull');
                console.log(postData);
            })
            .catch(function (error) {
                console.log('Request failure: ', error);
            });
    }

    function afterLoaded(){

        
        document.getElementById("postData").addEventListener("click",postData,false);
        document.getElementById("getById").addEventListener("click",getById,false);
    }
    window.addEventListener("load",afterLoaded,false);
</script>
<body>
<button id="postData" class="btn btn-success">Post data</button>
</br>
<b>GetByIdDeel:</b></br>
Vraag een project op met id:
<input type="text" id="getId">
<button id="getById">GetById</button>
</br>
<b>Postdeel:</b>
<div>
    <input type="text" id="Name">
    <input type="text" id="Start">
    <input type="text" id="End">
    <input type="text" id="Person">
</div>
<div id="table">
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Naam</th>
            <th>Klantnummer</th>
        </tr>
        </thead>
        <tr>
            <td id="idG"></td>
            <td id="naamG"></td>
            <td id="bDG"></td>
        </tr>
    </table>
</div>
</body>
</html>