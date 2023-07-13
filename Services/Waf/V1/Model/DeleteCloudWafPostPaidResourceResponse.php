<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteCloudWafPostPaidResourceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteCloudWafPostPaidResourceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  云模式版本   - -2：已冻结   - -1：未订购   - 2：标准版   - 3：专业版   - 4：铂金版   - 7: 入门版   - 22：按需版本
    * resources  资源列表
    * isNewUser  是否为新用户
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'resources' => '\HuaweiCloud\SDK\Waf\V1\Model\ResourceResponse[]',
            'isNewUser' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  云模式版本   - -2：已冻结   - -1：未订购   - 2：标准版   - 3：专业版   - 4：铂金版   - 7: 入门版   - 22：按需版本
    * resources  资源列表
    * isNewUser  是否为新用户
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'resources' => null,
        'isNewUser' => null
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
    * type  云模式版本   - -2：已冻结   - -1：未订购   - 2：标准版   - 3：专业版   - 4：铂金版   - 7: 入门版   - 22：按需版本
    * resources  资源列表
    * isNewUser  是否为新用户
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'resources' => 'resources',
            'isNewUser' => 'isNewUser'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  云模式版本   - -2：已冻结   - -1：未订购   - 2：标准版   - 3：专业版   - 4：铂金版   - 7: 入门版   - 22：按需版本
    * resources  资源列表
    * isNewUser  是否为新用户
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'resources' => 'setResources',
            'isNewUser' => 'setIsNewUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  云模式版本   - -2：已冻结   - -1：未订购   - 2：标准版   - 3：专业版   - 4：铂金版   - 7: 入门版   - 22：按需版本
    * resources  资源列表
    * isNewUser  是否为新用户
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'resources' => 'getResources',
            'isNewUser' => 'getIsNewUser'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['isNewUser'] = isset($data['isNewUser']) ? $data['isNewUser'] : null;
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
    * Gets type
    *  云模式版本   - -2：已冻结   - -1：未订购   - 2：标准版   - 3：专业版   - 4：铂金版   - 7: 入门版   - 22：按需版本
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 云模式版本   - -2：已冻结   - -1：未订购   - 2：标准版   - 3：专业版   - 4：铂金版   - 7: 入门版   - 22：按需版本
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets resources
    *  资源列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\ResourceResponse[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\ResourceResponse[]|null $resources 资源列表
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets isNewUser
    *  是否为新用户
    *
    * @return bool|null
    */
    public function getIsNewUser()
    {
        return $this->container['isNewUser'];
    }

    /**
    * Sets isNewUser
    *
    * @param bool|null $isNewUser 是否为新用户
    *
    * @return $this
    */
    public function setIsNewUser($isNewUser)
    {
        $this->container['isNewUser'] = $isNewUser;
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

