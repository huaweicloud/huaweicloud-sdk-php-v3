<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDdmNodeDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDdmNodeDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  节点id。
    * privateIp  私有ip。
    * status  节点状态。
    * name  节点名称。
    * subnetId  子网id。
    * azCode  可用区。
    * groupId  组id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'privateIp' => 'string',
            'status' => 'string',
            'name' => 'string',
            'subnetId' => 'string',
            'azCode' => 'string',
            'groupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  节点id。
    * privateIp  私有ip。
    * status  节点状态。
    * name  节点名称。
    * subnetId  子网id。
    * azCode  可用区。
    * groupId  组id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'privateIp' => null,
        'status' => null,
        'name' => null,
        'subnetId' => null,
        'azCode' => null,
        'groupId' => null
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
    * id  节点id。
    * privateIp  私有ip。
    * status  节点状态。
    * name  节点名称。
    * subnetId  子网id。
    * azCode  可用区。
    * groupId  组id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'privateIp' => 'private_ip',
            'status' => 'status',
            'name' => 'name',
            'subnetId' => 'subnet_id',
            'azCode' => 'az_code',
            'groupId' => 'group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  节点id。
    * privateIp  私有ip。
    * status  节点状态。
    * name  节点名称。
    * subnetId  子网id。
    * azCode  可用区。
    * groupId  组id。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'privateIp' => 'setPrivateIp',
            'status' => 'setStatus',
            'name' => 'setName',
            'subnetId' => 'setSubnetId',
            'azCode' => 'setAzCode',
            'groupId' => 'setGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  节点id。
    * privateIp  私有ip。
    * status  节点状态。
    * name  节点名称。
    * subnetId  子网id。
    * azCode  可用区。
    * groupId  组id。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'privateIp' => 'getPrivateIp',
            'status' => 'getStatus',
            'name' => 'getName',
            'subnetId' => 'getSubnetId',
            'azCode' => 'getAzCode',
            'groupId' => 'getGroupId'
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
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['azCode']) && (mb_strlen($this->container['azCode']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'azCode', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['azCode']) && (mb_strlen($this->container['azCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'azCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
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
    *  节点id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 节点id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets privateIp
    *  私有ip。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 私有ip。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets status
    *  节点状态。
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
    * @param string|null $status 节点状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  节点名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 节点名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网id。
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
    * @param string|null $subnetId 子网id。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区。
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 可用区。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets groupId
    *  组id。
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
    * @param string|null $groupId 组id。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
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

