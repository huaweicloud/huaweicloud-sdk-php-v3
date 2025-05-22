<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProjectVersionsV4ResponseBodyIterations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProjectVersionsV4ResponseBody_iterations';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  迭代描述
    * endTime  迭代结束时间
    * id  迭代id
    * name  迭代标题
    * beginTime  迭代开始时间
    * status  迭代状态
    * updatedTime  迭代更新时间，长整型时间戳
    * deleted  迭代是否已经删除，false, 未删除， true已经删除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'endTime' => 'string',
            'id' => 'int',
            'name' => 'string',
            'beginTime' => 'string',
            'status' => 'string',
            'updatedTime' => 'int',
            'deleted' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  迭代描述
    * endTime  迭代结束时间
    * id  迭代id
    * name  迭代标题
    * beginTime  迭代开始时间
    * status  迭代状态
    * updatedTime  迭代更新时间，长整型时间戳
    * deleted  迭代是否已经删除，false, 未删除， true已经删除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'endTime' => null,
        'id' => 'int32',
        'name' => null,
        'beginTime' => null,
        'status' => null,
        'updatedTime' => 'int64',
        'deleted' => null
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
    * description  迭代描述
    * endTime  迭代结束时间
    * id  迭代id
    * name  迭代标题
    * beginTime  迭代开始时间
    * status  迭代状态
    * updatedTime  迭代更新时间，长整型时间戳
    * deleted  迭代是否已经删除，false, 未删除， true已经删除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'endTime' => 'end_time',
            'id' => 'id',
            'name' => 'name',
            'beginTime' => 'begin_time',
            'status' => 'status',
            'updatedTime' => 'updated_time',
            'deleted' => 'deleted'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  迭代描述
    * endTime  迭代结束时间
    * id  迭代id
    * name  迭代标题
    * beginTime  迭代开始时间
    * status  迭代状态
    * updatedTime  迭代更新时间，长整型时间戳
    * deleted  迭代是否已经删除，false, 未删除， true已经删除
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'endTime' => 'setEndTime',
            'id' => 'setId',
            'name' => 'setName',
            'beginTime' => 'setBeginTime',
            'status' => 'setStatus',
            'updatedTime' => 'setUpdatedTime',
            'deleted' => 'setDeleted'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  迭代描述
    * endTime  迭代结束时间
    * id  迭代id
    * name  迭代标题
    * beginTime  迭代开始时间
    * status  迭代状态
    * updatedTime  迭代更新时间，长整型时间戳
    * deleted  迭代是否已经删除，false, 未删除， true已经删除
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'endTime' => 'getEndTime',
            'id' => 'getId',
            'name' => 'getName',
            'beginTime' => 'getBeginTime',
            'status' => 'getStatus',
            'updatedTime' => 'getUpdatedTime',
            'deleted' => 'getDeleted'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
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
    * Gets description
    *  迭代描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 迭代描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets endTime
    *  迭代结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 迭代结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets id
    *  迭代id
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
    * @param int|null $id 迭代id
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
    *  迭代标题
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
    * @param string|null $name 迭代标题
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets beginTime
    *  迭代开始时间
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 迭代开始时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets status
    *  迭代状态
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
    * @param string|null $status 迭代状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updatedTime
    *  迭代更新时间，长整型时间戳
    *
    * @return int|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param int|null $updatedTime 迭代更新时间，长整型时间戳
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets deleted
    *  迭代是否已经删除，false, 未删除， true已经删除
    *
    * @return bool|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param bool|null $deleted 迭代是否已经删除，false, 未删除， true已经删除
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
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

