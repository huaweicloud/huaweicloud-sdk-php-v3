<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemoveIssuesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemoveIssuesInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workitemList  关联需求
    * isDeleteCase  是否删除需求关联的用例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workitemList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\WorkItemInfo[]',
            'isDeleteCase' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workitemList  关联需求
    * isDeleteCase  是否删除需求关联的用例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workitemList' => null,
        'isDeleteCase' => null
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
    * workitemList  关联需求
    * isDeleteCase  是否删除需求关联的用例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workitemList' => 'workitem_list',
            'isDeleteCase' => 'is_delete_case'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workitemList  关联需求
    * isDeleteCase  是否删除需求关联的用例
    *
    * @var string[]
    */
    protected static $setters = [
            'workitemList' => 'setWorkitemList',
            'isDeleteCase' => 'setIsDeleteCase'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workitemList  关联需求
    * isDeleteCase  是否删除需求关联的用例
    *
    * @var string[]
    */
    protected static $getters = [
            'workitemList' => 'getWorkitemList',
            'isDeleteCase' => 'getIsDeleteCase'
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
        $this->container['workitemList'] = isset($data['workitemList']) ? $data['workitemList'] : null;
        $this->container['isDeleteCase'] = isset($data['isDeleteCase']) ? $data['isDeleteCase'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workitemList'] === null) {
            $invalidProperties[] = "'workitemList' can't be null";
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
    * Gets workitemList
    *  关联需求
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\WorkItemInfo[]
    */
    public function getWorkitemList()
    {
        return $this->container['workitemList'];
    }

    /**
    * Sets workitemList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\WorkItemInfo[] $workitemList 关联需求
    *
    * @return $this
    */
    public function setWorkitemList($workitemList)
    {
        $this->container['workitemList'] = $workitemList;
        return $this;
    }

    /**
    * Gets isDeleteCase
    *  是否删除需求关联的用例
    *
    * @return bool|null
    */
    public function getIsDeleteCase()
    {
        return $this->container['isDeleteCase'];
    }

    /**
    * Sets isDeleteCase
    *
    * @param bool|null $isDeleteCase 是否删除需求关联的用例
    *
    * @return $this
    */
    public function setIsDeleteCase($isDeleteCase)
    {
        $this->container['isDeleteCase'] = $isDeleteCase;
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

