<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Asset implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Asset';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * name  name
    * projectId  projectId
    * createTime  createTime
    * creatorName  creatorName
    * creatorNum  creatorNum
    * updateName  updateName
    * updateNum  updateNum
    * updateTime  updateTime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'createTime' => '\DateTime',
            'creatorName' => 'string',
            'creatorNum' => 'string',
            'updateName' => 'string',
            'updateNum' => 'string',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * name  name
    * projectId  projectId
    * createTime  createTime
    * creatorName  creatorName
    * creatorNum  creatorNum
    * updateName  updateName
    * updateNum  updateNum
    * updateTime  updateTime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectId' => null,
        'createTime' => 'date-time',
        'creatorName' => null,
        'creatorNum' => null,
        'updateName' => null,
        'updateNum' => null,
        'updateTime' => 'date-time'
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
    * id  id
    * name  name
    * projectId  projectId
    * createTime  createTime
    * creatorName  creatorName
    * creatorNum  creatorNum
    * updateName  updateName
    * updateNum  updateNum
    * updateTime  updateTime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'createTime' => 'create_time',
            'creatorName' => 'creator_name',
            'creatorNum' => 'creator_num',
            'updateName' => 'update_name',
            'updateNum' => 'update_num',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * name  name
    * projectId  projectId
    * createTime  createTime
    * creatorName  creatorName
    * creatorNum  creatorNum
    * updateName  updateName
    * updateNum  updateNum
    * updateTime  updateTime
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'createTime' => 'setCreateTime',
            'creatorName' => 'setCreatorName',
            'creatorNum' => 'setCreatorNum',
            'updateName' => 'setUpdateName',
            'updateNum' => 'setUpdateNum',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * name  name
    * projectId  projectId
    * createTime  createTime
    * creatorName  creatorName
    * creatorNum  creatorNum
    * updateName  updateName
    * updateNum  updateNum
    * updateTime  updateTime
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'createTime' => 'getCreateTime',
            'creatorName' => 'getCreatorName',
            'creatorNum' => 'getCreatorNum',
            'updateName' => 'getUpdateName',
            'updateNum' => 'getUpdateNum',
            'updateTime' => 'getUpdateTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['creatorNum'] = isset($data['creatorNum']) ? $data['creatorNum'] : null;
        $this->container['updateName'] = isset($data['updateName']) ? $data['updateName'] : null;
        $this->container['updateNum'] = isset($data['updateNum']) ? $data['updateNum'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  name
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
    * @param string|null $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  projectId
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId projectId
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createTime
    *  createTime
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime createTime
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creatorName
    *  creatorName
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName creatorName
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets creatorNum
    *  creatorNum
    *
    * @return string|null
    */
    public function getCreatorNum()
    {
        return $this->container['creatorNum'];
    }

    /**
    * Sets creatorNum
    *
    * @param string|null $creatorNum creatorNum
    *
    * @return $this
    */
    public function setCreatorNum($creatorNum)
    {
        $this->container['creatorNum'] = $creatorNum;
        return $this;
    }

    /**
    * Gets updateName
    *  updateName
    *
    * @return string|null
    */
    public function getUpdateName()
    {
        return $this->container['updateName'];
    }

    /**
    * Sets updateName
    *
    * @param string|null $updateName updateName
    *
    * @return $this
    */
    public function setUpdateName($updateName)
    {
        $this->container['updateName'] = $updateName;
        return $this;
    }

    /**
    * Gets updateNum
    *  updateNum
    *
    * @return string|null
    */
    public function getUpdateNum()
    {
        return $this->container['updateNum'];
    }

    /**
    * Sets updateNum
    *
    * @param string|null $updateNum updateNum
    *
    * @return $this
    */
    public function setUpdateNum($updateNum)
    {
        $this->container['updateNum'] = $updateNum;
        return $this;
    }

    /**
    * Gets updateTime
    *  updateTime
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime updateTime
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

