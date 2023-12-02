<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Products Page!</h1>

    <div class="container">
        <div class="row gap-3" id="allProducts">

        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>

        $(document).ready(() => {


            function viewProducts() {
                let allProducts = document.getElementById('allProducts');
                let oldData;
                

                $.ajax({
                    url: 'query/viewQuery.php',
                    type: 'POST',
                    success: (products) => {
                        if (products != oldData) {
                            // console.log(products);
                            allProducts.innerHTML = products;


                            
                        let delBtn = document.querySelectorAll('.delBtn');
                        console.log(delBtn);

                        delBtn.forEach(btn => {

                            btn.addEventListener('click',()=>{
                                console.log(btn);
                                let delId = btn.getAttribute('delId');

                                $.ajax({
                                    url: 'query/deleteQuery.php',
                                    type: 'POST',
                                    data: {
                                        delId: delId
                                    }
                                })

                                    viewProducts();

                            })


                        });





                        }
                        oldData = products;



















                    }
                })
            }

            setInterval(viewProducts, 1000);
            // viewProducts();









        })


    </script>



</body>

</html>