<?php
foreach($data['info'] as $val){
    echo "<div id='info-button' class='col-sm-2'>";
    echo "<div class='btn-group-vertical'>";
    echo "<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Sửa</button> <br>";
    echo "<form action='./Clients/FormNA1/".$val['id_kh']." method='POST'>";
    echo "<button id='na1' type='submit' id_na1='".$val['id_kh']."' type='button' class='btn btn-info btn-lg'>NA1</button>";
    echo "</form> <br>";
    echo "<form action='./Clients/FormNA2".$val['id_kh']." method='POST'>";
    echo "<button id='na2' type='submit' id_na1='".$val['id_kh']."' type='button' class='btn btn-info btn-lg'>NA2</button>";
    echo "</form> <br>";
    echo "</div>";
    echo "<div class='modal fade' id='myModal' role='dialog'>";
    echo "<div class='modal-dialog'>";
    echo "<div class='modal-content'>";
    echo "<div class='modal-header'>";
    echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
    echo "</div>";
    echo "<div class='modal-body'>";
    echo "<form>";
    echo "Họ Tên <input type='text' class='form-control' name='hoten' value='".$val['hoten']."'>";
    echo "Ngày sinh <input type='date' class='form-control' name='ngsinh' value='".$val['ngaysinh']."'>";
    echo "Quốc tịch <input type='text' class='form-control' name='qt' value='".$val['quoctich']."'>";
    echo "Số hộ chiếu <input type='text' class='form-control' name='sohc' value='".$val['soHC']."'>";
    echo "Ngày cấp <input type='date' class='form-control' name='ngaycap' value='".$val['ngaycap']."'>";
    echo "Nơi cấp <input type='text' class='form-control' name='noicap' value='".$val['noicap']."'>";
    echo "Ngày hết hạn <input type='date' class='form-control' name='ngayhh' value='".$val['ngayhethan']."'>";
    echo "<br> <button id='c-save' id_c='".$val['id_kh']."' type='button' class='btn btn-success' data-dismiss='modal'>Lưu thông tin</button>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='col-sm-8'>";
    echo "<div class='body_1'>";
    echo "<div class='formClients' style='margin-top: 0px; padding: 0;'>";
    echo "<h2 style='margin:0;'>New Client</h2>";
    echo "<div class='row100_disable'>";
    echo "<div class='col_disable'>";
    echo "<div class='inputBox_disable'>";
    echo "<input type='text' name='hoten' disabled value='".$val['hoten']."' required='required'>";
    echo "<span class='text'>Full Name</span>";
    echo "<span class='line'></span>";
    echo "</div>";
    echo "</div>";
    echo "<div class='col_disable'>";
    echo "<div class='inputBox_disable'>";
    echo "<input type='date' name='ngsinh' disabled value='".$val['ngaysinh']."' required='required'>";
    echo "<span class='text'>Date of Birth</span>";
    echo "<span class='line'></span>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row100_disable'>";
    echo "<div class='col_disable'>";
    echo "<div class='inputBox_disable'>";
    echo "<input type='text' name='quoctich' disabled value='".$val['quoctich']."' required='required'>";
    echo "<span class='text'>Nationality</span>";
    echo "<span class='line'></span>";
    echo "</div>";
    echo "</div>";
    echo "<div class='col_disable'>";
    echo "<div class='inputBox_disable'>";
    echo "<input type='text' name='soHC' disabled value='".$val['soHC']."' required='required'>";
    echo "<span class='text'>Passport</span>";
    echo "<span class='line'></span>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row100_disable'>";
    echo "<div class='col_disable'>";
    echo "<div class='inputBox_disable'>";
    echo "<input type='text' name='noicap' disabled value='".$val['noicap']."' required='required'>";
    echo "<span class='text'>Issuing authority</span>";
    echo "<span class='line'></span>";
    echo "</div>";
    echo "</div>";
    echo "<div class='col_disable'>";
    echo "<div class='inputBox_disable'>";
    echo "<input type='date' name='ngaycap' disabled value='".$val['ngaycap']."' required='required'>";
    echo "<span class='text'>Date of issuing</span>";
    echo "<span class='line'></span>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row100_disable'>";
    echo "<div class='col_disable'>";
    echo "<div class='inputBox_disable'>";
    echo "<input type='text' name='ngayhh' disabled value='".$val['ngayhethan']."' required='required'>";
    echo "<span class='text'>Expiry date</span>";
    echo "<span class='line'></span>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='col-sm-2'></div>";
}
?>