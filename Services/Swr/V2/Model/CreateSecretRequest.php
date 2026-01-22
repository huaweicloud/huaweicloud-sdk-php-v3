<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSecretRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSecretRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectname  项目名称，缺省值默认为区域名称，例如：cn-north-1。
    * durationSeconds  自定义临时凭证有效期，单位秒，取值范围15min-24h
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectname' => 'string',
            'durationSeconds' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectname  项目名称，缺省值默认为区域名称，例如：cn-north-1。
    * durationSeconds  自定义临时凭证有效期，单位秒，取值范围15min-24h
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectname' => null,
        'durationSeconds' => 'int32'
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
    * projectname  项目名称，缺省值默认为区域名称，例如：cn-north-1。
    * durationSeconds  自定义临时凭证有效期，单位秒，取值范围15min-24h
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectname' => 'projectname',
            'durationSeconds' => 'duration_seconds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectname  项目名称，缺省值默认为区域名称，例如：cn-north-1。
    * durationSeconds  自定义临时凭证有效期，单位秒，取值范围15min-24h
    *
    * @var string[]
    */
    protected static $setters = [
            'projectname' => 'setProjectname',
            'durationSeconds' => 'setDurationSeconds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectname  项目名称，缺省值默认为区域名称，例如：cn-north-1。
    * durationSeconds  自定义临时凭证有效期，单位秒，取值范围15min-24h
    *
    * @var string[]
    */
    protected static $getters = [
            'projectname' => 'getProjectname',
            'durationSeconds' => 'getDurationSeconds'
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
        $this->container['projectname'] = isset($data['projectname']) ? $data['projectname'] : null;
        $this->container['durationSeconds'] = isset($data['durationSeconds']) ? $data['durationSeconds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['durationSeconds']) && ($this->container['durationSeconds'] > 86400)) {
                $invalidProperties[] = "invalid value for 'durationSeconds', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['durationSeconds']) && ($this->container['durationSeconds'] < 900)) {
                $invalidProperties[] = "invalid value for 'durationSeconds', must be bigger than or equal to 900.";
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
    * Gets projectname
    *  项目名称，缺省值默认为区域名称，例如：cn-north-1。
    *
    * @return string|null
    */
    public function getProjectname()
    {
        return $this->container['projectname'];
    }

    /**
    * Sets projectname
    *
    * @param string|null $projectname 项目名称，缺省值默认为区域名称，例如：cn-north-1。
    *
    * @return $this
    */
    public function setProjectname($projectname)
    {
        $this->container['projectname'] = $projectname;
        return $this;
    }

    /**
    * Gets durationSeconds
    *  自定义临时凭证有效期，单位秒，取值范围15min-24h
    *
    * @return int|null
    */
    public function getDurationSeconds()
    {
        return $this->container['durationSeconds'];
    }

    /**
    * Sets durationSeconds
    *
    * @param int|null $durationSeconds 自定义临时凭证有效期，单位秒，取值范围15min-24h
    *
    * @return $this
    */
    public function setDurationSeconds($durationSeconds)
    {
        $this->container['durationSeconds'] = $durationSeconds;
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

