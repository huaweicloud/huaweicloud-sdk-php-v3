<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InsertPublicipInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InsertPublicipInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicipType  功能说明：若publicip_id为弹性公网IP的id，则该字段可自动忽略。若publicip_id为IPv6端口PORT的id，则该字段必填：5_dualStack(目前仅北京4局点支持)
    * publicipId  功能说明：带宽对应的弹性公网IP或IPv6端口PORT的唯一标识
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicipType' => 'string',
            'publicipId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicipType  功能说明：若publicip_id为弹性公网IP的id，则该字段可自动忽略。若publicip_id为IPv6端口PORT的id，则该字段必填：5_dualStack(目前仅北京4局点支持)
    * publicipId  功能说明：带宽对应的弹性公网IP或IPv6端口PORT的唯一标识
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicipType' => null,
        'publicipId' => null
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
    * publicipType  功能说明：若publicip_id为弹性公网IP的id，则该字段可自动忽略。若publicip_id为IPv6端口PORT的id，则该字段必填：5_dualStack(目前仅北京4局点支持)
    * publicipId  功能说明：带宽对应的弹性公网IP或IPv6端口PORT的唯一标识
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicipType' => 'publicip_type',
            'publicipId' => 'publicip_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicipType  功能说明：若publicip_id为弹性公网IP的id，则该字段可自动忽略。若publicip_id为IPv6端口PORT的id，则该字段必填：5_dualStack(目前仅北京4局点支持)
    * publicipId  功能说明：带宽对应的弹性公网IP或IPv6端口PORT的唯一标识
    *
    * @var string[]
    */
    protected static $setters = [
            'publicipType' => 'setPublicipType',
            'publicipId' => 'setPublicipId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicipType  功能说明：若publicip_id为弹性公网IP的id，则该字段可自动忽略。若publicip_id为IPv6端口PORT的id，则该字段必填：5_dualStack(目前仅北京4局点支持)
    * publicipId  功能说明：带宽对应的弹性公网IP或IPv6端口PORT的唯一标识
    *
    * @var string[]
    */
    protected static $getters = [
            'publicipType' => 'getPublicipType',
            'publicipId' => 'getPublicipId'
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
        $this->container['publicipType'] = isset($data['publicipType']) ? $data['publicipType'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['publicipType']) && (mb_strlen($this->container['publicipType']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicipType', the character length must be smaller than or equal to 36.";
            }
        if ($this->container['publicipId'] === null) {
            $invalidProperties[] = "'publicipId' can't be null";
        }
            if ((mb_strlen($this->container['publicipId']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicipId', the character length must be smaller than or equal to 36.";
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
    * Gets publicipType
    *  功能说明：若publicip_id为弹性公网IP的id，则该字段可自动忽略。若publicip_id为IPv6端口PORT的id，则该字段必填：5_dualStack(目前仅北京4局点支持)
    *
    * @return string|null
    */
    public function getPublicipType()
    {
        return $this->container['publicipType'];
    }

    /**
    * Sets publicipType
    *
    * @param string|null $publicipType 功能说明：若publicip_id为弹性公网IP的id，则该字段可自动忽略。若publicip_id为IPv6端口PORT的id，则该字段必填：5_dualStack(目前仅北京4局点支持)
    *
    * @return $this
    */
    public function setPublicipType($publicipType)
    {
        $this->container['publicipType'] = $publicipType;
        return $this;
    }

    /**
    * Gets publicipId
    *  功能说明：带宽对应的弹性公网IP或IPv6端口PORT的唯一标识
    *
    * @return string
    */
    public function getPublicipId()
    {
        return $this->container['publicipId'];
    }

    /**
    * Sets publicipId
    *
    * @param string $publicipId 功能说明：带宽对应的弹性公网IP或IPv6端口PORT的唯一标识
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
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

