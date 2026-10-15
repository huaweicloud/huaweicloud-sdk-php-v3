<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportTemplateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportTemplateDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  模板ID。
    * templateName  模板名称。
    * description  模板描述。
    * system  是否为系统预设模板（true-系统模板 false-自定义模板）。
    * chaptersConfig  章节配置，key为章节编码，value为章节配置对象。
    * createAt  创建时间（Unix timestamp），单位：毫秒。
    * updateAt  更新时间（Unix timestamp），单位：毫秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'int',
            'templateName' => 'string',
            'description' => 'string',
            'system' => 'bool',
            'chaptersConfig' => 'map[string,\HuaweiCloud\SDK\Das\V3\Model\ChapterConfig]',
            'createAt' => 'int',
            'updateAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  模板ID。
    * templateName  模板名称。
    * description  模板描述。
    * system  是否为系统预设模板（true-系统模板 false-自定义模板）。
    * chaptersConfig  章节配置，key为章节编码，value为章节配置对象。
    * createAt  创建时间（Unix timestamp），单位：毫秒。
    * updateAt  更新时间（Unix timestamp），单位：毫秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => 'int64',
        'templateName' => null,
        'description' => null,
        'system' => null,
        'chaptersConfig' => null,
        'createAt' => 'int64',
        'updateAt' => 'int64'
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
    * templateId  模板ID。
    * templateName  模板名称。
    * description  模板描述。
    * system  是否为系统预设模板（true-系统模板 false-自定义模板）。
    * chaptersConfig  章节配置，key为章节编码，value为章节配置对象。
    * createAt  创建时间（Unix timestamp），单位：毫秒。
    * updateAt  更新时间（Unix timestamp），单位：毫秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'description' => 'description',
            'system' => 'system',
            'chaptersConfig' => 'chapters_config',
            'createAt' => 'create_at',
            'updateAt' => 'update_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  模板ID。
    * templateName  模板名称。
    * description  模板描述。
    * system  是否为系统预设模板（true-系统模板 false-自定义模板）。
    * chaptersConfig  章节配置，key为章节编码，value为章节配置对象。
    * createAt  创建时间（Unix timestamp），单位：毫秒。
    * updateAt  更新时间（Unix timestamp），单位：毫秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'description' => 'setDescription',
            'system' => 'setSystem',
            'chaptersConfig' => 'setChaptersConfig',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  模板ID。
    * templateName  模板名称。
    * description  模板描述。
    * system  是否为系统预设模板（true-系统模板 false-自定义模板）。
    * chaptersConfig  章节配置，key为章节编码，value为章节配置对象。
    * createAt  创建时间（Unix timestamp），单位：毫秒。
    * updateAt  更新时间（Unix timestamp），单位：毫秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'description' => 'getDescription',
            'system' => 'getSystem',
            'chaptersConfig' => 'getChaptersConfig',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
        $this->container['chaptersConfig'] = isset($data['chaptersConfig']) ? $data['chaptersConfig'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
            if (($this->container['templateId'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'templateId', must be smaller than or equal to 9999999999.";
            }
            if (($this->container['templateId'] < 1)) {
                $invalidProperties[] = "invalid value for 'templateId', must be bigger than or equal to 1.";
            }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['system'] === null) {
            $invalidProperties[] = "'system' can't be null";
        }
        if ($this->container['chaptersConfig'] === null) {
            $invalidProperties[] = "'chaptersConfig' can't be null";
        }
        if ($this->container['createAt'] === null) {
            $invalidProperties[] = "'createAt' can't be null";
        }
            if (($this->container['createAt'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'createAt', must be smaller than or equal to 253370736001000.";
            }
            if (($this->container['createAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'createAt', must be bigger than or equal to 0.";
            }
        if ($this->container['updateAt'] === null) {
            $invalidProperties[] = "'updateAt' can't be null";
        }
            if (($this->container['updateAt'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'updateAt', must be smaller than or equal to 253370736001000.";
            }
            if (($this->container['updateAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateAt', must be bigger than or equal to 0.";
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
    * Gets templateId
    *  模板ID。
    *
    * @return int
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param int $templateId 模板ID。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets templateName
    *  模板名称。
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName 模板名称。
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets description
    *  模板描述。
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
    * @param string|null $description 模板描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets system
    *  是否为系统预设模板（true-系统模板 false-自定义模板）。
    *
    * @return bool
    */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
    * Sets system
    *
    * @param bool $system 是否为系统预设模板（true-系统模板 false-自定义模板）。
    *
    * @return $this
    */
    public function setSystem($system)
    {
        $this->container['system'] = $system;
        return $this;
    }

    /**
    * Gets chaptersConfig
    *  章节配置，key为章节编码，value为章节配置对象。
    *
    * @return map[string,\HuaweiCloud\SDK\Das\V3\Model\ChapterConfig]
    */
    public function getChaptersConfig()
    {
        return $this->container['chaptersConfig'];
    }

    /**
    * Sets chaptersConfig
    *
    * @param map[string,\HuaweiCloud\SDK\Das\V3\Model\ChapterConfig] $chaptersConfig 章节配置，key为章节编码，value为章节配置对象。
    *
    * @return $this
    */
    public function setChaptersConfig($chaptersConfig)
    {
        $this->container['chaptersConfig'] = $chaptersConfig;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int $createAt 创建时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int $updateAt 更新时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

