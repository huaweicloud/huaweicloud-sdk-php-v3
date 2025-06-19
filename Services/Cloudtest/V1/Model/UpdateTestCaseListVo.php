<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTestCaseListVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTestCaseListVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  CTS需要返回资源id
    * name  CTS需要返回资源name
    * successList  成功批量更新用例的id列表
    * failedList  没有批量更新用例的id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'successList' => 'string[]',
            'failedList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  CTS需要返回资源id
    * name  CTS需要返回资源name
    * successList  成功批量更新用例的id列表
    * failedList  没有批量更新用例的id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'successList' => null,
        'failedList' => null
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
    * id  CTS需要返回资源id
    * name  CTS需要返回资源name
    * successList  成功批量更新用例的id列表
    * failedList  没有批量更新用例的id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'successList' => 'success_list',
            'failedList' => 'failed_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  CTS需要返回资源id
    * name  CTS需要返回资源name
    * successList  成功批量更新用例的id列表
    * failedList  没有批量更新用例的id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'successList' => 'setSuccessList',
            'failedList' => 'setFailedList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  CTS需要返回资源id
    * name  CTS需要返回资源name
    * successList  成功批量更新用例的id列表
    * failedList  没有批量更新用例的id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'successList' => 'getSuccessList',
            'failedList' => 'getFailedList'
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
        $this->container['successList'] = isset($data['successList']) ? $data['successList'] : null;
        $this->container['failedList'] = isset($data['failedList']) ? $data['failedList'] : null;
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
    *  CTS需要返回资源id
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
    * @param string|null $id CTS需要返回资源id
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
    *  CTS需要返回资源name
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
    * @param string|null $name CTS需要返回资源name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets successList
    *  成功批量更新用例的id列表
    *
    * @return string[]|null
    */
    public function getSuccessList()
    {
        return $this->container['successList'];
    }

    /**
    * Sets successList
    *
    * @param string[]|null $successList 成功批量更新用例的id列表
    *
    * @return $this
    */
    public function setSuccessList($successList)
    {
        $this->container['successList'] = $successList;
        return $this;
    }

    /**
    * Gets failedList
    *  没有批量更新用例的id列表
    *
    * @return string[]|null
    */
    public function getFailedList()
    {
        return $this->container['failedList'];
    }

    /**
    * Sets failedList
    *
    * @param string[]|null $failedList 没有批量更新用例的id列表
    *
    * @return $this
    */
    public function setFailedList($failedList)
    {
        $this->container['failedList'] = $failedList;
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

