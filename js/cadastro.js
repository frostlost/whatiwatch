<form method="POST" action="fichaJS.html" onsubmit="return sendData();">
    <table>
        <tr>
            <td>IMDb number: </td:
            <td><input type="text" name="imdb" id="nome"></td>
        </tr>
        <tr>
            <td>Title: </td:
            <td><input type="text" name="title" id="title"></td>
        </tr>

        <tr>
            <td>Description: </td:
            <td><input type="text" name="description" id="description"></td>
        </tr>
        <tr>
            <td>Image URL (Don not use HTTPs): </td:
            <td><input type="text" name="imageurl" id="imageurl"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Send Data"></td>
        </tr>
    </table>
</form>
<script>
    function sendData(){
        var imdb = document.getElementById("imdb").value;
        var title = document.getElementById("title").value;
        var description = document.getElementById("description").value;
        var imageurl = document.getElementById("imageurl").value;

        if(imdb.length < 8 || imdb.lenght > 30)
            alert("IMDb ir wrong! It must be 7 charecters.");
        else{
            if(title < 0)
                alert("It can not be empty, please, type something!");
            else{
                if(imageurl < 0)
                    alert("It can not be empty, please, type some URL image here!");
                else
                    alert("Sucessfuly!");
                }
            }
    };
</script>

