<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="product" id="pro">
        <h1>Product name</h1>
        <button id="plus">Add More</button>
        <input type="hidden" value="1" id="number">
        <button id="minus">Remove One</button>
        <h3 id="total">1</h3>
        <h1 id="price">150 </h1>
    </div>
    <button id="download">Download</button>
    <script src="html2canvas.min.js"></script>
    <script src="main.js"></script>


    <script>
        document.getElementById("download").addEventListener("click", function() {

        html2canvas(document.querySelector('#pro')).then(function(canvas) {

            console.log(canvas);
            saveAs(canvas.toDataURL(), 'file-name.png');
            });
    });
    

    
    function saveAs(uri, filename) {

    var link = document.createElement('a');

    if (typeof link.download === 'string') {

        link.href = uri;
        link.download = filename;

        //Firefox requires the link to be in the body
        document.body.appendChild(link);

        //simulate click
        link.click();

        //remove the link when done
        document.body.removeChild(link);

    } else {

        window.open(uri);

    }
    }
    </script>
</body>
</html>