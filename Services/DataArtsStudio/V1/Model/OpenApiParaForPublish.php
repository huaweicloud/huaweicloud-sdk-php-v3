<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenApiParaForPublish implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenApiParaForPublish';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiId  api编号
    * action  操作类型, 包括发布/下线/停用/恢复
    * time  截止时间。仅定期执行需要此参数，默认服务器当前时间三天后。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiId' => 'string',
            'action' => 'string',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiId  api编号
    * action  操作类型, 包括发布/下线/停用/恢复
    * time  截止时间。仅定期执行需要此参数，默认服务器当前时间三天后。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiId' => null,
        'action' => null,
        'time' => null
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
    * apiId  api编号
    * action  操作类型, 包括发布/下线/停用/恢复
    * time  截止时间。仅定期执行需要此参数，默认服务器当前时间三天后。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiId' => 'api_id',
            'action' => 'action',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiId  api编号
    * action  操作类型, 包括发布/下线/停用/恢复
    * time  截止时间。仅定期执行需要此参数，默认服务器当前时间三天后。
    *
    * @var string[]
    */
    protected static $setters = [
            'apiId' => 'setApiId',
            'action' => 'setAction',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiId  api编号
    * action  操作类型, 包括发布/下线/停用/恢复
    * time  截止时间。仅定期执行需要此参数，默认服务器当前时间三天后。
    *
    * @var string[]
    */
    protected static $getters = [
            'apiId' => 'getApiId',
            'action' => 'getAction',
            'time' => 'getTime'
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
    const ACTION_PUBLISH = 'PUBLISH';
    const ACTION_UNPUBLISH = 'UNPUBLISH';
    const ACTION_STOP = 'STOP';
    const ACTION_RECOVER = 'RECOVER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_PUBLISH,
            self::ACTION_UNPUBLISH,
            self::ACTION_STOP,
            self::ACTION_RECOVER,
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
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
    * Gets apiId
    *  api编号
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId api编号
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets action
    *  操作类型, 包括发布/下线/停用/恢复
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 操作类型, 包括发布/下线/停用/恢复
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets time
    *  截止时间。仅定期执行需要此参数，默认服务器当前时间三天后。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 截止时间。仅定期执行需要此参数，默认服务器当前时间三天后。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

