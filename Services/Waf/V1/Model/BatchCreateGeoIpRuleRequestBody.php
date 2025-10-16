<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateGeoIpRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateGeoIpRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  地理位置控制规则名称
    * geoip  地理位置封禁区域： (CA： 加拿大,US： 美国,AU： 澳大利亚,IN： 印度,JP： 日本,UK： 英国,FR： 法国,DE： 德国,BR： 巴西,Thailand： 泰国,Singapore： 新加坡,South Africa： 南非,Mexico： 墨西哥,Peru： 秘鲁,Indonesia： 印度尼西亚,GD： 广东,FJ： 福建,JL： 吉林,LN： 辽宁,TW： 中国-台湾,GZ： 贵州,AH： 安徽,HL： 黑龙江,HA： 河南,SC： 四川,HE： 河北,YN： 云南,HB： 湖北,HI： 海南,QH： 青海,HN： 湖南,JX： 江西,SX： 山西,SN： 陕西,ZJ： 浙江,GS： 甘肃,JS： 江苏,SD： 山东,BJ： 北京,SH： 上海,TJ： 天津,CQ： 重庆,MO： 中国-澳门,HK： 中国-香港,NX： 宁夏,GX： 广西,XJ： 新疆,XZ： 西藏,NM： 内蒙古)。具体的位置编码参见《附录-地理位置编码》查询。
    * white  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    * ipType  ip范围。若您的网站使用独享模式，请确认独享引擎是否全部升级到最新版本，避免造成异常。202412之后的版本支持配置IP范围
    * description  规则描述
    * policyIds  需要添加规则的策略id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'geoip' => 'string',
            'white' => 'int',
            'ipType' => 'string',
            'description' => 'string',
            'policyIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  地理位置控制规则名称
    * geoip  地理位置封禁区域： (CA： 加拿大,US： 美国,AU： 澳大利亚,IN： 印度,JP： 日本,UK： 英国,FR： 法国,DE： 德国,BR： 巴西,Thailand： 泰国,Singapore： 新加坡,South Africa： 南非,Mexico： 墨西哥,Peru： 秘鲁,Indonesia： 印度尼西亚,GD： 广东,FJ： 福建,JL： 吉林,LN： 辽宁,TW： 中国-台湾,GZ： 贵州,AH： 安徽,HL： 黑龙江,HA： 河南,SC： 四川,HE： 河北,YN： 云南,HB： 湖北,HI： 海南,QH： 青海,HN： 湖南,JX： 江西,SX： 山西,SN： 陕西,ZJ： 浙江,GS： 甘肃,JS： 江苏,SD： 山东,BJ： 北京,SH： 上海,TJ： 天津,CQ： 重庆,MO： 中国-澳门,HK： 中国-香港,NX： 宁夏,GX： 广西,XJ： 新疆,XZ： 西藏,NM： 内蒙古)。具体的位置编码参见《附录-地理位置编码》查询。
    * white  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    * ipType  ip范围。若您的网站使用独享模式，请确认独享引擎是否全部升级到最新版本，避免造成异常。202412之后的版本支持配置IP范围
    * description  规则描述
    * policyIds  需要添加规则的策略id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'geoip' => null,
        'white' => null,
        'ipType' => null,
        'description' => null,
        'policyIds' => null
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
    * name  地理位置控制规则名称
    * geoip  地理位置封禁区域： (CA： 加拿大,US： 美国,AU： 澳大利亚,IN： 印度,JP： 日本,UK： 英国,FR： 法国,DE： 德国,BR： 巴西,Thailand： 泰国,Singapore： 新加坡,South Africa： 南非,Mexico： 墨西哥,Peru： 秘鲁,Indonesia： 印度尼西亚,GD： 广东,FJ： 福建,JL： 吉林,LN： 辽宁,TW： 中国-台湾,GZ： 贵州,AH： 安徽,HL： 黑龙江,HA： 河南,SC： 四川,HE： 河北,YN： 云南,HB： 湖北,HI： 海南,QH： 青海,HN： 湖南,JX： 江西,SX： 山西,SN： 陕西,ZJ： 浙江,GS： 甘肃,JS： 江苏,SD： 山东,BJ： 北京,SH： 上海,TJ： 天津,CQ： 重庆,MO： 中国-澳门,HK： 中国-香港,NX： 宁夏,GX： 广西,XJ： 新疆,XZ： 西藏,NM： 内蒙古)。具体的位置编码参见《附录-地理位置编码》查询。
    * white  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    * ipType  ip范围。若您的网站使用独享模式，请确认独享引擎是否全部升级到最新版本，避免造成异常。202412之后的版本支持配置IP范围
    * description  规则描述
    * policyIds  需要添加规则的策略id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'geoip' => 'geoip',
            'white' => 'white',
            'ipType' => 'ip_type',
            'description' => 'description',
            'policyIds' => 'policy_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  地理位置控制规则名称
    * geoip  地理位置封禁区域： (CA： 加拿大,US： 美国,AU： 澳大利亚,IN： 印度,JP： 日本,UK： 英国,FR： 法国,DE： 德国,BR： 巴西,Thailand： 泰国,Singapore： 新加坡,South Africa： 南非,Mexico： 墨西哥,Peru： 秘鲁,Indonesia： 印度尼西亚,GD： 广东,FJ： 福建,JL： 吉林,LN： 辽宁,TW： 中国-台湾,GZ： 贵州,AH： 安徽,HL： 黑龙江,HA： 河南,SC： 四川,HE： 河北,YN： 云南,HB： 湖北,HI： 海南,QH： 青海,HN： 湖南,JX： 江西,SX： 山西,SN： 陕西,ZJ： 浙江,GS： 甘肃,JS： 江苏,SD： 山东,BJ： 北京,SH： 上海,TJ： 天津,CQ： 重庆,MO： 中国-澳门,HK： 中国-香港,NX： 宁夏,GX： 广西,XJ： 新疆,XZ： 西藏,NM： 内蒙古)。具体的位置编码参见《附录-地理位置编码》查询。
    * white  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    * ipType  ip范围。若您的网站使用独享模式，请确认独享引擎是否全部升级到最新版本，避免造成异常。202412之后的版本支持配置IP范围
    * description  规则描述
    * policyIds  需要添加规则的策略id
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'geoip' => 'setGeoip',
            'white' => 'setWhite',
            'ipType' => 'setIpType',
            'description' => 'setDescription',
            'policyIds' => 'setPolicyIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  地理位置控制规则名称
    * geoip  地理位置封禁区域： (CA： 加拿大,US： 美国,AU： 澳大利亚,IN： 印度,JP： 日本,UK： 英国,FR： 法国,DE： 德国,BR： 巴西,Thailand： 泰国,Singapore： 新加坡,South Africa： 南非,Mexico： 墨西哥,Peru： 秘鲁,Indonesia： 印度尼西亚,GD： 广东,FJ： 福建,JL： 吉林,LN： 辽宁,TW： 中国-台湾,GZ： 贵州,AH： 安徽,HL： 黑龙江,HA： 河南,SC： 四川,HE： 河北,YN： 云南,HB： 湖北,HI： 海南,QH： 青海,HN： 湖南,JX： 江西,SX： 山西,SN： 陕西,ZJ： 浙江,GS： 甘肃,JS： 江苏,SD： 山东,BJ： 北京,SH： 上海,TJ： 天津,CQ： 重庆,MO： 中国-澳门,HK： 中国-香港,NX： 宁夏,GX： 广西,XJ： 新疆,XZ： 西藏,NM： 内蒙古)。具体的位置编码参见《附录-地理位置编码》查询。
    * white  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    * ipType  ip范围。若您的网站使用独享模式，请确认独享引擎是否全部升级到最新版本，避免造成异常。202412之后的版本支持配置IP范围
    * description  规则描述
    * policyIds  需要添加规则的策略id
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'geoip' => 'getGeoip',
            'white' => 'getWhite',
            'ipType' => 'getIpType',
            'description' => 'getDescription',
            'policyIds' => 'getPolicyIds'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['geoip'] = isset($data['geoip']) ? $data['geoip'] : null;
        $this->container['white'] = isset($data['white']) ? $data['white'] : null;
        $this->container['ipType'] = isset($data['ipType']) ? $data['ipType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['policyIds'] = isset($data['policyIds']) ? $data['policyIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['geoip'] === null) {
            $invalidProperties[] = "'geoip' can't be null";
        }
        if ($this->container['white'] === null) {
            $invalidProperties[] = "'white' can't be null";
        }
        if ($this->container['ipType'] === null) {
            $invalidProperties[] = "'ipType' can't be null";
        }
        if ($this->container['policyIds'] === null) {
            $invalidProperties[] = "'policyIds' can't be null";
        }
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
    * Gets name
    *  地理位置控制规则名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 地理位置控制规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets geoip
    *  地理位置封禁区域： (CA： 加拿大,US： 美国,AU： 澳大利亚,IN： 印度,JP： 日本,UK： 英国,FR： 法国,DE： 德国,BR： 巴西,Thailand： 泰国,Singapore： 新加坡,South Africa： 南非,Mexico： 墨西哥,Peru： 秘鲁,Indonesia： 印度尼西亚,GD： 广东,FJ： 福建,JL： 吉林,LN： 辽宁,TW： 中国-台湾,GZ： 贵州,AH： 安徽,HL： 黑龙江,HA： 河南,SC： 四川,HE： 河北,YN： 云南,HB： 湖北,HI： 海南,QH： 青海,HN： 湖南,JX： 江西,SX： 山西,SN： 陕西,ZJ： 浙江,GS： 甘肃,JS： 江苏,SD： 山东,BJ： 北京,SH： 上海,TJ： 天津,CQ： 重庆,MO： 中国-澳门,HK： 中国-香港,NX： 宁夏,GX： 广西,XJ： 新疆,XZ： 西藏,NM： 内蒙古)。具体的位置编码参见《附录-地理位置编码》查询。
    *
    * @return string
    */
    public function getGeoip()
    {
        return $this->container['geoip'];
    }

    /**
    * Sets geoip
    *
    * @param string $geoip 地理位置封禁区域： (CA： 加拿大,US： 美国,AU： 澳大利亚,IN： 印度,JP： 日本,UK： 英国,FR： 法国,DE： 德国,BR： 巴西,Thailand： 泰国,Singapore： 新加坡,South Africa： 南非,Mexico： 墨西哥,Peru： 秘鲁,Indonesia： 印度尼西亚,GD： 广东,FJ： 福建,JL： 吉林,LN： 辽宁,TW： 中国-台湾,GZ： 贵州,AH： 安徽,HL： 黑龙江,HA： 河南,SC： 四川,HE： 河北,YN： 云南,HB： 湖北,HI： 海南,QH： 青海,HN： 湖南,JX： 江西,SX： 山西,SN： 陕西,ZJ： 浙江,GS： 甘肃,JS： 江苏,SD： 山东,BJ： 北京,SH： 上海,TJ： 天津,CQ： 重庆,MO： 中国-澳门,HK： 中国-香港,NX： 宁夏,GX： 广西,XJ： 新疆,XZ： 西藏,NM： 内蒙古)。具体的位置编码参见《附录-地理位置编码》查询。
    *
    * @return $this
    */
    public function setGeoip($geoip)
    {
        $this->container['geoip'] = $geoip;
        return $this;
    }

    /**
    * Gets white
    *  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    *
    * @return int
    */
    public function getWhite()
    {
        return $this->container['white'];
    }

    /**
    * Sets white
    *
    * @param int $white 防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    *
    * @return $this
    */
    public function setWhite($white)
    {
        $this->container['white'] = $white;
        return $this;
    }

    /**
    * Gets ipType
    *  ip范围。若您的网站使用独享模式，请确认独享引擎是否全部升级到最新版本，避免造成异常。202412之后的版本支持配置IP范围
    *
    * @return string
    */
    public function getIpType()
    {
        return $this->container['ipType'];
    }

    /**
    * Sets ipType
    *
    * @param string $ipType ip范围。若您的网站使用独享模式，请确认独享引擎是否全部升级到最新版本，避免造成异常。202412之后的版本支持配置IP范围
    *
    * @return $this
    */
    public function setIpType($ipType)
    {
        $this->container['ipType'] = $ipType;
        return $this;
    }

    /**
    * Gets description
    *  规则描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets policyIds
    *  需要添加规则的策略id
    *
    * @return string[]
    */
    public function getPolicyIds()
    {
        return $this->container['policyIds'];
    }

    /**
    * Sets policyIds
    *
    * @param string[] $policyIds 需要添加规则的策略id
    *
    * @return $this
    */
    public function setPolicyIds($policyIds)
    {
        $this->container['policyIds'] = $policyIds;
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

