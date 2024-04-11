<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ManagedOperation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'managed_operation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableParallelOperation  资源栈集（stack_set）是否可以并发地创建多个资源栈集操作。该参数作为资源栈集属性，可以通过创建资源栈集API（CreateStackSet）指定，通过更新资源栈集API（UpdateStackSet）更新该参数。  该参数默认为false，资源栈集只允许以串行的方式生成并执行资源栈集操作。同一时刻，资源栈集中只会存在一个处于运行态，即QUEUE_IN_PROGRESS或OPERATION_IN_PROGRESS状态的资源栈集操作，该操作执行完成后，下一个资源栈集操作才允许被创建。  该参数如果设定为true，资源栈集允许并发地生成多个资源栈集操作，执行非冲突操作，并将冲突操作进行排队处理。当冲突操作执行完毕，资源栈集按请求顺序继续执行排队操作。  注：冲突操作指资源栈集允许多个操作同时执行的条件下，如果超过一个以上的操作包含了同一资源栈实例，此时在该资源栈实例上的多个操作被称为冲突操作。  当资源栈集状态为OPERATION_IN_PROGRESS时，不允许用户通过更新资源栈集（UpdateStackSet）来更新该参数。  * 当前，一个资源栈集下仅允许同时最多存在10个处于运行态的资源栈集操作*
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableParallelOperation' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableParallelOperation  资源栈集（stack_set）是否可以并发地创建多个资源栈集操作。该参数作为资源栈集属性，可以通过创建资源栈集API（CreateStackSet）指定，通过更新资源栈集API（UpdateStackSet）更新该参数。  该参数默认为false，资源栈集只允许以串行的方式生成并执行资源栈集操作。同一时刻，资源栈集中只会存在一个处于运行态，即QUEUE_IN_PROGRESS或OPERATION_IN_PROGRESS状态的资源栈集操作，该操作执行完成后，下一个资源栈集操作才允许被创建。  该参数如果设定为true，资源栈集允许并发地生成多个资源栈集操作，执行非冲突操作，并将冲突操作进行排队处理。当冲突操作执行完毕，资源栈集按请求顺序继续执行排队操作。  注：冲突操作指资源栈集允许多个操作同时执行的条件下，如果超过一个以上的操作包含了同一资源栈实例，此时在该资源栈实例上的多个操作被称为冲突操作。  当资源栈集状态为OPERATION_IN_PROGRESS时，不允许用户通过更新资源栈集（UpdateStackSet）来更新该参数。  * 当前，一个资源栈集下仅允许同时最多存在10个处于运行态的资源栈集操作*
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableParallelOperation' => null
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
    * enableParallelOperation  资源栈集（stack_set）是否可以并发地创建多个资源栈集操作。该参数作为资源栈集属性，可以通过创建资源栈集API（CreateStackSet）指定，通过更新资源栈集API（UpdateStackSet）更新该参数。  该参数默认为false，资源栈集只允许以串行的方式生成并执行资源栈集操作。同一时刻，资源栈集中只会存在一个处于运行态，即QUEUE_IN_PROGRESS或OPERATION_IN_PROGRESS状态的资源栈集操作，该操作执行完成后，下一个资源栈集操作才允许被创建。  该参数如果设定为true，资源栈集允许并发地生成多个资源栈集操作，执行非冲突操作，并将冲突操作进行排队处理。当冲突操作执行完毕，资源栈集按请求顺序继续执行排队操作。  注：冲突操作指资源栈集允许多个操作同时执行的条件下，如果超过一个以上的操作包含了同一资源栈实例，此时在该资源栈实例上的多个操作被称为冲突操作。  当资源栈集状态为OPERATION_IN_PROGRESS时，不允许用户通过更新资源栈集（UpdateStackSet）来更新该参数。  * 当前，一个资源栈集下仅允许同时最多存在10个处于运行态的资源栈集操作*
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableParallelOperation' => 'enable_parallel_operation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableParallelOperation  资源栈集（stack_set）是否可以并发地创建多个资源栈集操作。该参数作为资源栈集属性，可以通过创建资源栈集API（CreateStackSet）指定，通过更新资源栈集API（UpdateStackSet）更新该参数。  该参数默认为false，资源栈集只允许以串行的方式生成并执行资源栈集操作。同一时刻，资源栈集中只会存在一个处于运行态，即QUEUE_IN_PROGRESS或OPERATION_IN_PROGRESS状态的资源栈集操作，该操作执行完成后，下一个资源栈集操作才允许被创建。  该参数如果设定为true，资源栈集允许并发地生成多个资源栈集操作，执行非冲突操作，并将冲突操作进行排队处理。当冲突操作执行完毕，资源栈集按请求顺序继续执行排队操作。  注：冲突操作指资源栈集允许多个操作同时执行的条件下，如果超过一个以上的操作包含了同一资源栈实例，此时在该资源栈实例上的多个操作被称为冲突操作。  当资源栈集状态为OPERATION_IN_PROGRESS时，不允许用户通过更新资源栈集（UpdateStackSet）来更新该参数。  * 当前，一个资源栈集下仅允许同时最多存在10个处于运行态的资源栈集操作*
    *
    * @var string[]
    */
    protected static $setters = [
            'enableParallelOperation' => 'setEnableParallelOperation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableParallelOperation  资源栈集（stack_set）是否可以并发地创建多个资源栈集操作。该参数作为资源栈集属性，可以通过创建资源栈集API（CreateStackSet）指定，通过更新资源栈集API（UpdateStackSet）更新该参数。  该参数默认为false，资源栈集只允许以串行的方式生成并执行资源栈集操作。同一时刻，资源栈集中只会存在一个处于运行态，即QUEUE_IN_PROGRESS或OPERATION_IN_PROGRESS状态的资源栈集操作，该操作执行完成后，下一个资源栈集操作才允许被创建。  该参数如果设定为true，资源栈集允许并发地生成多个资源栈集操作，执行非冲突操作，并将冲突操作进行排队处理。当冲突操作执行完毕，资源栈集按请求顺序继续执行排队操作。  注：冲突操作指资源栈集允许多个操作同时执行的条件下，如果超过一个以上的操作包含了同一资源栈实例，此时在该资源栈实例上的多个操作被称为冲突操作。  当资源栈集状态为OPERATION_IN_PROGRESS时，不允许用户通过更新资源栈集（UpdateStackSet）来更新该参数。  * 当前，一个资源栈集下仅允许同时最多存在10个处于运行态的资源栈集操作*
    *
    * @var string[]
    */
    protected static $getters = [
            'enableParallelOperation' => 'getEnableParallelOperation'
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
        $this->container['enableParallelOperation'] = isset($data['enableParallelOperation']) ? $data['enableParallelOperation'] : null;
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
    * Gets enableParallelOperation
    *  资源栈集（stack_set）是否可以并发地创建多个资源栈集操作。该参数作为资源栈集属性，可以通过创建资源栈集API（CreateStackSet）指定，通过更新资源栈集API（UpdateStackSet）更新该参数。  该参数默认为false，资源栈集只允许以串行的方式生成并执行资源栈集操作。同一时刻，资源栈集中只会存在一个处于运行态，即QUEUE_IN_PROGRESS或OPERATION_IN_PROGRESS状态的资源栈集操作，该操作执行完成后，下一个资源栈集操作才允许被创建。  该参数如果设定为true，资源栈集允许并发地生成多个资源栈集操作，执行非冲突操作，并将冲突操作进行排队处理。当冲突操作执行完毕，资源栈集按请求顺序继续执行排队操作。  注：冲突操作指资源栈集允许多个操作同时执行的条件下，如果超过一个以上的操作包含了同一资源栈实例，此时在该资源栈实例上的多个操作被称为冲突操作。  当资源栈集状态为OPERATION_IN_PROGRESS时，不允许用户通过更新资源栈集（UpdateStackSet）来更新该参数。  * 当前，一个资源栈集下仅允许同时最多存在10个处于运行态的资源栈集操作*
    *
    * @return bool|null
    */
    public function getEnableParallelOperation()
    {
        return $this->container['enableParallelOperation'];
    }

    /**
    * Sets enableParallelOperation
    *
    * @param bool|null $enableParallelOperation 资源栈集（stack_set）是否可以并发地创建多个资源栈集操作。该参数作为资源栈集属性，可以通过创建资源栈集API（CreateStackSet）指定，通过更新资源栈集API（UpdateStackSet）更新该参数。  该参数默认为false，资源栈集只允许以串行的方式生成并执行资源栈集操作。同一时刻，资源栈集中只会存在一个处于运行态，即QUEUE_IN_PROGRESS或OPERATION_IN_PROGRESS状态的资源栈集操作，该操作执行完成后，下一个资源栈集操作才允许被创建。  该参数如果设定为true，资源栈集允许并发地生成多个资源栈集操作，执行非冲突操作，并将冲突操作进行排队处理。当冲突操作执行完毕，资源栈集按请求顺序继续执行排队操作。  注：冲突操作指资源栈集允许多个操作同时执行的条件下，如果超过一个以上的操作包含了同一资源栈实例，此时在该资源栈实例上的多个操作被称为冲突操作。  当资源栈集状态为OPERATION_IN_PROGRESS时，不允许用户通过更新资源栈集（UpdateStackSet）来更新该参数。  * 当前，一个资源栈集下仅允许同时最多存在10个处于运行态的资源栈集操作*
    *
    * @return $this
    */
    public function setEnableParallelOperation($enableParallelOperation)
    {
        $this->container['enableParallelOperation'] = $enableParallelOperation;
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

