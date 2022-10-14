<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
         <table id="tablaProducto">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>get</th>
                            <th>post</th>
                            <th>put</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>bici1</td>
                            <td>200€</td>
                            <td><form action="bikes/get" method="get">+
                            
                                <input type="submit" value="get"/>
                            </form></td>
                             <td><form action="bikes/post" method="post">
                                 @csrf
                                 
                                <input type="submit" value="post"/>
                            </form></td>
                             <td><form action="bikes/delete" method="post">
                                 @csrf
                                 @method('delete')
                                <input type="submit" value="post"/>
                                
                            </form></td>
                             <td><form action="bikes/edit" method="get">
                                <input type="submit" value="edit"/>
                            </form></td>
                        </tr>
                        <h3>solo se han implementado los primeros enlaces</h3>
                         <tr>
                            <td>1</td>
                            <td>bici2</td>
                            <td><form action="bikes/get" method="get">+
                            
                                <input type="submit" value="get"/>
                            </form></td>
                             <td><form action="bikes/post" method="post">
                                 @csrf
                                 
                                <input type="submit" value="post"/>
                            </form></td>
                             <td><form action="bikes/delete" method="post">
                                 @csrf
                                 @method('delete')
                                <input type="submit" value="post"/>
                                
                            </form></td>
                             <td><form action="bikes/edit" method="get">
                                <input type="submit" value="edit"/>
                            </form></td>
                        </tr>
</body>
</html>