<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttackStatisticRespBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttackStatisticRespBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apps  **参数解释**： 应用列表 **取值范围**： 不涉及
    * associatedName  **参数解释**： 绑定资源名称 **取值范围**： 不涉及
    * associatedType  **参数解释**： 绑定资源类型 **取值范围**： PORT：IPV4云服务器 IPV6_PORT：IPV6云服务器
    * attackCount  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马
    * denyCount  **参数解释**： 拦截次数 **取值范围**： 不涉及
    * dstPorts  **参数解释**： 目的端口列表 **取值范围**： 不涉及
    * ip  **参数解释**： IP地址 **取值范围**： 不涉及
    * latestTime  **参数解释**： 最近攻击时间 **取值范围**： 不涉及
    * regionId  **参数解释**： 地区ID **取值范围**： 不涉及
    * regionName  **参数解释**： 地区名称 **取值范围**： 不涉及
    * srcType  **参数解释**： 攻击来源类型 **取值范围**： 不涉及
    * vgwId  **参数解释**： vgw Id **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apps' => '\HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]',
            'associatedName' => 'string',
            'associatedType' => 'string',
            'attackCount' => 'int',
            'attackType' => 'string',
            'denyCount' => 'int',
            'dstPorts' => '\HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]',
            'ip' => 'string',
            'latestTime' => 'int',
            'regionId' => 'string',
            'regionName' => 'string',
            'srcType' => 'string',
            'vgwId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apps  **参数解释**： 应用列表 **取值范围**： 不涉及
    * associatedName  **参数解释**： 绑定资源名称 **取值范围**： 不涉及
    * associatedType  **参数解释**： 绑定资源类型 **取值范围**： PORT：IPV4云服务器 IPV6_PORT：IPV6云服务器
    * attackCount  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马
    * denyCount  **参数解释**： 拦截次数 **取值范围**： 不涉及
    * dstPorts  **参数解释**： 目的端口列表 **取值范围**： 不涉及
    * ip  **参数解释**： IP地址 **取值范围**： 不涉及
    * latestTime  **参数解释**： 最近攻击时间 **取值范围**： 不涉及
    * regionId  **参数解释**： 地区ID **取值范围**： 不涉及
    * regionName  **参数解释**： 地区名称 **取值范围**： 不涉及
    * srcType  **参数解释**： 攻击来源类型 **取值范围**： 不涉及
    * vgwId  **参数解释**： vgw Id **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apps' => null,
        'associatedName' => null,
        'associatedType' => null,
        'attackCount' => 'int64',
        'attackType' => null,
        'denyCount' => 'int64',
        'dstPorts' => null,
        'ip' => null,
        'latestTime' => 'int64',
        'regionId' => null,
        'regionName' => null,
        'srcType' => null,
        'vgwId' => null
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
    * apps  **参数解释**： 应用列表 **取值范围**： 不涉及
    * associatedName  **参数解释**： 绑定资源名称 **取值范围**： 不涉及
    * associatedType  **参数解释**： 绑定资源类型 **取值范围**： PORT：IPV4云服务器 IPV6_PORT：IPV6云服务器
    * attackCount  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马
    * denyCount  **参数解释**： 拦截次数 **取值范围**： 不涉及
    * dstPorts  **参数解释**： 目的端口列表 **取值范围**： 不涉及
    * ip  **参数解释**： IP地址 **取值范围**： 不涉及
    * latestTime  **参数解释**： 最近攻击时间 **取值范围**： 不涉及
    * regionId  **参数解释**： 地区ID **取值范围**： 不涉及
    * regionName  **参数解释**： 地区名称 **取值范围**： 不涉及
    * srcType  **参数解释**： 攻击来源类型 **取值范围**： 不涉及
    * vgwId  **参数解释**： vgw Id **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apps' => 'apps',
            'associatedName' => 'associated_name',
            'associatedType' => 'associated_type',
            'attackCount' => 'attack_count',
            'attackType' => 'attack_type',
            'denyCount' => 'deny_count',
            'dstPorts' => 'dst_ports',
            'ip' => 'ip',
            'latestTime' => 'latest_time',
            'regionId' => 'region_id',
            'regionName' => 'region_name',
            'srcType' => 'src_type',
            'vgwId' => 'vgw_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apps  **参数解释**： 应用列表 **取值范围**： 不涉及
    * associatedName  **参数解释**： 绑定资源名称 **取值范围**： 不涉及
    * associatedType  **参数解释**： 绑定资源类型 **取值范围**： PORT：IPV4云服务器 IPV6_PORT：IPV6云服务器
    * attackCount  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马
    * denyCount  **参数解释**： 拦截次数 **取值范围**： 不涉及
    * dstPorts  **参数解释**： 目的端口列表 **取值范围**： 不涉及
    * ip  **参数解释**： IP地址 **取值范围**： 不涉及
    * latestTime  **参数解释**： 最近攻击时间 **取值范围**： 不涉及
    * regionId  **参数解释**： 地区ID **取值范围**： 不涉及
    * regionName  **参数解释**： 地区名称 **取值范围**： 不涉及
    * srcType  **参数解释**： 攻击来源类型 **取值范围**： 不涉及
    * vgwId  **参数解释**： vgw Id **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'apps' => 'setApps',
            'associatedName' => 'setAssociatedName',
            'associatedType' => 'setAssociatedType',
            'attackCount' => 'setAttackCount',
            'attackType' => 'setAttackType',
            'denyCount' => 'setDenyCount',
            'dstPorts' => 'setDstPorts',
            'ip' => 'setIp',
            'latestTime' => 'setLatestTime',
            'regionId' => 'setRegionId',
            'regionName' => 'setRegionName',
            'srcType' => 'setSrcType',
            'vgwId' => 'setVgwId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apps  **参数解释**： 应用列表 **取值范围**： 不涉及
    * associatedName  **参数解释**： 绑定资源名称 **取值范围**： 不涉及
    * associatedType  **参数解释**： 绑定资源类型 **取值范围**： PORT：IPV4云服务器 IPV6_PORT：IPV6云服务器
    * attackCount  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马
    * denyCount  **参数解释**： 拦截次数 **取值范围**： 不涉及
    * dstPorts  **参数解释**： 目的端口列表 **取值范围**： 不涉及
    * ip  **参数解释**： IP地址 **取值范围**： 不涉及
    * latestTime  **参数解释**： 最近攻击时间 **取值范围**： 不涉及
    * regionId  **参数解释**： 地区ID **取值范围**： 不涉及
    * regionName  **参数解释**： 地区名称 **取值范围**： 不涉及
    * srcType  **参数解释**： 攻击来源类型 **取值范围**： 不涉及
    * vgwId  **参数解释**： vgw Id **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'apps' => 'getApps',
            'associatedName' => 'getAssociatedName',
            'associatedType' => 'getAssociatedType',
            'attackCount' => 'getAttackCount',
            'attackType' => 'getAttackType',
            'denyCount' => 'getDenyCount',
            'dstPorts' => 'getDstPorts',
            'ip' => 'getIp',
            'latestTime' => 'getLatestTime',
            'regionId' => 'getRegionId',
            'regionName' => 'getRegionName',
            'srcType' => 'getSrcType',
            'vgwId' => 'getVgwId'
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
        $this->container['apps'] = isset($data['apps']) ? $data['apps'] : null;
        $this->container['associatedName'] = isset($data['associatedName']) ? $data['associatedName'] : null;
        $this->container['associatedType'] = isset($data['associatedType']) ? $data['associatedType'] : null;
        $this->container['attackCount'] = isset($data['attackCount']) ? $data['attackCount'] : null;
        $this->container['attackType'] = isset($data['attackType']) ? $data['attackType'] : null;
        $this->container['denyCount'] = isset($data['denyCount']) ? $data['denyCount'] : null;
        $this->container['dstPorts'] = isset($data['dstPorts']) ? $data['dstPorts'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['latestTime'] = isset($data['latestTime']) ? $data['latestTime'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['srcType'] = isset($data['srcType']) ? $data['srcType'] : null;
        $this->container['vgwId'] = isset($data['vgwId']) ? $data['vgwId'] : null;
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
    * Gets apps
    *  **参数解释**： 应用列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null
    */
    public function getApps()
    {
        return $this->container['apps'];
    }

    /**
    * Sets apps
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null $apps **参数解释**： 应用列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setApps($apps)
    {
        $this->container['apps'] = $apps;
        return $this;
    }

    /**
    * Gets associatedName
    *  **参数解释**： 绑定资源名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAssociatedName()
    {
        return $this->container['associatedName'];
    }

    /**
    * Sets associatedName
    *
    * @param string|null $associatedName **参数解释**： 绑定资源名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAssociatedName($associatedName)
    {
        $this->container['associatedName'] = $associatedName;
        return $this;
    }

    /**
    * Gets associatedType
    *  **参数解释**： 绑定资源类型 **取值范围**： PORT：IPV4云服务器 IPV6_PORT：IPV6云服务器
    *
    * @return string|null
    */
    public function getAssociatedType()
    {
        return $this->container['associatedType'];
    }

    /**
    * Sets associatedType
    *
    * @param string|null $associatedType **参数解释**： 绑定资源类型 **取值范围**： PORT：IPV4云服务器 IPV6_PORT：IPV6云服务器
    *
    * @return $this
    */
    public function setAssociatedType($associatedType)
    {
        $this->container['associatedType'] = $associatedType;
        return $this;
    }

    /**
    * Gets attackCount
    *  **参数解释**： 攻击次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAttackCount()
    {
        return $this->container['attackCount'];
    }

    /**
    * Sets attackCount
    *
    * @param int|null $attackCount **参数解释**： 攻击次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackCount($attackCount)
    {
        $this->container['attackCount'] = $attackCount;
        return $this;
    }

    /**
    * Gets attackType
    *  **参数解释**： 攻击类型 **取值范围**： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马
    *
    * @return string|null
    */
    public function getAttackType()
    {
        return $this->container['attackType'];
    }

    /**
    * Sets attackType
    *
    * @param string|null $attackType **参数解释**： 攻击类型 **取值范围**： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马
    *
    * @return $this
    */
    public function setAttackType($attackType)
    {
        $this->container['attackType'] = $attackType;
        return $this;
    }

    /**
    * Gets denyCount
    *  **参数解释**： 拦截次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDenyCount()
    {
        return $this->container['denyCount'];
    }

    /**
    * Sets denyCount
    *
    * @param int|null $denyCount **参数解释**： 拦截次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDenyCount($denyCount)
    {
        $this->container['denyCount'] = $denyCount;
        return $this;
    }

    /**
    * Gets dstPorts
    *  **参数解释**： 目的端口列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null
    */
    public function getDstPorts()
    {
        return $this->container['dstPorts'];
    }

    /**
    * Sets dstPorts
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null $dstPorts **参数解释**： 目的端口列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstPorts($dstPorts)
    {
        $this->container['dstPorts'] = $dstPorts;
        return $this;
    }

    /**
    * Gets ip
    *  **参数解释**： IP地址 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip **参数解释**： IP地址 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets latestTime
    *  **参数解释**： 最近攻击时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLatestTime()
    {
        return $this->container['latestTime'];
    }

    /**
    * Sets latestTime
    *
    * @param int|null $latestTime **参数解释**： 最近攻击时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLatestTime($latestTime)
    {
        $this->container['latestTime'] = $latestTime;
        return $this;
    }

    /**
    * Gets regionId
    *  **参数解释**： 地区ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId **参数解释**： 地区ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets regionName
    *  **参数解释**： 地区名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName **参数解释**： 地区名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets srcType
    *  **参数解释**： 攻击来源类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSrcType()
    {
        return $this->container['srcType'];
    }

    /**
    * Sets srcType
    *
    * @param string|null $srcType **参数解释**： 攻击来源类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcType($srcType)
    {
        $this->container['srcType'] = $srcType;
        return $this;
    }

    /**
    * Gets vgwId
    *  **参数解释**： vgw Id **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getVgwId()
    {
        return $this->container['vgwId'];
    }

    /**
    * Sets vgwId
    *
    * @param string|null $vgwId **参数解释**： vgw Id **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setVgwId($vgwId)
    {
        $this->container['vgwId'] = $vgwId;
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

