<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaseEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaseEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * modifiedBy  **参数解释**： 修改人。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'modifiedBy' => 'string',
            'modifiedDate' => 'string',
            'createdBy' => 'string',
            'createdDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * modifiedBy  **参数解释**： 修改人。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'modifiedBy' => null,
        'modifiedDate' => null,
        'createdBy' => null,
        'createdDate' => null
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
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * modifiedBy  **参数解释**： 修改人。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'modifiedBy' => 'modified_by',
            'modifiedDate' => 'modified_date',
            'createdBy' => 'created_by',
            'createdDate' => 'created_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * modifiedBy  **参数解释**： 修改人。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'modifiedBy' => 'setModifiedBy',
            'modifiedDate' => 'setModifiedDate',
            'createdBy' => 'setCreatedBy',
            'createdDate' => 'setCreatedDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * modifiedBy  **参数解释**： 修改人。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'modifiedBy' => 'getModifiedBy',
            'modifiedDate' => 'getModifiedDate',
            'createdBy' => 'getCreatedBy',
            'createdDate' => 'getCreatedDate'
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
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
    * Gets tenantId
    *  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId **参数解释**： 租户ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  **参数解释**： 修改人。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param string|null $modifiedBy **参数解释**： 修改人。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
    * Sets modifiedDate
    *
    * @param string|null $modifiedDate **参数解释**： 修改时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets createdBy
    *  **参数解释**： 创建人。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy **参数解释**： 创建人。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdDate
    *  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param string|null $createdDate **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
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

