<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerHpsClusterCapacity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerHpsClusterCapacity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  **参数解释**：规格名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * availabilityZone  **参数解释**：可用区ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * hyperinstanceClusterName  **参数解释**：超节点集群名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：资源规格。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：售罄状态。 **约束限制**：布尔值（true/false）。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => 'string',
            'availabilityZone' => 'string',
            'hyperinstanceClusterId' => 'string',
            'hyperinstanceClusterName' => 'string',
            'resourceFlavor' => 'string',
            'isSoldOut' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  **参数解释**：规格名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * availabilityZone  **参数解释**：可用区ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * hyperinstanceClusterName  **参数解释**：超节点集群名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：资源规格。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：售罄状态。 **约束限制**：布尔值（true/false）。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'availabilityZone' => null,
        'hyperinstanceClusterId' => null,
        'hyperinstanceClusterName' => null,
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
    * flavor  **参数解释**：规格名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * availabilityZone  **参数解释**：可用区ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * hyperinstanceClusterName  **参数解释**：超节点集群名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：资源规格。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：售罄状态。 **约束限制**：布尔值（true/false）。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'availabilityZone' => 'availability_zone',
            'hyperinstanceClusterId' => 'hyperinstance_cluster_id',
            'hyperinstanceClusterName' => 'hyperinstance_cluster_name',
            'resourceFlavor' => 'resource_flavor',
            'isSoldOut' => 'is_sold_out'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  **参数解释**：规格名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * availabilityZone  **参数解释**：可用区ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * hyperinstanceClusterName  **参数解释**：超节点集群名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：资源规格。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：售罄状态。 **约束限制**：布尔值（true/false）。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'availabilityZone' => 'setAvailabilityZone',
            'hyperinstanceClusterId' => 'setHyperinstanceClusterId',
            'hyperinstanceClusterName' => 'setHyperinstanceClusterName',
            'resourceFlavor' => 'setResourceFlavor',
            'isSoldOut' => 'setIsSoldOut'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  **参数解释**：规格名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * availabilityZone  **参数解释**：可用区ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * hyperinstanceClusterName  **参数解释**：超节点集群名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：资源规格。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    * isSoldOut  **参数解释**：售罄状态。 **约束限制**：布尔值（true/false）。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'availabilityZone' => 'getAvailabilityZone',
            'hyperinstanceClusterId' => 'getHyperinstanceClusterId',
            'hyperinstanceClusterName' => 'getHyperinstanceClusterName',
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
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['hyperinstanceClusterId'] = isset($data['hyperinstanceClusterId']) ? $data['hyperinstanceClusterId'] : null;
        $this->container['hyperinstanceClusterName'] = isset($data['hyperinstanceClusterName']) ? $data['hyperinstanceClusterName'] : null;
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
            if (!is_null($this->container['flavor']) && (mb_strlen($this->container['flavor']) > 65536)) {
                $invalidProperties[] = "invalid value for 'flavor', the character length must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['flavor']) && (mb_strlen($this->container['flavor']) < 1)) {
                $invalidProperties[] = "invalid value for 'flavor', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) > 65536)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) < 1)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hyperinstanceClusterId']) && (mb_strlen($this->container['hyperinstanceClusterId']) > 65536)) {
                $invalidProperties[] = "invalid value for 'hyperinstanceClusterId', the character length must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['hyperinstanceClusterId']) && (mb_strlen($this->container['hyperinstanceClusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hyperinstanceClusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hyperinstanceClusterName']) && (mb_strlen($this->container['hyperinstanceClusterName']) > 65536)) {
                $invalidProperties[] = "invalid value for 'hyperinstanceClusterName', the character length must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['hyperinstanceClusterName']) && (mb_strlen($this->container['hyperinstanceClusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hyperinstanceClusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceFlavor']) && (mb_strlen($this->container['resourceFlavor']) > 65536)) {
                $invalidProperties[] = "invalid value for 'resourceFlavor', the character length must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['resourceFlavor']) && (mb_strlen($this->container['resourceFlavor']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceFlavor', the character length must be bigger than or equal to 1.";
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
    * Gets flavor
    *  **参数解释**：规格名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor **参数解释**：规格名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释**：可用区ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
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
    * @param string|null $availabilityZone **参数解释**：可用区ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets hyperinstanceClusterId
    *  **参数解释**：超节点集群ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
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
    * @param string|null $hyperinstanceClusterId **参数解释**：超节点集群ID。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setHyperinstanceClusterId($hyperinstanceClusterId)
    {
        $this->container['hyperinstanceClusterId'] = $hyperinstanceClusterId;
        return $this;
    }

    /**
    * Gets hyperinstanceClusterName
    *  **参数解释**：超节点集群名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getHyperinstanceClusterName()
    {
        return $this->container['hyperinstanceClusterName'];
    }

    /**
    * Sets hyperinstanceClusterName
    *
    * @param string|null $hyperinstanceClusterName **参数解释**：超节点集群名称。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setHyperinstanceClusterName($hyperinstanceClusterName)
    {
        $this->container['hyperinstanceClusterName'] = $hyperinstanceClusterName;
        return $this;
    }

    /**
    * Gets resourceFlavor
    *  **参数解释**：资源规格。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
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
    * @param string|null $resourceFlavor **参数解释**：资源规格。 **约束限制**：长度1-65536个字符。 **默认取值**：不涉及。
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
    *  **参数解释**：售罄状态。 **约束限制**：布尔值（true/false）。 **默认取值**：不涉及。
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
    * @param bool|null $isSoldOut **参数解释**：售罄状态。 **约束限制**：布尔值（true/false）。 **默认取值**：不涉及。
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

