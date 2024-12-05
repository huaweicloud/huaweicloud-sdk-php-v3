<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BizInfoVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BizInfoVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bizId  业务ID，ID字符串。
    * bizType  bizType
    * envType  envType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bizId' => 'string',
            'bizType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'envType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\EnvTypeEnum'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bizId  业务ID，ID字符串。
    * bizType  bizType
    * envType  envType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bizId' => null,
        'bizType' => null,
        'envType' => null
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
    * bizId  业务ID，ID字符串。
    * bizType  bizType
    * envType  envType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bizId' => 'biz_id',
            'bizType' => 'biz_type',
            'envType' => 'env_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bizId  业务ID，ID字符串。
    * bizType  bizType
    * envType  envType
    *
    * @var string[]
    */
    protected static $setters = [
            'bizId' => 'setBizId',
            'bizType' => 'setBizType',
            'envType' => 'setEnvType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bizId  业务ID，ID字符串。
    * bizType  bizType
    * envType  envType
    *
    * @var string[]
    */
    protected static $getters = [
            'bizId' => 'getBizId',
            'bizType' => 'getBizType',
            'envType' => 'getEnvType'
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
        $this->container['bizId'] = isset($data['bizId']) ? $data['bizId'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['envType'] = isset($data['envType']) ? $data['envType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bizId'] === null) {
            $invalidProperties[] = "'bizId' can't be null";
        }
        if ($this->container['bizType'] === null) {
            $invalidProperties[] = "'bizType' can't be null";
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
    * Gets bizId
    *  业务ID，ID字符串。
    *
    * @return string
    */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
    * Sets bizId
    *
    * @param string $bizId 业务ID，ID字符串。
    *
    * @return $this
    */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;
        return $this;
    }

    /**
    * Gets bizType
    *  bizType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum $bizType bizType
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
        return $this;
    }

    /**
    * Gets envType
    *  envType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\EnvTypeEnum|null
    */
    public function getEnvType()
    {
        return $this->container['envType'];
    }

    /**
    * Sets envType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\EnvTypeEnum|null $envType envType
    *
    * @return $this
    */
    public function setEnvType($envType)
    {
        $this->container['envType'] = $envType;
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

