<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ValidateDbDataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ValidateDbDataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  **参数解释**： 校验总结果数。 **默认取值**： 不涉及。
    * success  **参数解释**： 校验成功结果数。 **默认取值**： 不涉及。
    * failure  **参数解释**： 校验失败结果数。 **默认取值**： 不涉及。
    * type  **参数解释**： 校验数据类型。 **默认取值**： schema、table
    * data  **参数解释**： 校验成功结果数据。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'success' => 'int',
            'failure' => 'int',
            'type' => 'string',
            'data' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  **参数解释**： 校验总结果数。 **默认取值**： 不涉及。
    * success  **参数解释**： 校验成功结果数。 **默认取值**： 不涉及。
    * failure  **参数解释**： 校验失败结果数。 **默认取值**： 不涉及。
    * type  **参数解释**： 校验数据类型。 **默认取值**： schema、table
    * data  **参数解释**： 校验成功结果数据。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'success' => 'int32',
        'failure' => 'int32',
        'type' => null,
        'data' => null
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
    * total  **参数解释**： 校验总结果数。 **默认取值**： 不涉及。
    * success  **参数解释**： 校验成功结果数。 **默认取值**： 不涉及。
    * failure  **参数解释**： 校验失败结果数。 **默认取值**： 不涉及。
    * type  **参数解释**： 校验数据类型。 **默认取值**： schema、table
    * data  **参数解释**： 校验成功结果数据。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'success' => 'success',
            'failure' => 'failure',
            'type' => 'type',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  **参数解释**： 校验总结果数。 **默认取值**： 不涉及。
    * success  **参数解释**： 校验成功结果数。 **默认取值**： 不涉及。
    * failure  **参数解释**： 校验失败结果数。 **默认取值**： 不涉及。
    * type  **参数解释**： 校验数据类型。 **默认取值**： schema、table
    * data  **参数解释**： 校验成功结果数据。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'success' => 'setSuccess',
            'failure' => 'setFailure',
            'type' => 'setType',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  **参数解释**： 校验总结果数。 **默认取值**： 不涉及。
    * success  **参数解释**： 校验成功结果数。 **默认取值**： 不涉及。
    * failure  **参数解释**： 校验失败结果数。 **默认取值**： 不涉及。
    * type  **参数解释**： 校验数据类型。 **默认取值**： schema、table
    * data  **参数解释**： 校验成功结果数据。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'success' => 'getSuccess',
            'failure' => 'getFailure',
            'type' => 'getType',
            'data' => 'getData'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['failure'] = isset($data['failure']) ? $data['failure'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
    * Gets total
    *  **参数解释**： 校验总结果数。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**： 校验总结果数。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets success
    *  **参数解释**： 校验成功结果数。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param int|null $success **参数解释**： 校验成功结果数。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets failure
    *  **参数解释**： 校验失败结果数。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getFailure()
    {
        return $this->container['failure'];
    }

    /**
    * Sets failure
    *
    * @param int|null $failure **参数解释**： 校验失败结果数。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFailure($failure)
    {
        $this->container['failure'] = $failure;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 校验数据类型。 **默认取值**： schema、table
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 校验数据类型。 **默认取值**： schema、table
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets data
    *  **参数解释**： 校验成功结果数据。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param string[]|null $data **参数解释**： 校验成功结果数据。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

