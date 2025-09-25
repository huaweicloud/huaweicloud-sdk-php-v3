<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * releaseVersion  版本号
    * releaseNote  版本说明
    * updateTime  更新时间，毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'releaseVersion' => 'string',
            'releaseNote' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * releaseVersion  版本号
    * releaseNote  版本说明
    * updateTime  更新时间，毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'releaseVersion' => null,
        'releaseNote' => null,
        'updateTime' => 'int64'
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
    * releaseVersion  版本号
    * releaseNote  版本说明
    * updateTime  更新时间，毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'releaseVersion' => 'release_version',
            'releaseNote' => 'release_note',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * releaseVersion  版本号
    * releaseNote  版本说明
    * updateTime  更新时间，毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'releaseVersion' => 'setReleaseVersion',
            'releaseNote' => 'setReleaseNote',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * releaseVersion  版本号
    * releaseNote  版本说明
    * updateTime  更新时间，毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'releaseVersion' => 'getReleaseVersion',
            'releaseNote' => 'getReleaseNote',
            'updateTime' => 'getUpdateTime'
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
        $this->container['releaseVersion'] = isset($data['releaseVersion']) ? $data['releaseVersion'] : null;
        $this->container['releaseNote'] = isset($data['releaseNote']) ? $data['releaseNote'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['releaseVersion']) && (mb_strlen($this->container['releaseVersion']) > 102400)) {
                $invalidProperties[] = "invalid value for 'releaseVersion', the character length must be smaller than or equal to 102400.";
            }
            if (!is_null($this->container['releaseVersion']) && (mb_strlen($this->container['releaseVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'releaseVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['releaseNote']) && (mb_strlen($this->container['releaseNote']) > 102400)) {
                $invalidProperties[] = "invalid value for 'releaseNote', the character length must be smaller than or equal to 102400.";
            }
            if (!is_null($this->container['releaseNote']) && (mb_strlen($this->container['releaseNote']) < 1)) {
                $invalidProperties[] = "invalid value for 'releaseNote', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 4102416000000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets releaseVersion
    *  版本号
    *
    * @return string|null
    */
    public function getReleaseVersion()
    {
        return $this->container['releaseVersion'];
    }

    /**
    * Sets releaseVersion
    *
    * @param string|null $releaseVersion 版本号
    *
    * @return $this
    */
    public function setReleaseVersion($releaseVersion)
    {
        $this->container['releaseVersion'] = $releaseVersion;
        return $this;
    }

    /**
    * Gets releaseNote
    *  版本说明
    *
    * @return string|null
    */
    public function getReleaseNote()
    {
        return $this->container['releaseNote'];
    }

    /**
    * Sets releaseNote
    *
    * @param string|null $releaseNote 版本说明
    *
    * @return $this
    */
    public function setReleaseNote($releaseNote)
    {
        $this->container['releaseNote'] = $releaseNote;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，毫秒
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间，毫秒
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

