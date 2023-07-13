<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Template implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Template';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  模板的唯一ID，由模板服务随机生成
    * templateName  用户希望创建的模板名称
    * templateDescription  模板的描述。可用于客户识别自己的模板
    * createTime  模板的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  模板的更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * latestVersionId  模板中最新的模板版本ID
    * latestVersionDescription  模板中最新模板版本的版本描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'templateName' => 'string',
            'templateDescription' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'latestVersionId' => 'string',
            'latestVersionDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  模板的唯一ID，由模板服务随机生成
    * templateName  用户希望创建的模板名称
    * templateDescription  模板的描述。可用于客户识别自己的模板
    * createTime  模板的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  模板的更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * latestVersionId  模板中最新的模板版本ID
    * latestVersionDescription  模板中最新模板版本的版本描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'templateName' => null,
        'templateDescription' => null,
        'createTime' => null,
        'updateTime' => null,
        'latestVersionId' => null,
        'latestVersionDescription' => null
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
    * templateId  模板的唯一ID，由模板服务随机生成
    * templateName  用户希望创建的模板名称
    * templateDescription  模板的描述。可用于客户识别自己的模板
    * createTime  模板的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  模板的更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * latestVersionId  模板中最新的模板版本ID
    * latestVersionDescription  模板中最新模板版本的版本描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'templateDescription' => 'template_description',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'latestVersionId' => 'latest_version_id',
            'latestVersionDescription' => 'latest_version_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  模板的唯一ID，由模板服务随机生成
    * templateName  用户希望创建的模板名称
    * templateDescription  模板的描述。可用于客户识别自己的模板
    * createTime  模板的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  模板的更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * latestVersionId  模板中最新的模板版本ID
    * latestVersionDescription  模板中最新模板版本的版本描述
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'templateDescription' => 'setTemplateDescription',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'latestVersionId' => 'setLatestVersionId',
            'latestVersionDescription' => 'setLatestVersionDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  模板的唯一ID，由模板服务随机生成
    * templateName  用户希望创建的模板名称
    * templateDescription  模板的描述。可用于客户识别自己的模板
    * createTime  模板的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  模板的更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * latestVersionId  模板中最新的模板版本ID
    * latestVersionDescription  模板中最新模板版本的版本描述
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'templateDescription' => 'getTemplateDescription',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'latestVersionId' => 'getLatestVersionId',
            'latestVersionDescription' => 'getLatestVersionDescription'
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
        $this->container['templateDescription'] = isset($data['templateDescription']) ? $data['templateDescription'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['latestVersionId'] = isset($data['latestVersionId']) ? $data['latestVersionId'] : null;
        $this->container['latestVersionDescription'] = isset($data['latestVersionDescription']) ? $data['latestVersionDescription'] : null;
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
            if ((mb_strlen($this->container['templateId']) > 36)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['templateId']) < 36)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/^[a-z0-9\\-]{36}$/", $this->container['templateId'])) {
                $invalidProperties[] = "invalid value for 'templateId', must be conform to the pattern /^[a-z0-9\\-]{36}$/.";
            }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 128)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4E00-\\u9FA5A-Za-z][\\u4E00-\\u9FA5A-Za-z0-9_-]{0,127}$/", $this->container['templateName'])) {
                $invalidProperties[] = "invalid value for 'templateName', must be conform to the pattern /^[\\u4E00-\\u9FA5A-Za-z][\\u4E00-\\u9FA5A-Za-z0-9_-]{0,127}$/.";
            }
            if (!is_null($this->container['templateDescription']) && (mb_strlen($this->container['templateDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['templateDescription']) && (mb_strlen($this->container['templateDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
        if ($this->container['latestVersionId'] === null) {
            $invalidProperties[] = "'latestVersionId' can't be null";
        }
            if ((mb_strlen($this->container['latestVersionId']) > 11)) {
                $invalidProperties[] = "invalid value for 'latestVersionId', the character length must be smaller than or equal to 11.";
            }
            if ((mb_strlen($this->container['latestVersionId']) < 2)) {
                $invalidProperties[] = "invalid value for 'latestVersionId', the character length must be bigger than or equal to 2.";
            }
            if (!preg_match("/^V[1-9][0-9]{0,9}$/", $this->container['latestVersionId'])) {
                $invalidProperties[] = "invalid value for 'latestVersionId', must be conform to the pattern /^V[1-9][0-9]{0,9}$/.";
            }
        if ($this->container['latestVersionDescription'] === null) {
            $invalidProperties[] = "'latestVersionDescription' can't be null";
        }
            if ((mb_strlen($this->container['latestVersionDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'latestVersionDescription', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['latestVersionDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'latestVersionDescription', the character length must be bigger than or equal to 0.";
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
    *  模板的唯一ID，由模板服务随机生成
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 模板的唯一ID，由模板服务随机生成
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
    *  用户希望创建的模板名称
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
    * @param string $templateName 用户希望创建的模板名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateDescription
    *  模板的描述。可用于客户识别自己的模板
    *
    * @return string|null
    */
    public function getTemplateDescription()
    {
        return $this->container['templateDescription'];
    }

    /**
    * Sets templateDescription
    *
    * @param string|null $templateDescription 模板的描述。可用于客户识别自己的模板
    *
    * @return $this
    */
    public function setTemplateDescription($templateDescription)
    {
        $this->container['templateDescription'] = $templateDescription;
        return $this;
    }

    /**
    * Gets createTime
    *  模板的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 模板的生成时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  模板的更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return string
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string $updateTime 模板的更新时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets latestVersionId
    *  模板中最新的模板版本ID
    *
    * @return string
    */
    public function getLatestVersionId()
    {
        return $this->container['latestVersionId'];
    }

    /**
    * Sets latestVersionId
    *
    * @param string $latestVersionId 模板中最新的模板版本ID
    *
    * @return $this
    */
    public function setLatestVersionId($latestVersionId)
    {
        $this->container['latestVersionId'] = $latestVersionId;
        return $this;
    }

    /**
    * Gets latestVersionDescription
    *  模板中最新模板版本的版本描述
    *
    * @return string
    */
    public function getLatestVersionDescription()
    {
        return $this->container['latestVersionDescription'];
    }

    /**
    * Sets latestVersionDescription
    *
    * @param string $latestVersionDescription 模板中最新模板版本的版本描述
    *
    * @return $this
    */
    public function setLatestVersionDescription($latestVersionDescription)
    {
        $this->container['latestVersionDescription'] = $latestVersionDescription;
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

