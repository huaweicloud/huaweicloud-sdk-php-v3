<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudAlarmDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudAlarmDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudServiceName  云服务名称
    * cloudServiceRegionId  云服务区域标识
    * cloudServiceSite  云服务站点：默认中国站
    * enable  是否开启CloudAlarm配置
    * level  告警级别
    * microServiceGroupName  微服务组名称
    * microServiceName  微服务名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudServiceName' => 'string',
            'cloudServiceRegionId' => 'string',
            'cloudServiceSite' => 'string',
            'enable' => 'string',
            'level' => 'string',
            'microServiceGroupName' => 'string',
            'microServiceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudServiceName  云服务名称
    * cloudServiceRegionId  云服务区域标识
    * cloudServiceSite  云服务站点：默认中国站
    * enable  是否开启CloudAlarm配置
    * level  告警级别
    * microServiceGroupName  微服务组名称
    * microServiceName  微服务名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudServiceName' => null,
        'cloudServiceRegionId' => null,
        'cloudServiceSite' => null,
        'enable' => null,
        'level' => null,
        'microServiceGroupName' => null,
        'microServiceName' => null
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
    * cloudServiceName  云服务名称
    * cloudServiceRegionId  云服务区域标识
    * cloudServiceSite  云服务站点：默认中国站
    * enable  是否开启CloudAlarm配置
    * level  告警级别
    * microServiceGroupName  微服务组名称
    * microServiceName  微服务名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudServiceName' => 'cloudServiceName',
            'cloudServiceRegionId' => 'cloudServiceRegionId',
            'cloudServiceSite' => 'cloudServiceSite',
            'enable' => 'enable',
            'level' => 'level',
            'microServiceGroupName' => 'microServiceGroupName',
            'microServiceName' => 'microServiceName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudServiceName  云服务名称
    * cloudServiceRegionId  云服务区域标识
    * cloudServiceSite  云服务站点：默认中国站
    * enable  是否开启CloudAlarm配置
    * level  告警级别
    * microServiceGroupName  微服务组名称
    * microServiceName  微服务名称
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudServiceName' => 'setCloudServiceName',
            'cloudServiceRegionId' => 'setCloudServiceRegionId',
            'cloudServiceSite' => 'setCloudServiceSite',
            'enable' => 'setEnable',
            'level' => 'setLevel',
            'microServiceGroupName' => 'setMicroServiceGroupName',
            'microServiceName' => 'setMicroServiceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudServiceName  云服务名称
    * cloudServiceRegionId  云服务区域标识
    * cloudServiceSite  云服务站点：默认中国站
    * enable  是否开启CloudAlarm配置
    * level  告警级别
    * microServiceGroupName  微服务组名称
    * microServiceName  微服务名称
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudServiceName' => 'getCloudServiceName',
            'cloudServiceRegionId' => 'getCloudServiceRegionId',
            'cloudServiceSite' => 'getCloudServiceSite',
            'enable' => 'getEnable',
            'level' => 'getLevel',
            'microServiceGroupName' => 'getMicroServiceGroupName',
            'microServiceName' => 'getMicroServiceName'
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
        $this->container['cloudServiceName'] = isset($data['cloudServiceName']) ? $data['cloudServiceName'] : null;
        $this->container['cloudServiceRegionId'] = isset($data['cloudServiceRegionId']) ? $data['cloudServiceRegionId'] : null;
        $this->container['cloudServiceSite'] = isset($data['cloudServiceSite']) ? $data['cloudServiceSite'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['microServiceGroupName'] = isset($data['microServiceGroupName']) ? $data['microServiceGroupName'] : null;
        $this->container['microServiceName'] = isset($data['microServiceName']) ? $data['microServiceName'] : null;
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
    * Gets cloudServiceName
    *  云服务名称
    *
    * @return string|null
    */
    public function getCloudServiceName()
    {
        return $this->container['cloudServiceName'];
    }

    /**
    * Sets cloudServiceName
    *
    * @param string|null $cloudServiceName 云服务名称
    *
    * @return $this
    */
    public function setCloudServiceName($cloudServiceName)
    {
        $this->container['cloudServiceName'] = $cloudServiceName;
        return $this;
    }

    /**
    * Gets cloudServiceRegionId
    *  云服务区域标识
    *
    * @return string|null
    */
    public function getCloudServiceRegionId()
    {
        return $this->container['cloudServiceRegionId'];
    }

    /**
    * Sets cloudServiceRegionId
    *
    * @param string|null $cloudServiceRegionId 云服务区域标识
    *
    * @return $this
    */
    public function setCloudServiceRegionId($cloudServiceRegionId)
    {
        $this->container['cloudServiceRegionId'] = $cloudServiceRegionId;
        return $this;
    }

    /**
    * Gets cloudServiceSite
    *  云服务站点：默认中国站
    *
    * @return string|null
    */
    public function getCloudServiceSite()
    {
        return $this->container['cloudServiceSite'];
    }

    /**
    * Sets cloudServiceSite
    *
    * @param string|null $cloudServiceSite 云服务站点：默认中国站
    *
    * @return $this
    */
    public function setCloudServiceSite($cloudServiceSite)
    {
        $this->container['cloudServiceSite'] = $cloudServiceSite;
        return $this;
    }

    /**
    * Gets enable
    *  是否开启CloudAlarm配置
    *
    * @return string|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string|null $enable 是否开启CloudAlarm配置
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets level
    *  告警级别
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 告警级别
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets microServiceGroupName
    *  微服务组名称
    *
    * @return string|null
    */
    public function getMicroServiceGroupName()
    {
        return $this->container['microServiceGroupName'];
    }

    /**
    * Sets microServiceGroupName
    *
    * @param string|null $microServiceGroupName 微服务组名称
    *
    * @return $this
    */
    public function setMicroServiceGroupName($microServiceGroupName)
    {
        $this->container['microServiceGroupName'] = $microServiceGroupName;
        return $this;
    }

    /**
    * Gets microServiceName
    *  微服务名称
    *
    * @return string|null
    */
    public function getMicroServiceName()
    {
        return $this->container['microServiceName'];
    }

    /**
    * Sets microServiceName
    *
    * @param string|null $microServiceName 微服务名称
    *
    * @return $this
    */
    public function setMicroServiceName($microServiceName)
    {
        $this->container['microServiceName'] = $microServiceName;
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

