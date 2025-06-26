<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SignScopeRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SignScopeRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    * repoScopeMode  repository选择方式。可选regular、selection，前端显示需要，api调用时可选regular
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tagSelectors' => '\HuaweiCloud\SDK\Swr\V2\Model\SignRuleSelector[]',
            'scopeSelectors' => 'map[string,\HuaweiCloud\SDK\Swr\V2\Model\SignRuleSelector[]]',
            'repoScopeMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    * repoScopeMode  repository选择方式。可选regular、selection，前端显示需要，api调用时可选regular
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tagSelectors' => null,
        'scopeSelectors' => null,
        'repoScopeMode' => null
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
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    * repoScopeMode  repository选择方式。可选regular、selection，前端显示需要，api调用时可选regular
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tagSelectors' => 'tag_selectors',
            'scopeSelectors' => 'scope_selectors',
            'repoScopeMode' => 'repo_scope_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    * repoScopeMode  repository选择方式。可选regular、selection，前端显示需要，api调用时可选regular
    *
    * @var string[]
    */
    protected static $setters = [
            'tagSelectors' => 'setTagSelectors',
            'scopeSelectors' => 'setScopeSelectors',
            'repoScopeMode' => 'setRepoScopeMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    * repoScopeMode  repository选择方式。可选regular、selection，前端显示需要，api调用时可选regular
    *
    * @var string[]
    */
    protected static $getters = [
            'tagSelectors' => 'getTagSelectors',
            'scopeSelectors' => 'getScopeSelectors',
            'repoScopeMode' => 'getRepoScopeMode'
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
        $this->container['tagSelectors'] = isset($data['tagSelectors']) ? $data['tagSelectors'] : null;
        $this->container['scopeSelectors'] = isset($data['scopeSelectors']) ? $data['scopeSelectors'] : null;
        $this->container['repoScopeMode'] = isset($data['repoScopeMode']) ? $data['repoScopeMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tagSelectors'] === null) {
            $invalidProperties[] = "'tagSelectors' can't be null";
        }
        if ($this->container['scopeSelectors'] === null) {
            $invalidProperties[] = "'scopeSelectors' can't be null";
        }
        if ($this->container['repoScopeMode'] === null) {
            $invalidProperties[] = "'repoScopeMode' can't be null";
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
    * Gets tagSelectors
    *  制品版本选择器，目前只支持长度为1
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\SignRuleSelector[]
    */
    public function getTagSelectors()
    {
        return $this->container['tagSelectors'];
    }

    /**
    * Sets tagSelectors
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\SignRuleSelector[] $tagSelectors 制品版本选择器，目前只支持长度为1
    *
    * @return $this
    */
    public function setTagSelectors($tagSelectors)
    {
        $this->container['tagSelectors'] = $tagSelectors;
        return $this;
    }

    /**
    * Gets scopeSelectors
    *  制品仓库选择器，目前只支持repository且长度为1
    *
    * @return map[string,\HuaweiCloud\SDK\Swr\V2\Model\SignRuleSelector[]]
    */
    public function getScopeSelectors()
    {
        return $this->container['scopeSelectors'];
    }

    /**
    * Sets scopeSelectors
    *
    * @param map[string,\HuaweiCloud\SDK\Swr\V2\Model\SignRuleSelector[]] $scopeSelectors 制品仓库选择器，目前只支持repository且长度为1
    *
    * @return $this
    */
    public function setScopeSelectors($scopeSelectors)
    {
        $this->container['scopeSelectors'] = $scopeSelectors;
        return $this;
    }

    /**
    * Gets repoScopeMode
    *  repository选择方式。可选regular、selection，前端显示需要，api调用时可选regular
    *
    * @return string
    */
    public function getRepoScopeMode()
    {
        return $this->container['repoScopeMode'];
    }

    /**
    * Sets repoScopeMode
    *
    * @param string $repoScopeMode repository选择方式。可选regular、selection，前端显示需要，api调用时可选regular
    *
    * @return $this
    */
    public function setRepoScopeMode($repoScopeMode)
    {
        $this->container['repoScopeMode'] = $repoScopeMode;
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

