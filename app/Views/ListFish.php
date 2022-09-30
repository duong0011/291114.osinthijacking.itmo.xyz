<div  class="table-responsive">
        <h1>
            Danh sách cá
        </h1>
        <table  class="table table-bordered table-hover table-striped  table-sm ">
            <tr >
               <th>id</th>
               <th>Tên loài</th>
               <th>Màu sắc</th>
               <th>Nơi sống</th>
               <th>Thông tin</th>
               <th>Giá</th>
               <th>Chỉnh sửa</th>
            </tr>
            
            <?php
                $i = 1;
                foreach($dta as $row) {
            ?>
                <tr class='active'>
                	<td style='width: 1%'><?php echo $i ?></td>
                    <td style='width: 2%'><?php echo $row['name']; ?></td>
                    <td style='width: 5%'><?php echo $row['color']; ?></td>
                    <td style='width: 5%'><?php echo $row['local']; ?></td>
                    <td  style='width: 20%'><?php echo $row['info']; ?></td>
                    <td style='width: 5%'><?php echo $row['price']; ?></td>
                    <td style='width: 3%'>
                        <a href="Add_fish/delete/<?php echo $row['fid']?>"> Xóa</a>
                        <a href="Add_fish/update/<?php echo $row['fid']?>"> Cập nhật</a>
                    </td>
                </tr>
                        <?php
                        $i++;
                    }
                
            ?>
        </table>
    </div>