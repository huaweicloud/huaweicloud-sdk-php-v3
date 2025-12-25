<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteNodeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteNodeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deleteFailList  删除失败列表
    * deleteSuccessList  删除成功列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deleteFailList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Node[]',
            'deleteSuccessList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Node[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deleteFailList  删除失败列表
    * deleteSuccessList  删除成功列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deleteFailList' => null,
        'deleteSuccessList' => null
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
    * deleteFailList  删除失败列表
    * deleteSuccessList  删除成功列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deleteFailList' => 'delete_fail_list',
            'deleteSuccessList' => 'delete_success_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deleteFailList  删除失败列表
    * deleteSuccessList  删除成功列表
    *
    * @var string[]
    */
    protected static $setters = [
            'deleteFailList' => 'setDeleteFailList',
            'deleteSuccessList' => 'setDeleteSuccessList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deleteFailList  删除失败列表
    * deleteSuccessList  删除成功列表
    *
    * @var string[]
    */
    protected static $getters = [
            'deleteFailList' => 'getDeleteFailList',
            'deleteSuccessList' => 'getDeleteSuccessList'
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
        $this->container['deleteFailList'] = isset($data['deleteFailList']) ? $data['deleteFailList'] : null;
        $this->container['deleteSuccessList'] = isset($data['deleteSuccessList']) ? $data['deleteSuccessList'] : null;
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
    * Gets deleteFailList
    *  删除失败列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Node[]|null
    */
    public function getDeleteFailList()
    {
        return $this->container['deleteFailList'];
    }

    /**
    * Sets deleteFailList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Node[]|null $deleteFailList 删除失败列表
    *
    * @return $this
    */
    public function setDeleteFailList($deleteFailList)
    {
        $this->container['deleteFailList'] = $deleteFailList;
        return $this;
    }

    /**
    * Gets deleteSuccessList
    *  删除成功列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Node[]|null
    */
    public function getDeleteSuccessList()
    {
        return $this->container['deleteSuccessList'];
    }

    /**
    * Sets deleteSuccessList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Node[]|null $deleteSuccessList 删除成功列表
    *
    * @return $this
    */
    public function setDeleteSuccessList($deleteSuccessList)
    {
        $this->container['deleteSuccessList'] = $deleteSuccessList;
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

