<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaseCategory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaseCategory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * modifiedBy  **参数解释**： 修改人。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * code  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    * prefix  **参数解释**： 编号前缀。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户下项目空间唯一标识ID。 **取值范围**： - -1：自定义工作项类型 - 0：预设工作项模型
    * icon  **参数解释**： 图标。 **取值范围**： 不涉及。
    * color  **参数解释**： 颜色。 **取值范围**： 不涉及。
    * description  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    * definitionType  **参数解释**： 定义类型。 **取值范围**： - 1~3 系统级别 - 4 租户级别
    * typeId  **参数解释**： 类别ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'modifiedBy' => 'string',
            'modifiedDate' => 'string',
            'createdBy' => 'string',
            'createdDate' => 'string',
            'code' => 'string',
            'prefix' => 'string',
            'domainId' => 'string',
            'icon' => 'string',
            'color' => 'string',
            'description' => 'string',
            'definitionType' => 'int',
            'typeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * modifiedBy  **参数解释**： 修改人。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * code  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    * prefix  **参数解释**： 编号前缀。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户下项目空间唯一标识ID。 **取值范围**： - -1：自定义工作项类型 - 0：预设工作项模型
    * icon  **参数解释**： 图标。 **取值范围**： 不涉及。
    * color  **参数解释**： 颜色。 **取值范围**： 不涉及。
    * description  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    * definitionType  **参数解释**： 定义类型。 **取值范围**： - 1~3 系统级别 - 4 租户级别
    * typeId  **参数解释**： 类别ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'modifiedBy' => null,
        'modifiedDate' => null,
        'createdBy' => null,
        'createdDate' => null,
        'code' => null,
        'prefix' => null,
        'domainId' => null,
        'icon' => null,
        'color' => null,
        'description' => null,
        'definitionType' => 'int64',
        'typeId' => null
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
    * code  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    * prefix  **参数解释**： 编号前缀。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户下项目空间唯一标识ID。 **取值范围**： - -1：自定义工作项类型 - 0：预设工作项模型
    * icon  **参数解释**： 图标。 **取值范围**： 不涉及。
    * color  **参数解释**： 颜色。 **取值范围**： 不涉及。
    * description  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    * definitionType  **参数解释**： 定义类型。 **取值范围**： - 1~3 系统级别 - 4 租户级别
    * typeId  **参数解释**： 类别ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'modifiedBy' => 'modified_by',
            'modifiedDate' => 'modified_date',
            'createdBy' => 'created_by',
            'createdDate' => 'created_date',
            'code' => 'code',
            'prefix' => 'prefix',
            'domainId' => 'domain_id',
            'icon' => 'icon',
            'color' => 'color',
            'description' => 'description',
            'definitionType' => 'definition_type',
            'typeId' => 'type_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * modifiedBy  **参数解释**： 修改人。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * code  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    * prefix  **参数解释**： 编号前缀。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户下项目空间唯一标识ID。 **取值范围**： - -1：自定义工作项类型 - 0：预设工作项模型
    * icon  **参数解释**： 图标。 **取值范围**： 不涉及。
    * color  **参数解释**： 颜色。 **取值范围**： 不涉及。
    * description  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    * definitionType  **参数解释**： 定义类型。 **取值范围**： - 1~3 系统级别 - 4 租户级别
    * typeId  **参数解释**： 类别ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'modifiedBy' => 'setModifiedBy',
            'modifiedDate' => 'setModifiedDate',
            'createdBy' => 'setCreatedBy',
            'createdDate' => 'setCreatedDate',
            'code' => 'setCode',
            'prefix' => 'setPrefix',
            'domainId' => 'setDomainId',
            'icon' => 'setIcon',
            'color' => 'setColor',
            'description' => 'setDescription',
            'definitionType' => 'setDefinitionType',
            'typeId' => 'setTypeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * modifiedBy  **参数解释**： 修改人。 **取值范围**： 不涉及。
    * modifiedDate  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人。 **取值范围**： 不涉及。
    * createdDate  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * code  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    * prefix  **参数解释**： 编号前缀。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户下项目空间唯一标识ID。 **取值范围**： - -1：自定义工作项类型 - 0：预设工作项模型
    * icon  **参数解释**： 图标。 **取值范围**： 不涉及。
    * color  **参数解释**： 颜色。 **取值范围**： 不涉及。
    * description  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    * definitionType  **参数解释**： 定义类型。 **取值范围**： - 1~3 系统级别 - 4 租户级别
    * typeId  **参数解释**： 类别ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'modifiedBy' => 'getModifiedBy',
            'modifiedDate' => 'getModifiedDate',
            'createdBy' => 'getCreatedBy',
            'createdDate' => 'getCreatedDate',
            'code' => 'getCode',
            'prefix' => 'getPrefix',
            'domainId' => 'getDomainId',
            'icon' => 'getIcon',
            'color' => 'getColor',
            'description' => 'getDescription',
            'definitionType' => 'getDefinitionType',
            'typeId' => 'getTypeId'
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
    const DOMAIN_ID__1 = '-1';
    const DOMAIN_ID__0 = '0';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDomainIdAllowableValues()
    {
        return [
            self::DOMAIN_ID__1,
            self::DOMAIN_ID__0,
        ];
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['definitionType'] = isset($data['definitionType']) ? $data['definitionType'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDomainIdAllowableValues();
                if (!is_null($this->container['domainId']) && !in_array($this->container['domainId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'domainId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets code
    *  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets prefix
    *  **参数解释**： 编号前缀。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string|null $prefix **参数解释**： 编号前缀。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**： 租户下项目空间唯一标识ID。 **取值范围**： - -1：自定义工作项类型 - 0：预设工作项模型
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
    * @param string|null $domainId **参数解释**： 租户下项目空间唯一标识ID。 **取值范围**： - -1：自定义工作项类型 - 0：预设工作项模型
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets icon
    *  **参数解释**： 图标。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
    * Sets icon
    *
    * @param string|null $icon **参数解释**： 图标。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;
        return $this;
    }

    /**
    * Gets color
    *  **参数解释**： 颜色。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
    * Sets color
    *
    * @param string|null $color **参数解释**： 颜色。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 描述信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets definitionType
    *  **参数解释**： 定义类型。 **取值范围**： - 1~3 系统级别 - 4 租户级别
    *
    * @return int|null
    */
    public function getDefinitionType()
    {
        return $this->container['definitionType'];
    }

    /**
    * Sets definitionType
    *
    * @param int|null $definitionType **参数解释**： 定义类型。 **取值范围**： - 1~3 系统级别 - 4 租户级别
    *
    * @return $this
    */
    public function setDefinitionType($definitionType)
    {
        $this->container['definitionType'] = $definitionType;
        return $this;
    }

    /**
    * Gets typeId
    *  **参数解释**： 类别ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
    * Sets typeId
    *
    * @param string|null $typeId **参数解释**： 类别ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;
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

