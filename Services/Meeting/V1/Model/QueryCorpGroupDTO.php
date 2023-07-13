<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryCorpGroupDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryCorpGroupDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  媒体接入分组id。
    * groupName  分组名称。
    * groupType  分组类型。
    * remarks  分组备注信息。
    * regionId  区域ID，仅服务列表类型场景必填。
    * status  分组状态。 - 0: 正常 - 1: 停用，服务列表类型停用后创建企业就不会再自动分配到该分组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'groupName' => 'string',
            'groupType' => 'int',
            'remarks' => 'string',
            'regionId' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  媒体接入分组id。
    * groupName  分组名称。
    * groupType  分组类型。
    * remarks  分组备注信息。
    * regionId  区域ID，仅服务列表类型场景必填。
    * status  分组状态。 - 0: 正常 - 1: 停用，服务列表类型停用后创建企业就不会再自动分配到该分组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'groupName' => null,
        'groupType' => null,
        'remarks' => null,
        'regionId' => null,
        'status' => null
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
    * groupId  媒体接入分组id。
    * groupName  分组名称。
    * groupType  分组类型。
    * remarks  分组备注信息。
    * regionId  区域ID，仅服务列表类型场景必填。
    * status  分组状态。 - 0: 正常 - 1: 停用，服务列表类型停用后创建企业就不会再自动分配到该分组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'groupId',
            'groupName' => 'groupName',
            'groupType' => 'groupType',
            'remarks' => 'remarks',
            'regionId' => 'regionId',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  媒体接入分组id。
    * groupName  分组名称。
    * groupType  分组类型。
    * remarks  分组备注信息。
    * regionId  区域ID，仅服务列表类型场景必填。
    * status  分组状态。 - 0: 正常 - 1: 停用，服务列表类型停用后创建企业就不会再自动分配到该分组
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'groupType' => 'setGroupType',
            'remarks' => 'setRemarks',
            'regionId' => 'setRegionId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  媒体接入分组id。
    * groupName  分组名称。
    * groupType  分组类型。
    * remarks  分组备注信息。
    * regionId  区域ID，仅服务列表类型场景必填。
    * status  分组状态。 - 0: 正常 - 1: 停用，服务列表类型停用后创建企业就不会再自动分配到该分组
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'groupType' => 'getGroupType',
            'remarks' => 'getRemarks',
            'regionId' => 'getRegionId',
            'status' => 'getStatus'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets groupId
    *  媒体接入分组id。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 媒体接入分组id。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  分组名称。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 分组名称。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupType
    *  分组类型。
    *
    * @return int|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param int|null $groupType 分组类型。
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets remarks
    *  分组备注信息。
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 分组备注信息。
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets regionId
    *  区域ID，仅服务列表类型场景必填。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域ID，仅服务列表类型场景必填。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets status
    *  分组状态。 - 0: 正常 - 1: 停用，服务列表类型停用后创建企业就不会再自动分配到该分组
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 分组状态。 - 0: 正常 - 1: 停用，服务列表类型停用后创建企业就不会再自动分配到该分组
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

