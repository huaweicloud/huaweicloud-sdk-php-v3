<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckResourceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckResourceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID。action为createInstance时必填。
    * instanceNum  实例数量。action为createInstance时必填。
    * mode  实例类型，目前仅支持Cluster。action为createInstance时必填。
    * availabilityZoneMode  可用区类型，单可用区single或多可用区multi。action为createInstance时必填。
    * nodeNum  节点数量。action为createInstance、createReadonlyNode时必填。
    * flavorRef  规格码。action为createInstance、resizeFlavor时必填。
    * availabilityZone  可用区码。
    * subnetId  子网ID。action为createInstance时必填。
    * instanceId  实例ID。action为createReadonlyNode、resizeFlavor时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'instanceNum' => 'int',
            'mode' => 'string',
            'availabilityZoneMode' => 'string',
            'nodeNum' => 'int',
            'flavorRef' => 'string',
            'availabilityZone' => 'string',
            'subnetId' => 'string',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID。action为createInstance时必填。
    * instanceNum  实例数量。action为createInstance时必填。
    * mode  实例类型，目前仅支持Cluster。action为createInstance时必填。
    * availabilityZoneMode  可用区类型，单可用区single或多可用区multi。action为createInstance时必填。
    * nodeNum  节点数量。action为createInstance、createReadonlyNode时必填。
    * flavorRef  规格码。action为createInstance、resizeFlavor时必填。
    * availabilityZone  可用区码。
    * subnetId  子网ID。action为createInstance时必填。
    * instanceId  实例ID。action为createReadonlyNode、resizeFlavor时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'instanceNum' => null,
        'mode' => null,
        'availabilityZoneMode' => null,
        'nodeNum' => null,
        'flavorRef' => null,
        'availabilityZone' => null,
        'subnetId' => null,
        'instanceId' => null
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
    * enterpriseProjectId  企业项目ID。action为createInstance时必填。
    * instanceNum  实例数量。action为createInstance时必填。
    * mode  实例类型，目前仅支持Cluster。action为createInstance时必填。
    * availabilityZoneMode  可用区类型，单可用区single或多可用区multi。action为createInstance时必填。
    * nodeNum  节点数量。action为createInstance、createReadonlyNode时必填。
    * flavorRef  规格码。action为createInstance、resizeFlavor时必填。
    * availabilityZone  可用区码。
    * subnetId  子网ID。action为createInstance时必填。
    * instanceId  实例ID。action为createReadonlyNode、resizeFlavor时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'instanceNum' => 'instance_num',
            'mode' => 'mode',
            'availabilityZoneMode' => 'availability_zone_mode',
            'nodeNum' => 'node_num',
            'flavorRef' => 'flavor_ref',
            'availabilityZone' => 'availability_zone',
            'subnetId' => 'subnet_id',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  企业项目ID。action为createInstance时必填。
    * instanceNum  实例数量。action为createInstance时必填。
    * mode  实例类型，目前仅支持Cluster。action为createInstance时必填。
    * availabilityZoneMode  可用区类型，单可用区single或多可用区multi。action为createInstance时必填。
    * nodeNum  节点数量。action为createInstance、createReadonlyNode时必填。
    * flavorRef  规格码。action为createInstance、resizeFlavor时必填。
    * availabilityZone  可用区码。
    * subnetId  子网ID。action为createInstance时必填。
    * instanceId  实例ID。action为createReadonlyNode、resizeFlavor时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'instanceNum' => 'setInstanceNum',
            'mode' => 'setMode',
            'availabilityZoneMode' => 'setAvailabilityZoneMode',
            'nodeNum' => 'setNodeNum',
            'flavorRef' => 'setFlavorRef',
            'availabilityZone' => 'setAvailabilityZone',
            'subnetId' => 'setSubnetId',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  企业项目ID。action为createInstance时必填。
    * instanceNum  实例数量。action为createInstance时必填。
    * mode  实例类型，目前仅支持Cluster。action为createInstance时必填。
    * availabilityZoneMode  可用区类型，单可用区single或多可用区multi。action为createInstance时必填。
    * nodeNum  节点数量。action为createInstance、createReadonlyNode时必填。
    * flavorRef  规格码。action为createInstance、resizeFlavor时必填。
    * availabilityZone  可用区码。
    * subnetId  子网ID。action为createInstance时必填。
    * instanceId  实例ID。action为createReadonlyNode、resizeFlavor时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'instanceNum' => 'getInstanceNum',
            'mode' => 'getMode',
            'availabilityZoneMode' => 'getAvailabilityZoneMode',
            'nodeNum' => 'getNodeNum',
            'flavorRef' => 'getFlavorRef',
            'availabilityZone' => 'getAvailabilityZone',
            'subnetId' => 'getSubnetId',
            'instanceId' => 'getInstanceId'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['availabilityZoneMode'] = isset($data['availabilityZoneMode']) ? $data['availabilityZoneMode'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
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
    * Gets enterpriseProjectId
    *  企业项目ID。action为createInstance时必填。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。action为createInstance时必填。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets instanceNum
    *  实例数量。action为createInstance时必填。
    *
    * @return int|null
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int|null $instanceNum 实例数量。action为createInstance时必填。
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets mode
    *  实例类型，目前仅支持Cluster。action为createInstance时必填。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 实例类型，目前仅支持Cluster。action为createInstance时必填。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets availabilityZoneMode
    *  可用区类型，单可用区single或多可用区multi。action为createInstance时必填。
    *
    * @return string|null
    */
    public function getAvailabilityZoneMode()
    {
        return $this->container['availabilityZoneMode'];
    }

    /**
    * Sets availabilityZoneMode
    *
    * @param string|null $availabilityZoneMode 可用区类型，单可用区single或多可用区multi。action为createInstance时必填。
    *
    * @return $this
    */
    public function setAvailabilityZoneMode($availabilityZoneMode)
    {
        $this->container['availabilityZoneMode'] = $availabilityZoneMode;
        return $this;
    }

    /**
    * Gets nodeNum
    *  节点数量。action为createInstance、createReadonlyNode时必填。
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum 节点数量。action为createInstance、createReadonlyNode时必填。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets flavorRef
    *  规格码。action为createInstance、resizeFlavor时必填。
    *
    * @return string|null
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string|null $flavorRef 规格码。action为createInstance、resizeFlavor时必填。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区码。
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
    * @param string|null $availabilityZone 可用区码。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID。action为createInstance时必填。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 子网ID。action为createInstance时必填。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。action为createReadonlyNode、resizeFlavor时必填。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。action为createReadonlyNode、resizeFlavor时必填。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

