<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchRestartOrDeleteInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchRestartOrDeleteInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instances  实例的ID列表。
    * action  对实例的操作：restart、delete
    * allFailure  是否批量删除创建失败的实例。  当参数值为“rabbitmq”时，删除租户所有创建失败的实例，此时请求参数instances可为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instances' => 'string[]',
            'action' => 'string',
            'allFailure' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instances  实例的ID列表。
    * action  对实例的操作：restart、delete
    * allFailure  是否批量删除创建失败的实例。  当参数值为“rabbitmq”时，删除租户所有创建失败的实例，此时请求参数instances可为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instances' => null,
        'action' => null,
        'allFailure' => null
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
    * instances  实例的ID列表。
    * action  对实例的操作：restart、delete
    * allFailure  是否批量删除创建失败的实例。  当参数值为“rabbitmq”时，删除租户所有创建失败的实例，此时请求参数instances可为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instances' => 'instances',
            'action' => 'action',
            'allFailure' => 'all_failure'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instances  实例的ID列表。
    * action  对实例的操作：restart、delete
    * allFailure  是否批量删除创建失败的实例。  当参数值为“rabbitmq”时，删除租户所有创建失败的实例，此时请求参数instances可为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'instances' => 'setInstances',
            'action' => 'setAction',
            'allFailure' => 'setAllFailure'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instances  实例的ID列表。
    * action  对实例的操作：restart、delete
    * allFailure  是否批量删除创建失败的实例。  当参数值为“rabbitmq”时，删除租户所有创建失败的实例，此时请求参数instances可为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'instances' => 'getInstances',
            'action' => 'getAction',
            'allFailure' => 'getAllFailure'
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
    const ACTION_RESTART = 'restart';
    const ACTION_DELETE = 'delete';
    const ALL_FAILURE_RABBITMQ = 'rabbitmq';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_RESTART,
            self::ACTION_DELETE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAllFailureAllowableValues()
    {
        return [
            self::ALL_FAILURE_RABBITMQ,
        ];
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
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['allFailure'] = isset($data['allFailure']) ? $data['allFailure'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAllFailureAllowableValues();
                if (!is_null($this->container['allFailure']) && !in_array($this->container['allFailure'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'allFailure', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets instances
    *  实例的ID列表。
    *
    * @return string[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param string[]|null $instances 实例的ID列表。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets action
    *  对实例的操作：restart、delete
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 对实例的操作：restart、delete
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets allFailure
    *  是否批量删除创建失败的实例。  当参数值为“rabbitmq”时，删除租户所有创建失败的实例，此时请求参数instances可为空。
    *
    * @return string|null
    */
    public function getAllFailure()
    {
        return $this->container['allFailure'];
    }

    /**
    * Sets allFailure
    *
    * @param string|null $allFailure 是否批量删除创建失败的实例。  当参数值为“rabbitmq”时，删除租户所有创建失败的实例，此时请求参数instances可为空。
    *
    * @return $this
    */
    public function setAllFailure($allFailure)
    {
        $this->container['allFailure'] = $allFailure;
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

