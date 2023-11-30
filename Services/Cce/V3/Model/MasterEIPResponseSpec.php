<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MasterEIPResponseSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MasterEIPResponseSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  绑定动作
    * spec  spec
    * elasticIp  弹性公网IP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'spec' => '\HuaweiCloud\SDK\Cce\V3\Model\MasterEIPResponseSpecSpec',
            'elasticIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  绑定动作
    * spec  spec
    * elasticIp  弹性公网IP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'spec' => null,
        'elasticIp' => null
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
    * action  绑定动作
    * spec  spec
    * elasticIp  弹性公网IP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'spec' => 'spec',
            'elasticIp' => 'elasticIp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  绑定动作
    * spec  spec
    * elasticIp  弹性公网IP
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'spec' => 'setSpec',
            'elasticIp' => 'setElasticIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  绑定动作
    * spec  spec
    * elasticIp  弹性公网IP
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'spec' => 'getSpec',
            'elasticIp' => 'getElasticIp'
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
    const ACTION_BIND = 'bind';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_BIND,
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
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['elasticIp'] = isset($data['elasticIp']) ? $data['elasticIp'] : null;
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
    * Gets action
    *  绑定动作
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
    * @param string|null $action 绑定动作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets spec
    *  spec
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\MasterEIPResponseSpecSpec|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\MasterEIPResponseSpecSpec|null $spec spec
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets elasticIp
    *  弹性公网IP
    *
    * @return string|null
    */
    public function getElasticIp()
    {
        return $this->container['elasticIp'];
    }

    /**
    * Sets elasticIp
    *
    * @param string|null $elasticIp 弹性公网IP
    *
    * @return $this
    */
    public function setElasticIp($elasticIp)
    {
        $this->container['elasticIp'] = $elasticIp;
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

