<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FieldEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FieldEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * displayName  **参数解释**： 字段名称。 **取值范围**： 不涉及
    * code  **参数解释**： 字段code。 **取值范围**： 不涉及
    * id  **参数解释**： 字段id。 **取值范围**： 不涉及
    * description  **参数解释**： 字段描述。 **取值范围**： 不涉及
    * createdBy  **参数解释**： 字段创建人名称。 **取值范围**： 不涉及
    * createdDate  **参数解释**： 字段创建时间，时间戳格式，示例:1715305846000。 **取值范围**： 不涉及
    * modifiedBy  **参数解释**： 字段最后更新人名称。 **取值范围**： 不涉及
    * definitionType  **参数解释**： 字段级别。 **取值范围**： 1/2/3：系统预设字段。 4：租户自定义字段 5：项目自定义字段
    * fieldTypeName  **参数解释**： 字段类型名称。 **取值范围**： 不涉及
    * required  **参数解释**： 字段在工作项中是否必填，和工作流配置不一致时以工作流为准。 **取值范围**： true（必填） false（非必填）
    * controlled  **参数解释**： 字段在工作项中是否受控，修改已基线的工作项受控字段需要走变更评审流程，和工作流配置不一致时以工作流为准。 **取值范围**： true（受控） false（非受控）
    * immutable  **参数解释**： 字段在工作项中是否可修改，和工作流配置不一致时以工作流为准。 **取值范围**： true（不可修改） false（可修改）
    * no  **参数解释**： 字段排序的序号。 **取值范围**： 不涉及
    * allOptions  **参数解释**： 字段选项。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'displayName' => 'string',
            'code' => 'string',
            'id' => 'string',
            'description' => 'string',
            'createdBy' => 'string',
            'createdDate' => 'int',
            'modifiedBy' => 'string',
            'definitionType' => 'string',
            'fieldTypeName' => 'string',
            'required' => 'bool',
            'controlled' => 'bool',
            'immutable' => 'bool',
            'no' => 'int',
            'allOptions' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * displayName  **参数解释**： 字段名称。 **取值范围**： 不涉及
    * code  **参数解释**： 字段code。 **取值范围**： 不涉及
    * id  **参数解释**： 字段id。 **取值范围**： 不涉及
    * description  **参数解释**： 字段描述。 **取值范围**： 不涉及
    * createdBy  **参数解释**： 字段创建人名称。 **取值范围**： 不涉及
    * createdDate  **参数解释**： 字段创建时间，时间戳格式，示例:1715305846000。 **取值范围**： 不涉及
    * modifiedBy  **参数解释**： 字段最后更新人名称。 **取值范围**： 不涉及
    * definitionType  **参数解释**： 字段级别。 **取值范围**： 1/2/3：系统预设字段。 4：租户自定义字段 5：项目自定义字段
    * fieldTypeName  **参数解释**： 字段类型名称。 **取值范围**： 不涉及
    * required  **参数解释**： 字段在工作项中是否必填，和工作流配置不一致时以工作流为准。 **取值范围**： true（必填） false（非必填）
    * controlled  **参数解释**： 字段在工作项中是否受控，修改已基线的工作项受控字段需要走变更评审流程，和工作流配置不一致时以工作流为准。 **取值范围**： true（受控） false（非受控）
    * immutable  **参数解释**： 字段在工作项中是否可修改，和工作流配置不一致时以工作流为准。 **取值范围**： true（不可修改） false（可修改）
    * no  **参数解释**： 字段排序的序号。 **取值范围**： 不涉及
    * allOptions  **参数解释**： 字段选项。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'displayName' => null,
        'code' => null,
        'id' => null,
        'description' => null,
        'createdBy' => null,
        'createdDate' => 'int64',
        'modifiedBy' => null,
        'definitionType' => null,
        'fieldTypeName' => null,
        'required' => null,
        'controlled' => null,
        'immutable' => null,
        'no' => 'int32',
        'allOptions' => null
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
    * displayName  **参数解释**： 字段名称。 **取值范围**： 不涉及
    * code  **参数解释**： 字段code。 **取值范围**： 不涉及
    * id  **参数解释**： 字段id。 **取值范围**： 不涉及
    * description  **参数解释**： 字段描述。 **取值范围**： 不涉及
    * createdBy  **参数解释**： 字段创建人名称。 **取值范围**： 不涉及
    * createdDate  **参数解释**： 字段创建时间，时间戳格式，示例:1715305846000。 **取值范围**： 不涉及
    * modifiedBy  **参数解释**： 字段最后更新人名称。 **取值范围**： 不涉及
    * definitionType  **参数解释**： 字段级别。 **取值范围**： 1/2/3：系统预设字段。 4：租户自定义字段 5：项目自定义字段
    * fieldTypeName  **参数解释**： 字段类型名称。 **取值范围**： 不涉及
    * required  **参数解释**： 字段在工作项中是否必填，和工作流配置不一致时以工作流为准。 **取值范围**： true（必填） false（非必填）
    * controlled  **参数解释**： 字段在工作项中是否受控，修改已基线的工作项受控字段需要走变更评审流程，和工作流配置不一致时以工作流为准。 **取值范围**： true（受控） false（非受控）
    * immutable  **参数解释**： 字段在工作项中是否可修改，和工作流配置不一致时以工作流为准。 **取值范围**： true（不可修改） false（可修改）
    * no  **参数解释**： 字段排序的序号。 **取值范围**： 不涉及
    * allOptions  **参数解释**： 字段选项。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'displayName' => 'display_name',
            'code' => 'code',
            'id' => 'id',
            'description' => 'description',
            'createdBy' => 'created_by',
            'createdDate' => 'created_date',
            'modifiedBy' => 'modified_by',
            'definitionType' => 'definition_type',
            'fieldTypeName' => 'field_type_name',
            'required' => 'required',
            'controlled' => 'controlled',
            'immutable' => 'immutable',
            'no' => 'no',
            'allOptions' => 'all_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * displayName  **参数解释**： 字段名称。 **取值范围**： 不涉及
    * code  **参数解释**： 字段code。 **取值范围**： 不涉及
    * id  **参数解释**： 字段id。 **取值范围**： 不涉及
    * description  **参数解释**： 字段描述。 **取值范围**： 不涉及
    * createdBy  **参数解释**： 字段创建人名称。 **取值范围**： 不涉及
    * createdDate  **参数解释**： 字段创建时间，时间戳格式，示例:1715305846000。 **取值范围**： 不涉及
    * modifiedBy  **参数解释**： 字段最后更新人名称。 **取值范围**： 不涉及
    * definitionType  **参数解释**： 字段级别。 **取值范围**： 1/2/3：系统预设字段。 4：租户自定义字段 5：项目自定义字段
    * fieldTypeName  **参数解释**： 字段类型名称。 **取值范围**： 不涉及
    * required  **参数解释**： 字段在工作项中是否必填，和工作流配置不一致时以工作流为准。 **取值范围**： true（必填） false（非必填）
    * controlled  **参数解释**： 字段在工作项中是否受控，修改已基线的工作项受控字段需要走变更评审流程，和工作流配置不一致时以工作流为准。 **取值范围**： true（受控） false（非受控）
    * immutable  **参数解释**： 字段在工作项中是否可修改，和工作流配置不一致时以工作流为准。 **取值范围**： true（不可修改） false（可修改）
    * no  **参数解释**： 字段排序的序号。 **取值范围**： 不涉及
    * allOptions  **参数解释**： 字段选项。
    *
    * @var string[]
    */
    protected static $setters = [
            'displayName' => 'setDisplayName',
            'code' => 'setCode',
            'id' => 'setId',
            'description' => 'setDescription',
            'createdBy' => 'setCreatedBy',
            'createdDate' => 'setCreatedDate',
            'modifiedBy' => 'setModifiedBy',
            'definitionType' => 'setDefinitionType',
            'fieldTypeName' => 'setFieldTypeName',
            'required' => 'setRequired',
            'controlled' => 'setControlled',
            'immutable' => 'setImmutable',
            'no' => 'setNo',
            'allOptions' => 'setAllOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * displayName  **参数解释**： 字段名称。 **取值范围**： 不涉及
    * code  **参数解释**： 字段code。 **取值范围**： 不涉及
    * id  **参数解释**： 字段id。 **取值范围**： 不涉及
    * description  **参数解释**： 字段描述。 **取值范围**： 不涉及
    * createdBy  **参数解释**： 字段创建人名称。 **取值范围**： 不涉及
    * createdDate  **参数解释**： 字段创建时间，时间戳格式，示例:1715305846000。 **取值范围**： 不涉及
    * modifiedBy  **参数解释**： 字段最后更新人名称。 **取值范围**： 不涉及
    * definitionType  **参数解释**： 字段级别。 **取值范围**： 1/2/3：系统预设字段。 4：租户自定义字段 5：项目自定义字段
    * fieldTypeName  **参数解释**： 字段类型名称。 **取值范围**： 不涉及
    * required  **参数解释**： 字段在工作项中是否必填，和工作流配置不一致时以工作流为准。 **取值范围**： true（必填） false（非必填）
    * controlled  **参数解释**： 字段在工作项中是否受控，修改已基线的工作项受控字段需要走变更评审流程，和工作流配置不一致时以工作流为准。 **取值范围**： true（受控） false（非受控）
    * immutable  **参数解释**： 字段在工作项中是否可修改，和工作流配置不一致时以工作流为准。 **取值范围**： true（不可修改） false（可修改）
    * no  **参数解释**： 字段排序的序号。 **取值范围**： 不涉及
    * allOptions  **参数解释**： 字段选项。
    *
    * @var string[]
    */
    protected static $getters = [
            'displayName' => 'getDisplayName',
            'code' => 'getCode',
            'id' => 'getId',
            'description' => 'getDescription',
            'createdBy' => 'getCreatedBy',
            'createdDate' => 'getCreatedDate',
            'modifiedBy' => 'getModifiedBy',
            'definitionType' => 'getDefinitionType',
            'fieldTypeName' => 'getFieldTypeName',
            'required' => 'getRequired',
            'controlled' => 'getControlled',
            'immutable' => 'getImmutable',
            'no' => 'getNo',
            'allOptions' => 'getAllOptions'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['definitionType'] = isset($data['definitionType']) ? $data['definitionType'] : null;
        $this->container['fieldTypeName'] = isset($data['fieldTypeName']) ? $data['fieldTypeName'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['controlled'] = isset($data['controlled']) ? $data['controlled'] : null;
        $this->container['immutable'] = isset($data['immutable']) ? $data['immutable'] : null;
        $this->container['no'] = isset($data['no']) ? $data['no'] : null;
        $this->container['allOptions'] = isset($data['allOptions']) ? $data['allOptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 15)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 2)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 32)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 2)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 2)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 50)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 60)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) > 60)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['definitionType']) && (mb_strlen($this->container['definitionType']) > 1)) {
                $invalidProperties[] = "invalid value for 'definitionType', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['definitionType']) && (mb_strlen($this->container['definitionType']) < 1)) {
                $invalidProperties[] = "invalid value for 'definitionType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fieldTypeName']) && (mb_strlen($this->container['fieldTypeName']) > 16)) {
                $invalidProperties[] = "invalid value for 'fieldTypeName', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['fieldTypeName']) && (mb_strlen($this->container['fieldTypeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fieldTypeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['no']) && ($this->container['no'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'no', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['no']) && ($this->container['no'] < 0)) {
                $invalidProperties[] = "invalid value for 'no', must be bigger than or equal to 0.";
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
    * Gets displayName
    *  **参数解释**： 字段名称。 **取值范围**： 不涉及
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
    * @param string|null $displayName **参数解释**： 字段名称。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets code
    *  **参数解释**： 字段code。 **取值范围**： 不涉及
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
    * @param string|null $code **参数解释**： 字段code。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 字段id。 **取值范围**： 不涉及
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
    * @param string|null $id **参数解释**： 字段id。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 字段描述。 **取值范围**： 不涉及
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
    * @param string|null $description **参数解释**： 字段描述。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdBy
    *  **参数解释**： 字段创建人名称。 **取值范围**： 不涉及
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
    * @param string|null $createdBy **参数解释**： 字段创建人名称。 **取值范围**： 不涉及
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
    *  **参数解释**： 字段创建时间，时间戳格式，示例:1715305846000。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param int|null $createdDate **参数解释**： 字段创建时间，时间戳格式，示例:1715305846000。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  **参数解释**： 字段最后更新人名称。 **取值范围**： 不涉及
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
    * @param string|null $modifiedBy **参数解释**： 字段最后更新人名称。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets definitionType
    *  **参数解释**： 字段级别。 **取值范围**： 1/2/3：系统预设字段。 4：租户自定义字段 5：项目自定义字段
    *
    * @return string|null
    */
    public function getDefinitionType()
    {
        return $this->container['definitionType'];
    }

    /**
    * Sets definitionType
    *
    * @param string|null $definitionType **参数解释**： 字段级别。 **取值范围**： 1/2/3：系统预设字段。 4：租户自定义字段 5：项目自定义字段
    *
    * @return $this
    */
    public function setDefinitionType($definitionType)
    {
        $this->container['definitionType'] = $definitionType;
        return $this;
    }

    /**
    * Gets fieldTypeName
    *  **参数解释**： 字段类型名称。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getFieldTypeName()
    {
        return $this->container['fieldTypeName'];
    }

    /**
    * Sets fieldTypeName
    *
    * @param string|null $fieldTypeName **参数解释**： 字段类型名称。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setFieldTypeName($fieldTypeName)
    {
        $this->container['fieldTypeName'] = $fieldTypeName;
        return $this;
    }

    /**
    * Gets required
    *  **参数解释**： 字段在工作项中是否必填，和工作流配置不一致时以工作流为准。 **取值范围**： true（必填） false（非必填）
    *
    * @return bool|null
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool|null $required **参数解释**： 字段在工作项中是否必填，和工作流配置不一致时以工作流为准。 **取值范围**： true（必填） false（非必填）
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets controlled
    *  **参数解释**： 字段在工作项中是否受控，修改已基线的工作项受控字段需要走变更评审流程，和工作流配置不一致时以工作流为准。 **取值范围**： true（受控） false（非受控）
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
    * @param bool|null $controlled **参数解释**： 字段在工作项中是否受控，修改已基线的工作项受控字段需要走变更评审流程，和工作流配置不一致时以工作流为准。 **取值范围**： true（受控） false（非受控）
    *
    * @return $this
    */
    public function setControlled($controlled)
    {
        $this->container['controlled'] = $controlled;
        return $this;
    }

    /**
    * Gets immutable
    *  **参数解释**： 字段在工作项中是否可修改，和工作流配置不一致时以工作流为准。 **取值范围**： true（不可修改） false（可修改）
    *
    * @return bool|null
    */
    public function getImmutable()
    {
        return $this->container['immutable'];
    }

    /**
    * Sets immutable
    *
    * @param bool|null $immutable **参数解释**： 字段在工作项中是否可修改，和工作流配置不一致时以工作流为准。 **取值范围**： true（不可修改） false（可修改）
    *
    * @return $this
    */
    public function setImmutable($immutable)
    {
        $this->container['immutable'] = $immutable;
        return $this;
    }

    /**
    * Gets no
    *  **参数解释**： 字段排序的序号。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getNo()
    {
        return $this->container['no'];
    }

    /**
    * Sets no
    *
    * @param int|null $no **参数解释**： 字段排序的序号。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setNo($no)
    {
        $this->container['no'] = $no;
        return $this;
    }

    /**
    * Gets allOptions
    *  **参数解释**： 字段选项。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]|null
    */
    public function getAllOptions()
    {
        return $this->container['allOptions'];
    }

    /**
    * Sets allOptions
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]|null $allOptions **参数解释**： 字段选项。
    *
    * @return $this
    */
    public function setAllOptions($allOptions)
    {
        $this->container['allOptions'] = $allOptions;
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

