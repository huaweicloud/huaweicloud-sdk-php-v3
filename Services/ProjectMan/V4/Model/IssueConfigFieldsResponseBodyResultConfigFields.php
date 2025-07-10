<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueConfigFieldsResponseBodyResultConfigFields implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueConfigFieldsResponseBody_result_config_fields';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * displayName  查询结果
    * show  是否显示
    * showEditable  是否可编辑
    * optional  是否必填
    * controlled  是否受控
    * issueRoles  可编辑的角色
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'displayName' => 'string',
            'show' => 'bool',
            'showEditable' => 'bool',
            'optional' => 'bool',
            'controlled' => 'bool',
            'issueRoles' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * displayName  查询结果
    * show  是否显示
    * showEditable  是否可编辑
    * optional  是否必填
    * controlled  是否受控
    * issueRoles  可编辑的角色
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'displayName' => null,
        'show' => null,
        'showEditable' => null,
        'optional' => null,
        'controlled' => null,
        'issueRoles' => null
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
    * displayName  查询结果
    * show  是否显示
    * showEditable  是否可编辑
    * optional  是否必填
    * controlled  是否受控
    * issueRoles  可编辑的角色
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'displayName' => 'display_name',
            'show' => 'show',
            'showEditable' => 'show_editable',
            'optional' => 'optional',
            'controlled' => 'controlled',
            'issueRoles' => 'issue_roles'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * displayName  查询结果
    * show  是否显示
    * showEditable  是否可编辑
    * optional  是否必填
    * controlled  是否受控
    * issueRoles  可编辑的角色
    *
    * @var string[]
    */
    protected static $setters = [
            'displayName' => 'setDisplayName',
            'show' => 'setShow',
            'showEditable' => 'setShowEditable',
            'optional' => 'setOptional',
            'controlled' => 'setControlled',
            'issueRoles' => 'setIssueRoles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * displayName  查询结果
    * show  是否显示
    * showEditable  是否可编辑
    * optional  是否必填
    * controlled  是否受控
    * issueRoles  可编辑的角色
    *
    * @var string[]
    */
    protected static $getters = [
            'displayName' => 'getDisplayName',
            'show' => 'getShow',
            'showEditable' => 'getShowEditable',
            'optional' => 'getOptional',
            'controlled' => 'getControlled',
            'issueRoles' => 'getIssueRoles'
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['show'] = isset($data['show']) ? $data['show'] : null;
        $this->container['showEditable'] = isset($data['showEditable']) ? $data['showEditable'] : null;
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
        $this->container['controlled'] = isset($data['controlled']) ? $data['controlled'] : null;
        $this->container['issueRoles'] = isset($data['issueRoles']) ? $data['issueRoles'] : null;
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
    * Gets displayName
    *  查询结果
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 查询结果
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets show
    *  是否显示
    *
    * @return bool|null
    */
    public function getShow()
    {
        return $this->container['show'];
    }

    /**
    * Sets show
    *
    * @param bool|null $show 是否显示
    *
    * @return $this
    */
    public function setShow($show)
    {
        $this->container['show'] = $show;
        return $this;
    }

    /**
    * Gets showEditable
    *  是否可编辑
    *
    * @return bool|null
    */
    public function getShowEditable()
    {
        return $this->container['showEditable'];
    }

    /**
    * Sets showEditable
    *
    * @param bool|null $showEditable 是否可编辑
    *
    * @return $this
    */
    public function setShowEditable($showEditable)
    {
        $this->container['showEditable'] = $showEditable;
        return $this;
    }

    /**
    * Gets optional
    *  是否必填
    *
    * @return bool|null
    */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
    * Sets optional
    *
    * @param bool|null $optional 是否必填
    *
    * @return $this
    */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;
        return $this;
    }

    /**
    * Gets controlled
    *  是否受控
    *
    * @return bool|null
    */
    public function getControlled()
    {
        return $this->container['controlled'];
    }

    /**
    * Sets controlled
    *
    * @param bool|null $controlled 是否受控
    *
    * @return $this
    */
    public function setControlled($controlled)
    {
        $this->container['controlled'] = $controlled;
        return $this;
    }

    /**
    * Gets issueRoles
    *  可编辑的角色
    *
    * @return string[]|null
    */
    public function getIssueRoles()
    {
        return $this->container['issueRoles'];
    }

    /**
    * Sets issueRoles
    *
    * @param string[]|null $issueRoles 可编辑的角色
    *
    * @return $this
    */
    public function setIssueRoles($issueRoles)
    {
        $this->container['issueRoles'] = $issueRoles;
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

