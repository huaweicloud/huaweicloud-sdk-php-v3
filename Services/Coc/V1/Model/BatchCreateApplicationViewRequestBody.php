<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateApplicationViewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateApplicationViewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationList  应用列表
    * componentList  组件列表
    * groupList  分组列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationList' => '\HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodyApplicationList[]',
            'componentList' => '\HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodyComponentList[]',
            'groupList' => '\HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodyGroupList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationList  应用列表
    * componentList  组件列表
    * groupList  分组列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationList' => null,
        'componentList' => null,
        'groupList' => null
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
    * applicationList  应用列表
    * componentList  组件列表
    * groupList  分组列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationList' => 'application_list',
            'componentList' => 'component_list',
            'groupList' => 'group_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationList  应用列表
    * componentList  组件列表
    * groupList  分组列表
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationList' => 'setApplicationList',
            'componentList' => 'setComponentList',
            'groupList' => 'setGroupList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationList  应用列表
    * componentList  组件列表
    * groupList  分组列表
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationList' => 'getApplicationList',
            'componentList' => 'getComponentList',
            'groupList' => 'getGroupList'
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
        $this->container['applicationList'] = isset($data['applicationList']) ? $data['applicationList'] : null;
        $this->container['componentList'] = isset($data['componentList']) ? $data['componentList'] : null;
        $this->container['groupList'] = isset($data['groupList']) ? $data['groupList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['applicationList'] === null) {
            $invalidProperties[] = "'applicationList' can't be null";
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
    * Gets applicationList
    *  应用列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodyApplicationList[]
    */
    public function getApplicationList()
    {
        return $this->container['applicationList'];
    }

    /**
    * Sets applicationList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodyApplicationList[] $applicationList 应用列表
    *
    * @return $this
    */
    public function setApplicationList($applicationList)
    {
        $this->container['applicationList'] = $applicationList;
        return $this;
    }

    /**
    * Gets componentList
    *  组件列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodyComponentList[]|null
    */
    public function getComponentList()
    {
        return $this->container['componentList'];
    }

    /**
    * Sets componentList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodyComponentList[]|null $componentList 组件列表
    *
    * @return $this
    */
    public function setComponentList($componentList)
    {
        $this->container['componentList'] = $componentList;
        return $this;
    }

    /**
    * Gets groupList
    *  分组列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodyGroupList[]|null
    */
    public function getGroupList()
    {
        return $this->container['groupList'];
    }

    /**
    * Sets groupList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodyGroupList[]|null $groupList 分组列表
    *
    * @return $this
    */
    public function setGroupList($groupList)
    {
        $this->container['groupList'] = $groupList;
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

