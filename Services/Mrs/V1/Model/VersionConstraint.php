<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionConstraint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionConstraint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * other  其他限制
    * nodeConstraint  nodeConstraint
    * safeModeKerberosExcludeComponents  安全模式kerberos排除组件列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'other' => 'map[string,object]',
            'nodeConstraint' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraints',
            'safeModeKerberosExcludeComponents' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * other  其他限制
    * nodeConstraint  nodeConstraint
    * safeModeKerberosExcludeComponents  安全模式kerberos排除组件列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'other' => null,
        'nodeConstraint' => null,
        'safeModeKerberosExcludeComponents' => null
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
    * other  其他限制
    * nodeConstraint  nodeConstraint
    * safeModeKerberosExcludeComponents  安全模式kerberos排除组件列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'other' => 'other',
            'nodeConstraint' => 'node_constraint',
            'safeModeKerberosExcludeComponents' => 'safe_mode_kerberos_exclude_components'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * other  其他限制
    * nodeConstraint  nodeConstraint
    * safeModeKerberosExcludeComponents  安全模式kerberos排除组件列表
    *
    * @var string[]
    */
    protected static $setters = [
            'other' => 'setOther',
            'nodeConstraint' => 'setNodeConstraint',
            'safeModeKerberosExcludeComponents' => 'setSafeModeKerberosExcludeComponents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * other  其他限制
    * nodeConstraint  nodeConstraint
    * safeModeKerberosExcludeComponents  安全模式kerberos排除组件列表
    *
    * @var string[]
    */
    protected static $getters = [
            'other' => 'getOther',
            'nodeConstraint' => 'getNodeConstraint',
            'safeModeKerberosExcludeComponents' => 'getSafeModeKerberosExcludeComponents'
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
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
        $this->container['nodeConstraint'] = isset($data['nodeConstraint']) ? $data['nodeConstraint'] : null;
        $this->container['safeModeKerberosExcludeComponents'] = isset($data['safeModeKerberosExcludeComponents']) ? $data['safeModeKerberosExcludeComponents'] : null;
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
    * Gets other
    *  其他限制
    *
    * @return map[string,object]|null
    */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
    * Sets other
    *
    * @param map[string,object]|null $other 其他限制
    *
    * @return $this
    */
    public function setOther($other)
    {
        $this->container['other'] = $other;
        return $this;
    }

    /**
    * Gets nodeConstraint
    *  nodeConstraint
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraints|null
    */
    public function getNodeConstraint()
    {
        return $this->container['nodeConstraint'];
    }

    /**
    * Sets nodeConstraint
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeConstraints|null $nodeConstraint nodeConstraint
    *
    * @return $this
    */
    public function setNodeConstraint($nodeConstraint)
    {
        $this->container['nodeConstraint'] = $nodeConstraint;
        return $this;
    }

    /**
    * Gets safeModeKerberosExcludeComponents
    *  安全模式kerberos排除组件列表
    *
    * @return string[]|null
    */
    public function getSafeModeKerberosExcludeComponents()
    {
        return $this->container['safeModeKerberosExcludeComponents'];
    }

    /**
    * Sets safeModeKerberosExcludeComponents
    *
    * @param string[]|null $safeModeKerberosExcludeComponents 安全模式kerberos排除组件列表
    *
    * @return $this
    */
    public function setSafeModeKerberosExcludeComponents($safeModeKerberosExcludeComponents)
    {
        $this->container['safeModeKerberosExcludeComponents'] = $safeModeKerberosExcludeComponents;
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

