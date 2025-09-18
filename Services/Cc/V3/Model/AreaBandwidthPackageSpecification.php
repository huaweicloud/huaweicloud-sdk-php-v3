<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AreaBandwidthPackageSpecification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AreaBandwidthPackageSpecification';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * id  互通大区带宽包的规格ID。
    * specCodes  带宽包产品规格列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'localAreaId' => '\HuaweiCloud\SDK\Cc\V3\Model\LocalAreaIdDef',
            'remoteAreaId' => '\HuaweiCloud\SDK\Cc\V3\Model\RemoteAreaIdDef',
            'id' => 'string',
            'specCodes' => '\HuaweiCloud\SDK\Cc\V3\Model\SpecificationCodeInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * id  互通大区带宽包的规格ID。
    * specCodes  带宽包产品规格列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'localAreaId' => null,
        'remoteAreaId' => null,
        'id' => null,
        'specCodes' => null
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
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * id  互通大区带宽包的规格ID。
    * specCodes  带宽包产品规格列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'localAreaId' => 'local_area_id',
            'remoteAreaId' => 'remote_area_id',
            'id' => 'id',
            'specCodes' => 'spec_codes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * id  互通大区带宽包的规格ID。
    * specCodes  带宽包产品规格列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'localAreaId' => 'setLocalAreaId',
            'remoteAreaId' => 'setRemoteAreaId',
            'id' => 'setId',
            'specCodes' => 'setSpecCodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * id  互通大区带宽包的规格ID。
    * specCodes  带宽包产品规格列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'localAreaId' => 'getLocalAreaId',
            'remoteAreaId' => 'getRemoteAreaId',
            'id' => 'getId',
            'specCodes' => 'getSpecCodes'
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
        $this->container['localAreaId'] = isset($data['localAreaId']) ? $data['localAreaId'] : null;
        $this->container['remoteAreaId'] = isset($data['remoteAreaId']) ? $data['remoteAreaId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['specCodes'] = isset($data['specCodes']) ? $data['specCodes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['localAreaId'] === null) {
            $invalidProperties[] = "'localAreaId' can't be null";
        }
        if ($this->container['remoteAreaId'] === null) {
            $invalidProperties[] = "'remoteAreaId' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['specCodes'] === null) {
            $invalidProperties[] = "'specCodes' can't be null";
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
    * Gets localAreaId
    *  localAreaId
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\LocalAreaIdDef
    */
    public function getLocalAreaId()
    {
        return $this->container['localAreaId'];
    }

    /**
    * Sets localAreaId
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\LocalAreaIdDef $localAreaId localAreaId
    *
    * @return $this
    */
    public function setLocalAreaId($localAreaId)
    {
        $this->container['localAreaId'] = $localAreaId;
        return $this;
    }

    /**
    * Gets remoteAreaId
    *  remoteAreaId
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\RemoteAreaIdDef
    */
    public function getRemoteAreaId()
    {
        return $this->container['remoteAreaId'];
    }

    /**
    * Sets remoteAreaId
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\RemoteAreaIdDef $remoteAreaId remoteAreaId
    *
    * @return $this
    */
    public function setRemoteAreaId($remoteAreaId)
    {
        $this->container['remoteAreaId'] = $remoteAreaId;
        return $this;
    }

    /**
    * Gets id
    *  互通大区带宽包的规格ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 互通大区带宽包的规格ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets specCodes
    *  带宽包产品规格列表。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\SpecificationCodeInfo[]
    */
    public function getSpecCodes()
    {
        return $this->container['specCodes'];
    }

    /**
    * Sets specCodes
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\SpecificationCodeInfo[] $specCodes 带宽包产品规格列表。
    *
    * @return $this
    */
    public function setSpecCodes($specCodes)
    {
        $this->container['specCodes'] = $specCodes;
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

