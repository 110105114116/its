<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Topic</th>
            <th scope="col" class="px-6 py-3">January</th>
            <th scope="col" class="px-6 py-3">February</th>
            <th scope="col" class="px-6 py-3">March</th>
            <th scope="col" class="px-6 py-3">April</th>
            <th scope="col" class="px-6 py-3">May</th>
            <th scope="col" class="px-6 py-3">June</th>
            <th scope="col" class="px-6 py-3">July</th>
            <th scope="col" class="px-6 py-3">August</th>
            <th scope="col" class="px-6 py-3">September</th>
            <th scope="col" class="px-6 py-3">October</th>
            <th scope="col" class="px-6 py-3">November</th>
            <th scope="col" class="px-6 py-3">December</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $d) { ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php
                        if ($d->topic == 1) {
                            echo "1. Check capacity and disk";
                        } else if ($d->topic == 2) {
                            echo "2. Disk clean up";
                        } else if ($d->topic == 3) {
                            echo "3. Equipment cleaning";
                        } else if ($d->topic == 4) {
                            echo "4. Screen server energy";
                        } else if ($d->topic == 5) {
                            echo "5. Check email not over size";
                        } else if ($d->topic == 6) {
                            echo "6. Standard programs";
                        } else if ($d->topic == 7) {
                            echo "7. Scan virus test";
                        }else echo "-";
                    ?>
                </th>
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->january == null) {
                            echo "-";
                        } else {
                        if($d->january == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
                
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->february == null) {
                            echo "-";
                        } else {
                        if($d->february == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
                
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->march == null) {
                            echo "-";
                        } else {
                        if($d->march == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
                
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->april == null) {
                            echo "-";
                        } else {
                        if($d->april == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
                
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->may == null) {
                            echo "-";
                        } else {
                        if($d->may == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
                
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->june == null) {
                            echo "-";
                        } else {
                        if($d->june == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
                
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->july == null) {
                            echo "-";
                        } else {
                        if($d->july == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
                
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->august == null) {
                            echo "-";
                        } else {
                        if($d->august == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
                
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->september == null) {
                            echo "-";
                        } else {
                        if($d->september == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
                
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->october == null) {
                            echo "-";
                        } else {
                        if($d->october == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
                
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->november == null) {
                            echo "-";
                        } else {
                        if($d->november == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
                
                <td class="px-6 py-4 text-center">
                    <?php 
                        if ($d->december == null) {
                            echo "-";
                        } else {
                        if($d->december == 1) {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    <?php
                        } else {
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    <?php
                        }}
                    ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>