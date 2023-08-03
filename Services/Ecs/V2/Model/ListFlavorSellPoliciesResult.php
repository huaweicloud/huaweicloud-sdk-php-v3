<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFlavorSellPoliciesResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFlavorSellPoliciesResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云服务器规格的索引。
    * flavorId  云服务器规格的ID。
    * sellStatus  云服务器规格的售卖状态。  sellout：售罄。 available：可用。
    * availabilityZoneId  云服务器规格的可用区。
    * sellMode  云服务器规格的付费模式。  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    * spotOptions  spotOptions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'flavorId' => 'string',
            'sellStatus' => 'string',
            'availabilityZoneId' => 'string',
            'sellMode' => 'string',
            'spotOptions' => '\HuaweiCloud\SDK\Ecs\V2\Model\FlavorSpotOptions'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云服务器规格的索引。
    * flavorId  云服务器规格的ID。
    * sellStatus  云服务器规格的售卖状态。  sellout：售罄。 available：可用。
    * availabilityZoneId  云服务器规格的可用区。
    * sellMode  云服务器规格的付费模式。  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    * spotOptions  spotOptions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'flavorId' => null,
        'sellStatus' => null,
        'availabilityZoneId' => null,
        'sellMode' => null,
        'spotOptions' => null
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
    * id  云服务器规格的索引。
    * flavorId  云服务器规格的ID。
    * sellStatus  云服务器规格的售卖状态。  sellout：售罄。 available：可用。
    * availabilityZoneId  云服务器规格的可用区。
    * sellMode  云服务器规格的付费模式。  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    * spotOptions  spotOptions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'flavorId' => 'flavor_id',
            'sellStatus' => 'sell_status',
            'availabilityZoneId' => 'availability_zone_id',
            'sellMode' => 'sell_mode',
            'spotOptions' => 'spot_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云服务器规格的索引。
    * flavorId  云服务器规格的ID。
    * sellStatus  云服务器规格的售卖状态。  sellout：售罄。 available：可用。
    * availabilityZoneId  云服务器规格的可用区。
    * sellMode  云服务器规格的付费模式。  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    * spotOptions  spotOptions
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'flavorId' => 'setFlavorId',
            'sellStatus' => 'setSellStatus',
            'availabilityZoneId' => 'setAvailabilityZoneId',
            'sellMode' => 'setSellMode',
            'spotOptions' => 'setSpotOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云服务器规格的索引。
    * flavorId  云服务器规格的ID。
    * sellStatus  云服务器规格的售卖状态。  sellout：售罄。 available：可用。
    * availabilityZoneId  云服务器规格的可用区。
    * sellMode  云服务器规格的付费模式。  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    * spotOptions  spotOptions
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'flavorId' => 'getFlavorId',
            'sellStatus' => 'getSellStatus',
            'availabilityZoneId' => 'getAvailabilityZoneId',
            'sellMode' => 'getSellMode',
            'spotOptions' => 'getSpotOptions'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['sellStatus'] = isset($data['sellStatus']) ? $data['sellStatus'] : null;
        $this->container['availabilityZoneId'] = isset($data['availabilityZoneId']) ? $data['availabilityZoneId'] : null;
        $this->container['sellMode'] = isset($data['sellMode']) ? $data['sellMode'] : null;
        $this->container['spotOptions'] = isset($data['spotOptions']) ? $data['spotOptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['flavorId'] === null) {
            $invalidProperties[] = "'flavorId' can't be null";
        }
        if ($this->container['sellStatus'] === null) {
            $invalidProperties[] = "'sellStatus' can't be null";
        }
        if ($this->container['availabilityZoneId'] === null) {
            $invalidProperties[] = "'availabilityZoneId' can't be null";
        }
        if ($this->container['sellMode'] === null) {
            $invalidProperties[] = "'sellMode' can't be null";
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
    * Gets id
    *  云服务器规格的索引。
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 云服务器规格的索引。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets flavorId
    *  云服务器规格的ID。
    *
    * @return string
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string $flavorId 云服务器规格的ID。
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets sellStatus
    *  云服务器规格的售卖状态。  sellout：售罄。 available：可用。
    *
    * @return string
    */
    public function getSellStatus()
    {
        return $this->container['sellStatus'];
    }

    /**
    * Sets sellStatus
    *
    * @param string $sellStatus 云服务器规格的售卖状态。  sellout：售罄。 available：可用。
    *
    * @return $this
    */
    public function setSellStatus($sellStatus)
    {
        $this->container['sellStatus'] = $sellStatus;
        return $this;
    }

    /**
    * Gets availabilityZoneId
    *  云服务器规格的可用区。
    *
    * @return string
    */
    public function getAvailabilityZoneId()
    {
        return $this->container['availabilityZoneId'];
    }

    /**
    * Sets availabilityZoneId
    *
    * @param string $availabilityZoneId 云服务器规格的可用区。
    *
    * @return $this
    */
    public function setAvailabilityZoneId($availabilityZoneId)
    {
        $this->container['availabilityZoneId'] = $availabilityZoneId;
        return $this;
    }

    /**
    * Gets sellMode
    *  云服务器规格的付费模式。  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    *
    * @return string
    */
    public function getSellMode()
    {
        return $this->container['sellMode'];
    }

    /**
    * Sets sellMode
    *
    * @param string $sellMode 云服务器规格的付费模式。  - postPaid：按需计费实例。 - prePaid：包年/包月计费实例。 - spot：竞价实例。 - ri：预留实例。
    *
    * @return $this
    */
    public function setSellMode($sellMode)
    {
        $this->container['sellMode'] = $sellMode;
        return $this;
    }

    /**
    * Gets spotOptions
    *  spotOptions
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\FlavorSpotOptions|null
    */
    public function getSpotOptions()
    {
        return $this->container['spotOptions'];
    }

    /**
    * Sets spotOptions
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\FlavorSpotOptions|null $spotOptions spotOptions
    *
    * @return $this
    */
    public function setSpotOptions($spotOptions)
    {
        $this->container['spotOptions'] = $spotOptions;
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

