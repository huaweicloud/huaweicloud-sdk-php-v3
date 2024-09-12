<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateOrchestrationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateOrchestrationRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * orchestrationId  编排规则编号
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'orchestrationId' => 'string',
            'body' => '\HuaweiCloud\SDK\Apig\V2\Model\OrchestrationCreate'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * orchestrationId  编排规则编号
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'orchestrationId' => null,
        'body' => null
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
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * orchestrationId  编排规则编号
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'orchestrationId' => 'orchestration_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * orchestrationId  编排规则编号
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'orchestrationId' => 'setOrchestrationId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * orchestrationId  编排规则编号
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'orchestrationId' => 'getOrchestrationId',
            'body' => 'getBody'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['orchestrationId'] = isset($data['orchestrationId']) ? $data['orchestrationId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['orchestrationId'] === null) {
            $invalidProperties[] = "'orchestrationId' can't be null";
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
    * Gets instanceId
    *  实例ID，在API网关控制台的“实例信息”中获取。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID，在API网关控制台的“实例信息”中获取。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets orchestrationId
    *  编排规则编号
    *
    * @return string
    */
    public function getOrchestrationId()
    {
        return $this->container['orchestrationId'];
    }

    /**
    * Sets orchestrationId
    *
    * @param string $orchestrationId 编排规则编号
    *
    * @return $this
    */
    public function setOrchestrationId($orchestrationId)
    {
        $this->container['orchestrationId'] = $orchestrationId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\OrchestrationCreate|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\OrchestrationCreate|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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
