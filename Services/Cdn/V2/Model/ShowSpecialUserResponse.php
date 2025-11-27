<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSpecialUserResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSpecialUserResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  1表示用户可以查询总请求时长枚举，0表示用户不可以查询总请求时长枚举
    * metric  进制
    * fluxMetric  流量进制
    * cy  1表示用户可以，0表示用户不可以。是否是开放国家及地区界面用户
    * h6  1表示用户可以查询ipv6流量,https流量，0表示用户不可以
    * c  1表示用户可以查询具体的状态码详情，0表示用户不可以
    * sc  1表示用户查询 top url 时要返回http状态码，0表示用户不返回
    * bhc  1表示该用户可以查询回源状态码，0表示不可以
    * pi  1表示该用户可以查询protocol和IPVersion，0表示用户不可以
    * exp5  1表示该用户可以查询租户界面5分钟粒度数据导出白名单，0表示用户不可以
    * m1  1表示该用户可以查询1分钟粒度统计数据，0表示用户不可以
    * isMonthM5  1表示该用户可以查询1个月5分钟粒度统计数据，0表示用户不可以
    * expAgy  1表示该用户可以在租户界面指定下载链接可用范围，0表示用户不可以
    * cesReportSite  1表示该用户可以是否上报到国际站CES，0表示用户不可以
    * float  1表示该用户按上浮系数展示数据，0表示用户不可以
    * isShowUpBw  1表示该用户允许查询入网带宽，0表示用户不可以
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'int',
            'metric' => 'int',
            'fluxMetric' => 'int',
            'cy' => 'int',
            'h6' => 'int',
            'c' => 'int',
            'sc' => 'int',
            'bhc' => 'int',
            'pi' => 'int',
            'exp5' => 'int',
            'm1' => 'int',
            'isMonthM5' => 'int',
            'expAgy' => 'int',
            'cesReportSite' => 'int',
            'float' => 'int',
            'isShowUpBw' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  1表示用户可以查询总请求时长枚举，0表示用户不可以查询总请求时长枚举
    * metric  进制
    * fluxMetric  流量进制
    * cy  1表示用户可以，0表示用户不可以。是否是开放国家及地区界面用户
    * h6  1表示用户可以查询ipv6流量,https流量，0表示用户不可以
    * c  1表示用户可以查询具体的状态码详情，0表示用户不可以
    * sc  1表示用户查询 top url 时要返回http状态码，0表示用户不返回
    * bhc  1表示该用户可以查询回源状态码，0表示不可以
    * pi  1表示该用户可以查询protocol和IPVersion，0表示用户不可以
    * exp5  1表示该用户可以查询租户界面5分钟粒度数据导出白名单，0表示用户不可以
    * m1  1表示该用户可以查询1分钟粒度统计数据，0表示用户不可以
    * isMonthM5  1表示该用户可以查询1个月5分钟粒度统计数据，0表示用户不可以
    * expAgy  1表示该用户可以在租户界面指定下载链接可用范围，0表示用户不可以
    * cesReportSite  1表示该用户可以是否上报到国际站CES，0表示用户不可以
    * float  1表示该用户按上浮系数展示数据，0表示用户不可以
    * isShowUpBw  1表示该用户允许查询入网带宽，0表示用户不可以
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => 'int64',
        'metric' => 'int64',
        'fluxMetric' => 'int64',
        'cy' => 'int64',
        'h6' => 'int64',
        'c' => 'int64',
        'sc' => 'int64',
        'bhc' => 'int64',
        'pi' => 'int64',
        'exp5' => 'int64',
        'm1' => 'int64',
        'isMonthM5' => 'int64',
        'expAgy' => 'int64',
        'cesReportSite' => 'int64',
        'float' => 'int64',
        'isShowUpBw' => 'int64'
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * status  1表示用户可以查询总请求时长枚举，0表示用户不可以查询总请求时长枚举
    * metric  进制
    * fluxMetric  流量进制
    * cy  1表示用户可以，0表示用户不可以。是否是开放国家及地区界面用户
    * h6  1表示用户可以查询ipv6流量,https流量，0表示用户不可以
    * c  1表示用户可以查询具体的状态码详情，0表示用户不可以
    * sc  1表示用户查询 top url 时要返回http状态码，0表示用户不返回
    * bhc  1表示该用户可以查询回源状态码，0表示不可以
    * pi  1表示该用户可以查询protocol和IPVersion，0表示用户不可以
    * exp5  1表示该用户可以查询租户界面5分钟粒度数据导出白名单，0表示用户不可以
    * m1  1表示该用户可以查询1分钟粒度统计数据，0表示用户不可以
    * isMonthM5  1表示该用户可以查询1个月5分钟粒度统计数据，0表示用户不可以
    * expAgy  1表示该用户可以在租户界面指定下载链接可用范围，0表示用户不可以
    * cesReportSite  1表示该用户可以是否上报到国际站CES，0表示用户不可以
    * float  1表示该用户按上浮系数展示数据，0表示用户不可以
    * isShowUpBw  1表示该用户允许查询入网带宽，0表示用户不可以
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'metric' => 'metric',
            'fluxMetric' => 'flux_metric',
            'cy' => 'cy',
            'h6' => 'h6',
            'c' => 'c',
            'sc' => 'sc',
            'bhc' => 'bhc',
            'pi' => 'pi',
            'exp5' => 'exp5',
            'm1' => 'm1',
            'isMonthM5' => 'is_month_m5',
            'expAgy' => 'exp_agy',
            'cesReportSite' => 'ces_report_site',
            'float' => 'float',
            'isShowUpBw' => 'is_show_up_bw'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  1表示用户可以查询总请求时长枚举，0表示用户不可以查询总请求时长枚举
    * metric  进制
    * fluxMetric  流量进制
    * cy  1表示用户可以，0表示用户不可以。是否是开放国家及地区界面用户
    * h6  1表示用户可以查询ipv6流量,https流量，0表示用户不可以
    * c  1表示用户可以查询具体的状态码详情，0表示用户不可以
    * sc  1表示用户查询 top url 时要返回http状态码，0表示用户不返回
    * bhc  1表示该用户可以查询回源状态码，0表示不可以
    * pi  1表示该用户可以查询protocol和IPVersion，0表示用户不可以
    * exp5  1表示该用户可以查询租户界面5分钟粒度数据导出白名单，0表示用户不可以
    * m1  1表示该用户可以查询1分钟粒度统计数据，0表示用户不可以
    * isMonthM5  1表示该用户可以查询1个月5分钟粒度统计数据，0表示用户不可以
    * expAgy  1表示该用户可以在租户界面指定下载链接可用范围，0表示用户不可以
    * cesReportSite  1表示该用户可以是否上报到国际站CES，0表示用户不可以
    * float  1表示该用户按上浮系数展示数据，0表示用户不可以
    * isShowUpBw  1表示该用户允许查询入网带宽，0表示用户不可以
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'metric' => 'setMetric',
            'fluxMetric' => 'setFluxMetric',
            'cy' => 'setCy',
            'h6' => 'setH6',
            'c' => 'setC',
            'sc' => 'setSc',
            'bhc' => 'setBhc',
            'pi' => 'setPi',
            'exp5' => 'setExp5',
            'm1' => 'setM1',
            'isMonthM5' => 'setIsMonthM5',
            'expAgy' => 'setExpAgy',
            'cesReportSite' => 'setCesReportSite',
            'float' => 'setFloat',
            'isShowUpBw' => 'setIsShowUpBw'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  1表示用户可以查询总请求时长枚举，0表示用户不可以查询总请求时长枚举
    * metric  进制
    * fluxMetric  流量进制
    * cy  1表示用户可以，0表示用户不可以。是否是开放国家及地区界面用户
    * h6  1表示用户可以查询ipv6流量,https流量，0表示用户不可以
    * c  1表示用户可以查询具体的状态码详情，0表示用户不可以
    * sc  1表示用户查询 top url 时要返回http状态码，0表示用户不返回
    * bhc  1表示该用户可以查询回源状态码，0表示不可以
    * pi  1表示该用户可以查询protocol和IPVersion，0表示用户不可以
    * exp5  1表示该用户可以查询租户界面5分钟粒度数据导出白名单，0表示用户不可以
    * m1  1表示该用户可以查询1分钟粒度统计数据，0表示用户不可以
    * isMonthM5  1表示该用户可以查询1个月5分钟粒度统计数据，0表示用户不可以
    * expAgy  1表示该用户可以在租户界面指定下载链接可用范围，0表示用户不可以
    * cesReportSite  1表示该用户可以是否上报到国际站CES，0表示用户不可以
    * float  1表示该用户按上浮系数展示数据，0表示用户不可以
    * isShowUpBw  1表示该用户允许查询入网带宽，0表示用户不可以
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'metric' => 'getMetric',
            'fluxMetric' => 'getFluxMetric',
            'cy' => 'getCy',
            'h6' => 'getH6',
            'c' => 'getC',
            'sc' => 'getSc',
            'bhc' => 'getBhc',
            'pi' => 'getPi',
            'exp5' => 'getExp5',
            'm1' => 'getM1',
            'isMonthM5' => 'getIsMonthM5',
            'expAgy' => 'getExpAgy',
            'cesReportSite' => 'getCesReportSite',
            'float' => 'getFloat',
            'isShowUpBw' => 'getIsShowUpBw'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['fluxMetric'] = isset($data['fluxMetric']) ? $data['fluxMetric'] : null;
        $this->container['cy'] = isset($data['cy']) ? $data['cy'] : null;
        $this->container['h6'] = isset($data['h6']) ? $data['h6'] : null;
        $this->container['c'] = isset($data['c']) ? $data['c'] : null;
        $this->container['sc'] = isset($data['sc']) ? $data['sc'] : null;
        $this->container['bhc'] = isset($data['bhc']) ? $data['bhc'] : null;
        $this->container['pi'] = isset($data['pi']) ? $data['pi'] : null;
        $this->container['exp5'] = isset($data['exp5']) ? $data['exp5'] : null;
        $this->container['m1'] = isset($data['m1']) ? $data['m1'] : null;
        $this->container['isMonthM5'] = isset($data['isMonthM5']) ? $data['isMonthM5'] : null;
        $this->container['expAgy'] = isset($data['expAgy']) ? $data['expAgy'] : null;
        $this->container['cesReportSite'] = isset($data['cesReportSite']) ? $data['cesReportSite'] : null;
        $this->container['float'] = isset($data['float']) ? $data['float'] : null;
        $this->container['isShowUpBw'] = isset($data['isShowUpBw']) ? $data['isShowUpBw'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets status
    *  1表示用户可以查询总请求时长枚举，0表示用户不可以查询总请求时长枚举
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 1表示用户可以查询总请求时长枚举，0表示用户不可以查询总请求时长枚举
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets metric
    *  进制
    *
    * @return int|null
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param int|null $metric 进制
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets fluxMetric
    *  流量进制
    *
    * @return int|null
    */
    public function getFluxMetric()
    {
        return $this->container['fluxMetric'];
    }

    /**
    * Sets fluxMetric
    *
    * @param int|null $fluxMetric 流量进制
    *
    * @return $this
    */
    public function setFluxMetric($fluxMetric)
    {
        $this->container['fluxMetric'] = $fluxMetric;
        return $this;
    }

    /**
    * Gets cy
    *  1表示用户可以，0表示用户不可以。是否是开放国家及地区界面用户
    *
    * @return int|null
    */
    public function getCy()
    {
        return $this->container['cy'];
    }

    /**
    * Sets cy
    *
    * @param int|null $cy 1表示用户可以，0表示用户不可以。是否是开放国家及地区界面用户
    *
    * @return $this
    */
    public function setCy($cy)
    {
        $this->container['cy'] = $cy;
        return $this;
    }

    /**
    * Gets h6
    *  1表示用户可以查询ipv6流量,https流量，0表示用户不可以
    *
    * @return int|null
    */
    public function getH6()
    {
        return $this->container['h6'];
    }

    /**
    * Sets h6
    *
    * @param int|null $h6 1表示用户可以查询ipv6流量,https流量，0表示用户不可以
    *
    * @return $this
    */
    public function setH6($h6)
    {
        $this->container['h6'] = $h6;
        return $this;
    }

    /**
    * Gets c
    *  1表示用户可以查询具体的状态码详情，0表示用户不可以
    *
    * @return int|null
    */
    public function getC()
    {
        return $this->container['c'];
    }

    /**
    * Sets c
    *
    * @param int|null $c 1表示用户可以查询具体的状态码详情，0表示用户不可以
    *
    * @return $this
    */
    public function setC($c)
    {
        $this->container['c'] = $c;
        return $this;
    }

    /**
    * Gets sc
    *  1表示用户查询 top url 时要返回http状态码，0表示用户不返回
    *
    * @return int|null
    */
    public function getSc()
    {
        return $this->container['sc'];
    }

    /**
    * Sets sc
    *
    * @param int|null $sc 1表示用户查询 top url 时要返回http状态码，0表示用户不返回
    *
    * @return $this
    */
    public function setSc($sc)
    {
        $this->container['sc'] = $sc;
        return $this;
    }

    /**
    * Gets bhc
    *  1表示该用户可以查询回源状态码，0表示不可以
    *
    * @return int|null
    */
    public function getBhc()
    {
        return $this->container['bhc'];
    }

    /**
    * Sets bhc
    *
    * @param int|null $bhc 1表示该用户可以查询回源状态码，0表示不可以
    *
    * @return $this
    */
    public function setBhc($bhc)
    {
        $this->container['bhc'] = $bhc;
        return $this;
    }

    /**
    * Gets pi
    *  1表示该用户可以查询protocol和IPVersion，0表示用户不可以
    *
    * @return int|null
    */
    public function getPi()
    {
        return $this->container['pi'];
    }

    /**
    * Sets pi
    *
    * @param int|null $pi 1表示该用户可以查询protocol和IPVersion，0表示用户不可以
    *
    * @return $this
    */
    public function setPi($pi)
    {
        $this->container['pi'] = $pi;
        return $this;
    }

    /**
    * Gets exp5
    *  1表示该用户可以查询租户界面5分钟粒度数据导出白名单，0表示用户不可以
    *
    * @return int|null
    */
    public function getExp5()
    {
        return $this->container['exp5'];
    }

    /**
    * Sets exp5
    *
    * @param int|null $exp5 1表示该用户可以查询租户界面5分钟粒度数据导出白名单，0表示用户不可以
    *
    * @return $this
    */
    public function setExp5($exp5)
    {
        $this->container['exp5'] = $exp5;
        return $this;
    }

    /**
    * Gets m1
    *  1表示该用户可以查询1分钟粒度统计数据，0表示用户不可以
    *
    * @return int|null
    */
    public function getM1()
    {
        return $this->container['m1'];
    }

    /**
    * Sets m1
    *
    * @param int|null $m1 1表示该用户可以查询1分钟粒度统计数据，0表示用户不可以
    *
    * @return $this
    */
    public function setM1($m1)
    {
        $this->container['m1'] = $m1;
        return $this;
    }

    /**
    * Gets isMonthM5
    *  1表示该用户可以查询1个月5分钟粒度统计数据，0表示用户不可以
    *
    * @return int|null
    */
    public function getIsMonthM5()
    {
        return $this->container['isMonthM5'];
    }

    /**
    * Sets isMonthM5
    *
    * @param int|null $isMonthM5 1表示该用户可以查询1个月5分钟粒度统计数据，0表示用户不可以
    *
    * @return $this
    */
    public function setIsMonthM5($isMonthM5)
    {
        $this->container['isMonthM5'] = $isMonthM5;
        return $this;
    }

    /**
    * Gets expAgy
    *  1表示该用户可以在租户界面指定下载链接可用范围，0表示用户不可以
    *
    * @return int|null
    */
    public function getExpAgy()
    {
        return $this->container['expAgy'];
    }

    /**
    * Sets expAgy
    *
    * @param int|null $expAgy 1表示该用户可以在租户界面指定下载链接可用范围，0表示用户不可以
    *
    * @return $this
    */
    public function setExpAgy($expAgy)
    {
        $this->container['expAgy'] = $expAgy;
        return $this;
    }

    /**
    * Gets cesReportSite
    *  1表示该用户可以是否上报到国际站CES，0表示用户不可以
    *
    * @return int|null
    */
    public function getCesReportSite()
    {
        return $this->container['cesReportSite'];
    }

    /**
    * Sets cesReportSite
    *
    * @param int|null $cesReportSite 1表示该用户可以是否上报到国际站CES，0表示用户不可以
    *
    * @return $this
    */
    public function setCesReportSite($cesReportSite)
    {
        $this->container['cesReportSite'] = $cesReportSite;
        return $this;
    }

    /**
    * Gets float
    *  1表示该用户按上浮系数展示数据，0表示用户不可以
    *
    * @return int|null
    */
    public function getFloat()
    {
        return $this->container['float'];
    }

    /**
    * Sets float
    *
    * @param int|null $float 1表示该用户按上浮系数展示数据，0表示用户不可以
    *
    * @return $this
    */
    public function setFloat($float)
    {
        $this->container['float'] = $float;
        return $this;
    }

    /**
    * Gets isShowUpBw
    *  1表示该用户允许查询入网带宽，0表示用户不可以
    *
    * @return int|null
    */
    public function getIsShowUpBw()
    {
        return $this->container['isShowUpBw'];
    }

    /**
    * Sets isShowUpBw
    *
    * @param int|null $isShowUpBw 1表示该用户允许查询入网带宽，0表示用户不可以
    *
    * @return $this
    */
    public function setIsShowUpBw($isShowUpBw)
    {
        $this->container['isShowUpBw'] = $isShowUpBw;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

