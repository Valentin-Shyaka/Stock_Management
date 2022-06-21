<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All the products</title>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <style>
    h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
  position: relative;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}




@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
 /* // background: linear-gradient(to right, #25c481, #25b7c4);// */
 background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(106,11,129,1) 17%, rgba(0,212,255,1) 100%);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
.table-header>button{
    width:150px;
    background-color:greenyellow;
    height:50px;
    color:white;
    border:none;
    margin-left: 40px;
    border-radius:10px;
}
.table-header>.functs>form{
    float: right;
    position:relative;
    right:40px;
    top: 20px;
}
.functs>form>input{
    width:250px;
    height:50px;
    text-indent:20px;
    
    color:white;
    font-size:1.2em;
    border-radius:30px;
    background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);
outline: none;
}
.functs>form>button{
    width:150px;
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(5,145,0,1) 0%, rgba(0,212,255,1) 100%);;
    height:50px;
    color:white;
    border:none;
    border-radius:10px;
}
section>button{
    width:150px;
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(1,198,53,1) 0%, rgba(178,7,203,1) 100%);

    height:50px;
    color:white;
    border:none;
    position: relative;
    right:40px;
    top:20px;
    margin-left: 40px;
    border-radius:10px;

}
#delete{
    color: #F50057;
    fill: #F50057;
}
#edit{
    color: blue;
    fill: blue;
}
a{
  text-decoration: none;
  color: white;
}
    </style>
</head>
<body>
<section>
            <div class="functs">
                <form action='search.php' method="post">
                <input type="text" placeholder="search">
                
                <button type="submit">Search</button>
                </form>
             </div>
 
  <h1>All the Products</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
      
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Brand</th>
                    <th>Supplier Phone</th>
                    <th>supplier</th>
                    <th>Date-Added</th>
                    <th colspan="2">Action</th>
                    
            
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
                    <?php
                   
                   
                   if (empty($products)) {
                       echo "<h1>Connection Failed</h1>";
                   } else {
                       if ($products) {
                           foreach($products as $product){
                               ?>
                                    <tr>
                                        <td><?= $product['productId']?></td>
                                        <td><?= $product['product_Name']?></td>
                                        <td><?= $product['brand']?></td>
                                        <td><?= $product['supplier_phone']?></td>
                                        <td><?= $product['supplier']?></td>
                                        <td><?= $product['added_date']?></td>
                                        <td><a href="<?php echo  base_url('/products/edit/'.$product['productId'])?>"><box-icon id="edit" type='solid' name='edit-alt'></box-icon></a></td>
                                        <td><a href="<?php echo  base_url('/products/delete/'.$product['productId'])?>"><box-icon id="delete" type='solid' name='trash'></box-icon></a></td>
                                    </tr>
                               <?php
                           }
                       } else { ?>
                          
                        <h1>No products found !!</h1>
                        <?php
                    }
                    }
                   
                    
                    ?>
                    
                    </tbody>
    </table>
  </div>
  <button><a href="<?=base_url().'products/print'?>">PRINT</a></button>
  <button><a href="<?=base_url().'products/index'?>">Add +</a></button>
</section>


<!-- follow me template -->
<!-- <div class="made-with-love">
  Made with
  <i>♥</i> by
  <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
</div> -->


<script>
    $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
    </script>
    
</body>
</html>