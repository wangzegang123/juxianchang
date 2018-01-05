<?php
function weather($keyword=''){
    $params = array(
        'appkey' => '47b34e2255648c0a37cd18598756a27a'
    );
    $url = 'https://way.jd.com/jisuapi/weather1';
    $all=json_decode(wx_http_request($url, $params ));
    foreach($all->result->result as $k=>$v){
            if($keyword==$v->city){
                $params = array(
                    'city' => $keyword,
                    'cityid' => $v->cityid,
                    'citycode' =>$v->citycode,
                    'appkey' => '47b34e2255648c0a37cd18598756a27a'
                );
                $url = 'https://way.jd.com/jisuapi/weather';
                $weather=json_decode(wx_http_request($url, $params));
                $contentStr="城市:".$weather->result->result->city."\r\n日期:".$weather->result->result->date."\r\n温度:".$weather->result->result->temp."~".$weather->result->result->templow."\r\n星期:".$weather->result->result->week."\r\n风级:".$weather->result->result->windpower;
                foreach($weather->result->result->index as $v1){
                   @$contentStr.="\r\n".$v1->iname.":".$v1->ivalue."\r\n".$v1->detail;
                }
                return $contentStr;
            }
}

}
?>