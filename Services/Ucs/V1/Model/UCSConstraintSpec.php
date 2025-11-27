<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UCSConstraintSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UCSConstraintSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * constraint  constraint
    * constraintTemplateId  约束模板ID
    * domainId  用户的domainID
    * targetScope  策略实例下发范围，当前cluster和fleet二选一
    * targetId  策略实例下发对象，当前为clusterID或clustergroupID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'constraint' => '\HuaweiCloud\SDK\Ucs\V1\Model\Constraint',
            'constraintTemplateId' => 'string',
            'domainId' => 'string',
            'targetScope' => 'string',
            'targetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * constraint  constraint
    * constraintTemplateId  约束模板ID
    * domainId  用户的domainID
    * targetScope  策略实例下发范围，当前cluster和fleet二选一
    * targetId  策略实例下发对象，当前为clusterID或clustergroupID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'constraint' => null,
        'constraintTemplateId' => null,
        'domainId' => null,
        'targetScope' => null,
        'targetId' => null
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
    * constraint  constraint
    * constraintTemplateId  约束模板ID
    * domainId  用户的domainID
    * targetScope  策略实例下发范围，当前cluster和fleet二选一
    * targetId  策略实例下发对象，当前为clusterID或clustergroupID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'constraint' => 'constraint',
            'constraintTemplateId' => 'constraintTemplateID',
            'domainId' => 'domainID',
            'targetScope' => 'targetScope',
            'targetId' => 'targetID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * constraint  constraint
    * constraintTemplateId  约束模板ID
    * domainId  用户的domainID
    * targetScope  策略实例下发范围，当前cluster和fleet二选一
    * targetId  策略实例下发对象，当前为clusterID或clustergroupID
    *
    * @var string[]
    */
    protected static $setters = [
            'constraint' => 'setConstraint',
            'constraintTemplateId' => 'setConstraintTemplateId',
            'domainId' => 'setDomainId',
            'targetScope' => 'setTargetScope',
            'targetId' => 'setTargetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * constraint  constraint
    * constraintTemplateId  约束模板ID
    * domainId  用户的domainID
    * targetScope  策略实例下发范围，当前cluster和fleet二选一
    * targetId  策略实例下发对象，当前为clusterID或clustergroupID
    *
    * @var string[]
    */
    protected static $getters = [
            'constraint' => 'getConstraint',
            'constraintTemplateId' => 'getConstraintTemplateId',
            'domainId' => 'getDomainId',
            'targetScope' => 'getTargetScope',
            'targetId' => 'getTargetId'
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
        $this->container['constraint'] = isset($data['constraint']) ? $data['constraint'] : null;
        $this->container['constraintTemplateId'] = isset($data['constraintTemplateId']) ? $data['constraintTemplateId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['targetScope'] = isset($data['targetScope']) ? $data['targetScope'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
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
    * Gets constraint
    *  constraint
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\Constraint|null
    */
    public function getConstraint()
    {
        return $this->container['constraint'];
    }

    /**
    * Sets constraint
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\Constraint|null $constraint constraint
    *
    * @return $this
    */
    public function setConstraint($constraint)
    {
        $this->container['constraint'] = $constraint;
        return $this;
    }

    /**
    * Gets constraintTemplateId
    *  约束模板ID
    *
    * @return string|null
    */
    public function getConstraintTemplateId()
    {
        return $this->container['constraintTemplateId'];
    }

    /**
    * Sets constraintTemplateId
    *
    * @param string|null $constraintTemplateId 约束模板ID
    *
    * @return $this
    */
    public function setConstraintTemplateId($constraintTemplateId)
    {
        $this->container['constraintTemplateId'] = $constraintTemplateId;
        return $this;
    }

    /**
    * Gets domainId
    *  用户的domainID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 用户的domainID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets targetScope
    *  策略实例下发范围，当前cluster和fleet二选一
    *
    * @return string|null
    */
    public function getTargetScope()
    {
        return $this->container['targetScope'];
    }

    /**
    * Sets targetScope
    *
    * @param string|null $targetScope 策略实例下发范围，当前cluster和fleet二选一
    *
    * @return $this
    */
    public function setTargetScope($targetScope)
    {
        $this->container['targetScope'] = $targetScope;
        return $this;
    }

    /**
    * Gets targetId
    *  策略实例下发对象，当前为clusterID或clustergroupID
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId 策略实例下发对象，当前为clusterID或clustergroupID
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
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

