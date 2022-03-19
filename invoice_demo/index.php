<?php include_once('common/head.php'); ?>


</head>
<body>
    <div>
        <button 
            onclick='moveManage()'
        >이동</button>
        <div class='wrap'>
            <table class="type07">
                <th class="type07" colspan="4">
                    <p>M H & C o. 모던</p>
                    <p>물류기기 이동전표</p>
                </th>
                <tr>
                    <td colspan="4">
                        <span id='purpose'>(발송처용)</span>
                        <button onclick="changePurpose()">용도변경</button>
                    </td>
                </tr>
                <tr class="type07">
                    <td class="type07" style="writing-mode: tb-rl">
                        <p>발송일<strong style='font-size: 18px; color:red'>(필수)</strong></p>
                    </td>
                    
                    <td class="type07" colspan="3">
                        <input value='2021-12-01' id='ship-date' type='date' style="width: 150px">
                    </td>
                </tr>
                <tr class="type07">
                    <td class="type07" style="writing-mode: tb-rl" rowspan="2">
                        <p>발송지</p>
                    </td>
                    <td class="type07">
                        <p>회사명<strong style='font-size: 18px; color:red'>(필수)</strong></p>
                        
                    </td>
                    <td class="type07" colspan="2">
                        <select id='store-name' placeholder="출발지">
                            <option>중계</option>
                            <option>노원</option>
                            <option>천안</option>
                        </select>
                        <i>2204</i>
                    </td>
                </tr>
                <tr class="type07">
                    
                    <td class="type07">
                        <p>담당자<br>연락처</p>
                        
                    </td class="type07">
                    <td class="type07" colspan="2">
                        <input disabled type='text' placeholder='전화번호'>
                    </td>
                </tr>
                <tr class="type07">
                    <td class="type07" style="writing-mode: tb-rl" rowspan="4">
                        <p>도착지</p>
                    </td>
                    <td class="type07">
                        <p>회사명</p>
                        
                    </td>
                    <td class="type07" colspan="2">
                        <p>천안센터</p>
                    </td>
                </tr>
                <tr class="type07">
                    
                    
                    <td class="type07">
                        <p>담당자</p>
                        
                    </td>
                    <td class="type07">
                        <input disabled type='text' placeholder='담당자'><span>(인)</span>
                        
                    </td>

                </tr>
                <tr class="type07">
                    
                    
                    <td class="type07">
                        <p>연락처</p>
                        
                    </td>

                    <td class="type07">
                        <input disabled type='text' placeholder='전화번호'>
                        
                    </td>
                </tr>
                <tr class="type07">
                    
                    <td class="type07">
                        <p>주소</p>
                        
                    </td>
                    <td class="type07" colspan="2">
                        <input disabled type='text' placeholder='주소'>
                    </td>
                </tr>
                <tr class="type07">
                    <td class="type07" style="writing-mode: tb-rl" rowspan="4">
                        <p>운송회사</p>
                    </td>
                    <td class="type07">
                        <p>회사명</p>
                        
                    </td>
                    <td class="type07" colspan="2">
                        <p>(주)아이봇로지스</p>
                    </td>
                </tr>
                <tr class="type07">
                    
                    
                    <td class="type07">
                        <p>차량번호<strong style='font-size: 18px; color:red'>(필수)</strong></p>
                        
                    </td>
                    <td class="type07" colspan="2">
                        <input id='car-no' type='text' placeholder='차량번호' >
                        
                    </td>
                    
                </tr>
                <tr class="type07">
                    
                    
                    <td class="type07">
                        <p>담당자<strong style='font-size: 18px; color:red'>(필수)</strong></p>
                        
                    </td>
                    <td class="type07" colspan="2">
                        <input id='manager-name' type='text' placeholder='담당자' ><span>(인)</span>
                        
                    </td>
                    
                </tr>
                <tr class="type07">
                    
                    <td class="type07">
                        <p>연락처<strong style='font-size: 18px; color:red'>(필수)</strong></p>
                        
                    </td>
                    <td class="type07" colspan="2">
                        <input id='manager-phone' type='text' placeholder='전화번호' >
                        
                    </td>
                </tr>
            </table>
        </div>
        <div class='wrap'>
            <table class="type07">
                <thead class="type07">
                    <th class="type07" colspan="2">품명</th>
                    <th class="type07">수량</td>
                    <th class="type07">용도</td>
                    
                </thead>
                <tbody>
                    <tr>
                        <td class="type07" colspan="2">Retail R<br>파렛트 출고</td>
                        <td class="type07"><input disabled class='amount' type="number"></td>
                        <td class="type07"></td>
                        
                    </tr>
                    <tr>
                        <td class="type07" colspan="2">KPP<br>파렛트 출고</td>
                        <td class="type07"><input disabled class='amount' type="number"></td>
                        <td class="type07"></td>
                        
                    </tr>
                    <tr>
                        <td class="type07" colspan="2" rowspan="5">기타</td>
                        <td class="type07">반품</td>
                        <td class="type07">
                            <input id='return' class='amount' type="number" value="0">
                            <span class='unit'>C/T</span>
                        </td>
                        
                    </tr>
                    <tr>
                        
                        <td class="type07">MD</td>
                        <td class="type07">
                            <input id='MD' class='amount' type="number" value="0">
                            <span class='unit'>C/T</span>
                        </td>
                        
                    </tr>
                    <tr>
                        
                        <td class="type07">회전</td>
                        <td class="type07">
                            <input id='cycle' class='amount' type="number" value="0">
                            <span class='unit'>C/T</span>
                        </td>
                        
                    </tr>
                    <tr>
                        
                        <td class="type07">불량</td>
                        <td class="type07">
                            <input id='err' class='amount' type="number" value="0">
                            <span class='unit'>C/T</span>
                        </td>
                        
                    </tr>
                    <tr>
                        
                        <td class="type07">폐기</td>
                        <td class="type07">
                            <input id='Disposal' class='amount' type="number" value="0">
                            <span class='unit'>C/T</span>
                        </td>
                        
                    </tr>
                    <tr>
                        
                        <td class="type07">합계(C/T)</td>
                        <td class="type07"><button onclick="cal()">계산<strong style='font-size: 18px; color:red'>(필수)</strong></button></td>
                        <td class="type07"></td>
                        <td class="type07">
                            <span id='sum'></span>
                            <span class='unit'>C/T</span>
                        </td>
                        
                    </tr>
                    <tr>
                        <td class="type07" colspan="2">특이사항<strong style='font-size: 18px; color:red'>(필수)</strong></td>
                        <td class="type07" colspan="3"><input id='note' type="text" placeholder="특이사항"></td>
                    </tr>
                    <tr>
                        <td class="type07" colspan="5">
                            ※ 해당 상품은 (주)엠에치치엔코 자산이므로 <br>
                            취급관리에 유의해 주시기 바랍니다
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="btn">
        <button onclick="uploadData()">제출</button>
    </div>

</body>

</html>