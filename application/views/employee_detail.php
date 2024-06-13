<dl class="divide-y divide-gray-100">
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">รหัสพนักงาน</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 font-semibold">
            <?php echo $fullData->empId; ?>
        </dd>
        <input type="text" name="empId" value="<?php echo $fullData->empId; ?>" hidden>
    </div>

    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-10 text-gray-900">ชื่อ - นามสกุล(ภาษาไทย)</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 font-semibold">
            <input type="text" name="nameTh" 
                autocomplete="off" 
                class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                value="<?php echo $fullData->fullname; ?>"
                required
            />
        </dd>
    </div>

    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-10 text-gray-900">ชื่อ - นามสกุล(ภาษาอังกฤษ)</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 font-semibold">
            <input type="text" name="nameEn" 
                autocomplete="off" 
                class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                value="<?php echo $fullData->fullnameen; ?>"
            />
        </dd>
    </div>

    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">อีเมล</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 font-semibold">
            <input type="text" name="email" 
                autocomplete="off" 
                class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                value="<?php echo isset($fullData->email) ? $fullData->email : null;  ?>"
            />
        </dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">เบอร์โทรศัพท์</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 font-semibold">
            <input type="text" name="phone" 
                autocomplete="off" 
                class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                value="<?php echo isset($fullData->phone) ? $fullData->phone : null;  ?>"
            />
        </dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">แผนก</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 font-semibold">
            <select name="deptId" class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full">
                <option value="<?php echo $fullData->deptId; ?>" selected><?php echo $fullData->department; ?></option>
                <?php
                    foreach($department as $dept) {
                        echo "<option value=\"".$dept->id."\">".$dept->name."</option>";
                    }
                ?>
            </select>
        </dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">ตำแหน่ง</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 font-semibold">
            <select name="pId" class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full">
                <option value="<?php echo $fullData->pId; ?>" selected><?php echo $fullData->position; ?></option>
                <?php
                    foreach($position as $po) {
                        echo "<option value=\"".$po->id."\">".$po->name."</option>";
                    }
                ?>
            </select>
        </dd>
    </div>
    
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">ประเภท</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 font-semibold">
            <select name="workType" class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full">
                <?php
                    if (isset($fullData->type)) {
                        if ($fullData->type == 'monthly') {
                            echo "<option value=\"monthly\" selected>รายเดือน</option>";
                            echo "<option value=\"daily\">รายวัน</option>";
                        } else if ($fullData->type = 'daily'){
                            echo "<option value=\"monthly\">รายเดือน</option>";
                            echo "<option value=\"daily\" selected>รายวัน</option>";
                        } else {
                            echo "<option value=\"\" selected>-</option>";
                            echo "<option value=\"monthly\">รายเดือน</option>";
                            echo "<option value=\"daily\">รายวัน</option>";
                        }
                    } else {
                        echo "<option value=\"\" selected>-</option>";
                        echo "<option value=\"monthly\">รายเดือน</option>";
                        echo "<option value=\"daily\">รายวัน</option>";
                    }
                ?>
            </select>
        </dd>
    </div>

    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">เพศ</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 font-semibold">
            <?php 
                if ($fullData->gender == 'male') {
                    echo 'ชาย';
                } else if ($fullData->gender == 'female') {
                    echo 'หญิง';
                } else {
                    echo '-';
                }
            ?>
        </dd>
    </div>

    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">วันที่เริ่มงาน</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 font-semibold">
            <?php 
                echo (isset($fullData->sDate)) ? $fullData->sDate : '-'; 
            ?>
        </dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">สถานะ</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
            <?php 
                $status = $fullData->status == 1
                    ? "ปกติ"
                    : "พ้นสภาพ";

                if($fullData->status == 1) {
                    echo "<td class=\"text-sky-800 font-semibold\">";
                    echo "<span class=\"inline-flex items-center rounded-md bg-green-50 px-4 py-2 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-700/10\">".$status."</span>";
                    echo "</td>";
                } else {
                    echo "<td class=\"text-sky-800 font-semibold\">";
                    echo "<span class=\"inline-flex items-center rounded-md bg-red-50 px-4 py-2 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10\">".$status."</span>";
                    echo "</td>";
                }
            ?>
            <span onclick="chgStatus(<?php echo $fullData->empId; ?>, <?php echo $fullData->status; ?>)" class="ml-3 underline text-red-400 cursor-pointer">Change</span>
        </dd>
    </div>
</dl>

<script>
    function chgStatus(id, sId) {
                console.log(id)
                Swal.fire({
                    title: "Are you sure?",
                    text: "Change to <?php echo ($fullData->status == 1) ? 'inactive' : 'active'; ?>",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "gray",
                    confirmButtonText: "Yes, change it!"
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({  
                            url : "<?php echo base_url('employee/chgStatus') ?>", 
                            type:"POST",  
                            data:{
                                empId: id,
                                status: sId
                            },
                            success:function(data){
                                location.href = "<?php echo base_url()."employee"; ?>"
                            }  
                        });
                    }
                });
            }
</script>