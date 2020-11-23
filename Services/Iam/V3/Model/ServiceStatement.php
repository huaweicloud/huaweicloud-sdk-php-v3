<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceStatement implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceStatement';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string[]',
            'effect' => 'string',
            'condition' => 'map[string,map[string,\HuaweiCloud\SDK\Iam\V3\Model\array]]',
            'resource' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'effect' => null,
        'condition' => null,
        'resource' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'Action',
            'effect' => 'Effect',
            'condition' => 'Condition',
            'resource' => 'Resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'effect' => 'setEffect',
            'condition' => 'setCondition',
            'resource' => 'setResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'effect' => 'getEffect',
            'condition' => 'getCondition',
            'resource' => 'getResource'
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
    const EFFECT_ALLOW = 'Allow';
    const EFFECT_DENY = 'Deny';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEffectAllowableValues()
    {
        return [
            self::EFFECT_ALLOW,
            self::EFFECT_DENY,
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
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
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
        if ($this->container['effect'] === null) {
            $invalidProperties[] = "'effect' can't be null";
        }
            $allowedValues = $this->getEffectAllowableValues();
                if (!is_null($this->container['effect']) && !in_array($this->container['effect'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'effect', must be one of '%s'",
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
    * Gets action
    *
    * @return string[]
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string[] $action 授权项，指对资源的具体操作权限，不超过100个。   > - 格式为：服务名:资源类型:操作，例：vpc:ports:create。   > - 服务名为产品名称，例如ecs、evs和vpc等，服务名仅支持小写。 资源类型和操作没有大小写，要求支持通配符号*，无需罗列全部授权项。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets effect
    *
    * @return string
    */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
    * Sets effect
    *
    * @param string $effect 作用。包含两种：允许（Allow）和拒绝（Deny），既有Allow又有Deny的授权语句时，遵循Deny优先的原则。
    *
    * @return $this
    */
    public function setEffect($effect)
    {
            $allowedValues = $this->getEffectAllowableValues();
                if (!in_array($effect, $allowedValues, true)) {
                    throw new \InvalidArgumentException(
                        sprintf(
                            "Invalid value for 'effect', must be one of '%s'",
                            implode("', '", $allowedValues)
                        )
                    );
                }
        $this->container['effect'] = $effect;
        return $this;
    }

    /**
    * Gets condition
    *
    * @return map[string,map[string,\HuaweiCloud\SDK\Iam\V3\Model\array]]|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param map[string,map[string,\HuaweiCloud\SDK\Iam\V3\Model\array]]|null $condition 限制条件。不超过10个。
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets resource
    *
    * @return string[]|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string[]|null $resource 资源。数组长度不超过10，每个字符串长度不超过128，规则如下：   > - 可填 * 的五段式：<service-name>:<region>:<account-id>:<resource-type>:<resource-path>，例：\"obs:*:*:bucket:*\"。   > - region字段为*或用户可访问的region。service必须存在且resource属于对应service。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
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

