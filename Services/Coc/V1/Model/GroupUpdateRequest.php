<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupUpdateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  分组名称。
    * syncMode  资源关联方式，MANUAL表示手动，AUTO表示智能。
    * syncRules  智能关联规则。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'syncMode' => 'string',
            'syncRules' => '\HuaweiCloud\SDK\Coc\V1\Model\GroupUpdateRequestSyncRules[]',
            'relationConfigurations' => '\HuaweiCloud\SDK\Coc\V1\Model\GroupRelationConfiguration[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  分组名称。
    * syncMode  资源关联方式，MANUAL表示手动，AUTO表示智能。
    * syncRules  智能关联规则。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'syncMode' => null,
        'syncRules' => null,
        'relationConfigurations' => null
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
    * name  分组名称。
    * syncMode  资源关联方式，MANUAL表示手动，AUTO表示智能。
    * syncRules  智能关联规则。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'syncMode' => 'sync_mode',
            'syncRules' => 'sync_rules',
            'relationConfigurations' => 'relation_configurations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  分组名称。
    * syncMode  资源关联方式，MANUAL表示手动，AUTO表示智能。
    * syncRules  智能关联规则。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'syncMode' => 'setSyncMode',
            'syncRules' => 'setSyncRules',
            'relationConfigurations' => 'setRelationConfigurations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  分组名称。
    * syncMode  资源关联方式，MANUAL表示手动，AUTO表示智能。
    * syncRules  智能关联规则。
    * relationConfigurations  分组配置信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'syncMode' => 'getSyncMode',
            'syncRules' => 'getSyncRules',
            'relationConfigurations' => 'getRelationConfigurations'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['syncMode'] = isset($data['syncMode']) ? $data['syncMode'] : null;
        $this->container['syncRules'] = isset($data['syncRules']) ? $data['syncRules'] : null;
        $this->container['relationConfigurations'] = isset($data['relationConfigurations']) ? $data['relationConfigurations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 50)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['syncMode'] === null) {
            $invalidProperties[] = "'syncMode' can't be null";
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
    * Gets name
    *  分组名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 分组名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets syncMode
    *  资源关联方式，MANUAL表示手动，AUTO表示智能。
    *
    * @return string
    */
    public function getSyncMode()
    {
        return $this->container['syncMode'];
    }

    /**
    * Sets syncMode
    *
    * @param string $syncMode 资源关联方式，MANUAL表示手动，AUTO表示智能。
    *
    * @return $this
    */
    public function setSyncMode($syncMode)
    {
        $this->container['syncMode'] = $syncMode;
        return $this;
    }

    /**
    * Gets syncRules
    *  智能关联规则。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\GroupUpdateRequestSyncRules[]|null
    */
    public function getSyncRules()
    {
        return $this->container['syncRules'];
    }

    /**
    * Sets syncRules
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\GroupUpdateRequestSyncRules[]|null $syncRules 智能关联规则。
    *
    * @return $this
    */
    public function setSyncRules($syncRules)
    {
        $this->container['syncRules'] = $syncRules;
        return $this;
    }

    /**
    * Gets relationConfigurations
    *  分组配置信息。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\GroupRelationConfiguration[]|null
    */
    public function getRelationConfigurations()
    {
        return $this->container['relationConfigurations'];
    }

    /**
    * Sets relationConfigurations
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\GroupRelationConfiguration[]|null $relationConfigurations 分组配置信息。
    *
    * @return $this
    */
    public function setRelationConfigurations($relationConfigurations)
    {
        $this->container['relationConfigurations'] = $relationConfigurations;
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

