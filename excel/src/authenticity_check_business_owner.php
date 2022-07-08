<?php
require './env.php';
require './func.php';

$CRN = isset($_GET['crn']) ? [$_GET['crn']] : null;

if ($CRN != null) {
    $data = json_encode(['b_no' => $CRN]);
    $RTN = json_decode(getAuthCheck_businessman($data, $serviceKey))->data;


    $str = "";
    foreach ( $RTN as $r ) {
        $str .= '<tr>
            <td>'.$r->b_no.'</td>
            <td>'.$r->b_stt.'</td>
            <td>'.$r->tax_type.'</td>
        </tr>';
    }
}

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<form action='./authenticity_check_business_owner.php' method='get'>
    <input name='crn' type='text' />
    <button type='submit'>제출</button>
</form>

<p>엑셀파일업로드</p>
<form 
    name="add_form_entry" 
    id="add_form_entry" 
    enctype="multipart/form-data"
>
    <label for="inputFileName">Select a file:</label>
    <input type="file" name="inputFileName" size="40">
    <input id='submit' type="button" value="확인">
</form>

<table id='status-check'>
    <thead>
        <tr>
            <th>사업자번호</th>
            <th>사업자상태</th>
            <th>사업자유형</th>
        </tr>
    </thead>
    <tbody>
        <?php echo isset($str) ? $str : ""; ?>
    </tbody>
</table>
<script> 

    $("#submit").on('click', function () {
        const reqUrl = 'excel_file_upload.php';
        let reqData = new FormData($("#add_form_entry")[0]);

        $.ajax({
            url: reqUrl,
            type: "post",
            processData: false, // 데이터 객체를 문자열로 바꿀지에 대한 값이다. true면 일반문자...
            contentType: false, // 해당 타입을 true로 하면 일반 text로 구분되어 진다.
            dataType: "json",
            data: reqData,
        })
        .done(function(json) {
            var str = "";
            $.each(json, function(x, i){
                str += "<tr>";
                str += '<td>' + i.b_no + '</td>';
                str += '<td>' + i.b_stt + '</td>';
                str += '<td>' + i.tax_type + '</td>';
                str += '</tr>';
            });
            $("#status-check").append(str);
        
        })
        .fail(function(xhr, status, errorThrown) {
            console.log(xhr);
            console.log(errorThrown);
        })
        .always(function(xhr, status) {
            // console.log(xhr);
            // console.log(status);
        });
    })
    
</script>