<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiActionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiActionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  需要进行的操作。 - online：发布 - offline：下线
    * envId  环境的编号，即：API需要发布到哪个环境
    * apiId  API的编号，即：需要进行发布或下线的API的编号
    * remark  对发布动作的简述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'envId' => 'string',
            'apiId' => 'string',
            'remark' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  需要进行的操作。 - online：发布 - offline：下线
    * envId  环境的编号，即：API需要发布到哪个环境
    * apiId  API的编号，即：需要进行发布或下线的API的编号
    * remark  对发布动作的简述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'envId' => null,
        'apiId' => null,
        'remark' => null
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
    * action  需要进行的操作。 - online：发布 - offline：下线
    * envId  环境的编号，即：API需要发布到哪个环境
    * apiId  API的编号，即：需要进行发布或下线的API的编号
    * remark  对发布动作的简述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'envId' => 'env_id',
            'apiId' => 'api_id',
            'remark' => 'remark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  需要进行的操作。 - online：发布 - offline：下线
    * envId  环境的编号，即：API需要发布到哪个环境
    * apiId  API的编号，即：需要进行发布或下线的API的编号
    * remark  对发布动作的简述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'envId' => 'setEnvId',
            'apiId' => 'setApiId',
            'remark' => 'setRemark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  需要进行的操作。 - online：发布 - offline：下线
    * envId  环境的编号，即：API需要发布到哪个环境
    * apiId  API的编号，即：需要进行发布或下线的API的编号
    * remark  对发布动作的简述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'envId' => 'getEnvId',
            'apiId' => 'getApiId',
            'remark' => 'getRemark'
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
    const ACTION_ONLINE = 'online';
    const ACTION_OFFLINE = 'offline';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_ONLINE,
            self::ACTION_OFFLINE,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
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

        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
        }
        if ($this->container['apiId'] === null) {
            $invalidProperties[] = "'apiId' can't be null";
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
    * Gets action
    *  需要进行的操作。 - online：发布 - offline：下线
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
    * @param string $action 需要进行的操作。 - online：发布 - offline：下线
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets envId
    *  环境的编号，即：API需要发布到哪个环境
    *
    * @return string
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string $envId 环境的编号，即：API需要发布到哪个环境
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets apiId
    *  API的编号，即：需要进行发布或下线的API的编号
    *
    * @return string
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string $apiId API的编号，即：需要进行发布或下线的API的编号
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets remark
    *  对发布动作的简述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 对发布动作的简述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
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

