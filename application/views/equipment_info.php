<form action="<?php echo base_url(); ?>equipment/update" method="post">
    <div class="overflow-auto">
        <div class="px-4 sm:px-0 py-4 text-center w-full">
            <h1 class="text-base font-semibold leading-7 text-gray-900">Equipment info</h1>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">General detail and tech spec.</p>
        </div>
        <div>
            <dl class="divide-y divide-gray-100">
                <input type="text" name="eqId" value="<?php echo $data->id; ?>" hidden />

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">IP Address</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <input class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                            type="text" name="eqIp" autocomplete="off" required
                            value="<?php echo $data->ip_address; ?>"
                        />
                    </dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Equipment name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <input class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                            type="text" name="eqName" autocomplete="off" required
                            value="<?php echo $data->name; ?>"
                        />
                    </dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Type</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <select class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                            name="eqType" autocomplete="off" required
                        >
                            <option value="<?php echo $data->type_id; ?>" selected>
                                <?php echo $data->eq_type; ?>
                            </option>

                            <?php
                                foreach($type as $t) {
                                    echo "<option value=\"".$t->id."\">";
                                    echo $t->name."</option>";
                                }
                            ?>
                        </select>
                    </dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Responsibility</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><input 
                            list="employee" 
                            name="emp_id" 
                            id="emp_id"
                            class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                            aria-describedby="hs-input-helper-text"
                            autocomplete="off"
                            required
                            value="<?php echo $data->emp_id; ?>"
                        >

                        <datalist id="employee">
                            <?php
                                foreach($emp as $e) {
                                    echo "<option value=\"".$e->emp_id."\">".$e->name;
                                }
                            ?>
                        </datalist>
                    </dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Location</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <input class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                            type="text" name="eqLocation" autocomplete="off" required
                            value="<?php echo $data->location; ?>" 
                        />
                    </dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Status</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <?php 
                            $status = $data->status == 1
                                ? "ปกติ"
                                : "พ้นสภาพ";

                            if($data->status == 1) {
                                echo "<td class=\"text-sky-800 font-semibold\">";
                                echo "<span class=\"inline-flex items-center rounded-md bg-green-50 px-4 py-2 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-700/10\">".$status."</span>";
                                echo "</td>";
                            } else {
                                echo "<td class=\"text-sky-800 font-semibold\">";
                                echo "<span class=\"inline-flex items-center rounded-md bg-red-50 px-4 py-2 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10\">".$status."</span>";
                                echo "</td>";
                            }
                        ?>
                    </dd>
                </div>
            </dl>
        </div>
        
        <hr>


        <div class="px-4 sm:px-0 py-4 text-center w-full">
            <h1 class="text-base font-semibold leading-7 text-gray-900">Software</h1>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Software spec.</p>
        </div>
        <div>
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Operating system (OS)</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <select class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                            name="eqOs">

                            <option value="<?php echo $data->os_id; ?>" selected>
                                <?php echo $data->os_name; ?>
                            </option>
                            
                            <?php
                                foreach($os as $o) {
                                    echo "<option value=\"".$o->id."\">";
                                    echo $o->name."</option>";
                                }
                            ?>
                        </select>
                    </dd>
                </div>
            </dl>
        </div>
        
        <hr>


        <div class="px-4 sm:px-0 py-4 text-center w-full">
            <h1 class="text-base font-semibold leading-7 text-gray-900">Tech spec</h1>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Specific information.</p>
        </div>
        <div>
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Model</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <input class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                            type="text" name="eqModel" autocomplete="off" required
                            value="<?php echo $data->model; ?>"
                        />
                    </dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">RAM</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <select class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                            name="eqRam">
                            <option value="<?php echo $data->ram; ?>" selected><?php echo $data->ram; ?></option>
                            <option value="-">-</option>
                            <option value="4GB">4 GB</option>
                            <option value="8GB">8 GB</option>
                            <option value="16GB">16 GB</option>
                        </select>
                    </dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Memory type</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <select  class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                            name="eqMemType">
                            <option value="<?php echo $data->memory; ?>" selected>
                                <?php echo ($data->memory == 1) ? 'HDD' : 'SSD'; ?>
                            </option>
                            <option value="0">-</option>
                            <option value="1">HDD</option>
                            <option value="2">SSD</option>
                        </select>
                    </dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Storage</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <select  class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                            name="eqStorage">
                            <option value="<?php echo $data->storage; ?>" selected>
                                <?php echo $data->storage; ?>
                            </option>
                            <option value="-">-</option>
                            <option value="256GB">256 GB</option>
                            <option value="512GB">512 GB</option>
                            <option value="1TB">1 TB</option>
                        </select>
                    </dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Manufacturer</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <select  class="block flex-1 rounded-md border border-2 py-1.5 pl-2 w-full"
                            name="eqManufac">

                            <option value="<?php echo $data->ma_id; ?>" selected>
                                <?php echo $data->manufac; ?>
                            </option>

                            <?php
                                foreach($manufactorer as $ma) {
                                    echo "<option value=\"".$ma->id."\">";
                                    echo $ma->name."</option>";
                                }
                            ?>
                        </select>
                    </dd>
                </div>
            </dl>
        </div>


        <hr>


        <div class="px-4 sm:px-0 py-4 text-center w-full">
            <button type="submit" 
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white 
                        py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Update
            </button>
        </div>
    </div>
</form>