<?php

namespace HuaweiCloud\SDK\Rfs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionPlanSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutionPlanSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceAdd  新增资源数
    * resourceUpdate  更新资源数
    * resourceDelete  删除资源数
    * resourceImport  导入资源数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceAdd' => 'int',
            'resourceUpdate' => 'int',
            'resourceDelete' => 'int',
            'resourceImport' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceAdd  新增资源数
    * resourceUpdate  更新资源数
    * resourceDelete  删除资源数
    * resourceImport  导入资源数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceAdd' => null,
        'resourceUpdate' => null,
        'resourceDelete' => null,
        'resourceImport' => null
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
    * resourceAdd  新增资源数
    * resourceUpdate  更新资源数
    * resourceDelete  删除资源数
    * resourceImport  导入资源数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceAdd' => 'resource_add',
            'resourceUpdate' => 'resource_update',
            'resourceDelete' => 'resource_delete',
            'resourceImport' => 'resource_import'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceAdd  新增资源数
    * resourceUpdate  更新资源数
    * resourceDelete  删除资源数
    * resourceImport  导入资源数
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceAdd' => 'setResourceAdd',
            'resourceUpdate' => 'setResourceUpdate',
            'resourceDelete' => 'setResourceDelete',
            'resourceImport' => 'setResourceImport'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceAdd  新增资源数
    * resourceUpdate  更新资源数
    * resourceDelete  删除资源数
    * resourceImport  导入资源数
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceAdd' => 'getResourceAdd',
            'resourceUpdate' => 'getResourceUpdate',
            'resourceDelete' => 'getResourceDelete',
            'resourceImport' => 'getResourceImport'
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
        $this->container['resourceAdd'] = isset($data['resourceAdd']) ? $data['resourceAdd'] : null;
        $this->container['resourceUpdate'] = isset($data['resourceUpdate']) ? $data['resourceUpdate'] : null;
        $this->container['resourceDelete'] = isset($data['resourceDelete']) ? $data['resourceDelete'] : null;
        $this->container['resourceImport'] = isset($data['resourceImport']) ? $data['resourceImport'] : null;
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
    * Gets resourceAdd
    *  新增资源数
    *
    * @return int|null
    */
    public function getResourceAdd()
    {
        return $this->container['resourceAdd'];
    }

    /**
    * Sets resourceAdd
    *
    * @param int|null $resourceAdd 新增资源数
    *
    * @return $this
    */
    public function setResourceAdd($resourceAdd)
    {
        $this->container['resourceAdd'] = $resourceAdd;
        return $this;
    }

    /**
    * Gets resourceUpdate
    *  更新资源数
    *
    * @return int|null
    */
    public function getResourceUpdate()
    {
        return $this->container['resourceUpdate'];
    }

    /**
    * Sets resourceUpdate
    *
    * @param int|null $resourceUpdate 更新资源数
    *
    * @return $this
    */
    public function setResourceUpdate($resourceUpdate)
    {
        $this->container['resourceUpdate'] = $resourceUpdate;
        return $this;
    }

    /**
    * Gets resourceDelete
    *  删除资源数
    *
    * @return int|null
    */
    public function getResourceDelete()
    {
        return $this->container['resourceDelete'];
    }

    /**
    * Sets resourceDelete
    *
    * @param int|null $resourceDelete 删除资源数
    *
    * @return $this
    */
    public function setResourceDelete($resourceDelete)
    {
        $this->container['resourceDelete'] = $resourceDelete;
        return $this;
    }

    /**
    * Gets resourceImport
    *  导入资源数
    *
    * @return int|null
    */
    public function getResourceImport()
    {
        return $this->container['resourceImport'];
    }

    /**
    * Sets resourceImport
    *
    * @param int|null $resourceImport 导入资源数
    *
    * @return $this
    */
    public function setResourceImport($resourceImport)
    {
        $this->container['resourceImport'] = $resourceImport;
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

