<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerHpsGroupCapacity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerHpsGroupCapacity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availabilityZone  **参数解释**：可用区。 **默认取值**：不涉及。
    * hyperinstanceGroupId  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    * hyperinstanceGroupName  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：规格名称。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：是否售罄。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availabilityZone' => 'string',
            'hyperinstanceGroupId' => 'string',
            'hyperinstanceGroupName' => 'string',
            'hyperinstanceClusterId' => 'string',
            'resourceFlavor' => 'string',
            'isSoldOut' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availabilityZone  **参数解释**：可用区。 **默认取值**：不涉及。
    * hyperinstanceGroupId  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    * hyperinstanceGroupName  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：规格名称。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：是否售罄。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availabilityZone' => null,
        'hyperinstanceGroupId' => null,
        'hyperinstanceGroupName' => null,
        'hyperinstanceClusterId' => null,
        'resourceFlavor' => null,
        'isSoldOut' => null
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
    * availabilityZone  **参数解释**：可用区。 **默认取值**：不涉及。
    * hyperinstanceGroupId  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    * hyperinstanceGroupName  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：规格名称。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：是否售罄。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availabilityZone' => 'availability_zone',
            'hyperinstanceGroupId' => 'hyperinstance_group_id',
            'hyperinstanceGroupName' => 'hyperinstance_group_name',
            'hyperinstanceClusterId' => 'hyperinstance_cluster_id',
            'resourceFlavor' => 'resource_flavor',
            'isSoldOut' => 'is_sold_out'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availabilityZone  **参数解释**：可用区。 **默认取值**：不涉及。
    * hyperinstanceGroupId  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    * hyperinstanceGroupName  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：规格名称。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：是否售罄。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'availabilityZone' => 'setAvailabilityZone',
            'hyperinstanceGroupId' => 'setHyperinstanceGroupId',
            'hyperinstanceGroupName' => 'setHyperinstanceGroupName',
            'hyperinstanceClusterId' => 'setHyperinstanceClusterId',
            'resourceFlavor' => 'setResourceFlavor',
            'isSoldOut' => 'setIsSoldOut'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availabilityZone  **参数解释**：可用区。 **默认取值**：不涉及。
    * hyperinstanceGroupId  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    * hyperinstanceGroupName  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：规格名称。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：是否售罄。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'availabilityZone' => 'getAvailabilityZone',
            'hyperinstanceGroupId' => 'getHyperinstanceGroupId',
            'hyperinstanceGroupName' => 'getHyperinstanceGroupName',
            'hyperinstanceClusterId' => 'getHyperinstanceClusterId',
            'resourceFlavor' => 'getResourceFlavor',
            'isSoldOut' => 'getIsSoldOut'
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
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['hyperinstanceGroupId'] = isset($data['hyperinstanceGroupId']) ? $data['hyperinstanceGroupId'] : null;
        $this->container['hyperinstanceGroupName'] = isset($data['hyperinstanceGroupName']) ? $data['hyperinstanceGroupName'] : null;
        $this->container['hyperinstanceClusterId'] = isset($data['hyperinstanceClusterId']) ? $data['hyperinstanceClusterId'] : null;
        $this->container['resourceFlavor'] = isset($data['resourceFlavor']) ? $data['resourceFlavor'] : null;
        $this->container['isSoldOut'] = isset($data['isSoldOut']) ? $data['isSoldOut'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets availabilityZone
    *  **参数解释**：可用区。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone **参数解释**：可用区。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets hyperinstanceGroupId
    *  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getHyperinstanceGroupId()
    {
        return $this->container['hyperinstanceGroupId'];
    }

    /**
    * Sets hyperinstanceGroupId
    *
    * @param string|null $hyperinstanceGroupId **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setHyperinstanceGroupId($hyperinstanceGroupId)
    {
        $this->container['hyperinstanceGroupId'] = $hyperinstanceGroupId;
        return $this;
    }

    /**
    * Gets hyperinstanceGroupName
    *  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getHyperinstanceGroupName()
    {
        return $this->container['hyperinstanceGroupName'];
    }

    /**
    * Sets hyperinstanceGroupName
    *
    * @param string|null $hyperinstanceGroupName **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setHyperinstanceGroupName($hyperinstanceGroupName)
    {
        $this->container['hyperinstanceGroupName'] = $hyperinstanceGroupName;
        return $this;
    }

    /**
    * Gets hyperinstanceClusterId
    *  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getHyperinstanceClusterId()
    {
        return $this->container['hyperinstanceClusterId'];
    }

    /**
    * Sets hyperinstanceClusterId
    *
    * @param string|null $hyperinstanceClusterId **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setHyperinstanceClusterId($hyperinstanceClusterId)
    {
        $this->container['hyperinstanceClusterId'] = $hyperinstanceClusterId;
        return $this;
    }

    /**
    * Gets resourceFlavor
    *  **参数解释**：规格名称。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getResourceFlavor()
    {
        return $this->container['resourceFlavor'];
    }

    /**
    * Sets resourceFlavor
    *
    * @param string|null $resourceFlavor **参数解释**：规格名称。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setResourceFlavor($resourceFlavor)
    {
        $this->container['resourceFlavor'] = $resourceFlavor;
        return $this;
    }

    /**
    * Gets isSoldOut
    *  **参数解释**：是否售罄。 **默认取值**：不涉及。
    *
    * @return bool|null
    */
    public function getIsSoldOut()
    {
        return $this->container['isSoldOut'];
    }

    /**
    * Sets isSoldOut
    *
    * @param bool|null $isSoldOut **参数解释**：是否售罄。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setIsSoldOut($isSoldOut)
    {
        $this->container['isSoldOut'] = $isSoldOut;
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

