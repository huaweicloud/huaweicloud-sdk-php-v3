<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workItemId  工作项编号
    * hasChild  是否有子需求
    * isOpen  是否展开
    * childList  子需求
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workItemId' => 'string',
            'hasChild' => 'bool',
            'isOpen' => 'bool',
            'childList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\WorkItemInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workItemId  工作项编号
    * hasChild  是否有子需求
    * isOpen  是否展开
    * childList  子需求
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workItemId' => null,
        'hasChild' => null,
        'isOpen' => null,
        'childList' => null
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
    * workItemId  工作项编号
    * hasChild  是否有子需求
    * isOpen  是否展开
    * childList  子需求
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workItemId' => 'work_item_id',
            'hasChild' => 'has_child',
            'isOpen' => 'is_open',
            'childList' => 'child_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workItemId  工作项编号
    * hasChild  是否有子需求
    * isOpen  是否展开
    * childList  子需求
    *
    * @var string[]
    */
    protected static $setters = [
            'workItemId' => 'setWorkItemId',
            'hasChild' => 'setHasChild',
            'isOpen' => 'setIsOpen',
            'childList' => 'setChildList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workItemId  工作项编号
    * hasChild  是否有子需求
    * isOpen  是否展开
    * childList  子需求
    *
    * @var string[]
    */
    protected static $getters = [
            'workItemId' => 'getWorkItemId',
            'hasChild' => 'getHasChild',
            'isOpen' => 'getIsOpen',
            'childList' => 'getChildList'
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
        $this->container['workItemId'] = isset($data['workItemId']) ? $data['workItemId'] : null;
        $this->container['hasChild'] = isset($data['hasChild']) ? $data['hasChild'] : null;
        $this->container['isOpen'] = isset($data['isOpen']) ? $data['isOpen'] : null;
        $this->container['childList'] = isset($data['childList']) ? $data['childList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workItemId'] === null) {
            $invalidProperties[] = "'workItemId' can't be null";
        }
        if ($this->container['hasChild'] === null) {
            $invalidProperties[] = "'hasChild' can't be null";
        }
        if ($this->container['isOpen'] === null) {
            $invalidProperties[] = "'isOpen' can't be null";
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
    * Gets workItemId
    *  工作项编号
    *
    * @return string
    */
    public function getWorkItemId()
    {
        return $this->container['workItemId'];
    }

    /**
    * Sets workItemId
    *
    * @param string $workItemId 工作项编号
    *
    * @return $this
    */
    public function setWorkItemId($workItemId)
    {
        $this->container['workItemId'] = $workItemId;
        return $this;
    }

    /**
    * Gets hasChild
    *  是否有子需求
    *
    * @return bool
    */
    public function getHasChild()
    {
        return $this->container['hasChild'];
    }

    /**
    * Sets hasChild
    *
    * @param bool $hasChild 是否有子需求
    *
    * @return $this
    */
    public function setHasChild($hasChild)
    {
        $this->container['hasChild'] = $hasChild;
        return $this;
    }

    /**
    * Gets isOpen
    *  是否展开
    *
    * @return bool
    */
    public function getIsOpen()
    {
        return $this->container['isOpen'];
    }

    /**
    * Sets isOpen
    *
    * @param bool $isOpen 是否展开
    *
    * @return $this
    */
    public function setIsOpen($isOpen)
    {
        $this->container['isOpen'] = $isOpen;
        return $this;
    }

    /**
    * Gets childList
    *  子需求
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\WorkItemInfo[]|null
    */
    public function getChildList()
    {
        return $this->container['childList'];
    }

    /**
    * Sets childList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\WorkItemInfo[]|null $childList 子需求
    *
    * @return $this
    */
    public function setChildList($childList)
    {
        $this->container['childList'] = $childList;
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

