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
    <h1 class="text-center">Add Products!</h1>

    <div class="container">
        <div class="row">
            <form class="row g-3">
          
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" placeholder="Enter Product Name">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Product Price</label>
                    <input type="text" class="form-control" id="productPrice"
                        placeholder="Enter Product Price">
                        <p id="error" style="color: red;"></p>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Product Description</label>
                    <input type="text" class="form-control" id="productDesc"
                        placeholder="Enter Product Description">
                </div>
               
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Product Rating</label>
                    <input type="text" class="form-control" id="productRating"
                        placeholder="Enter Product Rating">
                </div>
               
        
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" id="addBtn">Add Products</button>
                </div>
                <p id="message"></p>
            </form>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>


                $(document).ready(()=>{

                    let addBtn = document.getElementById('addBtn');
                    let numberReg = /^[0-9]+$/

                    let productPrice = document.getElementById('productPrice');
                    productPrice.addEventListener('keyup',()=>{
                            if(numberReg.test(productPrice.value))
                            {
                                console.log('right')
                                error.textContent = ''
                            }
                            else
                            {
                                console.log('wrong')
                                error.textContent = 'Kindly insert only Numbers'
                            }
                        })

                    addBtn.addEventListener('click',(e)=>{

                        e.preventDefault();

                        let productName = document.getElementById('productName').value;
                        let productPrice = document.getElementById('productPrice').value;
                        let productDesc = document.getElementById('productDesc').value;
                        let productRating = document.getElementById('productRating').value;

                        console.log(productName,productPrice,productDesc,productRating)

                      


                        $.ajax({
                            url: 'query/insertQuery.php',
                            type: 'POST',
                            data: {
                                productName: productName,
                                productPrice: productPrice,
                                productDesc: productDesc,
                                productRating: productRating,
                                
                            },
                            success: (productData)=>{
                                console.log(productData)
                                let message = document.getElementById('message');
                                message.textContent = productData;
                                setTimeout(()=>{
                                    message.textContent = '';  
                                },2000)
                            }
                        })
                    })








                })





        </script>







</body>

</html>