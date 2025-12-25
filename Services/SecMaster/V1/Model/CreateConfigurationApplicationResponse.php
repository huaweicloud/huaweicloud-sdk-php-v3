<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConfigurationApplicationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConfigurationApplicationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applyFailList  创建失败实例列表
    * applySuccessList  创建成功实例列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applyFailList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfiguration[]',
            'applySuccessList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfiguration[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applyFailList  创建失败实例列表
    * applySuccessList  创建成功实例列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applyFailList' => null,
        'applySuccessList' => null
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
    * applyFailList  创建失败实例列表
    * applySuccessList  创建成功实例列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applyFailList' => 'apply_fail_list',
            'applySuccessList' => 'apply_success_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applyFailList  创建失败实例列表
    * applySuccessList  创建成功实例列表
    *
    * @var string[]
    */
    protected static $setters = [
            'applyFailList' => 'setApplyFailList',
            'applySuccessList' => 'setApplySuccessList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applyFailList  创建失败实例列表
    * applySuccessList  创建成功实例列表
    *
    * @var string[]
    */
    protected static $getters = [
            'applyFailList' => 'getApplyFailList',
            'applySuccessList' => 'getApplySuccessList'
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
        $this->container['applyFailList'] = isset($data['applyFailList']) ? $data['applyFailList'] : null;
        $this->container['applySuccessList'] = isset($data['applySuccessList']) ? $data['applySuccessList'] : null;
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
    * Gets applyFailList
    *  创建失败实例列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfiguration[]|null
    */
    public function getApplyFailList()
    {
        return $this->container['applyFailList'];
    }

    /**
    * Sets applyFailList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfiguration[]|null $applyFailList 创建失败实例列表
    *
    * @return $this
    */
    public function setApplyFailList($applyFailList)
    {
        $this->container['applyFailList'] = $applyFailList;
        return $this;
    }

    /**
    * Gets applySuccessList
    *  创建成功实例列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfiguration[]|null
    */
    public function getApplySuccessList()
    {
        return $this->container['applySuccessList'];
    }

    /**
    * Sets applySuccessList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfiguration[]|null $applySuccessList 创建成功实例列表
    *
    * @return $this
    */
    public function setApplySuccessList($applySuccessList)
    {
        $this->container['applySuccessList'] = $applySuccessList;
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

