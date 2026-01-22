<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FirewallInstanceResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FirewallInstanceResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  **参数解释**： 资源id，包括防火墙资源id，带宽资源id，eip资源id，vpc资源id，cbc回调后返回id。 **取值范围**： 不涉及
    * cloudServiceType  **参数解释**： 服务类型，用于CBC使用，特指：hws.service.type.cfw **取值范围**： 不涉及
    * resourceType  **参数解释**： 资源类型 **取值范围**： - 1：云防火墙:hws.resource.type.cfw - 2：EIP:hws.resource.type.cfw.exp.eip - 3：带宽:hws.resource.type.cfw.exp.bandwidth - 4：VPC:hws.resource.type.cfw.exp
    * resourceSpecCode  **参数解释**： 库存单位码 **取值范围**： - 1：防火墙标准版cfw.standard - 2：防火墙专业版cfw.professional - 3：eip标准版cfw.expack.eip.standard - 4：eip专业版cfw.expack.eip.professional - 5：带宽基础版cfw.expack.bandwidth.standard - 6：带宽专业版cfw.expack.bandwidth.professional - 7：vpc专业版cfw.expack.vpc.professional
    * resourceSize  **参数解释**： 资源数量 **取值范围**： 不涉及
    * resourceSizeMeasureId  **参数解释**： 资源单位 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'resourceSpecCode' => 'string',
            'resourceSize' => 'int',
            'resourceSizeMeasureId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  **参数解释**： 资源id，包括防火墙资源id，带宽资源id，eip资源id，vpc资源id，cbc回调后返回id。 **取值范围**： 不涉及
    * cloudServiceType  **参数解释**： 服务类型，用于CBC使用，特指：hws.service.type.cfw **取值范围**： 不涉及
    * resourceType  **参数解释**： 资源类型 **取值范围**： - 1：云防火墙:hws.resource.type.cfw - 2：EIP:hws.resource.type.cfw.exp.eip - 3：带宽:hws.resource.type.cfw.exp.bandwidth - 4：VPC:hws.resource.type.cfw.exp
    * resourceSpecCode  **参数解释**： 库存单位码 **取值范围**： - 1：防火墙标准版cfw.standard - 2：防火墙专业版cfw.professional - 3：eip标准版cfw.expack.eip.standard - 4：eip专业版cfw.expack.eip.professional - 5：带宽基础版cfw.expack.bandwidth.standard - 6：带宽专业版cfw.expack.bandwidth.professional - 7：vpc专业版cfw.expack.vpc.professional
    * resourceSize  **参数解释**： 资源数量 **取值范围**： 不涉及
    * resourceSizeMeasureId  **参数解释**： 资源单位 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'cloudServiceType' => null,
        'resourceType' => null,
        'resourceSpecCode' => null,
        'resourceSize' => 'int32',
        'resourceSizeMeasureId' => 'int32'
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
    * resourceId  **参数解释**： 资源id，包括防火墙资源id，带宽资源id，eip资源id，vpc资源id，cbc回调后返回id。 **取值范围**： 不涉及
    * cloudServiceType  **参数解释**： 服务类型，用于CBC使用，特指：hws.service.type.cfw **取值范围**： 不涉及
    * resourceType  **参数解释**： 资源类型 **取值范围**： - 1：云防火墙:hws.resource.type.cfw - 2：EIP:hws.resource.type.cfw.exp.eip - 3：带宽:hws.resource.type.cfw.exp.bandwidth - 4：VPC:hws.resource.type.cfw.exp
    * resourceSpecCode  **参数解释**： 库存单位码 **取值范围**： - 1：防火墙标准版cfw.standard - 2：防火墙专业版cfw.professional - 3：eip标准版cfw.expack.eip.standard - 4：eip专业版cfw.expack.eip.professional - 5：带宽基础版cfw.expack.bandwidth.standard - 6：带宽专业版cfw.expack.bandwidth.professional - 7：vpc专业版cfw.expack.vpc.professional
    * resourceSize  **参数解释**： 资源数量 **取值范围**： 不涉及
    * resourceSizeMeasureId  **参数解释**： 资源单位 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'resourceSpecCode' => 'resource_spec_code',
            'resourceSize' => 'resource_size',
            'resourceSizeMeasureId' => 'resource_size_measure_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  **参数解释**： 资源id，包括防火墙资源id，带宽资源id，eip资源id，vpc资源id，cbc回调后返回id。 **取值范围**： 不涉及
    * cloudServiceType  **参数解释**： 服务类型，用于CBC使用，特指：hws.service.type.cfw **取值范围**： 不涉及
    * resourceType  **参数解释**： 资源类型 **取值范围**： - 1：云防火墙:hws.resource.type.cfw - 2：EIP:hws.resource.type.cfw.exp.eip - 3：带宽:hws.resource.type.cfw.exp.bandwidth - 4：VPC:hws.resource.type.cfw.exp
    * resourceSpecCode  **参数解释**： 库存单位码 **取值范围**： - 1：防火墙标准版cfw.standard - 2：防火墙专业版cfw.professional - 3：eip标准版cfw.expack.eip.standard - 4：eip专业版cfw.expack.eip.professional - 5：带宽基础版cfw.expack.bandwidth.standard - 6：带宽专业版cfw.expack.bandwidth.professional - 7：vpc专业版cfw.expack.vpc.professional
    * resourceSize  **参数解释**： 资源数量 **取值范围**： 不涉及
    * resourceSizeMeasureId  **参数解释**： 资源单位 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'resourceSize' => 'setResourceSize',
            'resourceSizeMeasureId' => 'setResourceSizeMeasureId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  **参数解释**： 资源id，包括防火墙资源id，带宽资源id，eip资源id，vpc资源id，cbc回调后返回id。 **取值范围**： 不涉及
    * cloudServiceType  **参数解释**： 服务类型，用于CBC使用，特指：hws.service.type.cfw **取值范围**： 不涉及
    * resourceType  **参数解释**： 资源类型 **取值范围**： - 1：云防火墙:hws.resource.type.cfw - 2：EIP:hws.resource.type.cfw.exp.eip - 3：带宽:hws.resource.type.cfw.exp.bandwidth - 4：VPC:hws.resource.type.cfw.exp
    * resourceSpecCode  **参数解释**： 库存单位码 **取值范围**： - 1：防火墙标准版cfw.standard - 2：防火墙专业版cfw.professional - 3：eip标准版cfw.expack.eip.standard - 4：eip专业版cfw.expack.eip.professional - 5：带宽基础版cfw.expack.bandwidth.standard - 6：带宽专业版cfw.expack.bandwidth.professional - 7：vpc专业版cfw.expack.vpc.professional
    * resourceSize  **参数解释**： 资源数量 **取值范围**： 不涉及
    * resourceSizeMeasureId  **参数解释**： 资源单位 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'resourceSize' => 'getResourceSize',
            'resourceSizeMeasureId' => 'getResourceSizeMeasureId'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['resourceSizeMeasureId'] = isset($data['resourceSizeMeasureId']) ? $data['resourceSizeMeasureId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
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
    * Gets resourceId
    *  **参数解释**： 资源id，包括防火墙资源id，带宽资源id，eip资源id，vpc资源id，cbc回调后返回id。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**： 资源id，包括防火墙资源id，带宽资源id，eip资源id，vpc资源id，cbc回调后返回id。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  **参数解释**： 服务类型，用于CBC使用，特指：hws.service.type.cfw **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string|null $cloudServiceType **参数解释**： 服务类型，用于CBC使用，特指：hws.service.type.cfw **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets resourceType
    *  **参数解释**： 资源类型 **取值范围**： - 1：云防火墙:hws.resource.type.cfw - 2：EIP:hws.resource.type.cfw.exp.eip - 3：带宽:hws.resource.type.cfw.exp.bandwidth - 4：VPC:hws.resource.type.cfw.exp
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType **参数解释**： 资源类型 **取值范围**： - 1：云防火墙:hws.resource.type.cfw - 2：EIP:hws.resource.type.cfw.exp.eip - 3：带宽:hws.resource.type.cfw.exp.bandwidth - 4：VPC:hws.resource.type.cfw.exp
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  **参数解释**： 库存单位码 **取值范围**： - 1：防火墙标准版cfw.standard - 2：防火墙专业版cfw.professional - 3：eip标准版cfw.expack.eip.standard - 4：eip专业版cfw.expack.eip.professional - 5：带宽基础版cfw.expack.bandwidth.standard - 6：带宽专业版cfw.expack.bandwidth.professional - 7：vpc专业版cfw.expack.vpc.professional
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode **参数解释**： 库存单位码 **取值范围**： - 1：防火墙标准版cfw.standard - 2：防火墙专业版cfw.professional - 3：eip标准版cfw.expack.eip.standard - 4：eip专业版cfw.expack.eip.professional - 5：带宽基础版cfw.expack.bandwidth.standard - 6：带宽专业版cfw.expack.bandwidth.professional - 7：vpc专业版cfw.expack.vpc.professional
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets resourceSize
    *  **参数解释**： 资源数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getResourceSize()
    {
        return $this->container['resourceSize'];
    }

    /**
    * Sets resourceSize
    *
    * @param int|null $resourceSize **参数解释**： 资源数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
        return $this;
    }

    /**
    * Gets resourceSizeMeasureId
    *  **参数解释**： 资源单位 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getResourceSizeMeasureId()
    {
        return $this->container['resourceSizeMeasureId'];
    }

    /**
    * Sets resourceSizeMeasureId
    *
    * @param int|null $resourceSizeMeasureId **参数解释**： 资源单位 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setResourceSizeMeasureId($resourceSizeMeasureId)
    {
        $this->container['resourceSizeMeasureId'] = $resourceSizeMeasureId;
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

