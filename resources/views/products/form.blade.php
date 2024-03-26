<html>
    <head>
        <style>
            .center {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div>
            @include("products.list")
            <form method="post" action="/products/store" enctype="multipart/form-data">
                @csrf
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" /></td>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td><input type="text" name="pricing" /></td>
                    </tr>
                    <tr>
                        <td>Promotion:</td>
                        <td><input type="text" name="promotion" /></td>
                    </tr>
                    <tr>
                        <td>Category:</td>
                        <td><input type="text" name="category" /></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td>Image: <input type="file" name="image"></td>
                    </tr>
                    <tr>
                        <td>Description: </td>
                        <td><textarea name="description"></textarea></td>
                    </tr>
                </table>    
                <div>
                    <button type="submit">Save Task</button>
                    <a href="/products">
                        <button type="button">Cancel</button>
                    </a>
                </div>
            </form>
        </div>
    </body>
</html>