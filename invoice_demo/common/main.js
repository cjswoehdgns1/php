
var i = -1;

function cal(){
    $.ajax({
        url: "cal.php",
        type: "get",
        data: {
            return: $('#return').val(), 
            MD: $('#MD').val(),
            cycle: $('#cycle').val(),
            err: $('#err').val(),
            Disposal: $('#Disposal').val(),
        }
    }).done(function(data) {
        $('#sum').text(data);
    });
}

function changePurpose(){
    i++;
    i = i>2 ? 0 : i;

    const purposeArr = ["(발송처용)", "(도착지용)", "(운송회사용)"];
    const purposeText = document.getElementById('purpose');

    purposeText.innerHTML = purposeArr[i];
}

function uploadData(){
    $.ajax({
        url: "upload.php",
        type: "get",
        data: {
            shipDate: $('#ship-date').val(), 
            MD: $('#store-name').val(),
            managerName: $('#manager-name').val(),
            managerPhone: $('#manager-phone').val(),
            carNo: $('#car-no').val(),
            note: $('#note').val(),
            sum: $('#sum').text()
        }
    }).done(function(data) {
        alert('제출이 완료되었습니다.');
        location.href='./manage.php';

    });
}

function moveHome(){
    location.href="index.php";
}

function moveManage(){
    location.href="manage.php";
}