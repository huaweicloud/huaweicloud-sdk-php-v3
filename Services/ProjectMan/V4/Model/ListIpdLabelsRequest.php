<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIpdLabelsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIpdLabelsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * labelType  标签归属的工作项分类，不传该参数时默认查询所有类型下的标签。不推荐使用此参数，建议使用category_types参数。
    * title  标签名称
    * categoryTypes  工作项类型编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'labelType' => 'string',
            'title' => 'string',
            'categoryTypes' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * labelType  标签归属的工作项分类，不传该参数时默认查询所有类型下的标签。不推荐使用此参数，建议使用category_types参数。
    * title  标签名称
    * categoryTypes  工作项类型编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'labelType' => null,
        'title' => null,
        'categoryTypes' => null
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
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * labelType  标签归属的工作项分类，不传该参数时默认查询所有类型下的标签。不推荐使用此参数，建议使用category_types参数。
    * title  标签名称
    * categoryTypes  工作项类型编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'labelType' => 'label_type',
            'title' => 'title',
            'categoryTypes' => 'category_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * labelType  标签归属的工作项分类，不传该参数时默认查询所有类型下的标签。不推荐使用此参数，建议使用category_types参数。
    * title  标签名称
    * categoryTypes  工作项类型编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'labelType' => 'setLabelType',
            'title' => 'setTitle',
            'categoryTypes' => 'setCategoryTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * labelType  标签归属的工作项分类，不传该参数时默认查询所有类型下的标签。不推荐使用此参数，建议使用category_types参数。
    * title  标签名称
    * categoryTypes  工作项类型编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'labelType' => 'getLabelType',
            'title' => 'getTitle',
            'categoryTypes' => 'getCategoryTypes'
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
    const LABEL_TYPE_FEATURE = 'feature';
    const LABEL_TYPE_RAW_REQUIREMENT = 'raw requirement';
    const LABEL_TYPE_REQUIREMENT = 'requirement';
    const LABEL_TYPE_TASK = 'task';
    const LABEL_TYPE_BUG = 'bug';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLabelTypeAllowableValues()
    {
        return [
            self::LABEL_TYPE_FEATURE,
            self::LABEL_TYPE_RAW_REQUIREMENT,
            self::LABEL_TYPE_REQUIREMENT,
            self::LABEL_TYPE_TASK,
            self::LABEL_TYPE_BUG,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['labelType'] = isset($data['labelType']) ? $data['labelType'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['categoryTypes'] = isset($data['categoryTypes']) ? $data['categoryTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getLabelTypeAllowableValues();
                if (!is_null($this->container['labelType']) && !in_array($this->container['labelType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'labelType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['labelType']) && (mb_strlen($this->container['labelType']) > 32)) {
                $invalidProperties[] = "invalid value for 'labelType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['labelType']) && (mb_strlen($this->container['labelType']) < 0)) {
                $invalidProperties[] = "invalid value for 'labelType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 30)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
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
    * Gets projectId
    *  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets labelType
    *  标签归属的工作项分类，不传该参数时默认查询所有类型下的标签。不推荐使用此参数，建议使用category_types参数。
    *
    * @return string|null
    */
    public function getLabelType()
    {
        return $this->container['labelType'];
    }

    /**
    * Sets labelType
    *
    * @param string|null $labelType 标签归属的工作项分类，不传该参数时默认查询所有类型下的标签。不推荐使用此参数，建议使用category_types参数。
    *
    * @return $this
    */
    public function setLabelType($labelType)
    {
        $this->container['labelType'] = $labelType;
        return $this;
    }

    /**
    * Gets title
    *  标签名称
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
    * @param string|null $title 标签名称
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets categoryTypes
    *  工作项类型编码。
    *
    * @return string|null
    */
    public function getCategoryTypes()
    {
        return $this->container['categoryTypes'];
    }

    /**
    * Sets categoryTypes
    *
    * @param string|null $categoryTypes 工作项类型编码。
    *
    * @return $this
    */
    public function setCategoryTypes($categoryTypes)
    {
        $this->container['categoryTypes'] = $categoryTypes;
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

