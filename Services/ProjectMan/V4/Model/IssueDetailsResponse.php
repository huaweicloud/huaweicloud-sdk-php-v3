<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueDetailsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 工作项ID。 **取值范围**： 不涉及。
    * number  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    * type  **参数解释**： 工作项类型。 **取值范围**： 不涉及。
    * stayDays  **参数解释**： 停留天数。 **取值范围**： 不涉及。
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 工作项创建时间。 **取值范围**： 不涉及。
    * title  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    * securityLevel  securityLevel
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'number' => 'string',
            'type' => 'string',
            'stayDays' => 'int',
            'tenantId' => 'string',
            'createdDate' => 'string',
            'title' => 'string',
            'securityLevel' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SecurityLevelResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 工作项ID。 **取值范围**： 不涉及。
    * number  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    * type  **参数解释**： 工作项类型。 **取值范围**： 不涉及。
    * stayDays  **参数解释**： 停留天数。 **取值范围**： 不涉及。
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 工作项创建时间。 **取值范围**： 不涉及。
    * title  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    * securityLevel  securityLevel
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'number' => null,
        'type' => null,
        'stayDays' => 'int32',
        'tenantId' => null,
        'createdDate' => null,
        'title' => null,
        'securityLevel' => null
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
    * id  **参数解释**： 工作项ID。 **取值范围**： 不涉及。
    * number  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    * type  **参数解释**： 工作项类型。 **取值范围**： 不涉及。
    * stayDays  **参数解释**： 停留天数。 **取值范围**： 不涉及。
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 工作项创建时间。 **取值范围**： 不涉及。
    * title  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    * securityLevel  securityLevel
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'number' => 'number',
            'type' => 'type',
            'stayDays' => 'stay_days',
            'tenantId' => 'tenant_id',
            'createdDate' => 'created_date',
            'title' => 'title',
            'securityLevel' => 'security_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 工作项ID。 **取值范围**： 不涉及。
    * number  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    * type  **参数解释**： 工作项类型。 **取值范围**： 不涉及。
    * stayDays  **参数解释**： 停留天数。 **取值范围**： 不涉及。
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 工作项创建时间。 **取值范围**： 不涉及。
    * title  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    * securityLevel  securityLevel
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'number' => 'setNumber',
            'type' => 'setType',
            'stayDays' => 'setStayDays',
            'tenantId' => 'setTenantId',
            'createdDate' => 'setCreatedDate',
            'title' => 'setTitle',
            'securityLevel' => 'setSecurityLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 工作项ID。 **取值范围**： 不涉及。
    * number  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    * type  **参数解释**： 工作项类型。 **取值范围**： 不涉及。
    * stayDays  **参数解释**： 停留天数。 **取值范围**： 不涉及。
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 工作项创建时间。 **取值范围**： 不涉及。
    * title  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    * securityLevel  securityLevel
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'number' => 'getNumber',
            'type' => 'getType',
            'stayDays' => 'getStayDays',
            'tenantId' => 'getTenantId',
            'createdDate' => 'getCreatedDate',
            'title' => 'getTitle',
            'securityLevel' => 'getSecurityLevel'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['stayDays'] = isset($data['stayDays']) ? $data['stayDays'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['securityLevel'] = isset($data['securityLevel']) ? $data['securityLevel'] : null;
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
    * Gets id
    *  **参数解释**： 工作项ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 工作项ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets number
    *  **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number **参数解释**： 工作项编号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 工作项类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 工作项类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets stayDays
    *  **参数解释**： 停留天数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getStayDays()
    {
        return $this->container['stayDays'];
    }

    /**
    * Sets stayDays
    *
    * @param int|null $stayDays **参数解释**： 停留天数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStayDays($stayDays)
    {
        $this->container['stayDays'] = $stayDays;
        return $this;
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
    * Gets createdDate
    *  **参数解释**： 工作项创建时间。 **取值范围**： 不涉及。
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
    * @param string|null $createdDate **参数解释**： 工作项创建时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets title
    *  **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释**： 工作项标题。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets securityLevel
    *  securityLevel
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SecurityLevelResult|null
    */
    public function getSecurityLevel()
    {
        return $this->container['securityLevel'];
    }

    /**
    * Sets securityLevel
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SecurityLevelResult|null $securityLevel securityLevel
    *
    * @return $this
    */
    public function setSecurityLevel($securityLevel)
    {
        $this->container['securityLevel'] = $securityLevel;
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

