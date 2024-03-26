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
            @include("todo.list")
            <form method="post" action="/todo/store" enctype="multipart/form-data">
                @csrf
                <table>
                    <tr>
                        <td>Task:</td>
                        <td><input type="text" name="task" /></td>
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
                    <a href="/todo">
                        <button type="button">Cancel</button>
                    </a>
                </div>
            </form>
        </div>
    </body>
</html>