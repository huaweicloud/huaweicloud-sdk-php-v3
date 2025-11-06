<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransferGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransferGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  代码组id
    * fullName  代码组全名称
    * fullPath  代码组全路径
    * myRole  myRole
    * name  代码组名称
    * parentId  代码组父级id
    * creatorId  代码组所有者id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'fullName' => 'string',
            'fullPath' => 'string',
            'myRole' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GroupMyRoleDto',
            'name' => 'string',
            'parentId' => 'int',
            'creatorId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  代码组id
    * fullName  代码组全名称
    * fullPath  代码组全路径
    * myRole  myRole
    * name  代码组名称
    * parentId  代码组父级id
    * creatorId  代码组所有者id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'fullName' => null,
        'fullPath' => null,
        'myRole' => null,
        'name' => null,
        'parentId' => 'int32',
        'creatorId' => 'int32'
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
    * id  代码组id
    * fullName  代码组全名称
    * fullPath  代码组全路径
    * myRole  myRole
    * name  代码组名称
    * parentId  代码组父级id
    * creatorId  代码组所有者id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'fullName' => 'full_name',
            'fullPath' => 'full_path',
            'myRole' => 'my_role',
            'name' => 'name',
            'parentId' => 'parent_id',
            'creatorId' => 'creator_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  代码组id
    * fullName  代码组全名称
    * fullPath  代码组全路径
    * myRole  myRole
    * name  代码组名称
    * parentId  代码组父级id
    * creatorId  代码组所有者id
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'fullName' => 'setFullName',
            'fullPath' => 'setFullPath',
            'myRole' => 'setMyRole',
            'name' => 'setName',
            'parentId' => 'setParentId',
            'creatorId' => 'setCreatorId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  代码组id
    * fullName  代码组全名称
    * fullPath  代码组全路径
    * myRole  myRole
    * name  代码组名称
    * parentId  代码组父级id
    * creatorId  代码组所有者id
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'fullName' => 'getFullName',
            'fullPath' => 'getFullPath',
            'myRole' => 'getMyRole',
            'name' => 'getName',
            'parentId' => 'getParentId',
            'creatorId' => 'getCreatorId'
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
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['fullPath'] = isset($data['fullPath']) ? $data['fullPath'] : null;
        $this->container['myRole'] = isset($data['myRole']) ? $data['myRole'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
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
    * Gets id
    *  代码组id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 代码组id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets fullName
    *  代码组全名称
    *
    * @return string|null
    */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
    * Sets fullName
    *
    * @param string|null $fullName 代码组全名称
    *
    * @return $this
    */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;
        return $this;
    }

    /**
    * Gets fullPath
    *  代码组全路径
    *
    * @return string|null
    */
    public function getFullPath()
    {
        return $this->container['fullPath'];
    }

    /**
    * Sets fullPath
    *
    * @param string|null $fullPath 代码组全路径
    *
    * @return $this
    */
    public function setFullPath($fullPath)
    {
        $this->container['fullPath'] = $fullPath;
        return $this;
    }

    /**
    * Gets myRole
    *  myRole
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GroupMyRoleDto|null
    */
    public function getMyRole()
    {
        return $this->container['myRole'];
    }

    /**
    * Sets myRole
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GroupMyRoleDto|null $myRole myRole
    *
    * @return $this
    */
    public function setMyRole($myRole)
    {
        $this->container['myRole'] = $myRole;
        return $this;
    }

    /**
    * Gets name
    *  代码组名称
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
    * @param string|null $name 代码组名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets parentId
    *  代码组父级id
    *
    * @return int|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param int|null $parentId 代码组父级id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets creatorId
    *  代码组所有者id
    *
    * @return int|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param int|null $creatorId 代码组所有者id
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
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

