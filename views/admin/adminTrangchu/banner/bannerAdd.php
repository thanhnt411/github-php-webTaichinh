<h2>Add</h2>
<form action="adminbanner.php?action=add" method="post">
    <table border="1" cellspacing="5" cellpadding="5">
        <tr>
            <td>Title</td>
            <td>Description</td>
            <td>Image</td>
        </tr>
        <tr>
            <td><input type="text" name="title" placeholder="title"></td>
            <td><input type="text" name="description" placeholder="description"></td>
            <td><input type="image" name="image" placeholder="Image"></td>
        </tr>
        <tr>
            <td><button type="submit">Add</button></td>
        </tr>
    </table>
</form>