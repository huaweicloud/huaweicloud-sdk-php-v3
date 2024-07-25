<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * os  os
    * imageId  imageId
    * login  login
    * lifeCycle  lifeCycle
    * runtimeConfig  runtimeConfig
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'os' => 'string',
            'imageId' => 'string',
            'login' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateLogin',
            'lifeCycle' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateLifeCycle',
            'runtimeConfig' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateRuntimeConfig',
            'extendParam' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateExtendParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * os  os
    * imageId  imageId
    * login  login
    * lifeCycle  lifeCycle
    * runtimeConfig  runtimeConfig
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'os' => null,
        'imageId' => null,
        'login' => null,
        'lifeCycle' => null,
        'runtimeConfig' => null,
        'extendParam' => null
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
    * os  os
    * imageId  imageId
    * login  login
    * lifeCycle  lifeCycle
    * runtimeConfig  runtimeConfig
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'os' => 'os',
            'imageId' => 'imageID',
            'login' => 'login',
            'lifeCycle' => 'lifeCycle',
            'runtimeConfig' => 'runtimeConfig',
            'extendParam' => 'extendParam'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * os  os
    * imageId  imageId
    * login  login
    * lifeCycle  lifeCycle
    * runtimeConfig  runtimeConfig
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $setters = [
            'os' => 'setOs',
            'imageId' => 'setImageId',
            'login' => 'setLogin',
            'lifeCycle' => 'setLifeCycle',
            'runtimeConfig' => 'setRuntimeConfig',
            'extendParam' => 'setExtendParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * os  os
    * imageId  imageId
    * login  login
    * lifeCycle  lifeCycle
    * runtimeConfig  runtimeConfig
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $getters = [
            'os' => 'getOs',
            'imageId' => 'getImageId',
            'login' => 'getLogin',
            'lifeCycle' => 'getLifeCycle',
            'runtimeConfig' => 'getRuntimeConfig',
            'extendParam' => 'getExtendParam'
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
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['lifeCycle'] = isset($data['lifeCycle']) ? $data['lifeCycle'] : null;
        $this->container['runtimeConfig'] = isset($data['runtimeConfig']) ? $data['runtimeConfig'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
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
    * Gets os
    *  os
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os os
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets imageId
    *  imageId
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId imageId
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets login
    *  login
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateLogin|null
    */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
    * Sets login
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateLogin|null $login login
    *
    * @return $this
    */
    public function setLogin($login)
    {
        $this->container['login'] = $login;
        return $this;
    }

    /**
    * Gets lifeCycle
    *  lifeCycle
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateLifeCycle|null
    */
    public function getLifeCycle()
    {
        return $this->container['lifeCycle'];
    }

    /**
    * Sets lifeCycle
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateLifeCycle|null $lifeCycle lifeCycle
    *
    * @return $this
    */
    public function setLifeCycle($lifeCycle)
    {
        $this->container['lifeCycle'] = $lifeCycle;
        return $this;
    }

    /**
    * Gets runtimeConfig
    *  runtimeConfig
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateRuntimeConfig|null
    */
    public function getRuntimeConfig()
    {
        return $this->container['runtimeConfig'];
    }

    /**
    * Sets runtimeConfig
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateRuntimeConfig|null $runtimeConfig runtimeConfig
    *
    * @return $this
    */
    public function setRuntimeConfig($runtimeConfig)
    {
        $this->container['runtimeConfig'] = $runtimeConfig;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateExtendParam|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateExtendParam|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
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

