<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PackageResourceGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PackageResourceGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  groupName
    * status  status
    * resources  resources
    * details  details
    * createTime  createTime
    * updateTime  updateTime
    * owner  owner
    * isAsync  isAsync
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'status' => 'string',
            'resources' => 'string[]',
            'details' => '\HuaweiCloud\SDK\Dli\V1\Model\PackageResource[]',
            'createTime' => 'int',
            'updateTime' => 'int',
            'owner' => 'string',
            'isAsync' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  groupName
    * status  status
    * resources  resources
    * details  details
    * createTime  createTime
    * updateTime  updateTime
    * owner  owner
    * isAsync  isAsync
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'status' => null,
        'resources' => null,
        'details' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'owner' => null,
        'isAsync' => null
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
    * groupName  groupName
    * status  status
    * resources  resources
    * details  details
    * createTime  createTime
    * updateTime  updateTime
    * owner  owner
    * isAsync  isAsync
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'status' => 'status',
            'resources' => 'resources',
            'details' => 'details',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'owner' => 'owner',
            'isAsync' => 'is_async'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  groupName
    * status  status
    * resources  resources
    * details  details
    * createTime  createTime
    * updateTime  updateTime
    * owner  owner
    * isAsync  isAsync
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'status' => 'setStatus',
            'resources' => 'setResources',
            'details' => 'setDetails',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'owner' => 'setOwner',
            'isAsync' => 'setIsAsync'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  groupName
    * status  status
    * resources  resources
    * details  details
    * createTime  createTime
    * updateTime  updateTime
    * owner  owner
    * isAsync  isAsync
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'status' => 'getStatus',
            'resources' => 'getResources',
            'details' => 'getDetails',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'owner' => 'getOwner',
            'isAsync' => 'getIsAsync'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['isAsync'] = isset($data['isAsync']) ? $data['isAsync'] : null;
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
    * Gets groupName
    *  groupName
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
    * @param string|null $groupName groupName
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets status
    *  status
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
    * @param string|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets resources
    *  resources
    *
    * @return string[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param string[]|null $resources resources
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets details
    *  details
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\PackageResource[]|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\PackageResource[]|null $details details
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
        return $this;
    }

    /**
    * Gets createTime
    *  createTime
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime createTime
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  updateTime
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime updateTime
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets isAsync
    *  isAsync
    *
    * @return bool|null
    */
    public function getIsAsync()
    {
        return $this->container['isAsync'];
    }

    /**
    * Sets isAsync
    *
    * @param bool|null $isAsync isAsync
    *
    * @return $this
    */
    public function setIsAsync($isAsync)
    {
        $this->container['isAsync'] = $isAsync;
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

