<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppQualityInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppQualityInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  应用名称
    * qualityInfo  视频质量信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'qualityInfo' => '\HuaweiCloud\SDK\Live\V1\Model\QualityInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  应用名称
    * qualityInfo  视频质量信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'qualityInfo' => null
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
    * appName  应用名称
    * qualityInfo  视频质量信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'app_name',
            'qualityInfo' => 'quality_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  应用名称
    * qualityInfo  视频质量信息
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'qualityInfo' => 'setQualityInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  应用名称
    * qualityInfo  视频质量信息
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'qualityInfo' => 'getQualityInfo'
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
        $this->container['qualityInfo'] = isset($data['qualityInfo']) ? $data['qualityInfo'] : null;
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
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
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
    *  应用名称
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
    * @param string|null $appName 应用名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets qualityInfo
    *  视频质量信息
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\QualityInfo[]|null
    */
    public function getQualityInfo()
    {
        return $this->container['qualityInfo'];
    }

    /**
    * Sets qualityInfo
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\QualityInfo[]|null $qualityInfo 视频质量信息
    *
    * @return $this
    */
    public function setQualityInfo($qualityInfo)
    {
        $this->container['qualityInfo'] = $qualityInfo;
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

