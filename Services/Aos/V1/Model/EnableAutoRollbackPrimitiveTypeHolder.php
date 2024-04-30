<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnableAutoRollbackPrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnableAutoRollbackPrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，如果该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableAutoRollback' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，如果该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableAutoRollback' => null
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
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，如果该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableAutoRollback' => 'enable_auto_rollback'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，如果该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    *
    * @var string[]
    */
    protected static $setters = [
            'enableAutoRollback' => 'setEnableAutoRollback'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableAutoRollback  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，如果该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    *
    * @var string[]
    */
    protected static $getters = [
            'enableAutoRollback' => 'getEnableAutoRollback'
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
        $this->container['enableAutoRollback'] = isset($data['enableAutoRollback']) ? $data['enableAutoRollback'] : null;
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
    * Gets enableAutoRollback
    *  自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，如果该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    *
    * @return bool|null
    */
    public function getEnableAutoRollback()
    {
        return $this->container['enableAutoRollback'];
    }

    /**
    * Sets enableAutoRollback
    *
    * @param bool|null $enableAutoRollback 自动回滚的标识位，如果不传默认为false，即默认不开启资源栈自动回滚（自动回滚开启后，如果部署失败，则会自动回滚，并返回上一个稳定状态）  *在UpdateStack API中，如果该参数未在RequestBody中给予，则不会对资源栈的自动回滚属性进行更新* *该属性与使用模板导入资源功能互斥，如果堆栈的自动回滚设置为true，则不允许部署包含导入资源的模板*
    *
    * @return $this
    */
    public function setEnableAutoRollback($enableAutoRollback)
    {
        $this->container['enableAutoRollback'] = $enableAutoRollback;
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

