<?php

namespace HuaweiCloud\SDK\Rfs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateVersion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  模板的唯一ID，由模板服务随机生成
    * templateName  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * versionDescription  模板版本的描述。可用于客户识别自己的模板版本
    * createTime  版本创建时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * versionId  模板模板版本ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'templateName' => 'string',
            'versionDescription' => 'string',
            'createTime' => 'string',
            'versionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  模板的唯一ID，由模板服务随机生成
    * templateName  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * versionDescription  模板版本的描述。可用于客户识别自己的模板版本
    * createTime  版本创建时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * versionId  模板模板版本ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'templateName' => null,
        'versionDescription' => null,
        'createTime' => null,
        'versionId' => null
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
    * templateName  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * versionDescription  模板版本的描述。可用于客户识别自己的模板版本
    * createTime  版本创建时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * versionId  模板模板版本ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'versionDescription' => 'version_description',
            'createTime' => 'create_time',
            'versionId' => 'version_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  模板的唯一ID，由模板服务随机生成
    * templateName  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * versionDescription  模板版本的描述。可用于客户识别自己的模板版本
    * createTime  版本创建时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * versionId  模板模板版本ID
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'versionDescription' => 'setVersionDescription',
            'createTime' => 'setCreateTime',
            'versionId' => 'setVersionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  模板的唯一ID，由模板服务随机生成
    * templateName  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * versionDescription  模板版本的描述。可用于客户识别自己的模板版本
    * createTime  版本创建时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * versionId  模板模板版本ID
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'versionDescription' => 'getVersionDescription',
            'createTime' => 'getCreateTime',
            'versionId' => 'getVersionId'
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
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
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
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['versionId'] === null) {
            $invalidProperties[] = "'versionId' can't be null";
        }
            if ((mb_strlen($this->container['versionId']) > 11)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be smaller than or equal to 11.";
            }
            if ((mb_strlen($this->container['versionId']) < 2)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be bigger than or equal to 2.";
            }
            if (!preg_match("/^V[1-9][0-9]{0,9}$/", $this->container['versionId'])) {
                $invalidProperties[] = "invalid value for 'versionId', must be conform to the pattern /^V[1-9][0-9]{0,9}$/.";
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
    *  模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
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
    * @param string $templateName 模板（Template）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets versionDescription
    *  模板版本的描述。可用于客户识别自己的模板版本
    *
    * @return string|null
    */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
    * Sets versionDescription
    *
    * @param string|null $versionDescription 模板版本的描述。可用于客户识别自己的模板版本
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
        return $this;
    }

    /**
    * Gets createTime
    *  版本创建时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
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
    * @param string $createTime 版本创建时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets versionId
    *  模板模板版本ID
    *
    * @return string
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string $versionId 模板模板版本ID
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
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

