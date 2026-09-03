<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WiseEye implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WiseEye';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  是否开启云眼告警配置
    * level  云眼告警级别
    * regionKey  云眼告警区域，目前取值有：china（中国区），asiaAfricaLatin（亚非拉），europe（欧洲）
    * scopeId  云眼告警id，对应云眼信息中的name
    * scopeName  云眼告警范围，对应云眼信息中的label
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'string',
            'level' => 'string',
            'regionKey' => 'string',
            'scopeId' => 'string',
            'scopeName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  是否开启云眼告警配置
    * level  云眼告警级别
    * regionKey  云眼告警区域，目前取值有：china（中国区），asiaAfricaLatin（亚非拉），europe（欧洲）
    * scopeId  云眼告警id，对应云眼信息中的name
    * scopeName  云眼告警范围，对应云眼信息中的label
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'level' => null,
        'regionKey' => null,
        'scopeId' => null,
        'scopeName' => null
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
    * enable  是否开启云眼告警配置
    * level  云眼告警级别
    * regionKey  云眼告警区域，目前取值有：china（中国区），asiaAfricaLatin（亚非拉），europe（欧洲）
    * scopeId  云眼告警id，对应云眼信息中的name
    * scopeName  云眼告警范围，对应云眼信息中的label
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'level' => 'level',
            'regionKey' => 'region_key',
            'scopeId' => 'scope_id',
            'scopeName' => 'scope_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  是否开启云眼告警配置
    * level  云眼告警级别
    * regionKey  云眼告警区域，目前取值有：china（中国区），asiaAfricaLatin（亚非拉），europe（欧洲）
    * scopeId  云眼告警id，对应云眼信息中的name
    * scopeName  云眼告警范围，对应云眼信息中的label
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'level' => 'setLevel',
            'regionKey' => 'setRegionKey',
            'scopeId' => 'setScopeId',
            'scopeName' => 'setScopeName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  是否开启云眼告警配置
    * level  云眼告警级别
    * regionKey  云眼告警区域，目前取值有：china（中国区），asiaAfricaLatin（亚非拉），europe（欧洲）
    * scopeId  云眼告警id，对应云眼信息中的name
    * scopeName  云眼告警范围，对应云眼信息中的label
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'level' => 'getLevel',
            'regionKey' => 'getRegionKey',
            'scopeId' => 'getScopeId',
            'scopeName' => 'getScopeName'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['regionKey'] = isset($data['regionKey']) ? $data['regionKey'] : null;
        $this->container['scopeId'] = isset($data['scopeId']) ? $data['scopeId'] : null;
        $this->container['scopeName'] = isset($data['scopeName']) ? $data['scopeName'] : null;
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
    * Gets enable
    *  是否开启云眼告警配置
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
    * @param string|null $enable 是否开启云眼告警配置
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
    *  云眼告警级别
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
    * @param string|null $level 云眼告警级别
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets regionKey
    *  云眼告警区域，目前取值有：china（中国区），asiaAfricaLatin（亚非拉），europe（欧洲）
    *
    * @return string|null
    */
    public function getRegionKey()
    {
        return $this->container['regionKey'];
    }

    /**
    * Sets regionKey
    *
    * @param string|null $regionKey 云眼告警区域，目前取值有：china（中国区），asiaAfricaLatin（亚非拉），europe（欧洲）
    *
    * @return $this
    */
    public function setRegionKey($regionKey)
    {
        $this->container['regionKey'] = $regionKey;
        return $this;
    }

    /**
    * Gets scopeId
    *  云眼告警id，对应云眼信息中的name
    *
    * @return string|null
    */
    public function getScopeId()
    {
        return $this->container['scopeId'];
    }

    /**
    * Sets scopeId
    *
    * @param string|null $scopeId 云眼告警id，对应云眼信息中的name
    *
    * @return $this
    */
    public function setScopeId($scopeId)
    {
        $this->container['scopeId'] = $scopeId;
        return $this;
    }

    /**
    * Gets scopeName
    *  云眼告警范围，对应云眼信息中的label
    *
    * @return string|null
    */
    public function getScopeName()
    {
        return $this->container['scopeName'];
    }

    /**
    * Sets scopeName
    *
    * @param string|null $scopeName 云眼告警范围，对应云眼信息中的label
    *
    * @return $this
    */
    public function setScopeName($scopeName)
    {
        $this->container['scopeName'] = $scopeName;
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

