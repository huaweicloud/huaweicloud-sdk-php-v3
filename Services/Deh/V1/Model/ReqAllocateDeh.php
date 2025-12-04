<?php

namespace HuaweiCloud\SDK\DeH\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReqAllocateDeh implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReqAllocateDeh';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  专属主机名称。
    * autoPlacement  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。 取值范围：“on”或“off”。 默认值：“on”。
    * availabilityZone  专属主机所属AZ。
    * hostType  专属主机类型。
    * quantity  待分配的专属主机数量。
    * tags  专属主机标签列表。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'autoPlacement' => 'string',
            'availabilityZone' => 'string',
            'hostType' => 'string',
            'quantity' => 'int',
            'tags' => '\HuaweiCloud\SDK\DeH\V1\Model\ResourceTag[]',
            'extendParam' => '\HuaweiCloud\SDK\DeH\V1\Model\ReqAllocateDehExtendParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  专属主机名称。
    * autoPlacement  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。 取值范围：“on”或“off”。 默认值：“on”。
    * availabilityZone  专属主机所属AZ。
    * hostType  专属主机类型。
    * quantity  待分配的专属主机数量。
    * tags  专属主机标签列表。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'autoPlacement' => null,
        'availabilityZone' => null,
        'hostType' => null,
        'quantity' => 'int32',
        'tags' => null,
        'extendParam' => null
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
    * name  专属主机名称。
    * autoPlacement  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。 取值范围：“on”或“off”。 默认值：“on”。
    * availabilityZone  专属主机所属AZ。
    * hostType  专属主机类型。
    * quantity  待分配的专属主机数量。
    * tags  专属主机标签列表。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'autoPlacement' => 'auto_placement',
            'availabilityZone' => 'availability_zone',
            'hostType' => 'host_type',
            'quantity' => 'quantity',
            'tags' => 'tags',
            'extendParam' => 'extend_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  专属主机名称。
    * autoPlacement  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。 取值范围：“on”或“off”。 默认值：“on”。
    * availabilityZone  专属主机所属AZ。
    * hostType  专属主机类型。
    * quantity  待分配的专属主机数量。
    * tags  专属主机标签列表。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'autoPlacement' => 'setAutoPlacement',
            'availabilityZone' => 'setAvailabilityZone',
            'hostType' => 'setHostType',
            'quantity' => 'setQuantity',
            'tags' => 'setTags',
            'extendParam' => 'setExtendParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  专属主机名称。
    * autoPlacement  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。 取值范围：“on”或“off”。 默认值：“on”。
    * availabilityZone  专属主机所属AZ。
    * hostType  专属主机类型。
    * quantity  待分配的专属主机数量。
    * tags  专属主机标签列表。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'autoPlacement' => 'getAutoPlacement',
            'availabilityZone' => 'getAvailabilityZone',
            'hostType' => 'getHostType',
            'quantity' => 'getQuantity',
            'tags' => 'getTags',
            'extendParam' => 'getExtendParam'
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
    const AUTO_PLACEMENT_OFF = 'off';
    const AUTO_PLACEMENT_ON = 'on';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAutoPlacementAllowableValues()
    {
        return [
            self::AUTO_PLACEMENT_OFF,
            self::AUTO_PLACEMENT_ON,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['autoPlacement'] = isset($data['autoPlacement']) ? $data['autoPlacement'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\u4e00-\\u9fa5a-zA-Z0-9-_.]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\u4e00-\\u9fa5a-zA-Z0-9-_.]+$/.";
            }
            $allowedValues = $this->getAutoPlacementAllowableValues();
                if (!is_null($this->container['autoPlacement']) && !in_array($this->container['autoPlacement'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'autoPlacement', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
            if ((mb_strlen($this->container['availabilityZone']) > 255)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['availabilityZone']) < 1)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['hostType'] === null) {
            $invalidProperties[] = "'hostType' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
    * Gets name
    *  专属主机名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 专属主机名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets autoPlacement
    *  在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。 取值范围：“on”或“off”。 默认值：“on”。
    *
    * @return string|null
    */
    public function getAutoPlacement()
    {
        return $this->container['autoPlacement'];
    }

    /**
    * Sets autoPlacement
    *
    * @param string|null $autoPlacement 在创建云服务器时（未指定专属主机ID），是否允许云服务器自动分配在一台可用的专属主机上。 取值范围：“on”或“off”。 默认值：“on”。
    *
    * @return $this
    */
    public function setAutoPlacement($autoPlacement)
    {
        $this->container['autoPlacement'] = $autoPlacement;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  专属主机所属AZ。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 专属主机所属AZ。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets hostType
    *  专属主机类型。
    *
    * @return string
    */
    public function getHostType()
    {
        return $this->container['hostType'];
    }

    /**
    * Sets hostType
    *
    * @param string $hostType 专属主机类型。
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
        return $this;
    }

    /**
    * Gets quantity
    *  待分配的专属主机数量。
    *
    * @return int
    */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
    * Sets quantity
    *
    * @param int $quantity 待分配的专属主机数量。
    *
    * @return $this
    */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;
        return $this;
    }

    /**
    * Gets tags
    *  专属主机标签列表。
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\ResourceTag[]|null $tags 专属主机标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\ReqAllocateDehExtendParam|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\ReqAllocateDehExtendParam|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
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

