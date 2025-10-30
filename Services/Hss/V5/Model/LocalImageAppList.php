<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LocalImageAppList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LocalImageAppList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128
    * appType  **参数解释**: 软件类型 **取值范围**: 字符长度0-128
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-128
    * vulNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'appType' => 'string',
            'appVersion' => 'string',
            'vulNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128
    * appType  **参数解释**: 软件类型 **取值范围**: 字符长度0-128
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-128
    * vulNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'appType' => null,
        'appVersion' => null,
        'vulNum' => 'int32'
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
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128
    * appType  **参数解释**: 软件类型 **取值范围**: 字符长度0-128
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-128
    * vulNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'app_name',
            'appType' => 'app_type',
            'appVersion' => 'app_version',
            'vulNum' => 'vul_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128
    * appType  **参数解释**: 软件类型 **取值范围**: 字符长度0-128
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-128
    * vulNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'appType' => 'setAppType',
            'appVersion' => 'setAppVersion',
            'vulNum' => 'setVulNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128
    * appType  **参数解释**: 软件类型 **取值范围**: 字符长度0-128
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-128
    * vulNum  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'appType' => 'getAppType',
            'appVersion' => 'getAppVersion',
            'vulNum' => 'getVulNum'
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
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) > 128)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) < 0)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] > 20000)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be bigger than or equal to 0.";
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
    * Gets appName
    *  **参数解释**: 软件名称 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 软件名称 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appType
    *  **参数解释**: 软件类型 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType **参数解释**: 软件类型 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets appVersion
    *  **参数解释**: 软件版本 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion **参数解释**: 软件版本 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets vulNum
    *  **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    *
    * @return int|null
    */
    public function getVulNum()
    {
        return $this->container['vulNum'];
    }

    /**
    * Sets vulNum
    *
    * @param int|null $vulNum **参数解释**: 漏洞总数 **取值范围**: 最小值0，最大值20000
    *
    * @return $this
    */
    public function setVulNum($vulNum)
    {
        $this->container['vulNum'] = $vulNum;
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

