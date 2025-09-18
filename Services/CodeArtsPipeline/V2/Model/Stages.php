<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Stages implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Stages';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  阶段执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * status  阶段执行状态。取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    * name  阶段名字
    * parameters  阶段运行参数
    * order  阶段顺序
    * dslMethod  阶段类型
    * displayName  阶段显示名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'string',
            'status' => 'string',
            'name' => 'string',
            'parameters' => 'object',
            'order' => 'int',
            'dslMethod' => 'string',
            'displayName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  阶段执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * status  阶段执行状态。取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    * name  阶段名字
    * parameters  阶段运行参数
    * order  阶段顺序
    * dslMethod  阶段类型
    * displayName  阶段显示名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'status' => null,
        'name' => null,
        'parameters' => null,
        'order' => 'int32',
        'dslMethod' => null,
        'displayName' => null
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
    * result  阶段执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * status  阶段执行状态。取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    * name  阶段名字
    * parameters  阶段运行参数
    * order  阶段顺序
    * dslMethod  阶段类型
    * displayName  阶段显示名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'status' => 'status',
            'name' => 'name',
            'parameters' => 'parameters',
            'order' => 'order',
            'dslMethod' => 'dsl_method',
            'displayName' => 'display_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  阶段执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * status  阶段执行状态。取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    * name  阶段名字
    * parameters  阶段运行参数
    * order  阶段顺序
    * dslMethod  阶段类型
    * displayName  阶段显示名称
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'status' => 'setStatus',
            'name' => 'setName',
            'parameters' => 'setParameters',
            'order' => 'setOrder',
            'dslMethod' => 'setDslMethod',
            'displayName' => 'setDisplayName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  阶段执行结果。取值及含义：success：成功；error：失败；aborted：终止
    * status  阶段执行状态。取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    * name  阶段名字
    * parameters  阶段运行参数
    * order  阶段顺序
    * dslMethod  阶段类型
    * displayName  阶段显示名称
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'status' => 'getStatus',
            'name' => 'getName',
            'parameters' => 'getParameters',
            'order' => 'getOrder',
            'dslMethod' => 'getDslMethod',
            'displayName' => 'getDisplayName'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['dslMethod'] = isset($data['dslMethod']) ? $data['dslMethod'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['parameters'] === null) {
            $invalidProperties[] = "'parameters' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['dslMethod'] === null) {
            $invalidProperties[] = "'dslMethod' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
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
    * Gets result
    *  阶段执行结果。取值及含义：success：成功；error：失败；aborted：终止
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 阶段执行结果。取值及含义：success：成功；error：失败；aborted：终止
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets status
    *  阶段执行状态。取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 阶段执行状态。取值和含义:waiting:等待;running:执行中;verifying:待审核;suspending:挂起;completed:完成
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  阶段名字
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 阶段名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets parameters
    *  阶段运行参数
    *
    * @return object
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param object $parameters 阶段运行参数
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets order
    *  阶段顺序
    *
    * @return int
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param int $order 阶段顺序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets dslMethod
    *  阶段类型
    *
    * @return string
    */
    public function getDslMethod()
    {
        return $this->container['dslMethod'];
    }

    /**
    * Sets dslMethod
    *
    * @param string $dslMethod 阶段类型
    *
    * @return $this
    */
    public function setDslMethod($dslMethod)
    {
        $this->container['dslMethod'] = $dslMethod;
        return $this;
    }

    /**
    * Gets displayName
    *  阶段显示名称
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName 阶段显示名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
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

