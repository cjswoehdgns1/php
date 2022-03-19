<?php
include_once("./common/dbcon.php");
include_once("./common/head.php");

$mysql_table = 'Aibot';

$q = "SELECT * FROM ".$mysql_table. " ORDER BY idx DESC";

$rslt = $connect->query($q) or die($this->_connect->error);

?>

</head>
<body>
    <div>
        <button 
            onclick='moveHome()'
        >이동</button>
    </div>
    <section class="ftco-section">
        <div class="container">
            <table class="type06">
                <thead>
                    <tr>
                        <th scope="row">순번</td>
                        <th scope="row">배송일</td>
                        <th scope="row">MD</td>
                        <th scope="row">차량번호</td>
                        <th scope="row">담당자</td>
                        <th scope="row">핸드폰번호</td>
                        <th scope="row">합계</td>
                        <th scope="row">비고</td>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = $rslt->fetch_array()){ ?>
                
                    <tr>        
                        <td class="even"><?php echo $row["idx"];?></td>
                        <td             ><?php echo $row["ship_date"];?></td>
                        <td class="even"><?php echo $row["MD"];?></td>
                        <td             ><?php echo $row["car_no"];?></td>
                        <td class="even"><?php echo $row["manager_name"];?></td>
                        <td             ><?php echo $row["phone_no"];?></td>
                        <td class="even"><?php echo $row["sum"];?></td>
                        <td             ><?php echo $row["note"];?></td>
                        
                        <td class="even"><Button class="btnmodify" key="<?php echo $row["idx"];?>">수정</Button></td>
                        <td             ><button class="btndelete" key="<?php echo $row["idx"];?>">삭제</button></td>
                    </tr>
                
                <?php } ?>
                </tbody>
            </table>
        </div>
    </section>

<?php include_once("./common/footer.php") ?>