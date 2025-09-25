<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulAffectImageAppsResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulAffectImageAppsResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  软件名称
    * paths  列表
    * rule  规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'paths' => '\HuaweiCloud\SDK\Hss\V5\Model\VulAffectImageAppPathResponseInfo[]',
            'rule' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  软件名称
    * paths  列表
    * rule  规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'paths' => null,
        'rule' => null
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
    * appName  软件名称
    * paths  列表
    * rule  规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'app_name',
            'paths' => 'paths',
            'rule' => 'rule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  软件名称
    * paths  列表
    * rule  规则
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'paths' => 'setPaths',
            'rule' => 'setRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  软件名称
    * paths  列表
    * rule  规则
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'paths' => 'getPaths',
            'rule' => 'getRule'
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
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['paths'] = isset($data['paths']) ? $data['paths'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
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
    * Gets appName
    *  软件名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 软件名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets paths
    *  列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulAffectImageAppPathResponseInfo[]|null
    */
    public function getPaths()
    {
        return $this->container['paths'];
    }

    /**
    * Sets paths
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulAffectImageAppPathResponseInfo[]|null $paths 列表
    *
    * @return $this
    */
    public function setPaths($paths)
    {
        $this->container['paths'] = $paths;
        return $this;
    }

    /**
    * Gets rule
    *  规则
    *
    * @return string|null
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param string|null $rule 规则
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
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

