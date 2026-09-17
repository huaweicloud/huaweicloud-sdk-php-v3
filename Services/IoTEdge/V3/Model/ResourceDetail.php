<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源id，添加资源时由边缘侧生成
    * status  资源状态，冻结:freeze、解冻:unfreeze、退订:delete。
    * chargingRule  计费规则
    * type  内部类型
    * resourceName  资源名称，由边缘侧生成。
    * cloudServiceType  公有云CBC上注册的服务类型英文名
    * resourceType  CBC上注册的资源类型编码。
    * resourceSpecCode  资源规格编码
    * associatedEdgeClusterId  关联的边缘集群ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'status' => 'string',
            'chargingRule' => 'string',
            'type' => 'string',
            'resourceName' => 'string',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'resourceSpecCode' => 'string',
            'associatedEdgeClusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源id，添加资源时由边缘侧生成
    * status  资源状态，冻结:freeze、解冻:unfreeze、退订:delete。
    * chargingRule  计费规则
    * type  内部类型
    * resourceName  资源名称，由边缘侧生成。
    * cloudServiceType  公有云CBC上注册的服务类型英文名
    * resourceType  CBC上注册的资源类型编码。
    * resourceSpecCode  资源规格编码
    * associatedEdgeClusterId  关联的边缘集群ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'status' => null,
        'chargingRule' => null,
        'type' => null,
        'resourceName' => null,
        'cloudServiceType' => null,
        'resourceType' => null,
        'resourceSpecCode' => null,
        'associatedEdgeClusterId' => null
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
    * resourceId  资源id，添加资源时由边缘侧生成
    * status  资源状态，冻结:freeze、解冻:unfreeze、退订:delete。
    * chargingRule  计费规则
    * type  内部类型
    * resourceName  资源名称，由边缘侧生成。
    * cloudServiceType  公有云CBC上注册的服务类型英文名
    * resourceType  CBC上注册的资源类型编码。
    * resourceSpecCode  资源规格编码
    * associatedEdgeClusterId  关联的边缘集群ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'status' => 'status',
            'chargingRule' => 'charging_rule',
            'type' => 'type',
            'resourceName' => 'resource_name',
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'resourceSpecCode' => 'resource_spec_code',
            'associatedEdgeClusterId' => 'associated_edge_cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源id，添加资源时由边缘侧生成
    * status  资源状态，冻结:freeze、解冻:unfreeze、退订:delete。
    * chargingRule  计费规则
    * type  内部类型
    * resourceName  资源名称，由边缘侧生成。
    * cloudServiceType  公有云CBC上注册的服务类型英文名
    * resourceType  CBC上注册的资源类型编码。
    * resourceSpecCode  资源规格编码
    * associatedEdgeClusterId  关联的边缘集群ID
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'status' => 'setStatus',
            'chargingRule' => 'setChargingRule',
            'type' => 'setType',
            'resourceName' => 'setResourceName',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'associatedEdgeClusterId' => 'setAssociatedEdgeClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源id，添加资源时由边缘侧生成
    * status  资源状态，冻结:freeze、解冻:unfreeze、退订:delete。
    * chargingRule  计费规则
    * type  内部类型
    * resourceName  资源名称，由边缘侧生成。
    * cloudServiceType  公有云CBC上注册的服务类型英文名
    * resourceType  CBC上注册的资源类型编码。
    * resourceSpecCode  资源规格编码
    * associatedEdgeClusterId  关联的边缘集群ID
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'status' => 'getStatus',
            'chargingRule' => 'getChargingRule',
            'type' => 'getType',
            'resourceName' => 'getResourceName',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'associatedEdgeClusterId' => 'getAssociatedEdgeClusterId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['chargingRule'] = isset($data['chargingRule']) ? $data['chargingRule'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['associatedEdgeClusterId'] = isset($data['associatedEdgeClusterId']) ? $data['associatedEdgeClusterId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && !preg_match("/freeze|unfreeze|delete/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /freeze|unfreeze|delete/.";
            }
            if (!is_null($this->container['chargingRule']) && (mb_strlen($this->container['chargingRule']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargingRule', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chargingRule']) && (mb_strlen($this->container['chargingRule']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargingRule', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargingRule']) && !preg_match("/pre_paid/", $this->container['chargingRule'])) {
                $invalidProperties[] = "invalid value for 'chargingRule', must be conform to the pattern /pre_paid/.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && !preg_match("/1000device|10000device|cloudpond1000device|cloudpond10000device|iotedge.cece.basic.small|iotedge.cece.enhancement.small|iotedge.cece.basic.large|iotedge.cece.enhancement.large|iotedge.cde.basic|iotedge.cde.enhancement|iotedge.cde.device|iotedge.enterprise.32vcpu.300device|iotedge.enterprise.300vcpu.3000device|iotedge.enterprise.om.plugin/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /1000device|10000device|cloudpond1000device|cloudpond10000device|iotedge.cece.basic.small|iotedge.cece.enhancement.small|iotedge.cece.basic.large|iotedge.cece.enhancement.large|iotedge.cde.basic|iotedge.cde.enhancement|iotedge.cde.device|iotedge.enterprise.32vcpu.300device|iotedge.enterprise.300vcpu.3000device|iotedge.enterprise.om.plugin/.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 32)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cloudServiceType']) && !preg_match("/hws.service.type.iotedge/", $this->container['cloudServiceType'])) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', must be conform to the pattern /hws.service.type.iotedge/.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && !preg_match("/hws.resource.type.iotedge.campus|hws.resource.type.iotedge.cece|hws.resource.type.iotedge.cde/", $this->container['resourceType'])) {
                $invalidProperties[] = "invalid value for 'resourceType', must be conform to the pattern /hws.resource.type.iotedge.campus|hws.resource.type.iotedge.cece|hws.resource.type.iotedge.cde/.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceSpecCode']) && !preg_match("/iotedge.campus.1000tps.10000device|iotedge.campus.100tps.1000device|iotedge.enterprise.100vcpu.1000device|iotedge.enterprise.500vcpu.10000device|iotedge.cece.basic.small|iotedge.cece.enhancement.small|iotedge.cece.basic.large|iotedge.cece.enhancement.large|iotedge.cde.basic|iotedge.cde.enhancement|iotedge.cde.device|iotedge.enterprise.32vcpu.300device|iotedge.enterprise.300vcpu.3000device|iotedge.enterprise.om.plugin/", $this->container['resourceSpecCode'])) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', must be conform to the pattern /iotedge.campus.1000tps.10000device|iotedge.campus.100tps.1000device|iotedge.enterprise.100vcpu.1000device|iotedge.enterprise.500vcpu.10000device|iotedge.cece.basic.small|iotedge.cece.enhancement.small|iotedge.cece.basic.large|iotedge.cece.enhancement.large|iotedge.cde.basic|iotedge.cde.enhancement|iotedge.cde.device|iotedge.enterprise.32vcpu.300device|iotedge.enterprise.300vcpu.3000device|iotedge.enterprise.om.plugin/.";
            }
            if (!is_null($this->container['associatedEdgeClusterId']) && (mb_strlen($this->container['associatedEdgeClusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'associatedEdgeClusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['associatedEdgeClusterId']) && (mb_strlen($this->container['associatedEdgeClusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedEdgeClusterId', the character length must be bigger than or equal to 0.";
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
    *  资源id，添加资源时由边缘侧生成
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
    * @param string|null $resourceId 资源id，添加资源时由边缘侧生成
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets status
    *  资源状态，冻结:freeze、解冻:unfreeze、退订:delete。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 资源状态，冻结:freeze、解冻:unfreeze、退订:delete。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets chargingRule
    *  计费规则
    *
    * @return string|null
    */
    public function getChargingRule()
    {
        return $this->container['chargingRule'];
    }

    /**
    * Sets chargingRule
    *
    * @param string|null $chargingRule 计费规则
    *
    * @return $this
    */
    public function setChargingRule($chargingRule)
    {
        $this->container['chargingRule'] = $chargingRule;
        return $this;
    }

    /**
    * Gets type
    *  内部类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 内部类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称，由边缘侧生成。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称，由边缘侧生成。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  公有云CBC上注册的服务类型英文名
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
    * @param string|null $cloudServiceType 公有云CBC上注册的服务类型英文名
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
    *  CBC上注册的资源类型编码。
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
    * @param string|null $resourceType CBC上注册的资源类型编码。
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
    *  资源规格编码
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
    * @param string|null $resourceSpecCode 资源规格编码
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets associatedEdgeClusterId
    *  关联的边缘集群ID
    *
    * @return string|null
    */
    public function getAssociatedEdgeClusterId()
    {
        return $this->container['associatedEdgeClusterId'];
    }

    /**
    * Sets associatedEdgeClusterId
    *
    * @param string|null $associatedEdgeClusterId 关联的边缘集群ID
    *
    * @return $this
    */
    public function setAssociatedEdgeClusterId($associatedEdgeClusterId)
    {
        $this->container['associatedEdgeClusterId'] = $associatedEdgeClusterId;
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

