<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AiGuardLtsIdInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AiGuardLtsIdInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ltsAccessStreamId  LTS 日志流 ID
    * ltsGroupId  LTS 日志组 ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ltsAccessStreamId' => 'string',
            'ltsGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ltsAccessStreamId  LTS 日志流 ID
    * ltsGroupId  LTS 日志组 ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ltsAccessStreamId' => null,
        'ltsGroupId' => null
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
    * ltsAccessStreamId  LTS 日志流 ID
    * ltsGroupId  LTS 日志组 ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ltsAccessStreamId' => 'lts_access_stream_id',
            'ltsGroupId' => 'lts_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ltsAccessStreamId  LTS 日志流 ID
    * ltsGroupId  LTS 日志组 ID
    *
    * @var string[]
    */
    protected static $setters = [
            'ltsAccessStreamId' => 'setLtsAccessStreamId',
            'ltsGroupId' => 'setLtsGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ltsAccessStreamId  LTS 日志流 ID
    * ltsGroupId  LTS 日志组 ID
    *
    * @var string[]
    */
    protected static $getters = [
            'ltsAccessStreamId' => 'getLtsAccessStreamId',
            'ltsGroupId' => 'getLtsGroupId'
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
        $this->container['ltsAccessStreamId'] = isset($data['ltsAccessStreamId']) ? $data['ltsAccessStreamId'] : null;
        $this->container['ltsGroupId'] = isset($data['ltsGroupId']) ? $data['ltsGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ltsAccessStreamId']) && (mb_strlen($this->container['ltsAccessStreamId']) > 128)) {
                $invalidProperties[] = "invalid value for 'ltsAccessStreamId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ltsAccessStreamId']) && (mb_strlen($this->container['ltsAccessStreamId']) < 36)) {
                $invalidProperties[] = "invalid value for 'ltsAccessStreamId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['ltsAccessStreamId']) && !preg_match("/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/", $this->container['ltsAccessStreamId'])) {
                $invalidProperties[] = "invalid value for 'ltsAccessStreamId', must be conform to the pattern /^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/.";
            }
            if (!is_null($this->container['ltsGroupId']) && (mb_strlen($this->container['ltsGroupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'ltsGroupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ltsGroupId']) && (mb_strlen($this->container['ltsGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'ltsGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['ltsGroupId']) && !preg_match("/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/", $this->container['ltsGroupId'])) {
                $invalidProperties[] = "invalid value for 'ltsGroupId', must be conform to the pattern /^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/.";
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
    * Gets ltsAccessStreamId
    *  LTS 日志流 ID
    *
    * @return string|null
    */
    public function getLtsAccessStreamId()
    {
        return $this->container['ltsAccessStreamId'];
    }

    /**
    * Sets ltsAccessStreamId
    *
    * @param string|null $ltsAccessStreamId LTS 日志流 ID
    *
    * @return $this
    */
    public function setLtsAccessStreamId($ltsAccessStreamId)
    {
        $this->container['ltsAccessStreamId'] = $ltsAccessStreamId;
        return $this;
    }

    /**
    * Gets ltsGroupId
    *  LTS 日志组 ID
    *
    * @return string|null
    */
    public function getLtsGroupId()
    {
        return $this->container['ltsGroupId'];
    }

    /**
    * Sets ltsGroupId
    *
    * @param string|null $ltsGroupId LTS 日志组 ID
    *
    * @return $this
    */
    public function setLtsGroupId($ltsGroupId)
    {
        $this->container['ltsGroupId'] = $ltsGroupId;
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

