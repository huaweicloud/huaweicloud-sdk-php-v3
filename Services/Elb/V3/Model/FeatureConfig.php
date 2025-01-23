<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FeatureConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FeatureConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数解释：配置的ID。
    * createdAt  参数解释：创建时间。
    * updatedAt  参数解释：更新时间。
    * service  参数解释：所属服务，固定ELB。
    * tenantId  参数解释：租户ID，含义同project_id。
    * feature  参数解释：特性名称。
    * switch  参数解释：特性配置启用开关，表示当前配置是否生效。  取值范围： - true：特性配置已生效。 - false: 特性配置未生效。
    * type  参数解释：特性配置值(value字段)的类型，如：INT，表示整型。
    * value  参数解释：特性配置值。如开关类型的特性配置取值true/false，表示特性开启关闭；配额类型的特性配置取值整数，表示限制配额。
    * description  参数解释：特性配置描述。
    * caller  参数解释：配置创建者。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'service' => 'string',
            'tenantId' => 'string',
            'feature' => 'string',
            'switch' => 'bool',
            'type' => 'string',
            'value' => 'string',
            'description' => 'string',
            'caller' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数解释：配置的ID。
    * createdAt  参数解释：创建时间。
    * updatedAt  参数解释：更新时间。
    * service  参数解释：所属服务，固定ELB。
    * tenantId  参数解释：租户ID，含义同project_id。
    * feature  参数解释：特性名称。
    * switch  参数解释：特性配置启用开关，表示当前配置是否生效。  取值范围： - true：特性配置已生效。 - false: 特性配置未生效。
    * type  参数解释：特性配置值(value字段)的类型，如：INT，表示整型。
    * value  参数解释：特性配置值。如开关类型的特性配置取值true/false，表示特性开启关闭；配额类型的特性配置取值整数，表示限制配额。
    * description  参数解释：特性配置描述。
    * caller  参数解释：配置创建者。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'service' => null,
        'tenantId' => null,
        'feature' => null,
        'switch' => null,
        'type' => null,
        'value' => null,
        'description' => null,
        'caller' => null
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
    * id  参数解释：配置的ID。
    * createdAt  参数解释：创建时间。
    * updatedAt  参数解释：更新时间。
    * service  参数解释：所属服务，固定ELB。
    * tenantId  参数解释：租户ID，含义同project_id。
    * feature  参数解释：特性名称。
    * switch  参数解释：特性配置启用开关，表示当前配置是否生效。  取值范围： - true：特性配置已生效。 - false: 特性配置未生效。
    * type  参数解释：特性配置值(value字段)的类型，如：INT，表示整型。
    * value  参数解释：特性配置值。如开关类型的特性配置取值true/false，表示特性开启关闭；配额类型的特性配置取值整数，表示限制配额。
    * description  参数解释：特性配置描述。
    * caller  参数解释：配置创建者。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'service' => 'service',
            'tenantId' => 'tenant_id',
            'feature' => 'feature',
            'switch' => 'switch',
            'type' => 'type',
            'value' => 'value',
            'description' => 'description',
            'caller' => 'caller'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数解释：配置的ID。
    * createdAt  参数解释：创建时间。
    * updatedAt  参数解释：更新时间。
    * service  参数解释：所属服务，固定ELB。
    * tenantId  参数解释：租户ID，含义同project_id。
    * feature  参数解释：特性名称。
    * switch  参数解释：特性配置启用开关，表示当前配置是否生效。  取值范围： - true：特性配置已生效。 - false: 特性配置未生效。
    * type  参数解释：特性配置值(value字段)的类型，如：INT，表示整型。
    * value  参数解释：特性配置值。如开关类型的特性配置取值true/false，表示特性开启关闭；配额类型的特性配置取值整数，表示限制配额。
    * description  参数解释：特性配置描述。
    * caller  参数解释：配置创建者。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'service' => 'setService',
            'tenantId' => 'setTenantId',
            'feature' => 'setFeature',
            'switch' => 'setSwitch',
            'type' => 'setType',
            'value' => 'setValue',
            'description' => 'setDescription',
            'caller' => 'setCaller'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数解释：配置的ID。
    * createdAt  参数解释：创建时间。
    * updatedAt  参数解释：更新时间。
    * service  参数解释：所属服务，固定ELB。
    * tenantId  参数解释：租户ID，含义同project_id。
    * feature  参数解释：特性名称。
    * switch  参数解释：特性配置启用开关，表示当前配置是否生效。  取值范围： - true：特性配置已生效。 - false: 特性配置未生效。
    * type  参数解释：特性配置值(value字段)的类型，如：INT，表示整型。
    * value  参数解释：特性配置值。如开关类型的特性配置取值true/false，表示特性开启关闭；配额类型的特性配置取值整数，表示限制配额。
    * description  参数解释：特性配置描述。
    * caller  参数解释：配置创建者。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'service' => 'getService',
            'tenantId' => 'getTenantId',
            'feature' => 'getFeature',
            'switch' => 'getSwitch',
            'type' => 'getType',
            'value' => 'getValue',
            'description' => 'getDescription',
            'caller' => 'getCaller'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['switch'] = isset($data['switch']) ? $data['switch'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['caller'] = isset($data['caller']) ? $data['caller'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['feature'] === null) {
            $invalidProperties[] = "'feature' can't be null";
        }
        if ($this->container['switch'] === null) {
            $invalidProperties[] = "'switch' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['caller'] === null) {
            $invalidProperties[] = "'caller' can't be null";
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
    * Gets id
    *  参数解释：配置的ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 参数解释：配置的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createdAt
    *  参数解释：创建时间。
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 参数解释：创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  参数解释：更新时间。
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 参数解释：更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets service
    *  参数解释：所属服务，固定ELB。
    *
    * @return string
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string $service 参数解释：所属服务，固定ELB。
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets tenantId
    *  参数解释：租户ID，含义同project_id。
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 参数解释：租户ID，含义同project_id。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets feature
    *  参数解释：特性名称。
    *
    * @return string
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string $feature 参数解释：特性名称。
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets switch
    *  参数解释：特性配置启用开关，表示当前配置是否生效。  取值范围： - true：特性配置已生效。 - false: 特性配置未生效。
    *
    * @return bool
    */
    public function getSwitch()
    {
        return $this->container['switch'];
    }

    /**
    * Sets switch
    *
    * @param bool $switch 参数解释：特性配置启用开关，表示当前配置是否生效。  取值范围： - true：特性配置已生效。 - false: 特性配置未生效。
    *
    * @return $this
    */
    public function setSwitch($switch)
    {
        $this->container['switch'] = $switch;
        return $this;
    }

    /**
    * Gets type
    *  参数解释：特性配置值(value字段)的类型，如：INT，表示整型。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 参数解释：特性配置值(value字段)的类型，如：INT，表示整型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  参数解释：特性配置值。如开关类型的特性配置取值true/false，表示特性开启关闭；配额类型的特性配置取值整数，表示限制配额。
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 参数解释：特性配置值。如开关类型的特性配置取值true/false，表示特性开启关闭；配额类型的特性配置取值整数，表示限制配额。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets description
    *  参数解释：特性配置描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 参数解释：特性配置描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets caller
    *  参数解释：配置创建者。
    *
    * @return string
    */
    public function getCaller()
    {
        return $this->container['caller'];
    }

    /**
    * Sets caller
    *
    * @param string $caller 参数解释：配置创建者。
    *
    * @return $this
    */
    public function setCaller($caller)
    {
        $this->container['caller'] = $caller;
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

