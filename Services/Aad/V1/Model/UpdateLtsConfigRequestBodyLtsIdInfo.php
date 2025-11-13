<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLtsConfigRequestBodyLtsIdInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLtsConfigRequestBody_lts_id_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * epsId  企业项目id
    * region  region
    * ltsGroupId  日志组id
    * ltsAttackStreamId  日志流id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'epsId' => 'string',
            'region' => 'string',
            'ltsGroupId' => 'string',
            'ltsAttackStreamId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * epsId  企业项目id
    * region  region
    * ltsGroupId  日志组id
    * ltsAttackStreamId  日志流id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'epsId' => null,
        'region' => null,
        'ltsGroupId' => null,
        'ltsAttackStreamId' => null
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
    * epsId  企业项目id
    * region  region
    * ltsGroupId  日志组id
    * ltsAttackStreamId  日志流id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'epsId' => 'eps_id',
            'region' => 'region',
            'ltsGroupId' => 'lts_group_id',
            'ltsAttackStreamId' => 'lts_attack_stream_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * epsId  企业项目id
    * region  region
    * ltsGroupId  日志组id
    * ltsAttackStreamId  日志流id
    *
    * @var string[]
    */
    protected static $setters = [
            'epsId' => 'setEpsId',
            'region' => 'setRegion',
            'ltsGroupId' => 'setLtsGroupId',
            'ltsAttackStreamId' => 'setLtsAttackStreamId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * epsId  企业项目id
    * region  region
    * ltsGroupId  日志组id
    * ltsAttackStreamId  日志流id
    *
    * @var string[]
    */
    protected static $getters = [
            'epsId' => 'getEpsId',
            'region' => 'getRegion',
            'ltsGroupId' => 'getLtsGroupId',
            'ltsAttackStreamId' => 'getLtsAttackStreamId'
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
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['ltsGroupId'] = isset($data['ltsGroupId']) ? $data['ltsGroupId'] : null;
        $this->container['ltsAttackStreamId'] = isset($data['ltsAttackStreamId']) ? $data['ltsAttackStreamId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['epsId'] === null) {
            $invalidProperties[] = "'epsId' can't be null";
        }
            if ((mb_strlen($this->container['epsId']) > 128)) {
                $invalidProperties[] = "invalid value for 'epsId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['epsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'epsId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 255)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ltsGroupId'] === null) {
            $invalidProperties[] = "'ltsGroupId' can't be null";
        }
            if ((mb_strlen($this->container['ltsGroupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'ltsGroupId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['ltsGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ltsGroupId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ltsAttackStreamId'] === null) {
            $invalidProperties[] = "'ltsAttackStreamId' can't be null";
        }
            if ((mb_strlen($this->container['ltsAttackStreamId']) > 128)) {
                $invalidProperties[] = "invalid value for 'ltsAttackStreamId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['ltsAttackStreamId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ltsAttackStreamId', the character length must be bigger than or equal to 1.";
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
    * Gets epsId
    *  企业项目id
    *
    * @return string
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string $epsId 企业项目id
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets region
    *  region
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets ltsGroupId
    *  日志组id
    *
    * @return string
    */
    public function getLtsGroupId()
    {
        return $this->container['ltsGroupId'];
    }

    /**
    * Sets ltsGroupId
    *
    * @param string $ltsGroupId 日志组id
    *
    * @return $this
    */
    public function setLtsGroupId($ltsGroupId)
    {
        $this->container['ltsGroupId'] = $ltsGroupId;
        return $this;
    }

    /**
    * Gets ltsAttackStreamId
    *  日志流id
    *
    * @return string
    */
    public function getLtsAttackStreamId()
    {
        return $this->container['ltsAttackStreamId'];
    }

    /**
    * Sets ltsAttackStreamId
    *
    * @param string $ltsAttackStreamId 日志流id
    *
    * @return $this
    */
    public function setLtsAttackStreamId($ltsAttackStreamId)
    {
        $this->container['ltsAttackStreamId'] = $ltsAttackStreamId;
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

